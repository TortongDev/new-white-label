<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

<?php
$hostname = "localhost";
$database = "busx_carrier_v2_1";
$username = "root";
$password = "root";

try {
    $conn = new PDO("mysql:host=$hostname;dbname=$database;utf8", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $err) {
   echo $err->getMessage();
}
function list_keywod_duplicate(PDO $conn){
    $response = [];

    $sql = "
        SELECT 
            stop_id, en_US, th_TH, keyword_type, city_local_id, state_province_id, country,
            COUNT(*) AS count
        FROM 
            keyword
        GROUP BY 
            stop_id, en_US, th_TH, keyword_type, city_local_id, state_province_id, country
        HAVING 
            COUNT(*) > 1;
    ";

    $query = $conn->query($sql);
    $query = $query->fetchAll(PDO::FETCH_ASSOC);

    $response = $query;
    
    return $response;
}
function get_keyword_name_by_stopID(int $stop_id, PDO $conn){
    $sql = "
        select keyword_id, stop_id, en_US, th_TH, keyword_type, city_local_id, state_province_id, country from keyword
        where stop_id = '".$stop_id."'
    ";
    $query = $conn->query($sql);
    $query = $query->fetchAll(PDO::FETCH_ASSOC);
    $response = $query;

    return $response;
}
function get_keyword_compcode_from(int $keyword_id, PDO $conn){
    $sql = "SELECT from_keyword_id, compcode, is_active, created_at FROM keyword_compcode WHERE from_keyword_id = '".$keyword_id."' ";
    $query = $conn->query($sql);
    $query = $query->fetchAll(PDO::FETCH_ASSOC);
    $response = $query;
    
    return $response;
}
function get_keyword_compcode_to(int $keyword_id, PDO $conn){
    $sql = "SELECT to_keyword_id, compcode, is_active, created_at FROM keyword_compcode WHERE to_keyword_id = '".$keyword_id."' ";
    $query = $conn->query($sql);
    $query = $query->fetchAll(PDO::FETCH_ASSOC);
    $response = $query;
    
    return $response;
}
$data_keyword_duplicate = list_keywod_duplicate($conn);
$arr_kc_from = [];
$arr_kc_to = [];

$arr_group_from_id = array();
$arr_group_to_id = array();
foreach ($data_keyword_duplicate as  $value) {
    $dt = get_keyword_name_by_stopID($value['stop_id'], $conn);
   
    foreach ($dt as $key1 => $value1) {
        $keyword_id = $value1['keyword_id'];
        $stop_id = $value1['stop_id'];

        $kc_from = get_keyword_compcode_from($keyword_id, $conn);
        $kc_to = get_keyword_compcode_to($keyword_id, $conn);
        
        if (!empty($kc_from)) {
            $arr_group_from_id[$keyword_id] = $kc_from;
            $arr_kc_from = array_merge($arr_kc_from, $kc_from);
        }
        if (!empty($kc_to)) {
            $arr_group_to_id[$keyword_id] = $kc_to;
            $arr_kc_to = array_merge($arr_kc_to, $kc_to);
        }
    }

}
$row_kc_from_id = "";

$row_kc_to_id = "";
// echo "<pre>";
// print_r($arr_group_from_id);
// echo "</pre>";
// exit;
$count_row_from_id = count($arr_kc_from);
$run_one_row_from = [];
$row_i = 0;
foreach ($arr_kc_from as $key_kc_from => $kc_from) {
    $count_row_from_keyword_id = count($arr_group_from_id[$kc_from['from_keyword_id']]);
    $from_keyword_id = $kc_from['from_keyword_id'];
    if(!isset($run_one_row_from[$from_keyword_id])){
        $row_i++;
        $row_kc_from_id .= "
            <tr>
                <td>{$row_i}</td>
                <td>{$kc_from['from_keyword_id']} ({$count_row_from_keyword_id})</td>
                <td>{$kc_from['compcode']}</td>
                <td>{$kc_from['is_active']}</td>
                <td>{$kc_from['created_at']}</td>
            </tr>
        ";
        $run_one_row_from[$from_keyword_id] = true;
    }
}

$count_row_to_id = count($arr_kc_to);
$run_one_row_to = [];
$row_i = 0;
foreach ($arr_kc_to as $key_kc_to => $kc_to) {
    $to_keyword_id = $kc_to['to_keyword_id'];
    $count_row_to_keyword_id = count($arr_group_to_id[$kc_to['to_keyword_id']]);
    if(!isset($run_one_row_to[$to_keyword_id])){
    $row_i++;
    $row_kc_to_id .= "
        <tr>
            <td>{$row_i}</td>
            <td>{$kc_to['to_keyword_id']} ({$count_row_to_keyword_id})</td>
            <td>{$kc_from['compcode']}</td>
            <td>{$kc_from['is_active']}</td>
            <td>{$kc_from['created_at']}</td>
        </tr>
    ";
        $run_one_row_to[$to_keyword_id] = true;

    }

}

?>

<div class="container">
    <div class="row">
        <div class="col-6">
            <center>
                <h1>from_keyword_id</h1>
            </center>
            จำนวน : <?=$count_row_from_id?>

            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>from_keyword_id</th>
                    <th>compcode</th>
                    <th>is_active</th>
                    <th>created_at</th>
                </tr>
                <?=$row_kc_from_id?>
            </table>
        </div>
        <div class="col-6">
            <center>
                <h1>to_keyword_id</h1>
            </center>
            จำนวน : <?=$count_row_to_id?>
            <table class="table table-bordered">
                <tr>
                    <th>#</th>
                    <th>to_keyword_id</th>
                    <th>compcode</th>
                    <th>is_active</th>
                    <th>created_at</th>
                </tr>
                <?=$row_kc_to_id?>
            </table>
        </div>
    </div>
</div>