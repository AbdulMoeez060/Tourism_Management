<?php include('partial/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">
        <h1>Update City</h1>
		
        <br><br>

        <?php 
        
            $id=$_GET['id'];
			
            $sql="SELECT * FROM city WHERE id=$id";
			
            $res= mysqli_query($conn, $sql);
			
            if($res==true)
            {
                
                $count = mysqli_num_rows($res);
                
               if($count==1)
                {
                    $row=mysqli_fetch_assoc($res);
					
                    $Name= $row['Name'];
                    $Province = $row['Province'];
					$HasAirpot = $row['HasAirpot'];
					$Description = $row['Description'];
                }
                else
                {
                    
                    header('location:'.SITEURL.'admin/manage-city.php');
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
                    <td>Province: </td>
                    <td>
                        <input type="text" name="Province" value="<?php echo $Province; ?>">
                    </td>
                </tr>
				
				<tr>
                    <td>HasAirpot: </td>
                    <td>
                        <input type="text" name="HasAirpot" value="<?php echo $HasAirpot; ?>">
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
                        <input type="submit" name="submit" value="Update city" class="btn-secondary">
                    </td>
                </tr>

            </table>

        </form>
    </div>
</div>

<?php 

    
    if(isset($_POST['submit']))
    {
        
        $ID = $_POST['id'];
        $Name = $_POST['Name'];
        $Province = $_POST['Province'];
		$HasAirpot = $_POST['HasAirpot'];
		$Description = $_POST['Description'];

        
        $sql = "UPDATE city SET
        Name = '$Name',
        Province = '$Province',
		HasAirpot = '$HasAirpot',
		Description = '$Description'
        WHERE id='$id'
        ";

        
        $res = mysqli_query($conn, $sql);

        
        if($res==true)
        {
            
            $_SESSION['update'] = "<div class='success'>City Updated Successfully.</div>";
            
            header('location:'.SITEURL.'admin/manage-city.php');
        }
        else
        {
            
            $_SESSION['update'] = "<div class='error'>Failed to Update City.</div>";
            
            header('location:'.SITEURL.'admin/manage-city.php');
        }
    }

?>


<?php include('partial/footer.php'); ?>