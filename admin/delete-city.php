<?php
    include('../config/constant.php');


    echo $id=$_GET['id'];

    $sql="DELETE FROM `city` WHERE `ID` = $id";

    $res=mysqli_query($conn, $sql);

    if ($res==TRUE) {
        
        $_SESSION['delete']="<div class='success'> City delete Successfull</div>";

        header("location:".SITEURL."admin/manage-city.php");

    }
    else {
        $_SESSION['delete']="<div class='error'>City delete Failed</div>";
        header("location:".SITEURL."admin/manage-city.php");

    }

?>