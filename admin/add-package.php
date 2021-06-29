<?php include('partial/menu.php'); ?>

<div class="main-content"> 
            <div class="wrapper">
                <h1>Add Package</h1>

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
                                <input type="text" name="a" placeholder="Enter Package Name">
                            </td>
                        </tr>

                        <tr>
                            <td>Type: </td>
                           <td>
                                <input type="text" name="b" placeholder="Enter Package Type">
                            </td>
                        </tr>

                        <tr>
                            <td>Cost: </td>
                            <td>
                                <input type="text" name="c" placeholder="Enter Package Cost">
                            </td>
                        </tr>
                        <tr>
                            <td>Starting Date: </td>
                            <td>
                                <input type="text" name="d" placeholder="Enter Starting date">
                            </td>
                        </tr>

                        <tr>
                            <td>End Date: </td>
                            <td>
                                <input type="text" name="e" placeholder="Enter End date">
                            </td>
                        </tr>

                        <tr>
                            <td>Description: </td>
                            <td>
                                <input type="text" name="f" placeholder="Enter Description">
                            </td>
                        </tr>

                        <tr>
                            <td>Guide id: </td>
                            <td>
                                <input type="text" name="g" placeholder="Enter Guide Id">
                            </td>
                        </tr>
                       

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Package" class="btn-secondary">
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



        
        $sql="INSERT INTO packages SET
        Name='$a',
        Type='$b',
        Cost='$c',
        StartingDate='$d',
        EndDate='$e',
        Description='$f',
        Guide_ID='$g'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE) {
            //echo"Data Inserted";
            $_SESSION['add']="Package data added Successfully";

            header("location:".SITEURL."admin/manage-package.php");
        }
        else{
            echo"Data not Inserted";
            $_SESSION['add']="Failed to add Package";

            header("location:".SITEURL."admin/add-package.php");
        }
    }

?>
