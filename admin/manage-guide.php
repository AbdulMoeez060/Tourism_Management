<?php include('partial/menu.php'); ?>

        <div class="main-content"> 
            <div class="wrapper">
                <h1>Manage Guides</h1>
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
                <br/><br/><br/>

                <a href="add-guide.php" class="btn-primary">Add Guide</a>

                <br /><br />


                <table class="tbl-full">
                    <tr>
                        <th>Sr no.</th>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Status</th>
                        <th>DOB</th>
                        <th>Gender</th>
                        <th>Rating</th>
                        <th>Email</th>
                        <th>Contact No</th>
                        <th>Company Id</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                        $id=1;
                        $sql="SELECT * FROM guides";

                        $res=mysqli_query($conn, $sql);

                        if ($res==TRUE) {
                            $count=mysqli_num_rows($res);

                            if ($count>0)
                            {
                                while ($rows=mysqli_fetch_assoc($res))
                                {
                                    $a=$rows['ID'];
                                    $b=$rows['Fname'];
                                    $c=$rows['Lname'];
                                    $d=$rows['Status'];
                                    $e=$rows['DOB'];
                                    $f=$rows['Gender'];
                                    $g=$rows['Rating'];
                                    $h=$rows['Email'];
                                    $i=$rows['ContactNo'];
                                    $j=$rows['Company_Id'];


                                    

                                    ?>
                                    <tr>
                                        <th><?php echo $id++ ?> </th>
                                        <th><?php echo $b ?></th>
                                        <th><?php echo $c ?></th>
                                        <th><?php echo $d ?></th>
                                        <th><?php echo $e ?></th>
                                        <th><?php echo $f ?></th>
                                        <th><?php echo $g ?></th>
                                        <th><?php echo $h ?></th>
                                        <th><?php echo $i ?></th>
                                        <th><?php echo $j ?></th>



                                        <th>
                                            <a href="<?php echo SITEURL; ?>admin/update-guide.php?id=<?php echo $a; ?>" class="btn-secondary">Update Guide</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-guide.php?id=<?php echo $a; ?>" class="btn-danger">Delete Guide</a>

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
