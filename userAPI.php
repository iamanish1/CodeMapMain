<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/json');
header("Access-Control-Allow-Methods: GET");
header("Allow: GET, POST, OPTIONS, PUT, DELETE");
header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Access-Control-Allow-Origin");
include 'function.php';
$requestMethod=$_SERVER['REQUEST_METHOD'];
if($requestMethod=='GET'){
    $UserList=getUserList();
    echo $UserList;
}
else{
    $data=[
        'status'=>405,
        'mesage'=>$requestMethod."Method Not Allowed"
    ];
    header("HTTP/1.0 405 Method Not Allowed");
    echo json_encode($data);
}


?>