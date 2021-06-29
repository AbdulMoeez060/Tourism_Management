<?php include('partial/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Hotels</h1>
		
        <br><br>

        <?php 
        
            $id=$_GET['id'];
			
            $sql="SELECT * FROM hotels WHERE ID=$id";
			
            $res= mysqli_query($conn, $sql);
			
            if($res==true)
            {
                
                $count = mysqli_num_rows($res);
                
               if($count==1)
                {
                    $rows=mysqli_fetch_assoc($res);
					
					$Name=$rows['Name'];
					$Stars=$rows['Stars'];
					$Location=$rows['Location'];
					$AverageRates=$rows['AverageRates'];
					$Website=$rows['Website'];
					$ContactNo=$rows['ContactNo'];
					$City_Id=$rows['City_Id'];
					$Spots_Id=$rows['Spots_Id'];
					
                }
                else
                {
                    
                    header('location:'.SITEURL.'admin/manage-hotel.php');
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
                    <td>Stars: </td>
                    <td>
                        <input type="text" name="Stars" value="<?php echo $Stars; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Location: </td>
                    <td>
                        <input type="text" name="Location" value="<?php echo $Location; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>AverageRates: </td>
                    <td>
                        <input type="text" name="AverageRates" value="<?php echo $AverageRates; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Website: </td>
                    <td>
                        <input type="text" name="Website" value="<?php echo $Website; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>ContactNo: </td>
                    <td>
                        <input type="text" name="ContactNo" value="<?php echo $ContactNo; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>City_Id: </td>
                    <td>
                        <input type="text" name="City_Id" value="<?php echo $City_Id; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Spots_Id: </td>
                    <td>
                        <input type="text" name="Spots_Id" value="<?php echo $Spots_Id; ?>">
                    </td>
                </tr>
				
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Hotels" class="btn-secondary"> 
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
		$Stars=$_POST['Stars'];
		$Location=$_POST['Location'];
		$AverageRates=$_POST['AverageRates'];
		$Website=$_POST['Website'];
		$ContactNo=$_POST['ContactNo'];
		$City_Id=$_POST['City_Id'];
		$Spots_Id=$_POST['Spots_Id'];
		
        $sql = "UPDATE hotels SET
        Name = '$Name',
        Stars = '$Stars',
		Location = '$Location',
		AverageRates = '$AverageRates',
		Website = '$Website',
		ContactNo = '$ContactNo',
		City_Id = '$City_Id',
		Spots_Id = '$Spots_Id'
        WHERE ID='$id'
        ";

        
        $res = mysqli_query($conn, $sql);

        
        if($res==true)
        {
            
            $_SESSION['update'] = "<div class='success'>Hotels Updated Successfully.</div>";
            
            header('location:'.SITEURL.'admin/manage-hotel.php');
        }
        else
        {
            
            $_SESSION['update'] = "<div class='error'>Failed to Update Hotels.</div>";
            
           header('location:'.SITEURL.'admin/manage-hotel.php');
        }
    }

?>


<?php include('partial/footer.php'); ?>