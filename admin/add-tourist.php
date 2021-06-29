<?php ob_start(); ?>
<?php include('partial/menu.php'); ?>

<div class="main-content"> 
            <div class="wrapper">
                <h1>Add Tourist</h1>

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
                                <input type="text" name="a" placeholder="Enter Name">
                            </td>
                        </tr>

                        <tr>
                            <td>Email: </td>
                           <td>
                                <input type="text" name="b" placeholder="Enter Email">
                            </td>
                        </tr>

                        <tr>
                            <td>Password: </td>
                            <td>
                                <input type="text" name="c" placeholder="Enter Password">
                            </td>
                        </tr>
                        <tr>
                            <td>Contact No: </td>
                            <td>
                                <input type="text" name="d" placeholder="Enter Contact">
                            </td>
                        </tr>

                        <tr>
                            <td>Country: </td>
                            <td>
                                <input type="text" name="e" placeholder="Enter Country">
                            </td>
                        </tr>

                        <tr>
                            <td>Package ID: </td>
                            <td>
                                <input type="text" name="f" placeholder="Enter Package Id">
                            </td>
                        </tr>

                        

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Tourist" class="btn-secondary">
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



        
        $sql="INSERT INTO tourist SET
        Name='$a',
        Email='$b',
        Password='$c',
        ContactNo='$d',
        Country='$e',
        Package_ID='$f'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE) {
            //echo"Data Inserted";
            $_SESSION['add']="Tourist data added Successfully";

            header("location:".SITEURL."admin/manage-tourist.php");
        }
        else{
            echo"Data not Inserted";
            $_SESSION['add']="Failed to add Tourist";

            header("location:".SITEURL."admin/add-tourist.php");
        }
    }

?>
<?php ob_flush(); ?>