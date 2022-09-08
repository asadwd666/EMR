<?php

	require "functions.php";
	define('gorun',true);
	check_login();
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Profile</title>
	
	<style>
		.image{
			width:100%;
            height:100vh;
            background:linear-gradient(rgba(0, 0, 0, 0.25), rgba(0, 0, 0, 0.25)),  url(img/image.jpg);
            background-size:cover;
            background-position:center;
		}
		 .websitehome{
        display: none;
    }
	
	.btn {
  width: 90px;
  background-color: salmon;
  border: none;
  outline: none;
  height: 49px;
  border-radius: .3rem;
  /* display: block; */
  color: #fff;
  text-transform: uppercase;
  font-weight: 600;
  margin: 10px 0;
  cursor: pointer;
  transition: 0.5s;
}



.btn:hover {
  background-color: white;
  color:salmon;
  box-shadow: 10px 5px salmon;
  border:1px solid salmon;
}
.containerabc{
	min-height:90vh;
	max-height:auto;
}
.footer{
	height:10vh;
}

	</style>
</head>
<body>


<div class="containerabc">



	
	<?php if(check_verified())
		
		{
			
			?>
			<hr>
			<?php
			include ('home.php');
			?>
			<hr>
			
			<!-- <div class="image" ></div> -->
			<?php
			
			
		}?>
		

		
		
		<br><br>
		<?php if(!check_verified()):
			?>
<?=$_SESSION['USER']->username;?> please Verify Your Email<br><br>
			<a href="verify.php">

				<button class="btn">Verify Profile</button>
			</a>
		<?php endif;?>
	


</div>
<div class="footer">
<!-- <?php
// include ('footer.html');
?> -->
</div>

</body>
</html>



<?php
error_reporting(0);
if($_REQUEST['ptype']=='med_record'){


include('med.php');
 
	  

}
if($_REQUEST['ptype']=='medrecord'){


	include('myrecord.php');
	 

		  
	}
	if($_REQUEST['ptype']=='about'){


		include('about.php');
		 
			  
		}

	if($_REQUEST['ptype']=='medication_record'){


		include('medication_record.php');
		 
			  
		}
	if($_REQUEST['ptype']=='surg-check'){


	include('surg-check.php');
	 
		  
	}

error_reporting(0);
if($_REQUEST['ptype']=='record'){


include('Mymedicalrecord.php');
 
	  
}
if($_REQUEST['ptype']=='notification'){


	include('notification.php');
	 
		  
	}
elseif($_REQUEST['ptype']=='surg_record'){


	include('surgery.php');
	 
		  
	}
	
	elseif($_REQUEST['ptype']=='socialrecord_check'){


		include('socialrecord_check.php');
		 
			  
		}
		elseif($_REQUEST['ptype']=='check_immunisation'){


			include('check_immunisation.php');
			 
				  
			}
		
		
		elseif($_REQUEST['ptype']=='family_history_check'){


			include('family_history_check.php');
			 
				  
			}

		

		elseif($_REQUEST['ptype']=='resubmit_social'){


			include('resubmit_social.php');
			 
				  
			}

	elseif($_REQUEST['ptype']=='resubmit-medication'){


		include('resubmit-medication.php');
		 
			  
		}

elseif($_REQUEST['ptype']=='medication'){


include('medication.php');

  
}
elseif($_REQUEST['ptype']=='social_History'){


include('social-History.php');

  
}
elseif($_REQUEST['ptype']=='family_History'){


	include('family-History.php');
	
	  
	}
	elseif($_REQUEST['ptype']=='check_clinical'){


		include('check_clinical.php');
		
		  
		}

elseif($_REQUEST['ptype']=='immunisation'){


include('immunisation.php');

  
}
elseif($_REQUEST['ptype']=='check_miscellaneous'){


	include('check_miscellaneous.php');
	
	  
	}

elseif($_REQUEST['ptype']=='resubmit_clinical'){


	include('resubmit_clinical.php');
	
	  
	}
elseif($_REQUEST['ptype']=='clinic'){


include('clinic.php');

  
}
elseif($_REQUEST['ptype']=='resubmit_miscellaneous'){


	include('resubmit_miscellaneous.php');
	
	  
	}

elseif($_REQUEST['ptype']=='additional'){


include('additional.php');

  
}
elseif($_REQUEST['ptype']=='surg-new'){


	include('new_surg.php');
	
	  
	}



elseif($_REQUEST['ptype']=='med_additional'){


	include('med_additional.php');
	
	  
	}
	

	elseif($_REQUEST['ptype']=='home'){


		include('home.php');
		
		  
		}
	



?>




















?>
