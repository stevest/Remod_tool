<?php
session_start();
$ses_id = session_id(); 

include_once "config.php";
include_once "filehandler.class.php";

// Step 1: Prepare first the structure of folders
$filehandler = new FileHandler($ses_id);
$folder_status = $filehandler->prepare_user_folder();

if($folder_status=="OK"){ 

  // Step 2: Upload Files
  $upload_status = $filehandler->upload_files()  ;
  echo $upload_status;
  


  
}else{
  echo "Error creating folders";
}
?>