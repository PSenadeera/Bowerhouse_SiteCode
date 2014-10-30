<?php

/**
 * @author 
 * @copyright 2014
 */

class createConnection  
{
    var $DBhost="localhost";
    var $DBusername="bowerbid";     
    Var $DBpassword="bowerhouse!@#$%";
    var $DBdatabase="bowerhouse"; 
    var $myconn;

    function connectToDatabase()  
    {

        $conn= mysqli_connect($this->DBhost,$this->DBusername,$this->DBpassword,$this->DBdatabase);

        if(!$conn) 
        {
            die ("Cannot connect to the database");
        }

        else
        {

            $this->myconn = $conn;

        }

        return $this->myconn;

    }

    function selectDatabase()  
    {
        mysql_select_db($this->DBdatabase);   

        if(mysql_error())  
        {

            return 0;

        }
        else{
            
             return 1;   
        }
            
    }

    function closeConnection()  
    {
        mysql_close($this->myconn);

        return "Connection closed";
    }

}

?>