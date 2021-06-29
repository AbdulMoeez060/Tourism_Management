<?php include('partial/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Vendors</h1>
		
        <br><br>

        <?php 
        
            $id=$_GET['id'];
			
            $sql="SELECT * FROM food_vendors WHERE ID=$id";
			
            $res= mysqli_query($conn, $sql);
			
            if($res==true)
            {
                
                $count = mysqli_num_rows($res);
                
               if($count==1)
                {
                    $rows=mysqli_fetch_assoc($res);
					
					$Name=$rows['Name'];
					$ContactNO=$rows['ContactNO'];
					$Location=$rows['Location'];
					$Rating=$rows['Rating'];
					$Website=$rows['Website'];
					$Pricing=$rows['Pricing'];
					$Spot_Id=$rows['Spot_Id'];
					
                }
                else
                {
                    
                    header('location:'.SITEURL.'admin/manage-vendor.php');
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
                    <td>ContactNo: </td>
                    <td>
                        <input type="text" name="ContactNO" value="<?php echo $ContactNO; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Location: </td>
                    <td>
                        <input type="text" name="Location" value="<?php echo $Location; ?>">
                    </td>
                </tr>
				
                <tr>
                    <td>Rating: </td>
                    <td>
                        <input type="text" name="Rating" value="<?php echo $Rating; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Website: </td>
                    <td>
                        <input type="text" name="Website" value="<?php echo $Website; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Pricing: </td>
                    <td>
                        <input type="text" name="Pricing" value="<?php echo $Pricing; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Spot_Id: </td>
                    <td>
                        <input type="text" name="Spot_Id" value="<?php echo $Spot_Id; ?>">
                    </td>
                </tr>
				
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Vendors" class="btn-secondary"> 
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
		$Name=$_POST['Name'];
		$ContactNO=$_POST['ContactNO'];
		$Location=$_POST['Location'];
		$Rating=$_POST['Rating'];
		$Website=$_POST['Website'];
		$Pricing=$_POST['Pricing'];
		$Spot_Id=$_POST['Spot_Id'];
		
        $sql = "UPDATE food_vendors SET
        Name = '$Name',
		ContactNo = '$ContactNo',
		Location = '$Location',
        Rating = '$Rating',
		Website = '$Website',
		Pricing = '$Pricing',
		Spot_Id = '$Spot_Id'
        WHERE ID='$id'
        ";

        
        $res = mysqli_query($conn, $sql);

        
        if($res==true)
        {
            
            $_SESSION['update'] = "<div class='success'>Food Vendors Updated Successfully.</div>";
            
            header('location:'.SITEURL.'admin/manage-vendor.php');
        }
        else
        {
            
            $_SESSION['update'] = "<div class='error'>Failed to Update Food Vendors.</div>";
            
           header('location:'.SITEURL.'admin/manage-vendor.php');
        }
    }

?>


<?php include('partial/footer.php'); ?>