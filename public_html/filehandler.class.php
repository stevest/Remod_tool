<?php
include_once "config.php";

class FileHandler{
  
  var $folder_name;
  var $user_home;
  
  function __construct($folder_name){
    $this->folder_name = $folder_name ;
    $this->user_home = UPLOAD_PATH . $this->folder_name . "/";
  }
  
  function prepare_user_folder(){
    $result = "OK";
    
    if (!file_exists($this->user_home) ) {
      if (!mkdir($this->user_home, 0777, true)) {
        return 'ERROR';      
      }
      if (!mkdir($this->user_home."downloads", 0777, true)) {
        return 'ERROR';
      }
      if (!mkdir($this->user_home."downloads/files", 0777, true)) {
        return 'ERROR';
      }
      if (!mkdir($this->user_home."downloads/statistics", 0777, true)) {
        return 'ERROR';
      }    
    }else{
      
    }
    return $result;
  }
  
  function get_upload_folder(){
    return $this->user_home;
  }
  
  
  function upload_files(){
    $result = "";
    $allowedExts = array("hoc","swc");
    $temp = explode(".", $_FILES["file"]["name"]);
    $path_parts = pathinfo($_FILES["file"]["name"]);
    $extension = end($temp);

    if ( ($_FILES["file"]["size"] < 2000000) && ($path_parts['extension']=='swc' || $path_parts['extension']=='hoc')/*in_array($extension, $allowedExts)*/) {
      if ($_FILES["file"]["error"] > 0) {
        return "{'status':'error', 'msg': '" . $_FILES["file"]["error"] . "'}";
      } else {
        if (file_exists( $this->user_home . $_FILES["file"]["name"])) {
          $result = "{'status':'error', 'msg': '"  . $_FILES["file"]["name"] . " already exists'}";
        } else {
          
          $re=move_uploaded_file($_FILES["file"]["tmp_name"],$this->user_home . $_FILES["file"]["name"]);
          if($re===false)
          {
            $le=error_get_last();
            throw(new Exception($le["message"] . " , failed to move $src to $dst' , at $_file line $_line"));
          }
          // Run the schell run
          $output = $this->run_cell_generator(/*$this->user_home . */$_FILES["file"]["name"]);
          echo $_FILES["file"]["name"];
          $result = "{'status':'ok', 'msg': 'Stored in: " .  $this->user_home . $_FILES["file"]["name"]. "','output': '".$output."'}";
        }
      }
    } else {
      $result = "{'status':'error', 'msg': 'Invalid file". "'}";
    }    
    return $result;
  }
  
  function run_cell_generator($param2){
    $response = "";
    
    $command = escapeshellcmd("sh " . RUNSCRIPT_PATH. " " . $this->user_home  . " " . $param2);
    $output = passthru($command);

    return $output;
  }
  
}
?>