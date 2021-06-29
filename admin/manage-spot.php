<?php include('partial/menu.php'); ?>

        <div class="main-content"> 
            <div class="wrapper">
                <h1>Manage Tourist Spots</h1>
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

                <a href="add-spot.php" class="btn-primary">Add Spot</a>

                <br /><br />


                <table class="tbl-full">
                    <tr>
                        <th>Sr no.</th>
                        <th>Name</th>
                        <th>Location</th>
                        <th>Founding Date </th>
                        <th>Timings</th>
                        <th>Entry Price</th>
                        <th>Description</th>
                        <th>Rush Hours</th>
                        <th>Rating</th>
                        <th>Type</th>
                        <th>City Id</th>
                        <th>Action</th>
                    </tr>
                    <?php
                        $sql="SELECT * FROM tourist_spots";


                        $res=mysqli_query($conn, $sql);

                        if ($res==TRUE) {
                            $count=mysqli_num_rows($res);

                            if ($count>0)
                            {
                                while ($rows=mysqli_fetch_assoc($res))
                                {
                                    $a=$rows['ID'];
                                    $b=$rows['Name'];
                                    $c=$rows['Location'];
                                    $d=$rows['FoundingDate'];
                                    $e=$rows['Timings'];
                                    $f=$rows['EntryPrice'];
                                    $g=$rows['Description'];
                                    $h=$rows['RushHours'];                                   
                                    $i=$rows['Rating'];
                                    $j=$rows['Type'];
                                    $k=$rows['City_Id'];


                                    

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
                                        <th><?php echo $j ?></th>
                                        <th><?php echo $k ?></th>



                                        <th>
                                            <a href="<?php echo SITEURL; ?>admin/update-spot.php?id=<?php echo $a; ?>" class="btn-secondary">Update Spot</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-spot.php?id=<?php echo $a; ?>" class="btn-danger">Delete Spot</a>

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
