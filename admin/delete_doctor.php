<?php
include('../db_connection/connection.php');


if(isset($_POST['delete_btn']))
{
    $id = $_POST['delete_id'];


    $query = "DELETE FROM doctors WHERE id='$id' ";
    $query_run = mysqli_query($conn, $query);

    if($query_run)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        echo '<script>alert("successfully deleted")</script>';
        header('Location: index.php?ptype=doctors'); 
    }
    else
    {
        $_SESSION['status'] = "Your Data is NOT DELETED";       
        $_SESSION['status_code'] = "error";
        header('Location: index.php?ptype=doctors'); 
    }    
}
?>