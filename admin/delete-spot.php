<?php
    include('../config/constant.php');


    echo $id=$_GET['id'];

    $sql="DELETE FROM `tourist_spots` WHERE `ID` = $id";

    $res=mysqli_query($conn, $sql);

    if ($res==TRUE) {
        
        $_SESSION['delete']="<div class='success'> Spot delete Successfull</div>";

        header("location:".SITEURL."admin/manage-spot.php");

    }
    else {
        $_SESSION['delete']="<div class='error'>Spot delete Failed</div>";
        header("location:".SITEURL."admin/manage-spot.php");

    }

?>