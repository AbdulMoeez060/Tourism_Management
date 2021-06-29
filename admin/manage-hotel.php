<?php include('partial/menu.php'); ?>

        <div class="main-content"> 
            <div class="wrapper">
                <h1>Manage Hotels</h1>
                <br/>
                <?php
                    if (isset($_SESSION['add'])) {
                        echo $_SESSION['add'];
                        unset($_SESSION['add']);
                    }
                    if (isset($_SESSION['delete'])) 
                    {
                        echo $_SESSION['delete'];
                        unset($_SESSION['delete']);
                    }
					if (isset($_SESSION['update'])) 
                    {
                        echo $_SESSION['update'];
                        unset($_SESSION['update']);
                    }

                ?>
                <br/><br/>
                <a href="add-hotel.php" class="btn-primary">Add Hotel</a>

                <br /><br />

                <table class="tbl-full">
                    <tr>
                        <th>Sr no.</th>
                        <th>Name</th>
                        <th>Stars</th>
                        <th>Location  </th>
                        <th>Average Rates</th>
                        <th>Website</th>
                        <th>Contact No</th>
                        <th>City ID</th>
                        <th>Spot ID</th>
                        <th>Action</th>
                        
                    </tr>
                    <?php
                        $sql="SELECT * FROM hotels";


                        $res=mysqli_query($conn, $sql);

                        if ($res==TRUE) {
                            $count=mysqli_num_rows($res);

                            if ($count>0)
                            {
                                while ($rows=mysqli_fetch_assoc($res))
                                {
                                    $a=$rows['ID'];
                                    $b=$rows['Name'];
                                    $c=$rows['Stars'];
                                    $d=$rows['Location'];
                                    $e=$rows['AverageRates'];
                                    $f=$rows['Website'];
                                    $g=$rows['ContactNo'];
                                    $h=$rows['City_Id'];
                                    $i=$rows['Spots_Id'];

                                    

                                    ?>
                                    <tr>
                                        <th><?php echo $a ?> </th>
                                        <th><?php echo $b ?></th>
                                        <th><?php echo $c ?></th>
                                        <th><?php echo $d ?></th>
                                        <th><?php echo $e ?></th>
                                        <th><?php echo $f ?></th>
                                        <th><?php echo $g ?></th>
                                        <th><?php echo $h ?></th>
                                        <th><?php echo $i ?></th>



                                        <th>
                                            <a href="<?php echo SITEURL; ?>admin/update-hotel.php?id=<?php echo $a; ?>" class="btn-secondary">Update Hotel</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-hotel.php?id=<?php echo $a; ?>" class="btn-danger">Delete Hotel</a>

                                        </th>
                                    </tr>

                                    <?php


                                }
                            }
                            else 
                            {
                                
                            }
                        }
                        else{

                        }
                    ?>
                    


                </table>
            </div>
        </div>    

<?php include('partial/footer.php'); ?>
