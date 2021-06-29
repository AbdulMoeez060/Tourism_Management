<?php include('partial/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update Emergency Contacts</h1>
		
        <br><br>

        <?php 
        
            $id=$_GET['id'];
			
            $sql="SELECT * FROM emergency_contacts WHERE Number=$id";
			
            $res= mysqli_query($conn, $sql);
			
            if($res==true)
            {
                
                $count = mysqli_num_rows($res);
                
               if($count==1)
                {
                    $rows=mysqli_fetch_assoc($res);
					
					$Name=$rows['Name'];
					$Description=$rows['Description'];
					
                }
                else
                {
                    
                    header('location:'.SITEURL.'admin/manage-emergency.php');
                }
            }
        
        ?>


        <form action="" method="POST">

            <table class="tbl-30">
			
				<tr>
                    <td>Number: </td>
                    <td>
                        <input type="text" name="Number" value="<?php ?>">
                    </td>
                </tr>
			
                <tr>
                    <td>Name: </td>
                    <td>
                        <input type="text" name="Name" value="<?php echo $Name; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>Description: </td>
                    <td>
                        <input type="text" name="Description" value="<?php echo $Description; ?>">
                    </td>
                </tr>
				
                <tr>
                    <td colspan="2">
                        <input type="hidden" name="id" value="<?php echo $id; ?>">
                        <input type="submit" name="submit" value="Update Emergency Contacts" class="btn-secondary"> 
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
		$Number=$_POST['Number'];
		$Name=$_POST['Name'];
		$Description=$_POST['Description'];
		
        $sql = "UPDATE emergency_contacts SET
		Number = '$Number',
        Name = '$Name',
		Description = '$Description'
        WHERE Number='$id'
        ";

        
        $res = mysqli_query($conn, $sql);

        
        if($res==true)
        {
            
            $_SESSION['update'] = "<div class='success'>Emergency Contacts Updated Successfully.</div>";
            
            header('location:'.SITEURL.'admin/manage-emergency.php');
        }
        else
        {
            
            $_SESSION['update'] = "<div class='error'>Failed to Update Emergency Contacts.</div>";
            
           header('location:'.SITEURL.'admin/manage-emergency.php');
        }
    }

?>


<?php include('partial/footer.php'); ?>