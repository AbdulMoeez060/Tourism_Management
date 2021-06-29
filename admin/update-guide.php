<?php include('partial/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Guides</h1>
		
        <br><br>

        <?php 
        
            $id=$_GET['id'];
			
            $sql="SELECT * FROM guides WHERE ID=$id";
			
            $res= mysqli_query($conn, $sql);
			
            if($res==true)
            {
                
                $count = mysqli_num_rows($res);
                
               if($count==1)
                {
                    $rows=mysqli_fetch_assoc($res);
					
					$Fname= $rows['Fname'];
					$Lname=$rows['Lname'];
					$Status=$rows['Status'];
					$DOB=$rows['DOB'];
					$Gender=$rows['Gender'];
					$Rating=$rows['Rating'];
					$Email=$rows['Email'];                                   
					$ContactNo=$rows['ContactNo'];
					$Company_Id=$rows['Company_Id'];
					
                }
                else
                {
                    
                    header('location:'.SITEURL.'admin/manage-guide.php');
                }
            }
        
        ?>


        <form action="" method="POST">

            <table class="tbl-30">
                <tr>
                    <td>First Name: </td>
                    <td>
                        <input type="text" name="Fname" value="<?php echo $Fname; ?>">
                    </td>
                </tr>

                <tr>
                    <td>Last Name: </td>
                    <td>
                        <input type="text" name="Lname" value="<?php echo $Lname; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Status: </td>
                    <td>
                        <input type="text" name="Status" value="<?php echo $Status; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>DOB: </td>
                    <td>
                        <input type="text" name="DOB" value="<?php echo $DOB; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Gender: </td>
                    <td>
                        <input type="text" name="Gender" value="<?php echo $Gender; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Rating: </td>
                    <td>
                        <input type="text" name="Rating" value="<?php echo $Rating; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Email: </td>
                    <td>
                        <input type="text" name="Email" value="<?php echo $Email; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>ContactNo: </td>
                    <td>
                        <input type="text" name="ContactNo" value="<?php echo $ContactNo; ?>">
                    </td>
                </tr>
				
				
				<tr>
                    <td>Company_Id: </td>
                    <td>
                        <input type="text" name="Company_Id" value="<?php echo $Company_Id; ?>">
                    </td>
                </tr>

                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Guides" class="btn-secondary"> 
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
		$Fname= $_POST['Fname'];
		$Lname=$_POST['Lname'];
		$Status=$_POST['Status'];
		$DOB=$_POST['DOB'];
		$Gender=$_POST['Gender'];
		$Rating=$_POST['Rating'];
		$Email=$_POST['Email'];                                   
		$ContactNo=$_POST['ContactNo'];
		$Company_Id=$_POST['Company_Id'];
		
        $sql = "UPDATE guides SET
        Fname = '$Fname',
        Lname = '$Lname',
		Status = '$Status',
		DOB = '$DOB',
		Gender = '$Gender',
		Rating = '$Rating',
		Email = '$Email',
		ContactNo = '$ContactNo',
		Company_Id = '$Company_Id'
        WHERE ID='$id'
        ";

        
        $res = mysqli_query($conn, $sql);

        
        if($res==true)
        {
            
            $_SESSION['update'] = "<div class='success'>Guides Updated Successfully.</div>";
            
            header('location:'.SITEURL.'admin/manage-guide.php');
        }
        else
        {
            
            $_SESSION['update'] = "<div class='error'>Failed to Update Guides.</div>";
            
           header('location:'.SITEURL.'admin/manage-guide.php');
        }
    }

?>


<?php include('partial/footer.php'); ?>