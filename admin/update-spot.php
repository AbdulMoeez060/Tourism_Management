<?php include('partial/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Tourist Spots</h1>
		
        <br><br>

        <?php 
        
            $id=$_GET['id'];
			
            $sql="SELECT * FROM tourist_spots WHERE ID=$id";
			
            $res= mysqli_query($conn, $sql);
			
            if($res==true)
            {
                
                $count = mysqli_num_rows($res);
                
               if($count==1)
                {
                    $rows=mysqli_fetch_assoc($res);
					
					$Name= $rows['Name'];
					$Location=$rows['Location'];
					$FoundingDate=$rows['FoundingDate'];
					$Timings=$rows['Timings'];
					$EntryPrice=$rows['EntryPrice'];
					$Description=$rows['Description'];
					$RushHours=$rows['RushHours'];                                   
					$Rating=$rows['Rating'];
					$Type=$rows['Type'];
					$City_Id=$rows['City_Id'];
                }
                else
                {
                    
                    header('location:'.SITEURL.'admin/manage-spot.php');
                }
            }
        
        ?>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>Name: </td>
                    <td>
                        <input type="text" name="Name" value="<?php echo $Name; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Location: </td>
                    <td>
                        <input type="text" name="Location" value="<?php echo $Location; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>FoundingDate: </td>
                    <td>
                        <input type="text" name="FoundingDate" value="<?php echo $FoundingDate; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Timings: </td>
                    <td>
                        <input type="text" name="Timings" value="<?php echo $Timings; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>EntryPrice: </td>
                    <td>
                        <input type="text" name="EntryPrice" value="<?php echo $EntryPrice; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Description: </td>
                    <td>
                        <input type="text" name="Description" value="<?php echo $Description; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>RushHours: </td>
                    <td>
                        <input type="text" name="RushHours" value="<?php echo $RushHours; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Rating: </td>
                    <td>
                        <input type="text" name="Rating" value="<?php echo $Rating; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Type: </td>
                    <td>
                        <input type="text" name="Type" value="<?php echo $Type; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>City ID: </td>
                    <td>
                        <input type="text" name="City_Id" value="<?php echo $City_Id; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Tourist Spots" class="btn-secondary"> 
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>

<?php 

    
    if(isset($_POST['submit']))
    {
        
        $id = $_POST['id'];
        $Name = $_POST['Name'];
        $Location = $_POST['Location'];
		$FoundingDate = $_POST['FoundingDate'];
		$Timings = $_POST['Timings'];
		$EntryPrice = $_POST['EntryPrice'];
		$Description = $_POST['Description'];
		$RushHours = $_POST['RushHours'];
		$Rating = $_POST['Rating'];
		$Type = $_POST['Type'];
		$City_Id = $_POST['City_Id'];
		
        $sql = "UPDATE tourist_spots SET
        Name = '$Name',
        Location = '$Location',
		FoundingDate = '$FoundingDate',
		Timings = '$Timings',
		EntryPrice = '$EntryPrice',
		Description = '$Description',
		RushHours = '$RushHours',
		Rating = '$Rating',
		Type = '$Type',
		City_Id = '$City_Id'
        WHERE ID='$id'
        ";

        
        $res = mysqli_query($conn, $sql);

        
        if($res==true)
        {
            
            $_SESSION['update'] = "<div class='success'>Tourist Spots Updated Successfully.</div>";
            
            header('location:'.SITEURL.'admin/manage-spot.php');
        }
        else
        {
            
            $_SESSION['update'] = "<div class='error'>Failed to Update Tourist Spots.</div>";
            
            header('location:'.SITEURL.'admin/manage-spot.php');
        }
    }

?>


<?php include('partial/footer.php'); ?>