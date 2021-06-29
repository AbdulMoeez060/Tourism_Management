<?php include('partial/menu.php'); ?>

<div class="main-content"> 
            <div class="wrapper">
                <h1>Add City</h1>

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
                                <input type="text" name="a" placeholder="Enter City Name">
                            </td>
                        </tr>

                        <tr>
                            <td>Province: </td>
                           <td>
                                <input type="text" name="b" placeholder="Enter City Province">
                            </td>
                        </tr>

                        <tr>
                            <td>Airport: </td>
                            <td>
                                <input type="text" name="c" placeholder="Does this city has Airport?">
                            </td>
                        </tr>
                        <tr>
                            <td>Description: </td>
                            <td>
                                <input type="text" name="d" placeholder="Enter Description">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add City" class="btn-secondary">
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

        
        $sql="INSERT INTO city SET
        Name='$a',
        Province='$b',
        HasAirpot='$c',
        Description='$d'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE) {
            //echo"Data Inserted";
            $_SESSION['add']="City data added Successfully";

            header("location:".SITEURL."admin/manage-city.php");
        }
        else{
            echo"Data not Inserted";
            $_SESSION['add']="Failed to add city";

            header("location:".SITEURL."admin/add-city.php");
        }
    }

?>
