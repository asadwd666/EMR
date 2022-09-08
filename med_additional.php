<?php

session_start();

include "db_connection/connection.php";
$patient_id=$_SESSION['USER']->id;
?>
<style>

    p{
        margin:280px;
        margin-top:80px;
        
    }
    .txt{
        float:left;
        margin-left:350px;
        padding:20px 10px;
        border-radius:9px;
        width:400px;
        text-align:center;
       margin-top:-190px;
       border:none;
       border-bottom:1px solid blue;
    }
    .button5{
        color:black;
        background:blue grey ;
       padding:20px 180px;
       margin-top:-130px;
       float:left;
       margin-left:350px;
       
     
    }
    .txt:focus{
       border:1px solid blue;
    }
</style>
<?php


$query=mysqli_query($conn,"select * from `tmp_table` where patient_id='$patient_id' and id=0");
if(mysqli_num_rows($query)>0)
{
    while($row=mysqli_fetch_array($query))
    {
       ?>
       
       
       <p>

       <?php echo $row['tmp_value'];
       ?>

    

 <br>
    <form action="#" method="post" name="myform">
        <input type="text" name="txt"class="txt" placeholder="Enter requested Detail Here">  <br>
         <button name="btn" class="button5">Send</button>
        

    </form>
 
 
 <?php
    }
}

if(isset($_POST['btn'])){
    $txt=$_POST['txt'];
   
    $query=mysqli_query($conn, "UPDATE `tmp_table` SET tmp_value='$txt',id=1    where patient_id='$patient_id' ");
    if($query){
       echo  "<script>alert('ok');
       window.location='profile.php?ptype=med_additional';</script>";
    }
    else{
        echo  "<script>alert('sorry');</script>";
    }
}




