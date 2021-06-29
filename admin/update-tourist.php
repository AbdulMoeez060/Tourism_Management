<?php include('partial/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Tourist</h1>
		
        <br><br>

        <?php 
        
            $id=$_GET['id'];
			
            $sql="SELECT * FROM tourist WHERE ID=$id";
			
            $res= mysqli_query($conn, $sql);
			
            if($res==true)
            {
                
                $count = mysqli_num_rows($res);
                
               if($count==1)
                {
                    $rows=mysqli_fetch_assoc($res);
					
					$Name=$rows['Name'];
					$Email=$rows['Email'];
					$Password=$rows['Password'];
					$ContactNo=$rows['ContactNo'];
					$Country=$rows['Country'];
					$Package_ID=$rows['Package_ID'];
					
                }
                else
                {
                    
                    header('location:'.SITEURL.'admin/manage-tourist.php');
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
                    <td>Email: </td>
                    <td>
                        <input type="text" name="Email" value="<?php echo $Email; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Password: </td>
                    <td>
                        <input type="text" name="Password" value="<?php echo $Password; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>ContactNo: </td>
                    <td>
                        <input type="text" name="ContactNo" value="<?php echo $ContactNo; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Country: </td>
                    <td>
                        <input type="text" name="Country" value="<?php echo $Country; ?>">
                    </td>
                </tr>
				
				
				
				<tr>
                    <td>Package_ID: </td>
                    <td>
                        <input type="text" name="Package_ID" value="<?php echo $Package_ID; ?>">
                    </td>
                </tr>
				
				
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Tourist" class="btn-secondary"> 
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
		$Email=$_POST['Email'];
		$Password=$_POST['Password'];
		$ContactNo=$_POST['ContactNo'];
		$Country=$_POST['Country'];
		$Package_ID=$_POST['Package_ID'];
		
        $sql = "UPDATE tourist SET
        Name = '$Name',
        Email = '$Email',
		Password = '$Password',
		ContactNo = '$ContactNo',
		Country = '$Country',
		Package_ID = '$Package_ID'
        WHERE ID='$id'
        ";

        
        $res = mysqli_query($conn, $sql);

        
        if($res==true)
        {
            
            $_SESSION['update'] = "<div class='success'>Tourist Updated Successfully.</div>";
            
            header('location:'.SITEURL.'admin/manage-tourist.php');
        }
        else
        {
            
            $_SESSION['update'] = "<div class='error'>Failed to Update Tourist.</div>";
            
           header('location:'.SITEURL.'admin/manage-tourist.php');
        }
    }

?>


<?php include('partial/footer.php'); ?>