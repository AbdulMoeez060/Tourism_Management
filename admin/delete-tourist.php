<?php
    include('../config/constant.php');


    echo $id=$_GET['id'];

    $sql="DELETE FROM `tourist` WHERE `ID` = $id";

    $res=mysqli_query($conn, $sql);

    if ($res==TRUE) {
        
        $_SESSION['delete']="<div class='success'> Tourist delete Successfull</div>";

        header("location:".SITEURL."admin/manage-tourist.php");

    }
    else {
        $_SESSION['delete']="<div class='error'>Tourist delete Failed</div>";
        header("location:".SITEURL."admin/manage-tourist.php");

    }

?>