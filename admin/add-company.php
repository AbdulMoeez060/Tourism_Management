<?php include('partial/menu.php'); ?>

<div class="main-content"> 
            <div class="wrapper">
                <h1>Add Company</h1>

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
                                <input type="text" name="a" placeholder="Enter Company Name">
                            </td>
                        </tr>

                        <tr>
                            <td>Address: </td>
                           <td>
                                <input type="text" name="b" placeholder="Enter Company Address">
                            </td>
                        </tr>

                        <tr>
                            <td>Rating: </td>
                            <td>
                                <input type="text" name="c" placeholder="Enter Company Rating">
                            </td>
                        </tr>
                        <tr>
                            <td>Email: </td>
                            <td>
                                <input type="text" name="d" placeholder="Enter Email">
                            </td>
                        </tr>

                        <tr>
                            <td>Website: </td>
                            <td>
                                <input type="text" name="e" placeholder="Enter Website">
                            </td>
                        </tr>

                        <tr>
                            <td>Contact No: </td>
                            <td>
                                <input type="text" name="f" placeholder="Enter Contact">
                            </td>
                        </tr>

                        <tr>
                            <td>City id: </td>
                            <td>
                                <input type="text" name="g" placeholder="Enter City Id">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Company" class="btn-secondary">
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


        
        $sql="INSERT INTO tourist_company SET
        Name='$a',
        Address='$b',
        Rating='$c',
        Email='$d',
        Website='$e',
        ContactNo='$f',
        City_Id='$g'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE) {
            //echo"Data Inserted";
            $_SESSION['add']="Company data added Successfully";

            header("location:".SITEURL."admin/manage-company.php");
        }
        else{
            echo"Data not Inserted";
            $_SESSION['add']="Failed to add Company";

            header("location:".SITEURL."admin/add-company.php");
        }
    }

?>
