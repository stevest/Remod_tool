<?php
session_start();
$ses_id = session_id(); 

include_once "config.php";

$filename = $_GET["filename"];
//$tmp = explode(".",$filename);
$path_parts = pathinfo($filename);

    $file = UPLOAD_PATH . $ses_id . "/" . $path_parts['filename'] . "_neuron.txt";

    if (file_exists($file) ) {
      $contents = file_get_contents($file);
    }else{
      // Load the default neuron
      $file = UPLOAD_PATH . "../neuron_before.txt";
      $contents = file_get_contents($file);
    }
//echo $contents;
//$output = "";

                
                if ($contents!="") {
                $rows        = explode("\n", $contents);
                $flag = 0;
                  // line1 =
                $output .= "[";
                foreach($rows as $row => $data)
                {
                    if($flag==0){
                        $flag=1;
                    }else{
                        $output .= ",";
                    }
                    //get row data
                    $row_data = explode(' ', $data);
                    
                    $info[$row]['x1']= $row_data[0];
                    $info[$row]['y1']= $row_data[1];
                    $info[$row]['z1']= $row_data[2];
                    $info[$row]['x2']= $row_data[3];
                    
                    $info[$row]['y2']= $row_data[4];
                    
                    $info[$row]['z2']= $row_data[5];
                    
                    $info[$row]['thick']= $row_data[6];

                    $info[$row]['color']= $row_data[7];
                    
                    $output .= "v(";
                    $output .= $info[$row]['x1']/5;
                    $output .= ", ";
                    $output .= $info[$row]['y1']/5;
                    $output .= ", ";
                    $output .= $info[$row]['z1']/5;
                    $output .= ")";
                    
                }
                $output .= "]\n";
                
                $rows        = explode("\n", $contents);
                $flag = 0;
                  //line2 =
                $output .= "[";
                foreach($rows as $row => $data)
                {
                    if($flag==0){
                        $flag=1;
                    }else{
                        $output .= ",";
                    }
                    //get row data
                    $row_data = explode(' ', $data);
                    
                    $info[$row]['x1']= $row_data[0];
                    $info[$row]['y1']= $row_data[1];
                    $info[$row]['z1']= $row_data[2];
                    $info[$row]['x2']= $row_data[3];
                    
                    $info[$row]['y2']= $row_data[4];
                    
                    $info[$row]['z2']= $row_data[5];
                    
                    $info[$row]['thick']= $row_data[6];
                    $info[$row]['color']= $row_data[7];
                    
                    $output .= "v(";
                    $output .= $info[$row]['x2']/5;
                    $output .= ", ";
                    $output .= $info[$row]['y2']/5;
                    $output .= ", ";
                    $output .= $info[$row]['z2']/5;
                    $output .= ")";
                    
                }
                $output .= "]\n";
                $rows        = explode("\n", $contents);
                $flag = 0;
                  //thick=
                $output .= "[";
                foreach($rows as $row => $data)
                {
                    if($flag==0){
                        $flag=1;
                    }else{
                        $output .= ",";
                    }
                    //get row data
                    $row_data = explode(' ', $data);
                    
                    $info[$row]['x1']= $row_data[0];
                    $info[$row]['y1']= $row_data[1];
                    $info[$row]['z1']= $row_data[2];
                    $info[$row]['x2']= $row_data[3];
                    
                    $info[$row]['y2']= $row_data[4];
                    
                    $info[$row]['z2']= $row_data[5];
                    
                    $info[$row]['thick']= $row_data[6];
                    $info[$row]['color']= $row_data[7];
                    $output .= $info[$row]['thick'];
                }
                $output .= "]\n";
                $rows        = explode("\n", $contents);
                $flag = 0;
                  //thick=
                $output .= "[";
                foreach($rows as $row => $data)
                {
                    if($flag==0){
                        $flag=1;
                    }else{
                        $output .= ",";
                    }
                    //get row data
                    $row_data = explode(' ', $data);
                    
                    $info[$row]['x1']= $row_data[0];
                    $info[$row]['y1']= $row_data[1];
                    $info[$row]['z1']= $row_data[2];
                    $info[$row]['x2']= $row_data[3];
                    
                    $info[$row]['y2']= $row_data[4];
                    
                    $info[$row]['z2']= $row_data[5];
                    
                    $info[$row]['thick']= $row_data[6];
                    $info[$row]['color']= $row_data[7];
                    $output .= $info[$row]['color'];
                }
                $output .= "]";

            }else{
            	$output .= "line1=0;";
            	$output .= "line2=0;";
            	$output .= "thick=0;";
                $output .= "color=0;";
            }

echo $output ;
?>