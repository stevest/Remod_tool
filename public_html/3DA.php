<?php 
session_start();
$ses_id = session_id(); 

// Include all necessary files
include_once "config.php";
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js sidebar-large lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js sidebar-large lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js sidebar-large lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large" xmlns="http://www.w3.org/1999/xhtml"> <!--<![endif]-->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- Google web fonts -->
    <link href="http://fonts.googleapis.com/css?family=PT+Sans+Narrow:400,700" rel='stylesheet' />

    <!-- The main CSS file -->
    <link href="assets/css/style.css" rel="stylesheet" />

    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Remod</title>
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
    <link href="assets/plugins/fullcalendar/fullcalendar.css" rel="stylesheet">
    <link href="assets/plugins/metrojs/metrojs.css" rel="stylesheet">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--<link rel="shortcut icon" href="assets/img/favicon.ico" >-->
  	<link rel="icon" type="image/gif" href="assets/img/animated_favicon1.gif" >
  	<link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />


    <!-- BEGIN PAGE LEVEL STYLE -->
    <link rel="stylesheet" href="assets/plugins/dropzone/dropzone.css">
    <link rel="stylesheet" href="assets/plugins/jquery-file-upload/css/jquery.fileupload.css">
    <link rel="stylesheet" href="assets/plugins/jquery-file-upload/css/jquery.fileupload-ui.css">
    <!-- END PAGE LEVEL STYLE -->
    
    <!-- TERMINAL css-->
    <link href="assets/css/onion.css" rel="stylesheet">
    <!--end of TERMINAL css-->
    <script type="javascript" language="javascript">
		$('input[type=radio]').click(function() {
		   $('input[type=radio]').removeClass('active');
		   $(this).addClass('active');
		});
    </script>
    <script type="css">
        .OBJECT {
    -webkit-transform-style: preserve-3d;
    -webkit-transform: rotateX(0deg) rotateY(0deg) rotateZ(0deg);
    position: absolute;}
    </script>

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
    

</head>

<body data-page="dashboard" style="background-color:#DFE5E9" >



    <!-- BEGIN TOP MENU -->
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
    <div id="wrapper" >
        <!-- BEGIN MAIN SIDEBAR -->
        <nav id="sidebar">
            <div id="main-menu">
                <ul class="sidebar-nav">
                    <li class="current">
                        <a href="3DA.php" ><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li>
                        <a href="statistics.php"><i class="glyph-icon flaticon-charts2"></i><span class="sidebar-text">Statistics</span><!--<span class="pull-right badge badge-primary">2</span>--></a>
                    </li>
                    <li>
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
            Geiaa
            <div class="footer-widget">
                <img src="assets/img/gradient.png" alt="gradient effet" class="sidebar-gradient-img" />
                
                <div class="sidebar-footer clearfix">
                    <!--<a class="pull-left" href="profil.html" rel="tooltip" data-placement="top" data-original-title="Settings"><i class="glyph-icon flaticon-settings21"></i></a>-->
                    <!--<a class="pull-left toggle_fullscreen" href="#" rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
                    <!--<a class="pull-left" href="lockscreen.html" rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
                    <a class="pull-left" href="login.html" rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>-->

                </div>
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->

        <script type="text/javascript">
//         	$('label').click(function(){
// 		    $(this).children('span').addClass('input-checked');
// 		    $(this).parent('.toggle').siblings('.toggle').children('label').children('span').removeClass('input-checked');
// 		});
        </script>

        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content" class="dashboard">
           
            
            
            <div class="modal fade" id="modal-responsive" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel"><strong>Multiple</strong> File Upload (.swc)</h4>
                        </div>
                        <div class="modal-body">
                                              <div class="panel panel-default">
                                              <div class="panel-body">
                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <!--<p>DropzoneJS is an open source library that provides drag'n'drop file uploads with image previews.</p><br>-->
                                                      <form id="myAwesomeDropzone" action="upload.php" class="dropzone" method="post" >
                                                      <div class="fallback">
                                                        <input name="file" type="file" multiple />
                                                      </div>
                                                    </form>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
          
          <!-- Modal gia manual -->
          <div class="modal fade" id="modal_manual" tabindex="-1" role="dialog" aria-labelledby="lbl_modal_manual" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="lbl_modal_manual"><strong>Manual</strong></h4>
                  </div>
                  <div class="modal-body">
                    <div id="manual_choices">Loading choices...</div>
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal">Validate</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal gia manual -->
            
          <!-- Modal gia random all -->
          <div class="modal fade" id="modal_random_all" tabindex="-1" role="dialog" aria-labelledby="lbl_modal_random_all" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="lbl_random_all"><strong>Random All</strong></h4>
                  </div>
                  <div class="modal-body">
                    <label class="col-sm-3 control-label">Maximum 100 <span class="asterisk"></span></label>
                                            <div class="col-sm-9">
                                                <input type="number" max="100" min="0" class="form-control" parsley-luhn="true" placeholder="Number" id="random_value">
                                            </div>
                    <!--<input type="number" max="100" min="0"  parsley-luhn="true" placeholder="Number" style="width:40px; margin-right:20px; " id="random_value">-->
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveRandomValue();">Validate</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal gia random all -->   
          
          <!-- Modal gia random apical -->
          <div class="modal fade" id="modal_random_apical" tabindex="-1" role="dialog" aria-labelledby="lbl_modal_random_apical" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="lbl_random_apical"><strong>Random Apical</strong></h4>
                  </div>
                  <div class="modal-body">
                                        <label class="col-sm-3 control-label">Maximum 100 <span class="asterisk"></span></label>
                                            <div class="col-sm-9">
                                                <input type="number" max="100" min="0" class="form-control" parsley-luhn="true" placeholder="Number" id="random_value">
                                            </div>
                    <!--<input type="number" max="100" min="0"  parsley-luhn="true" placeholder="Number" style="width:40px; margin-right:20px; " id="random_value">-->
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveRandomValue();">Validate</button>
                </div>
              </div>
            </div>
          </div>
          <!-- Modal gia random apical -->    
          
          <!-- Modal gia random basal -->
          <div class="modal fade" id="modal_random_basal" tabindex="-1" role="dialog" aria-labelledby="lbl_modal_random_basal" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                  <h4 class="modal-title" id="lbl_random_basal"><strong>Random Basal</strong></h4>
                  </div>
                  <div class="modal-body">
                                        <label class="col-sm-3 control-label">Maximum 100 <span class="asterisk"></span></label>
                                            <div class="col-sm-9">
                                                <input type="number" max="100" min="0" class="form-control" parsley-luhn="true" placeholder="Number" id="random_value">
                                            </div>
                    <!--<input type="number" max="100" min="0"  parsley-luhn="true" placeholder="Number" style="width:40px; margin-right:20px; " id="random_value">-->
                  </div>
                  <div class="modal-footer">
                  <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                  <button type="button" class="btn btn-primary" data-dismiss="modal" onclick="saveRandomValue();">Validate</button>
                </div>
              </div>
            </div>
          </div>
         
             <div class="row pull-left " style="margin-left:3px;">
                <div class="col-md-3" style="margin-top:60px;">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-responsive" style="width:323px;"><i class="fa fa-cloud-upload"></i> Upload </button>
                </div>
               <div class="pull-left p-l-20 " style="margin-left:-145px;margin-top:100px;">
                
           		<div class="pull-left p-l-100 btn-group btn-group-vertical">
                <ul>
                    <li align="center" style="font-weight:bold; font-size:20px; color:#18a689;text-align:center ;margin-right:27px;">WHO</li>
                    <li><button href="#" class=" btn btn-success" style="width:120px; height:25px;" id="who_all_terminal"  onclick="select_who('who_all_terminal');" disabled><input type="radio" name="who" value="aLL_terminal" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">All Terminal</font></button></li>
                    <li><button href="#" class=" btn btn-success" style="margin-top:2px; width:120px; height:25px;"  id="who_apical_terminal"  onclick="select_who('who_apical_terminal');" disabled><input type="radio" name="who" value="all_apical"  hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Apical Terminal</font></button></li>
                    <li><button href="#" class=" btn btn-success" style="margin-top:2px; width:120px ;height:25px;"  id="who_basal_terminal"  onclick="select_who('who_basal_terminal');" disabled><input type="radio" name="who" value="all_basal" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Basal Terminal</font></button></li>
                    <li><button href="#" class=" btn btn-success" data-toggle="modal" data-target="#modal_random_all"  style="margin-top:2px; width:120px; height:25px;" id="who_random_all" onclick="select_who('who_random_all');" disabled><input type="radio" name="who" value="random_all" style="margin-right:16px;" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Random All</font></button></li>
                    <li><button href="#" class=" btn btn-success"  data-toggle="modal" data-target="#modal_random_apical" style="margin-top:2px; width:120px; height:25px;" id="who_random_apical" onclick="select_who('who_random_apical');" disabled><input type="radio" name="who" value="random_apical" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Random Apical</font></button></li>
                    <li><button href="#" class=" btn btn-success"  data-toggle="modal" data-target="#modal_random_basal" style="margin-top:2px; width:120px; height:25px;" id="who_random_basal" onclick="select_who('who_random_basal');" disabled><input type="radio" name="who" value="random_basal" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Random Basal</font></button></li>
                    <li><button href="#" class=" btn btn-success" data-toggle="modal" data-target="#modal_manual" style="margin-top:2px; width:120px; height:25px;" id="who_manual" onclick="select_who('who_manual');get_choices();" disabled><input type="radio" name="who" value="manual" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Manual</font></button></li>
                    <li align="center" style="font-weight:bold; margin-top:12px; font-size:20px; color:#18a689;text-align:center;margin-right:20px;">DIAMETER</li>
                    <li><button id="percent1" onclick="select_diameter('percent1');" type="radio" class=" btn btn-success" style="margin-top:2px; width:57px; height:25px;" name="diameter" value="percent" disabled><input type="radio" name="diameter" value="percent" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-6px;">%</font></button>
                    	<button  id="mm1"  onclick="select_diameter('mm1');" type="radio" class=" btn btn-success" style="margin-top:2px; margin-left:2px; width:57px; height:25px;" name="diameter" value="micrometers" disabled><input type="radio" name="diameter" value="micrometers" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-10px;">μm</font></button></li>
                    <li class="col-m"></li>
                    <li><input id="txtDiameterNum" type="text" class="form-control" value="" style="margin-top:5px; width:120px; heigh:20px;" disabled></li>
                </ul>
            
                </div>
            	<div class="pull-right btn-group btn-group-vertical">
                <ul>
                    <li align="center" style="font-weight:bold; font-size:20px; color:#18a689;text-align:center;margin-right:27px;">WHAT</li>
                    <li><button type="radio" name="what" class=" btn btn-success" style="width:120px; height:25px;" name="what" value="shrink" id="shrink" disabled onclick="select_what('shrink');"><input type="radio" name="what" value="shrink" id="shrink" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Shrink</font></button></li> 
                    <li><button type="radio" name="what" class=" btn btn-success" style="margin-top:2px; width:120px; height:25px;" name="what" value="remove" id="remove"  onclick="select_what('remove');" disabled><input type="radio" name="what" value="remove" id="remove" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Remove</font></button></li>
                    <li><button type="radio" name="what" class=" btn btn-success" style="margin-top:2px; width:120px; height:25px;" name="what" value="extend" id="extend"  onclick="select_what('extend');" disabled><input type="radio" name="what" value="extend" id="extend" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Extend</font></button></li>
                    <li><button type="radio" name="what" class=" btn btn-success" style="margin-top:2px; width:120px; height:25px;" name="what" value="branch" id="branch" onclick="select_what('branch');" disabled><input type="radio" name="what" value="branch" id="branch" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-50px;">Branch</font></button></li>
                    <li align="center" style="font-weight:bold; margin-top:12px; font-size:20px; color:#18a689;text-align:center;margin-right:27px;">EXTENT</li>
                    <li><button id="percent" onclick="select_extend('percent');" type="radio" class=" btn btn-success" style="margin-top:2px; width:57px; height:25px;" name="extent" value="percent" disabled><input type="radio" name="extent" value="percent" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-6px;">%</font></button>
                    	<button id="mm"  onclick="select_extend('mm');" type="radio" class=" btn btn-success" style="margin-top:2px; margin-left:2px; width:57px; height:25px;" name="extent" value="micrometers" disabled><input type="radio" name="extent" value="micrometers" hidden><font size="2" style="position: absolute;margin-top:-10px;margin-left:-6px;">μm</font></button></li>
                   
                    <li class="col-m"></li>
                    <li><input id="txtExtentNum" type="text" class="form-control" value="" style="margin-top:5px; width:120px; heigh:20px;" disabled></li>
                   <li><button id="btnAction"  <?php $dir = UPLOAD_PATH . $ses_id ;
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

                        echo "onclick=\"generate_neuron();load_neuron('" . $new_load . "');return false;\"";?> href="#" class=" btn btn-success" style="margin-top:39px; width:120px; " disabled>Action</button></li>
                    
                </ul>
            </div>

            </div>            
               <div style="clear:both;"></div>
             <div class="chatMsgContainer" id="controlPanel" style="overflow-y: scroll; pointer-events: auto; cursor: auto; display: block;right:0%">
                <div class="chatMsg" style="display: block;">
                <span class="actualText dialogNobody">Status Panel
                </span>
                </div>
                
            </div>
            <div class="chatMsgContainer" style="overflow-y: scroll; pointer-events: auto; cursor: auto;z-index:300;  display: block;">
                <div class="chatMsg" style="display: block;">
                <span class="actualText dialogNobody">
                <div><h3>3D Viewing</h3></div></span></div>
                <div id="upload_files_panel" style=" margin-left:20px;margin-top:20px;width:280px;"><!--border-top:2px solid #cccccc;">-->
               <?php
               // check here if the session folder exist and if it has any already uploaded files
              // Loop through files
              $uploaded_files = "";
              $dir = UPLOAD_PATH . $ses_id ;
              if (file_exists($dir) ) {
                $files = scandir($dir);
                foreach ($files as $object) {
                  if ($object != "." && $object != "..") {                    
                    if (filetype($dir."/".$object) !== "dir") {
                      $path_parts = pathinfo("$dir/$object");
                      if($path_parts['extension']=='swc' || $path_parts['extension']=='hoc'){
                         if($uploaded_files == ""){
                           $uploaded_files = "<h4><a href=\"#\"style=\"color: #000000\" onclick=\"load_neuron('" . $object . "');activate_all();return false;\">" . $object . "</a></h4>";
                           }else{
                             $uploaded_files .= " |<h4><a href=\"#\" style=\"color: #000000\" onclick=\"load_neuron('" . $object . "');activate_all();return false;\">" . $object . "</a></h4>";
                           }
                      }
                    }                      
                  }
                }
              }
              if($uploaded_files == ""){
                //$uploaded_files = "No files uploaded yet.";
              }
               echo $uploaded_files;
               ?>              
               </div>
                </span>
                </div>
                
            </div>
               
            </div>
            <!--upload file script-->

            <!-- JavaScript Includes -->
            

            <!--end upload file script-->
        <!--
            
            START OF CANVAS (3D VIEW OF NEURON)
        
        -->
            <script src="three.min.js"></script>
            <script src="TrackballControls.js"></script>


            
            <script language="javascript">
            var lines, rendererCanvas,/* rendererWebGL,*/ scene, camera, controlsC/*, controlsW*/;
            var animationID;



            function init() {
                var geometry, material;
                
                //document.body.style.cssText = ' font: 600 12pt monospace; margin: 0; overflow: hidden; ';
                
                var info = document.body.appendChild(document.createElement('div'));
                //info.style.cssText = 'left: 0; margin-top: 60px ; position: blocked; ';
                
                /*info.innerHTML = info.txt =
                '<h1 style=margin:0; align="center" >REMOD NEURON</h1>'*//* +
                'Line Width <input id=inpWidth type=range min=1 max=20 step=1 value=5 ></input> ~ ' +
                'Use pointing device to pan, zoom and rotate'*/;
                
                /*inpWidth.title = "Slide to widen lines. Do you notice any differences between the two panels?";
                inpWidth.onchange = function () {
                    drawIt(inpWidth.value);
                };*/
                
                rendererCanvas = new THREE.CanvasRenderer();
                rendererCanvas.setClearColor(0xDFE5E9);
               
                document.body.appendChild(rendererCanvas.domElement);
                //rendererCanvas.domElement.style.cssText = 'border: 5px solid #BEBEBE; right: 2%; position: fixed; top: 150px; width: 45%; height: 50% ; ';
                rendererCanvas.domElement.style.cssText = 'border: 0px solid #BEBEBE;  position: fixed; top: 350px; right:0%;  z-index:-1;margin-top:-300px;overflow:hidden;  ';
                //rendererCanvas.domElement.setPosition(0, 0);
                //rendererCanvas.onclick = "toggleAnimation(this)";

                //rendererCanvas.centre = { x : 427.5, y : 127.5, z : 177.5};
                /*rendererWebGL = new THREE.WebGLRenderer({
                                                        alpha: 1,
                                                        antialias: true,
                                                        clearColor: 0xffffff
                                                        });
                rendererWebGL.setSize(0.45 * window.innerWidth, window.innerHeight - 100);
                document.body.appendChild(rendererWebGL.domElement);
                rendererWebGL.domElement.style.cssText = 'border: 1px solid #000000; right: 2%; position: absolute; top: 80px; width: 45%;';*/
                
                scene = new THREE.Scene();
                //camera = new THREE.PerspectiveCamera(40, 0.4 * window.innerWidth  / (window.innerHeight - 100), 1, 2000);
                camera = new THREE.PerspectiveCamera(40, 0.8*window.innerWidth / (window.innerHeight-100 ), 1, 10000);
                camera.position.set(115, 115, 115);
                controlsC = new THREE.TrackballControls(camera, rendererCanvas.domElement);
                /*controlsW = new THREE.TrackballControls(camera, rendererWebGL.domElement);*/
                //controlsC.staticMoving = true;
                //controlsC.dynamicDampingFactor = 0.5;
                rendererCanvas.setSize(/*0.45 * window.innerWidth800*/(window.innerWidth/2)+100,window.innerHeight /*388window.innerHeight */);


                window.addEventListener('resize', onWindowResize, false);

                //controlsC.addEventListener( 'change', render );
                drawIt(0);
                //window.addEventListener( 'resize', onBucketResize, false );
                
                //lines.addEventListener()

            }
            function drawIt(width) {
                
                var material, geometry, line;
                if (lines) {
                    scene.remove(lines)
                }
                
                lines = new THREE.Object3D();
                

                //lines.position.set( 90, 65, 0 );
                scene.add(lines);

                
                //php read file
                <?php
                if(file_exists("/home/remod/users/$ses_id/neuron.txt")){
                    $filename = "/home/remod/users/$ses_id/neuron.txt";
                }else{
                    $filename = 'neuron.txt';
                }
                
                if (file_exists($filename)) {
                $txt_file    = file_get_contents($filename);
                $rows        = explode("\n", $txt_file);
                $flag = 0;
                echo "var line1 = [";
                foreach($rows as $row => $data)
                {
                    if($flag==0){
                        $flag=1;
                    }else{
                        echo ",";
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
                    
                    echo "v(";
                    echo $info[$row]['x1']/5;
                    echo ", ";
                    echo $info[$row]['y1']/5;
                    echo ", ";
                    echo $info[$row]['z1']/5;
                    echo ")";
                    
                }
                echo "]; ";
                
                $rows        = explode("\n", $txt_file);
                $flag = 0;
                echo "var line2 = [";
                foreach($rows as $row => $data)
                {
                    if($flag==0){
                        $flag=1;
                    }else{
                        echo ",";
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
                    
                    echo "v(";
                    echo $info[$row]['x2']/5;
                    echo ", ";
                    echo $info[$row]['y2']/5;
                    echo ", ";
                    echo $info[$row]['z2']/5;
                    echo ")";
                    
                }
                echo "]; ";
                $rows        = explode("\n", $txt_file);
                $flag = 0;
                echo "var thick = [";
                foreach($rows as $row => $data)
                {
                    if($flag==0){
                        $flag=1;
                    }else{
                        echo ",";
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
                    echo $info[$row]['thick']+0.1;
                }
                echo "];";
                $rows        = explode("\n", $txt_file);
                $flag = 0;
                echo "var color = [";
                foreach($rows as $row => $data)
                {
                    if($flag==0){
                        $flag=1;
                    }else{
                        echo ",";
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
                    echo $info[$row]['color'];
                }
                echo "];";
            }else{
            	echo "var line1=0;";
            	echo "var line2=0;";
            	echo "var thick=0;";
              echo "var color=0;";
            }
                ?>
                
                
                /*var line1 = [v(-3, 3, 0),v(-3, 3, 0)];*/
               // var line2 = [v(0, -3, -3),v(3, 3, 0)];
                
                /*var material = new THREE.LineBasicMaterial({
                                                           color: 0x5858FA,
                                                           linewidth: width
                                                           });*/

                
                for (var i = 0; i < line1.length; i++) {
                    var material = new THREE.LineBasicMaterial({
                                                               color: color[i],//0x3E50D7,
                                                               linewidth: thick[i]
                                                               });

                        geometry = new THREE.Geometry();

                        //geometry.applyMatrix( new THREE.Matrix4().makeTranslation(300, 300, 0) );
                        geometry.vertices = [line1[i], line2[i]];
                  
                        geometry.applyMatrix( new THREE.Matrix4().makeRotationX( - Math.PI /2  ) );
                        //geometry.applyMatrix( new THREE.Matrix4().makeTranslation( 0, 2, 0 ) );
                        line = new THREE.Line(geometry, material);
                        line.position.x= 5;
                        line.position.y =5;
                        lines.add(line);
                        
                    
                }
                //lines.position.x = 80;
				//lines.position.y = 80;
                animate();
            }
              
              function reDrawIt(line1,line2,thick,color){
                cancelAnimationFrame(animationID);
                
                var material, geometry, line;
                if (lines) {
                    scene.remove(lines);
                }
                
                lines = new THREE.Object3D();
                

                //lines.position.set( 90, 65, 0 );
                scene.add(lines);
                
                for (var i = 0; i < line1.length; i++) {
                    var material = new THREE.LineBasicMaterial({
                                                               color: color[i],//0x3E50D7,
                                                               linewidth: thick[i]
                                                               });

                        geometry = new THREE.Geometry();
                        
                        //geometry.applyMatrix( new THREE.Matrix4().makeTranslation(300, 300, 0) );
                        geometry.vertices = [line1[i], line2[i]];
                  //alert(i + ": " +   line1[i] + "- " +  line2[i])
                        geometry.applyMatrix( new THREE.Matrix4().makeRotationX( - Math.PI /2  ) );
                        //geometry.applyMatrix( new THREE.Matrix4().makeTranslation( 0, 2, 0 ) );
                        line = new THREE.Line(geometry, material);
                        line.position.x= 5;
                        line.position.y =5;
                        lines.add(line);
                        
                    
                }
                
                animate();                
              }

            function onWindowResize() {
                //windowHalfX = window.innerWidth / 2;
                //windowHalfY = window.innerHeight / 2;
                
                camera.aspect = window.innerWidth / window.innerHeight;
                camera.updateProjectionMatrix();
                rendererCanvas.setSize((window.innerWidth/2)+100,window.innerHeight);
                //rendererCanvas.setSize(0.45 * window.innerWidth, 300);
                //rendererWebGL.setSize(0.45 * window.innerWidth, window.innerHeight - 100);
            }

            function animate() {
                animationID = requestAnimationFrame(animate);
                lines.rotateY(0.0010);
                controlsC.update();
                /*controlsW.update();*/
                rendererCanvas.render(scene, camera);

                /*rendererWebGL.render(scene, camera);*/
            }

            function v(x, y, z) {
                return new THREE.Vector3(x, y, z);
            }
            </script>
            <!--
            
            END OF CANVAS (3D VIEW OF NEURON)
        
             -->

            <div style="width:50%;height:20%; left:0%; bottom:0%; align:left; margin-top:300px;position:fixed;border: 0px solid #BEBEBE; background-color:#DFE5E9; background: rgba(0, 0, 0, 0); "></div>
          
        <!-- END MAIN CONTENT -->

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
    <script src="assets/plugins/mmenu/js/jquery.mmenu.min.all.js"></script>
    <script src="assets/plugins/nprogress/nprogress.js"></script>
    <script src="assets/plugins/charts-sparkline/sparkline.min.js"></script>
    <script src="assets/plugins/breakpoints/breakpoints.js"></script>
    <script src="assets/plugins/numerator/jquery-numerator.js"></script>
    <!-- END MANDATORY SCRIPTS -->
    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/metrojs/metrojs.min.js"></script>
    <script src='assets/plugins/fullcalendar/moment.min.js'></script>
    <script src='assets/plugins/fullcalendar/fullcalendar.min.js'></script>
    <script src="assets/plugins/simple-weather/jquery.simpleWeather.min.js"></script>
    <script src="assets/plugins/google-maps/markerclusterer.js"></script>
    <script src="http://maps.google.com/maps/api/js?sensor=true"></script>
    <script src="assets/plugins/google-maps/gmaps.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.animator.min.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.time.min.js"></script>
    <script src="assets/plugins/charts-morris/raphael.min.js"></script>
    <script src="assets/plugins/charts-morris/morris.min.js"></script>
    <script src="assets/plugins/jquery-ui-touch-punch/jquery.ui.touch-punch.min.js"></script>
    <!--<script src="assets/js/calendar.js"></script>-->
    <script src="assets/js/dashboard.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="assets/js/application.js"></script>
    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/multi_upload/jquery.min.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="assets/multi_upload/jquery.knob.js"></script>
        <!-- jQuery File Upload Dependencies -->
    <script src="assets/multi_upload/jquery.ui.widget.js"></script>

    <script src="assets/multi_upload/jquery.iframe-transport.js"></script>

    <script src="assets/multi_upload/jquery.fileupload.js"></script>
    <!-- Our main JS file -->
    <script src="assets/multi_upload/script.js"></script>      

<!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/dropzone/dropzone.min.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js"></script>
    <script src="assets/plugins/jquery-file-upload/tmpl.min.js"></script>
    <script src="assets/plugins/jquery-file-upload/load-image.min.js"></script>
    <script src="assets/plugins/jquery-file-upload/canvas-to-blob.min.js"></script>
    <script src="assets/plugins/jquery-file-upload/jquery.blueimp-gallery.min.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/jquery.iframe-transport.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-process.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-image.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-audio.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-video.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-validate.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/jquery.fileupload-ui.js"></script>
    <script src="assets/plugins/jquery-file-upload/js/main.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->

    <!-- BEGIN PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/modal/js/classie.js"></script>
    <script src="assets/plugins/modal/js/modalEffects.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->

 <script type="application/javascript" language="javascript">   
   
$( document ).ready(function() {
     
   Dropzone.options.myAwesomeDropzone = {
  addRemoveLinks: true,
  init: function() {
    this.on("addedfile", function(file) { file_has_added(file); });
    this.on("success", function(file) { file_has_uploaded(file); });
  },
  accept: function(file, done) {

    var tmp = (file.name).split(".");
    var i = 0;
    while(tmp[i+1]!=null){
      i++;
    }
    var ext =tmp[i];

    if (ext != "hoc" && ext != "swc") {
      done("File extension is not accepted (only hoc and swc).");
    }
    else { done(); }
  }
};
     
});
   
   
   // Handle here the cell
   init();
   animate();

</script>
      <script src="ajax.js"></script>
</body>

</html>

