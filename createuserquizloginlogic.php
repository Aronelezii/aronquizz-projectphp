<?php
include_once("config.php");
session_start();
if($_SESSION['is_admin']=="true"){
    header("Location:Dashboard.php");
}
if(isset($_POST['submit'])){
    $name= $_POST['name'];
    $username= $_POST['username'];
    $email= $_POST['email'];
    $tempPass= $_POST['password'];
    $password= password_hash($tempPass, PASSWORD_DEFAULT);
    $Cpassword= $_POST['Cpassword'];
   
    if($_POST['is_admin']=="on"){
        $is_admin="true";
    }else{
        $is_admin="false";
    }

    if(empty($name) || empty($email) || empty($password) || empty($Cpassword) || empty($username)){
        echo"Please go back and fill out all the required fields";
    }else{
        
        $sql="INSERT INTO users (name, username, email, password,is_admin) VALUES(:name, :username,:email, :password,:is_admin)";
        $insertSql=$conn->prepare($sql);
        $insertSql->bindParam(':name',$name);
        $insertSql->bindParam(':username',$username);
        $insertSql->bindParam(':email',$email);
        $insertSql->bindParam(':password',$password);
        $insertSql->bindParam(':is_admin',$is_admin);
        $insertSql->execute();

        header('Location: Dashboard.php');
    }

}

?>