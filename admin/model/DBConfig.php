<?php

class DBConfig
{
    public $con;
    function __construct()
    {	
        $this->con = mysqli_connect("localhost","root","","solar");
        
        if(mysqli_connect_errno())
        {
            die("Some error occured while connecting to database<br/>".mysqli_connect_error());
        }
    }
    function safeRequest($req)
    {
        $safeReq = array();
        foreach($req as $key=>$value)
        {
            if(strpos($key, 'Json') === false) {
                $safeReq[$key] = trim(mysqli_real_escape_string($this->con, $value));
            }
            else{
                $safeReq[$key] = $value;
            }
        }
        return $safeReq;
    }
}
?>