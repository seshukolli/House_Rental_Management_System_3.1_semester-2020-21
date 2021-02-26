<?php
include_once 'dbh.php';
$district=$_POST['district'];
$area=$_POST['area'];
$type=$_POST['type'];
$price=$_POST['price'];
$furnitured=$_POST['furnitured'];
$tenantspreferred=$_POST['tenants'];
$address=$_POST['address'];
$phone=$_POST['phone'];



$price2=$price+10000;

        $sql="select * from details where price between '$price' and '$price2' and district='$district' and area='$area' and type='$type' and furnitured='$furnitured' and tenantsprefered='$tenantspreferred'" ;
      
        
        $query = mysqli_query($conn, $sql);
       if(mysqli_num_rows($query)==0)
    {
    echo 'failed';
    }
while($row =  mysqli_fetch_array($query)) {?>
    <!DOCTYPE HTML>
    <html>
        <body>
        <center>
        <?php echo $row['district'];
        echo "<br>";
        echo $row['area'];
        echo "<br>";
        echo $row['type'];
        echo "<br>";
        echo $row['price'];
        echo "<br>";
        echo $row['furnitured'];
        echo "<br>";
        echo $row['tenantsprefered'];
        echo "<br>"; 
        echo $row['address'];
        echo "<br>";
        echo $row['phone'];
        echo "<br>";?>
        <!-- <button  type="submit"  value=" not intrested" class="button">Not interested</button>
        <form method="POST" action="update.php">
            <button  type="submit"  value=" contact him" class="button">Contact owner</button> </form>-->
        </center>
    </html>
    
    
    
  <?php } ?>