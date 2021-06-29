<?php include('partial/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Packages</h1>
		
        <br><br>

        <?php 
        
            $id=$_GET['id'];
			
            $sql="SELECT * FROM packages WHERE ID=$id";
			
            $res= mysqli_query($conn, $sql);
			
            if($res==true)
            {
                
                $count = mysqli_num_rows($res);
                
               if($count==1)
                {
                    $rows=mysqli_fetch_assoc($res);
					
					$Name=$rows['Name'];
					$Type=$rows['Type'];
					$Cost=$rows['Cost'];
					$StartingDate=$rows['StartingDate'];
					$EndDate=$rows['EndDate'];
					$Description=$rows['Description'];
					$Guide_ID=$rows['Guide_ID'];
					
                }
                else
                {
                    
                    header('location:'.SITEURL.'admin/manage-package.php');
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
                    <td>Type: </td>
                    <td>
                        <input type="text" name="Type" value="<?php echo $Type; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Cost: </td>
                    <td>
                        <input type="text" name="Cost" value="<?php echo $Cost; ?>">
                    </td>
                </tr>
				
                <tr>
                    <td>StartingDate: </td>
                    <td>
                        <input type="text" name="StartingDate" value="<?php echo $StartingDate; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>EndDate: </td>
                    <td>
                        <input type="text" name="EndDate" value="<?php echo $EndDate; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Description: </td>
                    <td>
                        <input type="text" name="Description" value="<?php echo $Description; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Guide_ID: </td>
                    <td>
                        <input type="text" name="Guide_ID" value="<?php echo $Guide_ID; ?>">
                    </td>
                </tr>
				
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Packages" class="btn-secondary"> 
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
		$Type=$_POST['Type'];
		$Cost=$_POST['Cost'];
		$StartingDate=$_POST['StartingDate'];
		$EndDate=$_POST['EndDate'];
		$Description=$_POST['Description'];
		$Guide_ID=$_POST['Guide_ID'];
		
        $sql = "UPDATE packages SET
        Name = '$Name',
		Type = '$Type',
		Cost = '$Cost',
        StartingDate = '$StartingDate',
		EndDate = '$EndDate',
		Description = '$Description',
		Guide_ID = '$Guide_ID'
        WHERE ID='$id'
        ";

        
        $res = mysqli_query($conn, $sql);

        
        if($res==true)
        {
            
            $_SESSION['update'] = "<div class='success'>Packages Updated Successfully.</div>";
            
            header('location:'.SITEURL.'admin/manage-package.php');
        }
        else
        {
            
            $_SESSION['update'] = "<div class='error'>Failed to Update Packages.</div>";
            
           header('location:'.SITEURL.'admin/manage-package.php');
        }
    }

?>


<?php include('partial/footer.php'); ?>