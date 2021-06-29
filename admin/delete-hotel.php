<?php
    include('../config/constant.php');


    echo $id=$_GET['id'];

    $sql="DELETE FROM `hotels` WHERE `ID` = $id";

    $res=mysqli_query($conn, $sql);

    if ($res==TRUE) {
        
        $_SESSION['delete']="<div class='success'> Hotel delete Successfull</div>";

        header("location:".SITEURL."admin/manage-hotel.php");

    }
    else {
        $_SESSION['delete']="<div class='error'>Hotel delete Failed</div>";
        header("location:".SITEURL."admin/manage-hotel.php");

    }

?>