<?php include('partial/menu.php'); ?>



        <div class="main-content"> 
            <div class="wrapper">
                <h1>Dashboard</h1>

                <div class="col-4 text-center">
                    <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM admin";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count; ?></h1>
                    <br />
                    Admin
                </div>

                <div class="col-4 text-center">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM city";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count1 = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count1; ?></h1>
                    <br />
                    City
                </div>


                <div class="col-4 text-center">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM tourist_company";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count2 = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count2; ?></h1>
                    <br />
                    Company
                </div>

                <div class="col-4 text-center">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM tourist_spots";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count3 = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count3; ?></h1>
                    <br />
                    Tourist Spots
                </div>

                <div class="col-4 text-center">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM guides";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count4 = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count4; ?></h1>
                    <br />
                    Guides
                </div>

                <div class="col-4 text-center">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM hotels";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count5 = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count5; ?></h1>
                    <br />
                    Hotels
                </div>

                <div class="col-4 text-center">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM food_vendors";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count6 = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count6; ?></h1>
                    <br />
                    Food Vendors
                </div>

                <div class="col-4 text-center">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM packages";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count7 = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count7; ?></h1>
                    <br />
                    Packages
                </div>

                <div class="col-4 text-center">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM tourist";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count8 = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count8; ?></h1>
                    <br />
                    Tourists
                </div>

                <div class="col-4 text-center">
                <?php 
                        //Sql Query 
                        $sql = "SELECT * FROM emergency_contacts";
                        //Execute Query
                        $res = mysqli_query($conn, $sql);
                        //Count Rows
                        $count9 = mysqli_num_rows($res);
                    ?>
                    <h1><?php echo $count9; ?></h1>
                    <br />
                    Emergency Contacts
                </div>

                <div class="clearfix"></div>


            </div>
        </div>


<?php include('partial/footer.php'); ?>
