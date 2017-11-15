<?php
/**
 * @file
 * db_funtions.php: demo PDO usage
 * Hsueh-Ting Chu 2017/10/13
 */
//require_once 'testlog.php';
$GLOBALS['dbconfig'] = array (
'database' => '105021018_',
'username' => '105021018',
'password' => 'larry099079',
'host' => 'localhost',
'port' => '',
'driver' => 'mysql',
);
//從資料庫讀出使用者資料
function CheckUserTest($sID, $sCode)
{
    return "Hello";
}
function CheckUser($sID, $sCode) {    
    $dbconfig = $GLOBALS['dbconfig'];
    $dsn = $dbconfig['driver'].":host=".$dbconfig['host'].";dbname=".$dbconfig['database'];
    $pdo = new PDO($dsn, $dbconfig['username'],$dbconfig['password']);
    $pdo->query("set names utf8");
    $sql = "SELECT SName FROM tour_user WHERE SID = :SID AND SCode =:SCode";    
    $pdoStatement = $pdo->prepare($sql);
    $pdoStatement->bindValue(':SID', $sID, PDO::PARAM_STR); 
    $pdoStatement->bindValue(':SCode', $sCode, PDO::PARAM_STR); 
    $ret = $pdoStatement->execute();
    $row = $pdoStatement->fetch();
    if ($row)
    {
        return $row['SName'];
    }
    return NULL;
}