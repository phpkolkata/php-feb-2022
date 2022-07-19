<?php

class DB{

    protected $host;
    protected $user;
    protected $pass;
    protected $db;
    public $con;

    function __construct($host="localhost", $user="asif", $pass="asif",$db="mobile_store")
    {
        echo "start";
        $this->host=$host;
        $this->user=$user;
        $this->pass=$pass;
        $this->db=$db;
        $this->connect();
    }

     function connect(){
        $this->con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
    }

    // function fetch($query){
    //     $res = mysqli_query($this->con, $query) or die("error");
    //     while($row = mysqli_fetch_assoc($res))
    //     {
    //         $array[] = $row;
    //     }
    //     return $array;
    // }

    function sql($query){
        $res = mysqli_query($this->con, $query) or die("error");
        return $res;
    }

    function count($sql){
        $res = mysqli_query($this->con, $sql) or die("error");
        return mysqli_num_rows($res);
    }

    function __destruct()
    {
        echo "end";
        $this->host="";
        $this->user="";
        $this->pass="";
        $this->db="";
        $this->con ="";
    }
}