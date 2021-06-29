<?php ob_start(); ?>
<?php include('partial/menu.php'); ?>
<div class="main-content"> 
            <div class="wrapper">
                <h1>Add Guide</h1>

                <br/>
                <?php
                    if (isset($_SESSION['add']))
                    {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                ?>
                <form action="" method="POST">

                    <table class="tbl-30">
                        <tr>
                            <td>First Name: </td>
                            <td>
                                <input type="text" name="a" placeholder="Enter First Name">
                            </td>
                        </tr>

                        <tr>
                            <td>Last Name: </td>
                            <td>
                                <input type="text" name="b" placeholder="Enter Last Name">
                            </td>
                        </tr>

                        <tr>
                            <td>Status: </td>
                           <td>
                                <input type="text" name="c" placeholder="Enter Guide Status">
                            </td>
                        </tr>

                        <tr>
                            <td>Date of Birth: </td>
                            <td>
                                <input type="text" name="d" placeholder="YYYY-MM--DD">
                            </td>
                        </tr>

                        <tr>
                            <td>Gender: </td>
                            <td>
                                <input type="text" name="e" placeholder="Enter Gender">
                            </td>
                        </tr>

                        <tr>
                            <td>Rating: </td>
                            <td>
                                <input type="text" name="f" placeholder="Enter Guide Rating">
                            </td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td>
                                <input type="text" name="g" placeholder="Enter Email">
                            </td>
                        </tr>

                        

                        <tr>
                            <td>Contact No: </td>
                            <td>
                                <input type="text" name="h" placeholder="Enter Contact">
                            </td>
                        </tr>

                        <tr>
                            <td>Company id: </td>
                            <td>
                                <input type="text" name="i" placeholder="Enter Company Id">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Guide" class="btn-secondary">
                            </td>
                        </tr>

                    </table>

                </form>


            </div>


</div> 


<?php include('partial/footer.php');?>
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
        $h=$_POST['h'];
        $i=$_POST['i'];



        
        $sql="INSERT INTO guides SET
        Fname='$a',
        Lname='$b',
        Status='$c',
        DOB='$d',
        Gender='$e',
        Rating='$f',
        Email='$g',
        ContactNo='$h',
        Company_Id='$i'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE) {
            //echo"Data Inserted";
            $_SESSION['add']="Guide data added Successfully";

            header("location:".SITEURL."admin/manage-guide.php");
        }
        else{
            //echo"Data not Inserted";
            $_SESSION['add']="Failed to add Guide";

            header("location:".SITEURL."admin/add-guide.php");
        }
    }
?>
<?php ob_flush(); ?>