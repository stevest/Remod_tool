<?php session_start();
$ses_id = session_id(); 

include_once "config.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Remod-Downloads</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <link href="assets/css/plugins.min.css" rel="stylesheet">
    <link href="assets/css/style.min.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <link href="assets/plugins/charts-d3/nv.d3.css" rel="stylesheet">
    <link href="assets/plugins/charts-circliful/css/jquery.circliful.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.css">
    <link rel="stylesheet" href="assets/plugins/datatables/dataTables.tableTools.css">
    <!-- END PAGE LEVEL STYLE -->

    <link rel="icon" type="image/gif" href="assets/img/animated_favicon1.gif" >
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <link rel="stylesheet" href="assets/plugins/jstree/src/themes/default/style.css">
    <!--                          GOOGLE ANALYTICS                             -->
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51341189-1', 'remod.gr');
      ga('send', 'pageview');

    </script>
    <!--                         END GOOGLE ANALYTICS                          -->
    <script>
	
	/*function myCall() {
		var request = $.ajax({
			url: "generate_mkdir.php",
			type: "GET",			
			dataType: "html"
		});

		request.done(function(msg) {
			$("#mybox").html(msg);			
		});

		request.fail(function(jqXHR, textStatus) {
			alert( "Request failed: " + textStatus );
		});
	}*/
</script>
<script>
	pre {tab-size: 16; }
</script>
</head>
<body  data-page="tables_dynamic">
<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

    <img src="assets/img/banner-01.png"  width="100%" height="82px">
    <div class="navbar-center" style="font-weight:bold; margin-top:-5px;">Remod</div>
    <div class="navbar-center" style="color:#BEBEBE ;font-size: 14px; margin-top:55px;">A TOOL FOR NEURON REMODELING</div>
    <a class="navbar-brand" href="index.html">
                    <img src="assets/img/CBL211.png" alt="logo" width="" height="">
                </a><!-- .navbar-inverse .navbar-brand{color:#fff;padding:8px 15px 0px 0px;display:inline-block;position:absolute;top:0;} -->
        <!--<div class="container-fluid">
            <div class="navbar-header" style="">
                <!--<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>-->
                <!--<a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>-->
                <!--<a class="navbar-brand" href="index.html">
                    <img src="assets/img/CBL211.png" alt="logo" width="" height="">
                </a>
            </div>
            <div class="navbar-center" style="font-weight:bold;">Remod</div>
            <div class="navbar-collapse collapse">
                <!-- BEGIN TOP NAVIGATION MENU -->
                <!--<ul class="nav navbar-nav pull-right header-menu">-->
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN MESSAGES DROPDOWN -->
                    
                    <!-- END MESSAGES DROPDOWN -->
                    <!-- BEGIN USER DROPDOWN -->
                    
                    <!-- END USER DROPDOWN -->
                    <!-- BEGIN CHAT HEADER -->
                    
                    <!-- END CHAT HEADER -->
                <!--</ul>-->
                <!-- END TOP NAVIGATION MENU -->
            <!--</div>
        </div>-->
    </nav>
    <!-- END TOP MENU -->
    <!-- BEGIN WRAPPER -->
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        <nav id="sidebar">
            <div id="main-menu">
                <ul class="sidebar-nav">
                    <li>
                        <a href="3DA.php" ><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="statistics.php"><i class="glyph-icon flaticon-charts2"></i><span class="sidebar-text">Statistics</span><!--<span class="pull-right badge badge-primary">2</span>--></a>
                    </li>
                    <li  class="current">
                        <a href="downloads.php"><i class="fa fa-download"></i><span class="sidebar-text">Downloads</span><!--<span class="fa arrow"></span>--></a>
                    </li>
                    <li>
                        <a href="manual.php"><i class="glyph-icon flaticon-pages"></i><span class="sidebar-text">Manual</span><!--<span class="fa arrow"></span>--></a>
                       
                    </li>
                    <li>
                        <a href="people.php"><i class="glyph-icon flaticon-account"></i><span class="sidebar-text">About Us</span><!--<span class="fa arrow"></span>--></a>
                          
                    </li>
                    <li>
                        <a href="http://dendrites.gr" target="_blank"><i class="glyph-icon flaticon-panels"></i><span class="sidebar-text">Lab</span><!--<span class="fa arrow"></span>--></a>
                          
                    </li>

                    <li>
                        <a href="3D_email_compose.php"><i class="glyph-icon flaticon-email"></i><span class="sidebar-text">Contact</span><!--<span class="fa arrow"></span>--></a>
                         
                    </li>
                    
                </ul>
            </div>
            <div class="footer-widget">
                <img src="assets/img/gradient.png" alt="gradient effet" class="sidebar-gradient-img" />
                <!--<div id="sidebar-charts">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Orders</div>
                            <div class="sidebar-chart-number">1,256</div>
                        </div>
                        <div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
                            <span class="dynamicbar1"></span>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Income</div>
                            <div class="sidebar-chart-number">$47,564</div>
                        </div>
                        <div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
                            <span class="dynamicbar2"></span>
                        </div>
                    </div>
                    <hr class="divider">
                    <div class="sidebar-charts-inner">
                        <div class="sidebar-charts-left">
                            <div class="sidebar-chart-title">Visits</div>
                            <div class="sidebar-chart-number" id="number-visits">147,687</div>
                        </div>
                        <div class="sidebar-charts-right" class="sparkline mini-chart" data-type="bar" data-color="theme">
                            <span class="dynamicbar3"></span>
                        </div>
                    </div>
                </div>-->
                <div class="sidebar-footer clearfix">
                    <!--<a class="pull-left" href="profil.html" rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>-->
                    <!--<a class="pull-left toggle_fullscreen" href="#" rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
                    <!--<a class="pull-left" href="lockscreen.html" rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
                    <a class="pull-left" href="login.html" rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>-->
                </div>
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->

        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content">
        	<script language="JavaScript">
			function toggle(source) {
			  checkboxes = document.getElementsByName('selected_files[]');
			  for(var i=0, n=checkboxes.length;i<n;i++) {
			    checkboxes[i].checked = source.checked;
			  }
			}
			function toggle1(source) {
			  checkboxes = document.getElementsByName('selected_statistics[]');
			  for(var i=0, n=checkboxes.length;i<n;i++) {
			    checkboxes[i].checked = source.checked;
			  }
			}
            
            function has_selected_files(){
              var result = false;
              
//               alert($('#which_files:checked').val());
//               alert($('#which_method:checked').val());
//               alert($('#your_email').val());
              
              
              if($('#which_files:checked').val()=="files" || $('#which_files:checked').val()=="all"){
                checkboxes = document.getElementsByName('selected_files[]');
                for(var i=0, n=checkboxes.length;i<n;i++) {                
                  if( checkboxes[i].checked ){
                    result = true;
                  }
                }
              }
              
              if($('#which_files:checked').val()=="statistics" || $('#which_files:checked').val()=="all"){
                checkboxes = document.getElementsByName('selected_statistics[]');
                for(var i=0, n=checkboxes.length;i<n;i++) {                
                  if( checkboxes[i].checked ){
                    result = true;
                  }
                }     
              }
              
              if(!result){
                alert("Please select a file first");
              }
              return result;
            }
            
            function has_selected_statistics(){
              var result = false;
              checkboxes = document.getElementsByName('selected_statistics[]');
              for(var i=0, n=checkboxes.length;i<n;i++) {                
                if( checkboxes[i].checked ){
                  result = true;
                }
              }
              if(!result){
                alert("Please select a statistic first");
              }
              return result;
            }            
			</script>
        <div margin style="margin-top: 50px;"></div>
        <!--<input type="button" value="Update" onclick="myCall();" />-->
          
          
          <!-- Modal gia email -->
          <div class="modal fade" id="modal_email" tabindex="-1" role="dialog" aria-labelledby="lbl_modal_email" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="lbl_modal_email"><strong>Download Options</strong></h4>
                  </div>
                  <div class="modal-body">
                    <form >
                    Download <input type="radio" name="which_files" id="which_files" value="files"/> Files 
                    <input type="radio" name="which_files" id="which_files" value="statistics"/> Statistics or
                    <input type="radio" name="which_files" id="which_files" value="all" CHECKED/> Both <br/>
                    Method: <input type="radio" name="which_method" id="which_method" value="zip" CHECKED/> As Zip File 
                    <input type="radio" name="which_method" id="which_method" value="email"/> Send to E-mail<br/>
                    
                    E-mail: <input type="text" parsley-luhn="true" style="width:200px; margin-right:20px; " id="your_email">
                      </form>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-success" data-dismiss="modal" onclick="$('#files_type').val($('#which_files:checked').val());$('#files_method').val($('#which_method:checked').val());$('#email').val($('#your_email').val());if(has_selected_files()){if($('#which_method:checked').val()=='zip'){ $('#frmFiles').submit();}else{download_files();}}">Download</button>
                </div>
              </div>
            </div>
          </div>
          
          <!-- Modal gia email --> 
          
        <div class="row" >
                <div class="col-md-12 pull-left"  style="width:50%;">
                    <div class="panel panel-default">
                        <div  class="panel-heading bg-default">
                            <h3 align="left" class="panel-title"><strong>Download </strong> Files</h3>
                        </div>
                        <div align="right" class="panel-heading bg-default" style="margin-top:-50px;"><h3 class="panel-title"><input type="checkbox" onClick="toggle(this)" id="selectAll1" /> Select All</h3></div>
                        
                        <div class="panel-body" >
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">
                                  <form method="post" id="frmFiles" name="frmFiles" action="download_files.php">
                                            <input type="hidden" id="files_type" name="files_type" value="all"/>
                                            <input type="hidden" id="files_method" name="files_method" value="zip"/>
                                            <input type="hidden" id="email" name="email" value=""/>
                                    
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-dynamic">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>type</th>
                                                <th>Size</th>
                                                <th>Select</th>
                                                
                                            </tr>
                                        </thead>
                                        <tbody>
                                          
                                        <?php
										$dir = UPLOAD_PATH . $ses_id . "/downloads/files";
                    if (file_exists($dir) ) {
                      $dh  = opendir($dir);
                      while (false !== ($filename = readdir($dh))) {
                        $path_parts = pathinfo($filename);
                          $files[] = $filename;
                          $sizee =filesize("$dir/$filename");
                          if(($filename!==".") &&($filename!=="..") ){
                            echo "<tr><td>";
                            echo $path_parts['filename'];
                            echo "</td><td>";
                            echo $path_parts['extension'];
                            echo "</td><td>";
                            echo "$sizee bytes";
                            echo "</td><td><p style=\"text-indent: 2em;\"/><input style=\"\" type=\"checkbox\" name=\"selected_files[]\" value=\"" .  $filename . "\"></td></tr>";
                        }
                      }
                    }
										?>
                                          
                                        </tbody>
                                    </table>
                                    <!--</form>-->
                                  <!--<a href="#" onclick="$('#files_method').val('zip');if(has_selected_files()){$('#frmFiles').submit();}" >Download as Zip</a> <br> -->

                                  
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-12 pull-right" style="width:49%;">
                    <div class="panel panel-default">
                        <div class="panel-heading bg-default">
                            <h3 class="panel-title"><strong>Download </strong> Statistics</h3>
                        </div>
                        <div align="right" class="panel-heading bg-default" style="margin-top:-50px;"><h3 class="panel-title"><input type="checkbox" onClick="toggle1(this)" id="selectAll2" /> Select All</h3></div>
                        
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12 table-responsive table-red">
                                 <!-- <form method="post" id="frmStatistics" name="frmStatistics" action="download_statistics.php">
                                            <input type="hidden" id="statistics_method" name="statistics_method" value="zip"/>
                                            <input type="hidden" id="email" name="email" value=""/>-->
                                  
                                    <table cellpadding="0" cellspacing="0" border="0" class="table table-striped table-hover table-dynamic">
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>type</th>
                                                <th>Size</th>
                                                <th>Select</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
										$dir = UPLOAD_PATH . $ses_id . "/downloads/statistics";
                    if (file_exists($dir) ) {
                      $dh  = opendir($dir);
                      while (false !== ($filename = readdir($dh))) {
                        $path_parts = pathinfo($filename);
                          $files[] = $filename;
                          $sizee =filesize("$dir/$filename");
                          if(($filename!==".") &&($filename!=="..") ){
                            echo "<tr><td>";
                            echo $path_parts['filename'];
                            echo "</td><td>";
                            echo $path_parts['extension'];
                            echo "</td><td>";
                            echo "$sizee bytes";
                            echo "</td><td><p style=\"text-indent: 2em;\"/><input name=\"selected_statistics[]\" id=\"selected_statistics[]\" value=\"" .  $filename . "\" style=\"\" type=\"checkbox\"></td></tr>";
                        }
                      }
                    }
										?>
                                        </tbody>
                                    </table>
                                    </form>
                                  <!--<a href="#" onclick="$('#statistics_method').val('zip');if(has_selected_statistics()){$('#frmStatistics').submit();}" >Download as Zip</a><br/>
                                  <a href="#" onclick="$('#statistics_method').val('zip');$('form').get(1).setAttribute('action', 'download_all.php');$('#frmStatistics').submit();" >Download All Files n Statistics as Zip</a><br/>-->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          <button href="#" class=" btn  btn-success" data-toggle="modal" data-target="#modal_email"  style="margin-top:2px; width:150px" onclick="" active>Download</button>
        
        <!-- END MAIN CONTENT -->
        <!--<div id="tooltip"></div>-->

    </div>
    <!-- END WRAPPER -->
    <!-- BEGIN CHAT MENU -->
    
    <!-- END CHAT MENU -->
      <!-- BEGIN MANDATORY SCRIPTS -->
    <script src="assets/plugins/jquery-1.11.js"></script>
    <script src="assets/plugins/jquery-migrate-1.2.1.js"></script>
    <script src="assets/plugins/jquery-ui/jquery-ui-1.10.4.min.js"></script>
    <script src="assets/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="assets/plugins/bootstrap-dropdown/bootstrap-hover-dropdown.min.js"></script>
    <script src="assets/plugins/bootstrap-select/bootstrap-select.js"></script>
    <script src="assets/plugins/icheck/icheck.js"></script>
    <script src="assets/plugins/mcustom-scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->

      <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/modal/js/classie.js"></script>
    <script src="assets/plugins/modal/js/modalEffects.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
      
      
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/bootstrap-switch/bootstrap-switch.js"></script>
    <script src="assets/plugins/bootstrap-progressbar/bootstrap-progressbar.js"></script>
    <script src="assets/plugins/datatables/dynamic/jquery.dataTables.min.js"></script>
    <script src="assets/plugins/datatables/dataTables.bootstrap.js"></script>
    <script src="assets/plugins/datatables/dataTables.tableTools.js"></script>
    
    <script src="assets/js/table_dynamic.js"></script>
  
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="assets/js/application.js"></script>
    <script src="ajax.js"></script>
</body>

</html>

