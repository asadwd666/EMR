<?php
	define('gorun',true);
?>
<head>
<style>
	.image{
		display:none;
	}
	#left_bar{

		display: flex;
		
		
		background:white;
		position: absolute;
		top:4.0rem;
		
	}
	#left_bar ul{
		display:flex;
		flex-direction:column;
		padding:40px;
		/* margin-top:-2.2rem; */
		gap:2rem;
		list-style:none;
		background-color:salmon;
		box-shadow:5px 5px 10px 0 rgb(2, 0, 0, 0.3);
     
	}
	#left_bar li{
		background-color:white;
		width:80%;
		height:10vh;
		padding:10px;
		border-radius:10px;
	}
	#left_bar a{
		text-decoration:none;
		text-transform:uppercase;
		color:grey;
		

		z-index:1;
		font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
		
	}
	#left_bar a:hover{
		color:salmon;
		background-color:white;
	}

	/* .med{
		width:80%;
		height:10vh;
		color:grey;
		z-index:0;
		border-radius:20px;
		background-color:white;
		
	} */
</style>
</head>
<div id="left_bar">

		<ul>
			
			<li> <a href="profile.php?ptype=med_record" class="even"  >medical history</a></li>
			
			
			<li> <a href="profile.php?ptype=surg_record" class="odd">surgical history</a></li>
			
			<div class="med3">			
			<li> <a href="profile.php?ptype=medication" class="even">medication History</a></li>
			</div>
			<div class="med4">			
			<li> <a href="profile.php?ptype=social_History" class="odd">social History</a></li>
			</div>
			<div class="med5">
			<li> <a href="profile.php?ptype=family_History" class="even">family History</a></li>
			</div>
			<div class="med6">
			<li> <a href="profile.php?ptype=immunisation" class="odd">immunisation record</a></li>
			</div><div class="med7">
			<li> <a href="profile.php?ptype=clinic" class="even">Clinical Documents</a></li>
			</div><div class="med8">
			<li><a href="profile.php?ptype=additional" class="odd">MISCELLANEOUS</a></li>
			</div>
		</ul>
		


      






	</div>


	




  