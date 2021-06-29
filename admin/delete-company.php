<?php
    include('../config/constant.php');


    echo $id=$_GET['id'];

    $sql="DELETE FROM `tourist_company` WHERE `ID` = $id";

    $res=mysqli_query($conn, $sql);

    if ($res==TRUE) {
        
        $_SESSION['delete']="<div class='success'> Company delete Successfull</div>";

        header("location:".SITEURL."admin/manage-company.php");

    }
    else {
        $_SESSION['delete']="<div class='error'>Company delete Failed</div>";
        header("location:".SITEURL."admin/manage-company.php");

    }

?>