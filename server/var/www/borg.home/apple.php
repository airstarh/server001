<?php

require_once __DIR__ . '/BorgToolKit/index.php';

$data = [
    '$_POST'     => $_POST,
    //'$_POST_STD' => file_get_contents('php://input'),
    '$_FILES'    => $_FILES,
    '$_GET'      => $_GET,
];

flog($data);
ffj($data);
