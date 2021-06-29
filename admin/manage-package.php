<?php include('partial/menu.php'); ?>

        <div class="main-content"> 
            <div class="wrapper">
                <h1>Manage Packages</h1>
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

                <a href="add-package.php" class="btn-primary">Add Package</a>

                <br /><br />


                <table class="tbl-full">
                    <tr>
                        <th>Sr no.</th>
                        <th>Name</th>
                        <th>Type</th>
                        <th>Cost</th>
                        <th>Starting Date</th>
                        <th>End Date</th>
                        <th>Description</th>
                        <th>Guide ID</th>
                        <th>Action</th>

                    </tr>
                    <?php
                        $sql="SELECT * FROM packages";


                        $res=mysqli_query($conn, $sql);

                        if ($res==TRUE) {
                            $count=mysqli_num_rows($res);

                            if ($count>0)
                            {
                                while ($rows=mysqli_fetch_assoc($res))
                                {
                                    $a=$rows['ID'];
                                    $b=$rows['Name'];
                                    $c=$rows['Type'];
                                    $d=$rows['Cost'];
                                    $e=$rows['StartingDate'];
                                    $f=$rows['EndDate'];
                                    $g=$rows['Description'];
                                    $h=$rows['Guide_ID'];

                                    

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



                                        <th>
                                            <a href="<?php echo SITEURL; ?>admin/update-package.php?id=<?php echo $a; ?>" class="btn-secondary">Update Package</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-package.php?id=<?php echo $a; ?>" class="btn-danger">Delete Package</a>

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
