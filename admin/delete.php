<?php
session_start();
?>
<head>
    <style>
        #container{
            margin-top:80px;
        }
        p{
            font-style:italic;
            color:blue;
        }
        .btn-danger{
            background-color:salmon;
        }
    </style>
</head>
<div id="container">
<form action="#" method="post">
                  <input type="hidden" name="delete_id" value="<?php echo  $_SESSION['$id']; ?>">
                  <button type="submit" name="delete_btn" class="btn btn-danger" > DELETE THE  RECORD</button>
                </form>
                <p>Once You deleted the patient record. it cant be recover</p>
</div>





<?php
include('../db_connection/connection.php');


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];
    


    $query = "DELETE * FROM users WHERE id='$id'";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        echo '<script>alert("successfully deleted")</script>';
        header('Location: index.php?ptype=patients'); 
    }
       
}
?>

