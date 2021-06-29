<?php include('partial/menu.php'); ?>

        <div class="main-content"> 
            <div class="wrapper">
                <h1>Manage Tourists</h1>
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

                <a href="add-tourist.php" class="btn-primary">Add Tourists</a>

                <br /><br />


                <table class="tbl-full">
                    <tr>
                        <th>Sr no.</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Password</th>
                        <th>Contact No</th>
                        <th>Country</th>
                        <th>Package_ID</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                        $sql="SELECT * FROM tourist";


                        $res=mysqli_query($conn, $sql);

                        if ($res==TRUE) {
                            $count=mysqli_num_rows($res);

                            if ($count>0)
                            {
                                while ($rows=mysqli_fetch_assoc($res))
                                {
                                    $a=$rows['ID'];
                                    $b=$rows['Name'];
                                    $c=$rows['Email'];
                                    $d=$rows['Password'];
                                    $e=$rows['ContactNo'];
                                    $f=$rows['Country'];
                                    $g=$rows['Package_ID'];
                                    

                                    

                                    ?>
                                    <tr>
                                        <th><?php echo $a ?> </th>
                                        <th><?php echo $b ?></th>
                                        <th><?php echo $c ?></th>
                                        <th><?php echo $d ?></th>
                                        <th><?php echo $e ?></th>
                                        <th><?php echo $f ?></th>
                                        <th><?php echo $g ?></th>
                                        



                                        <th>
                                            <a href="<?php echo SITEURL; ?>admin/update-tourist.php?id=<?php echo $a; ?>" class="btn-secondary">Update Tourist</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-tourist.php?id=<?php echo $a; ?>" class="btn-danger">Delete Tourists</a>

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
