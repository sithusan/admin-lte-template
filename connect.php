<?php 

    $conn = mysqli_connect('localhost','root','','login');

    if(!$conn){
        echo "Erro in Connnecting Database";
    }
?>