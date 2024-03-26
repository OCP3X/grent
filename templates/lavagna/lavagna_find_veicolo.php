<?php

$findveicolo = $_GET['findveicolo'];

$dbName = 'GRENT';
$uid = 'Massimo';
$pwd = 'accornero1';
$options = array(
    "Database" => $dbName,
    "UID" => $uid,
    "PWD" => $pwd
);
if (isset($findveicolo)) {
    $db = sqlsrv_connect("localhost", $options);
    if ($db === false) {
        die(print_r(sqlsrv_errors(), true));
    }
    print("<br/>  OK");
    $sql = 'SELECT * FROM veicoli WHERE descrizion like "%' . $stringToFind . '%"';
    $res = sqlsrv_query($db, $sql);
    if (sqlsrv_fetch($res) === false) {
        die(print_r(sqlsrv_errors(), true));
    }

    while ($sVeicoli = sqlsrv_fetch_array($res, MYSQLI_ASSOC)) {
        $findveicolo[] = array(
            "id" => $sVeicoli['id_veicolo'],
            "descrizion" => $sVeicoli['descrizion']
        );
        echo json_encode($findveicolo);
    }
}

?>



