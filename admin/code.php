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

    echo $id;


    $query = "DELETE FROM `medical_record` WHERE patient_id='$id'";
    $query_run = mysqli_query($conn, $query);

    $query2 = "DELETE FROM `surgical_history`WHERE patient_id='$id'";
    $query_run2 = mysqli_query($conn, $query2);

    $query3 = "DELETE FROM `medication` WHERE patient_id='$id'";
    $query_run3 = mysqli_query($conn, $query3);

    $query5 = "DELETE FROM `social_history` WHERE patient_id='$id'";
    $query_run5 = mysqli_query($conn, $query5);

    $query6 = "DELETE FROM `social_history` WHERE patient_id='$id'";
    $query_run6 = mysqli_query($conn, $query6);

    $query7 = "DELETE FROM `family_history` WHERE patient_id='$id'";
    $query_run7 = mysqli_query($conn, $query7);

    $query8 = "DELETE FROM `immunisation` WHERE patient_id='$id'";
    $query_run8 = mysqli_query($conn, $query8);

    $query9 = "DELETE FROM `clinical_report` WHERE patient_id='$id'";
    $query_run9 = mysqli_query($conn, $query9);

    $query10 = "DELETE FROM `miscellaneous` WHERE patient_id='$id'";
    $query_run10 = mysqli_query($conn, $query10);



    $query4 = "DELETE FROM `users`  WHERE id='$id'";
    $query_run4 = mysqli_query($conn, $query4);



    if($query_run4)
    {
        $_SESSION['status'] = "Your Data is Deleted";
        $_SESSION['status_code'] = "success";
        echo '<script>alert("successfully deleted")</script>';
        header('Location: index.php?ptype=patients'); 
    }
       
}
?>