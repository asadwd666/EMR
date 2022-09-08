


<html>
<head>
    <style>
      /* .navbar-links li{
        margin-top:1rem;
      } */
        .container{
            margin-top:30px;
        }
        #btn{
          background-color:salmon;
          color:white;
        }
        .navbar h3{
          color:salmon;
        }
        .message{
            float:left;
           
            
            color:white;
           
            width:40%;
            height:30px;
        }
        span{
            color:blue;
            font-style:italic;
            float:top;
        }
    </style>
    <meta charset="UTF-8">
    <meta name="description" content="">
    
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">    
    <title>ADDING DOCTORS</title> 
  
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Poppins" />
</head>
<body class="bg-gray">      

    <!-- ##### Newsletter Area Start ###### -->
    <section style="margin-top: 20px;">
         <div class="container">
    <div class="row">
        <div class="col-md-4"></div>
          <div class="col-md-4">
               <p><?php echo $msg; ?></p>

                   <div class="admin-box-login">
    <h5 style="margin-top: 20px; text-align: center;"><strong>ADDING DOCTORS</strong></h5><br>
<form class="text-center border border-light p-4" action="#" method="post">
  <input type="text" name="userid" id="username" class="form-control mb-4" placeholder="Doctor_id"><br>
  <input type="password" name="password" id="typepass2" class="form-control mb-4" placeholder=" password..."> <br> 
    <button class="btn " id="btn" name="submit" type="submit">ADD</button><br>

  
</form>
<br><br>
       </div>
         </div>

          <div class="col-md-4"></div>
    </div>  
       
   </div> 
      </section>    

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <div class="container">
   <div class="table-responsive">
    <?php
        $query = "SELECT * FROM doctors ";
        $query_run = mysqli_query($conn, $query);
    ?>
    <hr>
    <h2>DOCTORS</h2>
    <hr><br>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> Doctor id </th>
              <th> Password </th>
              
           
              
              <th>DELETE</th>
          </tr>
        </thead>
        <tbody>
        <?php
        if(mysqli_num_rows($query_run) > 0)        
        {
            while($row = mysqli_fetch_assoc($query_run))
            {
               ?>
          <tr>
            <td><?php  echo $row['userid']; ?></td>
            <td><?php  echo $row['password']; ?></td>
            
           
         
            <td>
                <form action="delete_doctor.php" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger" onClick="return sure()"> DELETE</button>
                </form>
            </td>
          
          </tr>
          <?php
            } 
        }
        else {
            echo "No Record Found";
        }
        ?>
        </tbody>
      </table>
    </div>
    </div>



</body>
    </html>

    <?php
session_start();
 include('..db_connection/connection.php');

if(isset($_POST['submit'])){
    $id=$_POST['userid'];
    $pass=$_POST['password'];
    
    if(!empty($id) || !empty($pass)){
  
      $check=mysqli_query($conn,"select * from doctors where userid='".$id."' ");
      $fetch=mysqli_fetch_array($check);
      $count=mysqli_num_rows($check);
      if($count>=1){
        // echo "<div class='message'><span>User Exist</span></div>";
        echo '<script>alert("User Exist");
        window.location="index.php?ptype=doctors";</script>';
         
          
      }
      else{
    
    
    
    $query=mysqli_query($conn,"INSERT INTO doctors(userid,password) VALUES('$id','$pass')");
    if($query)
    {
      
      echo '<script>alert("successfully added");

      window.location="index.php?ptype=doctors";</script>';     
    }
  }
  
    
}

else{
      echo '<script>alert("Please fill in the field");
    window.location="index.php?ptype=doctors";</script>';
}
}
?>
<script>
  function sure(){
	if(confirm("Are you really wants to remove this user?")){
		return true;
	}else{
		return false;
	}
  }
</script>
