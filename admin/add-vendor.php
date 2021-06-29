<?php ob_start(); ?>
<?php include('partial/menu.php'); ?>

<div class="main-content"> 
            <div class="wrapper">
                <h1>Add Food Vendor</h1>

                <br/>
                <?php
                    if (isset($_SESSION['add'])) {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }

                ?>


                <form action="" method="POST">

                    <table class="tbl-30">
                        <tr>
                            <td>Name: </td>
                            <td>
                                <input type="text" name="a" placeholder="Enter Hotel Name">
                            </td>
                        </tr>

                        <tr>
                            <td>Contact NO: </td>
                           <td>
                                <input type="text" name="b" placeholder="Enter Contact">
                            </td>
                        </tr>

                        <tr>
                            <td>Location: </td>
                            <td>
                                <input type="text" name="c" placeholder="Enter Vendor Location">
                            </td>
                        </tr>
                        <tr>
                            <td>Rating: </td>
                            <td>
                                <input type="text" name="d" placeholder="Enter Rating">
                            </td>
                        </tr>

                        <tr>
                            <td>Website: </td>
                            <td>
                                <input type="text" name="e" placeholder="Enter Website">
                            </td>
                        </tr>

                        <tr>
                            <td>Pricing: </td>
                            <td>
                                <input type="text" name="f" placeholder="Enter Pricing">
                            </td>
                        </tr>

                       
                        <tr>
                            <td>Spot id: </td>
                            <td>
                                <input type="text" name="g" placeholder="Enter Spot Id">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Food Vendor" class="btn-secondary">
                            </td>
                        </tr>

                    </table>

                </form>


            </div>


</div> 


<?php include('partial/footer.php'); ?>

<?php

    if (isset($_POST['submit'])) 
    {
        $a=$_POST['a'];
        $b=$_POST['b'];
        $c=$_POST['c'];
        $d=$_POST['d'];
        $e=$_POST['e'];
        $f=$_POST['f'];
        $g=$_POST['g'];



        
        $sql="INSERT INTO food_vendors SET
        Name='$a',
        ContactNO='$b',
        Location='$c',
        Rating='$d',
        Website='$e',
        Pricing='$f',
        Spot_Id='$g'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE) {
            //echo"Data Inserted";
            $_SESSION['add']="Vendor data added Successfully";

            header("location:".SITEURL."admin/manage-vendor.php");
        }
        else{
            echo"Data not Inserted";
            $_SESSION['add']="Failed to add Vendor";

            header("location:".SITEURL."admin/add-vendor.php");
        }
    }

?>


<?php ob_flush(); ?>