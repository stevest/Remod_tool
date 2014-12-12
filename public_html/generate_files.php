<?php
session_start();
$ses_id = session_id(); 

include_once "config.php";

//echo "Run here the python scripts to generate real downloads and statistics.";
//$command = escapeshellcmd("sh " . RUNSCRIPT_PATH. " " . $this->user_home  . " " . $param2);
//$output = passthru($command);
//echo $output;
$dir = UPLOAD_PATH . $ses_id ;
              if (file_exists($dir) ) {
                $files = scandir($dir);
                $str="";
                foreach ($files as $object) {
                    if ($object != "." && $object != "..") {                    
                        if (filetype($dir."/".$object) !== "dir" ) {
                             $path_parts = pathinfo("$dir/$object");

                            if($path_parts['extension']=='swc' || $path_parts['extension']=='hoc'){
                                if($str==""){
                                    $str=$path_parts['basename'];
                                }else{
                                    $str.=",";
                                    $str.=$path_parts['basename'];
                                }
                            }
                        }
                    }
                }
            }
// Grab all the variables
$who_variable= $_POST["who_variable"];
$who_random_variable = $_POST["who_random_variable"];
$who_manual_variable= $_POST["who_manual_variable"];
$what_variable= $_POST["what_variable"];
$extend_variable= $_POST["extend_variable"];
$extend_variable_num= $_POST["extend_variable_num"];
$diameter_variable=$_POST["diameter_variable"];
$diameter_variable_num=$_POST["diameter_variable_num"];


if ($who_manual_variable == null || strpos($str,',') !== false) {
    $who_manual_variable ="none";
}
if ($diameter_variable=="mm1") {
    $diameter_variable="mm";
}else if($diameter_variable=="percent1"){
    $diameter_variable="percent";
}
if ($diameter_variable==null) {
    $diameter_variable="none";
}
if ($diameter_variable_num==null) {
    $diameter_variable_num="none";
}

//echo "$who_variable,$who_random_variable,$who_manual_variable,$what_variable,$extend_variable,$extend_variable_num,$diameter_variable,$diameter_variable_num";
$command = escapeshellcmd("sh " . RUNSCRIPT_PATH2. " /home/remod/users/$ses_id/ " . $str . " " . $who_variable . " " . $who_random_variable . " " . $who_manual_variable . " " . $what_variable . " " . $extend_variable . " " . $extend_variable_num . " " . $diameter_variable . " " . $diameter_variable_num);
$output = passthru($command);
// This is dummy code you should replace it with the python run
//$milliseconds = round(microtime(true) * 1000);

// Generate one download
//$file = file_put_contents(UPLOAD_PATH . $ses_id . "/downloads/files/file_".$milliseconds.".txt","Dummy file");

// Generate one random statistics
//$statistic = file_put_contents(UPLOAD_PATH . $ses_id . "/downloads/statistics/stat_".$milliseconds.".txt","Dummy statistics file");
?>
