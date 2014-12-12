<?php 
        session_start();
        $ses_id=session_id();
        /*echo "hello";
        $argv1 = '/home/remod/public_html/application/smith_new_axon/0-2_axon.hoc';
        $command = escapeshellcmd('/home/remod/public_html/application/hello.py');
        $output = shell_exec($command);
        echo $output;*/
        
	        $structure = "/home/remod/users/$ses_id";
	        if (!mkdir($structure, 0777, true)) {
	    		die('Failed to create folders...');
			}
            if (!mkdir("/home/remod/users/$ses_id/downloads", 0777, true)) {
                die('Failed to create folders...');
            }
            if (!mkdir("/home/remod/users/$ses_id/downloads/files", 0777, true)) {
                die('Failed to create folders...');
            }
            if (!mkdir("/home/remod/users/$ses_id/downloads/statistics", 0777, true)) {
                die('Failed to create folders...');
            }
	        $param2 = '/home/remod/application/smith_new_axon/0-2_axon.hoc' ;
	        $command = escapeshellcmd("sh /home/remod/application/runScript.sh $structure $param2");
	        $output = passthru($command);
        
        /*$tok = strtok($output, " \n");

        while ($tok !== false) {
            if (strpos($tok,'soma') !== false) {
                echo "Word=$tok<br />";
                $tok = strtok(" \n");
            }
            
        }*/
        //echo $output;
        ?>