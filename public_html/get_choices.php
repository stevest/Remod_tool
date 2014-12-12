<?php
session_start();
$ses_id = session_id(); 

include_once "config.php";
	$dir = UPLOAD_PATH . $ses_id ;
              if (file_exists($dir) ) {
                $files = scandir($dir);
                foreach ($files as $object) {
                  if ($object != "." && $object != "..") {                    
                    if (filetype($dir."/".$object) !== "dir") {
                      $path_parts = pathinfo("$dir/$object");
                      if($path_parts['extension']=='swc' || $path_parts['extension']=='hoc'){
                        $new_load=$object;
                        break;
                      }
                    }
                  }
                }
              }
    $file = UPLOAD_PATH . $ses_id .  "/" . $path_parts['filename'] . "_dendritic_list.txt";
    $content = file_get_contents($file);
    $buttons = explode("\n",$content);
    $content_str = "";
    foreach($buttons as $button){
    	if ($button=="") {
    		break;
    	}
      $content_str .= "<button href=\"#\" class=\" btn btn-success who_manual\" id=\"$button\" style=\"margin-top:2px; width:150px \" onclick=\"if( select_manual('$button')){this.style.color = '#ffffff';}else{this.style.color = '#2B2E33';}\" active>$button</button>";
    }

    $content_str = "<ul>" . $content_str . "</ul>";
    echo $content_str;
?>