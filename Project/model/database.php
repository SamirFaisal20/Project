<?php
    class Database
    {
        //database connection function
        function openConnection()
        {
            $databasehost = "localhost";
            $databaseUser = "root";
            $databasepassword = "";
            $databasename = "Project";
            $connection = new mysqli($databasehost,$databaseUser,$databasepassword,$databasename);

            if($connection->connect_error)
            {
                echo "Can't Connect yet";
            }
            return $connection;
        }
        // query execution function 
        function Insertdata($username,$password,$presentadd,$permanentadd,$phoneno,$nid,$religion,$email,$connection)
        {
            $sql = "INSERT INTO delivery_reg (username,pass_word,present_add,
            permanent_add,phone_no,nid,religion,email) VALUES
            ('$username','$password','$presentadd','$permanentadd',$phoneno,'$nid','$religion','$email')";
            $insert= $connection->query($sql);
            return $insert;
        }
        // login function
        function Login($username,$password,$connection)
        {
            $sql = "SELECT * from delivery_reg WHERE username = '$username' AND pass_word ='$password'";
            $login= $connection->query($sql);
            return $login;
            
        }
        //see the login in user information
        function fetch($username,$connection)
        {
            $sql = "SELECT username,present_add,permanent_add,phone_no,nid,religion,email from delivery_reg where username='$username'";
            $execution = $connection->query($sql);
            return $execution;
        }
        function insertorder($code,$name,$price,$quantity,$total,$orderdate,$customername,$address,$phone,$connection)
        {
            $sql = "INSERT INTO orderlist (code,name,price,quantity,total,order_date,customer_name,address,phone) VALUES
            ('$code','$name','$price','$quantity',$total,'$orderdate','$customername','$address','$phone')";
            $insert= $connection->query($sql);
            return $insert;
        }
        function fetchorder($connection)
        {
            $sql="SELECT * from orderlist";
            $execute=$connection->query($sql);
            return $execute;
        }
        //search user
        function searchUser($username,$connection)
        {
            $sql="SELECT username,present_add,permanent_add,phone_no,nid,religion,email from delivery_reg where username='$username'";
            $execution = $connection->query($sql);
            return $execution;
        }
        function update($username,$presentadd,$permanentadd,$religion,$connection)
        {
            $sql="UPDATE delivery_reg set present_add='$presentadd',permanent_add='$permanentadd',religion='$religion' where username='$username'";
            $execution = $connection->query($sql);
            return $execution;
        }
        function delete($username,$connection)
        {
            $sql="DELETE FROM delivery_reg where username='$username'";
            $execute=$connection->query($sql);
            return $execute;
            
        }
        function forgetpassuser($username,$connection)
        {
            $sql="SELECT * from delivery_reg where username='$username'";
            $execution = $connection->query($sql);
            return $execution;
        }
        function forgetpassupdate($username,$newpass,$connection)
        {
            $sql="UPDATE delivery_reg set pass_word='$newpass' where username='$username'";
            $execution = $connection->query($sql);
            return $execution;
        }
        
        
        // Connection Close
        function ConnectionClose($connection)
        {
            $connection->close();
        }
    }
    

?>