
<?php
     include('../db_connection/connection.php');
?>
<head>
  <style>
    .btn-danger{
      background-color:salmon;
      color:white;
    }
    .btn-danger:hover{
      color:salmon;
      background-color:white;
    }
    .container{
      margin-top:4rem;
    }
  </style>
   
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>
<!-- <link rel="stylesheet" href="style.css" class="css"> -->

	<link href="https://fonts.googleapis.com/css2?family=Poppins" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a076d05399.js">



  </script>
</head>
<div class="container">
   <div class="table-responsive">
    <?php
        $query = "SELECT * FROM users ";
        $query_run = mysqli_query($conn, $query);
    ?>
    <hr>
    <h2>PATIENTS</h2>
    <hr><br>
      <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
        <thead>
          <tr>
              <th> ID </th>
              <th> Username </th>
              <th>Email </th>
           
              
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
            <td><?php  echo $row['id']; 
            $_SESSION['$id']=$row['id'];?></td>
            <td><?php  echo $row['username']; ?></td>
            <td><?php  echo $row['email']; ?></td>
           
         
            <td>
                <form action="index.php?ptype=confirm_admin" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo $row['id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger"  onClick="return sure()"> DELETE</button>
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
  <script>
    function sure(){
	if(confirm("Are you sure you want to delete this patient record? You will not be able to retrieve the lost data")){
		return true;
  
    
	}else{
		return false;
	}
}

  </script>
    
   
