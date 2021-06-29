<?php
    include('../config/constant.php');


    echo $id=$_GET['id'];

    $sql="DELETE FROM `packages` WHERE `ID` = $id";

    $res=mysqli_query($conn, $sql);

    if ($res==TRUE) {
        
        $_SESSION['delete']="<div class='success'> Package delete Successfull</div>";

        header("location:".SITEURL."admin/manage-package.php");

    }
    else {
        $_SESSION['delete']="<div class='error'>Package delete Failed</div>";
        header("location:".SITEURL."admin/manage-package.php");

    }

?>