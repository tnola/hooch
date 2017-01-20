<?php
require_once('dist/autoload.php');
header('Content-Type: application/json; charset=utf-8');
// echo file_get_contents('php://input');
// get the HTTP method, path and body of the request
$api = new Api();
 
echo json_encode(array('require'=>$request, 'input'=>$input, 'method'=>$method, 'post'=>$_POST));
