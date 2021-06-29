<?php include('partial/menu.php'); ?>

        <div class="main-content"> 
            <div class="wrapper">
                <h1>Manage Emergency Contacts</h1>
                <br />

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
                <br /><br />

                <a href="add-emergency.php" class="btn-primary">Add Emergency Contact</a>

                <br /><br />


                <table class="tbl-full">
                    <tr>
                        <th>Number</th>
                        <th>Name</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                        $sql="SELECT * FROM emergency_contacts";

                        $res=mysqli_query($conn, $sql);

                        if ($res==TRUE) {
                            $count=mysqli_num_rows($res);

                            if ($count>0)
                            {
                                while ($rows=mysqli_fetch_assoc($res))
                                {
                                    $a=$rows['Number'];
                                    $b=$rows['Name'];
                                    $c=$rows['Description'];
                                    ?>
                                    <tr>
                                        <th><?php echo $a ?> </th>
                                        <th><?php echo $b ?></th>
                                        <th><?php echo $c ?></th>
                                        <th>
                                            <a href="<?php echo SITEURL; ?>admin/update-emergency.php?id=<?php echo $a; ?>" class="btn-secondary">Update Contact</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-emergency.php?id=<?php echo $a; ?>" class="btn-danger">Delete Contact</a>

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
