<?php
require 'domen/Clan.php';

if(isset($_POST["action"])){
    if($_POST["action"]=="insert"){
        insert();
    }
}

function insert()
{
    global $conn;
    $name=$_POST["ime"];
    $lastname=$_POST["prezime"];
    $username=$_POST["username"];
    $password=$_POST["password"];
    $email=$_POST["email"];
    $type=$_POST["tip"];

    $query="INSERT INTO clan VALUES('', '$name', '$lastname', '$username', '$password', '$email', '$type')";
    mysqli_query($conn, $query);
    echo "Uspesno dodat clan";
}

?>

