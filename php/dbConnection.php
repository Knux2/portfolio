<?php

function getDbConn() :PDO {
    $db = new PDO('mysql:host=127.0.0.1; dbname=Portfolio', 'root');
    $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
    return $db;
}

?>