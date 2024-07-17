<?php
session_start();
include_once('config.php');
    if(isset($_POST['submit'])){
        $name= $_POST['name'];
        $username= $_POST['username'];
        $email= $_POST['email'];
        $tempPass= $_POST['password'];
        $password= password_hash($tempPass, PASSWORD_DEFAULT);
        $Cpassword= $_POST['Cpassword'];
        if(empty($name) || empty($email) || empty($password) || empty($Cpassword) || empty($username)){
            echo"Please go back and fill out all the required fields";
        }else{
            
            $sql="INSERT INTO users (name, username, email, password,is_admin) VALUES(:name, :username,:email, :password,'')";
            $insertSql=$conn->prepare($sql);
            $insertSql->bindParam(':name',$name);
            $insertSql->bindParam(':username',$username);
            $insertSql->bindParam(':email',$email);
            $insertSql->bindParam(':password',$password);
            $insertSql->execute();
    
            header('Location: index.php');
        }

    }
?>