<?php
session_start();
$ses_id = session_id(); 

include_once "config.php";

$type     = $_POST["files_type"];
$method   = $_POST["files_method"];
$email    = $_POST["email"];

// echo "$type  - $method - $email";
    $zip = new ZipArchive();
    $file_name = "download_files.zip";

    // Delete previous file
    @unlink(UPLOAD_PATH . $ses_id . "/downloads/$file_name");

    if ($zip->open(UPLOAD_PATH . $ses_id . "/downloads/$file_name", ZipArchive::CREATE)!==TRUE) {
//       echo " - not created";
        exit("cannot open <$file_name>\n");
    }else{
//       echo " - created";
    }

if($type=="statistics" || $type=="all"  ){
    // Loop through files
    $dir = UPLOAD_PATH . $ses_id . "/downloads/statistics";
    if (file_exists($dir) ) {
      $dh  = opendir($dir);
      while (false !== ($filename = readdir($dh))) {
        $path_parts = pathinfo($filename);
        $files[] = $filename;
        $sizee =filesize("$dir/$filename");
        if(($filename!==".") && ($filename!=="..")  && in_array($filename,$_POST["selected_statistics"]) ){
          $zip->addFile("$dir/$filename","statistics/$filename");
        }
      }
    }
}

if($type=="files" || $type=="all"  ){
    // Loop through files
    $dir = UPLOAD_PATH . $ses_id . "/downloads/files";
    if (file_exists($dir) ) {
      $dh  = opendir($dir);
      while (false !== ($filename = readdir($dh))) {
        $path_parts = pathinfo($filename);
        $files[] = $filename;
        $sizee =filesize("$dir/$filename");
        if(($filename!==".") && ($filename!=="..") && in_array($filename,$_POST["selected_files"])){
          $zip->addFile("$dir/$filename","files/$filename");
        }
      }
    }
}

    $zip->close();

    $zip_file = UPLOAD_PATH . $ses_id . "/downloads/$file_name";

if($method=="zip"){
    header("Content-Type: application/zip");
    header("Content-Disposition: attachment; filename=$file_name");
    header("Content-Length: " . filesize($zip_file));

    readfile($zip_file);
}else{

$random_hash = md5(@date('r', time())); 
$headers = "From: " . FROM_EMAIL . "\r\n"; 
$headers .= "\r\nContent-Type: multipart/mixed; boundary=\"PHP-mixed-".$random_hash."\""; 
$attachment = chunk_split(base64_encode(file_get_contents("$zip_file"))); 
ob_start(); //Turn on output buffering 
?> 
--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: multipart/alternative; boundary="PHP-alt-<?php echo $random_hash; ?>" 

--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/plain; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

<?php echo DOWNLOAD_EMAIL_BODY;?>

--PHP-alt-<?php echo $random_hash; ?>  
Content-Type: text/html; charset="iso-8859-1" 
Content-Transfer-Encoding: 7bit

<p><?php echo DOWNLOAD_EMAIL_BODY;?></p> 

--PHP-alt-<?php echo $random_hash; ?>-- 

--PHP-mixed-<?php echo $random_hash; ?>  
Content-Type: application/zip; name="<?php echo $file_name?>"  
Content-Transfer-Encoding: base64  
Content-Disposition: attachment  

<?php echo $attachment; ?> 
--PHP-mixed-<?php echo $random_hash; ?>-- 

<?php 
$message = ob_get_clean(); 
$mail_sent = @mail( $email,DOWNLOAD_EMAIL_SUBJECT,DOWNLOAD_EMAIL_BODY, $headers ); 
echo $mail_sent ? "Mail sent" : "Mail failed"; 

}
    exit;
?>