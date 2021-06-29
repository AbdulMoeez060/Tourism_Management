<?php ob_start(); ?>
<?php include('partial/menu.php'); ?>

<div class="main-content"> 
            <div class="wrapper">
                <h1>Add Emergency Contact</h1>

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
                            <td>Number: </td>
                            <td>
                                <input type="text" name="a" placeholder="Enter Number">
                            </td>
                        </tr>

                        <tr>
                            <td>Name: </td>
                           <td>
                                <input type="text" name="b" placeholder="Enter Name">
                            </td>
                        </tr>

                        <tr>
                            <td>Description: </td>
                            <td>
                                <input type="text" name="c" placeholder="Enter Description">
                            </td>
                     </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Emergency Contact" class="btn-secondary">
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
        
        $sql="INSERT INTO emergency_contacts SET
        Number='$a',
        Name='$b',
        Description='$c'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE) {
            //echo"Data Inserted";
            $_SESSION['add']="Contact data added Successfully";

            header("location:".SITEURL."admin/manage-emergency.php");
        }
        else{
            echo"Data not Inserted";
            $_SESSION['add']="Failed to add Contact";

            header("location:".SITEURL."admin/add-emergency.php");
        }
    }

?>

<?php ob_flush(); ?>