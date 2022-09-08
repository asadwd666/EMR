<?php

require ("Mymedicalrecord.php");
error_reporting(0);
if($_REQUEST['ptype']=='mymed_record'){

 
	include('Mymedicalrecord.php');
   
			  
  }

elseif($_REQUEST['ptype']=='med_record'){

 
  include('med.php');
 
			
}
elseif($_REQUEST['ptype']=='surg_record'){

 
	include('surgery.php');
   
			  
  }
  elseif($_REQUEST['ptype']=='medication'){

 
	include('medication.php');
   
			  
  }
  elseif($_REQUEST['ptype']=='social_History'){

 
	include('social-History.php');
   
			  
  }


  elseif($_REQUEST['ptype']=='immunisation'){

 
	include('immunisation.php');
   
			  
  }
  elseif($_REQUEST['ptype']=='clinic'){

 
	include('clinic.php');
   
			  
  }

  elseif($_REQUEST['ptype']=='additional'){

 
	include('additional.php');
   
			  
  }
  if($_REQUEST['ptype']=='new'){

 
    include('new_record.php');
     
          
    }
  
  elseif($_REQUEST['ptype']=='new_surg'){

 
    include('new_surg.php');
     
          
    }

    
  elseif($_REQUEST['ptype']=='new_med'){

 
    include('new_med.php');
     
          
    }
  






elseif($_REQUEST['ptype']=='new_social'){

 
include('new_social.php');
 
      
}
elseif($_REQUEST['ptype']=='new_family'){

 
  include('new_family.php');
   
        
  }





?>