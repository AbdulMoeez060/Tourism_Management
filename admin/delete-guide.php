<?php
    include('../config/constant.php');


    echo $id=$_GET['id'];

    $sql="DELETE FROM `guides` WHERE `ID` = $id";

    $res=mysqli_query($conn, $sql);

    if ($res==TRUE) {
        
        $_SESSION['delete']="<div class='success'> Guide delete Successfull</div>";

        header("location:".SITEURL."admin/manage-guide.php");

    }
    else {
        $_SESSION['delete']="<div class='error'>Guide delete Failed</div>";
        header("location:".SITEURL."admin/manage-guide.php");

    }

?>