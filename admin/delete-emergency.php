<?php
    include('../config/constant.php');


    echo $id=$_GET['id'];

    $sql="DELETE FROM `emergency_contacts` WHERE `Number` = $id";

    $res=mysqli_query($conn, $sql);

    if ($res==TRUE) {
        
        $_SESSION['delete']="<div class='success'> Contact delete Successfull</div>";

        header("location:".SITEURL."admin/manage-emergency.php");

    }
    else {
        $_SESSION['delete']="<div class='error'>Contact delete Failed</div>";
        header("location:".SITEURL."admin/manage-emergency.php");

    }

?>