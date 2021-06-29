<?php include('partial/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Tourist Company</h1>
		
        <br><br>

        <?php 
        
            $id=$_GET['id'];
			
            $sql="SELECT * FROM tourist_company WHERE id=$id";
			
            $res= mysqli_query($conn, $sql);
			
            if($res==true)
            {
                
                $count = mysqli_num_rows($res);
                
               if($count==1)
                {
                    $row=mysqli_fetch_assoc($res);
					
                    $Name= $row['Name'];
                    $Address = $row['Address'];
					$Rating = $row['Rating'];
					$Email = $row['Email'];
					$Website = $row['Website'];
					$ContactNo = $row['ContactNo'];
                }
                else
                {
                    
                    header('location:'.SITEURL.'admin/manage-company.php');
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
                    <td>Address: </td>
                    <td>
                        <input type="text" name="Address" value="<?php echo $Address; ?>">
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
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Tourist Company" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>

<?php 

    
    if(isset($_POST['submit']))
    {
        
        $ID = $_POrST['id'];
        $Name = $_POST['Name'];
        $Address = $_POST['Address'];
		$Rating = $_POST['Rating'];
		$Email = $_POST['Email'];
		$Website = $_POST['Website'];
		$ContactNo = $_POST['ContactNo'];

        
        $sql = "UPDATE tourist_company SET
        Name = '$Name',
        Address = '$Address',
		Rating = '$Rating',
		Email = '$Email',
		Website = '$Website',
		ContactNo = '$ContactNo'
        WHERE id='$id'
        ";

        
        $res = mysqli_query($conn, $sql);

        
        if($res==true)
        {
            
            $_SESSION['update'] = "<div class='success'>Tourist Company Updated Successfully.</div>";
            
            header('location:'.SITEURL.'admin/manage-company.php');
        }
        else
        {
            
            $_SESSION['update'] = "<div class='error'>Failed to Update Tourist Company.</div>";
            
            header('location:'.SITEURL.'admin/manage-company.php');
        }
    }

?>


<?php include('partial/footer.php'); ?>