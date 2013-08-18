<?php
/**
 * Created by JetBrains PhpStorm.
 * User: ersv
 * Date: 12/13/12
 * Time: 4:59 PM
 * To change this template use File | Settings | File Templates.
 */
class DataProvider
{
    protected $host;
    protected $database;
    protected $pass;
    protected $id;
    public function __construct($db)
    {
        $this->host=$db['host'];
        $this->database=$db['database'];
        $this->id=$db['id'];
        $this->pass=$db['password'];
    }
    /*
     * Kết nối database
     */
    protected function Connect()
    {
        $cn=mysql_connect($this->host, $this->id, $this->pass) or die (header("Location: /error/500.php"));
        mysql_select_db($this->database, $cn) or die (header("Location: /error/500.php"));
        mysql_query("set names 'utf8'");
        return $cn;
    }
/*
 * Lấy bảng database
 */
    public function ExecuteQuery($sql)
    {
        $cn=$this->Connect();
        $kq=mysql_query($sql, $cn) or die (header("Location: /error/500.php"));
        $a=array();
        while($x=mysql_fetch_array($kq, MYSQL_ASSOC))
            $a[]=$x;
        mysql_close($cn);
        return $a;
    }
/*
 * thực hiện non query
 */
    public function ExecuteNonQuery($sql)
    {
        $cn=$this->Connect();
        $a=mysql_query($sql, $cn)or die (header("Location: /error/500.php"));
        mysql_close($cn)or die (header("Location: /error/500.php"));
        return $a;
    }
}
