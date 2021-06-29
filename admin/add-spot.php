<?php ob_start(); ?>

<?php include('partial/menu.php'); ?>

<div class="main-content"> 
            <div class="wrapper">
                <h1>Add Spots</h1>

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
                                <input type="text" name="a" placeholder="Enter Spot Name">
                            </td>
                        </tr>

                        <tr>
                            <td>Location: </td>
                           <td>
                                <input type="text" name="b" placeholder="Enter Spote Location">
                            </td>
                        </tr>

                        <tr>
                            <td>Founding Date: </td>
                            <td>
                                <input type="text" name="c" placeholder="Enter Spot Founding Date">
                            </td>
                        </tr>
                        <tr>
                            <td>Timings: </td>
                            <td>
                                <input type="text" name="d" placeholder="Enter Timings">
                            </td>
                        </tr>

                        <tr>
                            <td>Entry Price: </td>
                            <td>
                                <input type="text" name="e" placeholder="Enter Entry Price">
                            </td>
                        </tr>

                        <tr>
                            <td>Description: </td>
                            <td>
                                <input type="text" name="f" placeholder="Enter Description">
                            </td>
                        </tr>

                        <tr>
                            <td>CRush Hour: </td>
                            <td>
                                <input type="text" name="g" placeholder="Enter Rush Hour">
                            </td>
                        </tr>
                        <tr>
                            <td>Rating: </td>
                            <td>
                                <input type="text" name="h" placeholder="Enter Rating">
                            </td>
                        </tr>
                        <tr>
                            <td>Type: </td>
                            <td>
                                <input type="text" name="i" placeholder="Enter Type">
                            </td>
                        </tr>

                        <tr>
                            <td>City Id: </td>
                            <td>
                                <input type="text" name="j" placeholder="Enter City Id">
                            </td>
                        </tr>


                        <tr>
                            <td colspan="2">
                                <input type="submit" name="submit" value="Add Spot" class="btn-secondary">
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
        $i=$_POST['i'];
        $j=$_POST['j'];




        
        $sql="INSERT INTO tourist_spots SET
        Name='$a',
        Location='$b',
        FoundingDate='$c',
        Timings='$d',
        EntryPrice='$e',
        Description='$f',
        RushHours='$g',
        Rating='$h',
        Type='$i',
        City_Id='$j'
        ";

        $res=mysqli_query($conn, $sql) or die(mysqli_error());
        if ($res==TRUE) {
            //echo"Data Inserted";
            $_SESSION['add']="Spot data added Successfully";

            header("location:".SITEURL."admin/manage-spot.php");
        }
        else{
            echo"Data not Inserted";
            $_SESSION['add']="Failed to add Spot";

            header("location:".SITEURL."admin/add-spot.php");
        }
    }

?>
<?php ob_flush(); ?>