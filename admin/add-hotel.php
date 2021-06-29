<?php include('partial/menu.php'); ?>

<div class="main-content"> 
            <div class="wrapper">
                <h1>Add Hotel</h1>

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
                            <td>Stars: </td>
                           <td>
                                <input type="text" name="b" placeholder="Enter Hotel Stars">
                            </td>
                        </tr>

                        <tr>
                            <td>Location: </td>
                            <td>
                                <input type="text" name="c" placeholder="Enter Hotel Location">
                            </td>
                        </tr>
                        <tr>
                            <td>Average Rates: </td>
                            <td>
                                <input type="text" name="d" placeholder="Enter Average Rate">
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
                            <td>Spot id: </td>
                            <td>
                                <input type="text" name="h" placeholder="Enter Spot Id">
                            </td>
                        </tr>

                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Hotel" class="btn-secondary">
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
        $h=$_POST['h'];



        
        $sql="INSERT INTO hotels SET
        Name='$a',
        Stars='$b',
        Location='$c',
        AverageRates='$d',
        Website='$e',
        ContactNo='$f',
        City_Id='$g',
        Spots_Id='$h'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE) {
            //echo"Data Inserted";
            $_SESSION['add']="Hotel data added Successfully";

            header("location:".SITEURL."admin/manage-hotel.php");
        }
        else{
            echo"Data not Inserted";
            $_SESSION['add']="Failed to add Hotel";

            header("location:".SITEURL."admin/add-hotel.php");
        }
    }

?>
