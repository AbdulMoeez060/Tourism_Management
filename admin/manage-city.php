<?php include('partial/menu.php'); ?>

        <div class="main-content"> 
            <div class="wrapper">
                <h1>Manage City</h1>
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
                <br /><br /><br />

                <a href="add-city.php" class="btn-primary">Add City</a>

                <br /><br />


                <table class="tbl-full">
                    <tr>
                        <th>Sr no.</th>
                        <th>Name</th>
                        <th>Province</th>
                        <th>Has Airport</th>
                        <th>Description</th>
                        <th>Actions</th>
                    </tr>
                    <?php
                        $sql="SELECT * FROM city";

                        $res=mysqli_query($conn, $sql);

                        if ($res==TRUE) {
                            $count=mysqli_num_rows($res);

                            if ($count>0)
                            {
                                while ($rows=mysqli_fetch_assoc($res))
                                {
                                    $a=$rows['ID'];
                                    $b=$rows['Name'];
                                    $c=$rows['Province'];
                                    $d=$rows['HasAirpot'];
                                    $e=$rows['Description'];

                                    ?>
                                    <tr>
                                        <th><?php echo $a ?> </th>
                                        <th><?php echo $b ?></th>
                                        <th><?php echo $c ?></th>
                                        <th><?php echo $d ?></th>
                                        <th><?php echo $e ?></th>

                                        <th>
                                            <a href="<?php echo SITEURL; ?>admin/update-city.php?id=<?php echo $a; ?>" class="btn-secondary">Update City</a>
                                            <a href="<?php echo SITEURL; ?>admin/delete-city.php?id=<?php echo $a; ?>" class="btn-danger">Delete City</a>

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
