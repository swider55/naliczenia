<?php
require 'mysql/connection.php';


$connectToMysql = new MysqlConnector();
$loginAndPossword = $connectToMysql->selectQuery('SELECT * FROM users');

if ($loginAndPossword[0]['login'] == md5('login') AND $loginAndPossword[0]['password'] == md5('password')){

    echo 'udalo ci sie wejsc';

}else{
    require 'index.html';

}





