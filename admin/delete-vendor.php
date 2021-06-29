<?php
    include('../config/constant.php');


    echo $id=$_GET['id'];

    $sql="DELETE FROM `food_vendors` WHERE `ID` = $id";

    $res=mysqli_query($conn, $sql);

    if ($res==TRUE) {
        
        $_SESSION['delete']="<div class='success'> Vendor delete Successfull</div>";

        header("location:".SITEURL."admin/manage-vendor.php");

    }
    else {
        $_SESSION['delete']="<div class='error'>Vendor delete Failed</div>";
        header("location:".SITEURL."admin/manage-vendor.php");

    }

?>