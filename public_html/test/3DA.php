<?php session_start();
$ses_id = session_id(); 

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
    
    <!--<script language="javascript">
        function Select1(value){
            alert("DONE");
        	<?php 
        	/*$command = 'python application/parse_neuron.py application/smith_new_axon/0-2_axon.hoc';
            //$python = 'command';
            echo $python;
        	echo "<h1>DONE</h1>";*/
        	 ?>
            document.getElementById("Category1").value=value;
            alert(value);
        }
    </script>-->
    <!-- TERMINAL -->
    <link href="assets/css/onion.css" rel="stylesheet">
    <!-- TERMINAL-->
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
        <!--<div class="container-fluid">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#sidebar">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a id="menu-medium" class="sidebar-toggle tooltips">
                    <i class="fa fa-outdent"></i>
                </a>
                <a class="navbar-brand" href="index.html">
                    <img src="assets/img/CBL211.png" alt="logo" width="279" height="66">
                </a>
            </div>
            <div class="navbar-center" style="font-weight:bold;">Remod</div>
            <div class="navbar-collapse collapse">-->
                <!-- BEGIN TOP NAVIGATION MENU -->
                <!--<ul class="nav navbar-nav pull-right header-menu">-->
                    <!-- BEGIN NOTIFICATION DROPDOWN -->
                    <!--<li class="dropdown" id="notifications-header">-->
                        <!--<a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="glyph-icon flaticon-notifications"></i>
                            <span class="badge badge-danger badge-header">9</span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header clearfix">
                                <p class="pull-left">Notifications</p>
                            </li>
                            <li>
                                <ul class="dropdown-menu-list withScroll" data-height="220">
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-star p-r-10 f-18 c-orange"></i>
                                            Steve have rated your photo
                                            <span class="dropdown-time">Just now</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-heart p-r-10 f-18 c-red"></i>
                                            John added you to his favs
                                            <span class="dropdown-time">15 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-file-text p-r-10 f-18"></i>
                                            New document available
                                            <span class="dropdown-time">22 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                                            New picture added
                                            <span class="dropdown-time">40 mins</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-bell p-r-10 f-18 c-orange"></i>
                                            Meeting in 1 hour
                                            <span class="dropdown-time">1 hour</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-bell p-r-10 f-18"></i>
                                            Server 5 overloaded
                                            <span class="dropdown-time">2 hours</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-comment p-r-10 f-18 c-gray"></i>
                                            Bill comment your post
                                            <span class="dropdown-time">3 hours</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#">
                                            <i class="fa fa-picture-o p-r-10 f-18 c-blue"></i>
                                            New picture added
                                            <span class="dropdown-time">2 days</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-footer clearfix">
                                <a href="#" class="pull-left">See all notifications</a>
                                <a href="#" class="pull-right">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </li>
                        </ul>-->
                   <!-- </li>-->
                    <!-- END NOTIFICATION DROPDOWN -->
                    <!-- BEGIN MESSAGES DROPDOWN -->
                    <!--<li class="dropdown" id="messages-header">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <i class="glyph-icon flaticon-email"></i>
                            <span class="badge badge-primary badge-header">
                             8
                        </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li class="dropdown-header clearfix">
                                <p class="pull-left">
                                    Messages
                                </p>
                            </li>
                            <li class="dropdown-body">
                                <ul class="dropdown-menu-list withScroll" data-height="220">
                                    <li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="assets/img/avatars/avatar3.png" alt="avatar 3">
                                        </span>
                                        <div class="clearfix">
                                            <div>
                                                <strong>Alexa Johnson</strong> 
                                                <small class="pull-right text-muted">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>12 mins ago
                                                </small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="assets/img/avatars/avatar4.png" alt="avatar 4">
                                        </span>
                                        <div class="clearfix">
                                            <div>
                                                <strong>John Smith</strong> 
                                                <small class="pull-right text-muted">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>47 mins ago
                                                </small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="assets/img/avatars/avatar5.png" alt="avatar 5">
                                        </span>
                                        <div class="clearfix">
                                            <div>
                                                <strong>Bobby Brown</strong>  
                                                <small class="pull-right text-muted">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>1 hour ago
                                                </small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </li>
                                    <li class="clearfix">
                                        <span class="pull-left p-r-5">
                                            <img src="assets/img/avatars/avatar6.png" alt="avatar 6">
                                        </span>
                                        <div class="clearfix">
                                            <div>
                                                <strong>James Miller</strong> 
                                                <small class="pull-right text-muted">
                                                    <span class="glyphicon glyphicon-time p-r-5"></span>2 days ago
                                                </small>
                                            </div>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </li>
                                </ul>
                            </li>
                            <li class="dropdown-footer clearfix">
                                <a href="mailbox.html" class="pull-left">See all messages</a>
                                <a href="#" class="pull-right">
                                    <i class="fa fa-cog"></i>
                                </a>
                            </li>
                        </ul>
                    </li>-->
                    <!-- END MESSAGES DROPDOWN -->
                    <!-- BEGIN USER DROPDOWN -->
                    <!--<li class="dropdown" id="user-header">
                        <a href="#" class="dropdown-toggle c-white" data-toggle="dropdown" data-hover="dropdown" data-close-others="true">
                            <img src="assets/img/avatars/avatar2.png" alt="user avatar" width="30" class="p-r-5">
                            <span class="username">Help</span>
                            <i class="fa fa-angle-down p-r-10"></i>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="extra_profile.html">
                                    <i class="glyph-icon flaticon-account"></i> My Profile
                                </a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="glyph-icon flaticon-calendar"></i> My Calendar
                                </a>
                            </li>
                            <li>
                                <a href="calendar.html">
                                    <i class="glyph-icon flaticon-settings21"></i> Account Settings
                                </a>
                            </li>
                            <li class="dropdown-footer clearfix">
                            <a href="javascript:;" class="toggle_fullscreen" title="Fullscreen">
                                <i class="glyph-icon flaticon-fullscreen3"></i>
                            </a>
                            <a href="lockscreen.html" title="Lock Screen">
                                <i class="glyph-icon flaticon-padlock23"></i>
                            </a>
                            <a href="login.html" title="Logout">
                                <i class="fa fa-power-off"></i>
                            </a>
                        </li>
                        </ul>
                    </li>-->
                    <!-- END USER DROPDOWN -->
                    <!-- BEGIN CHAT HEADER -->
                    <!--<li id="chat-header">
                        <a href="#" class="c-white" id="chat-toggle">
                            <i class="glyph-icon flaticon-speech76 f-24"></i>
                            <span id="chat-notification" class="notification notification-danger hide" data-delay="2000"></span>
                        </a>
                        <div id="chat-popup" class="chat-popup hide" data-delay="2000">
                            <div class="arrow-up"></div>
                            <div class="chat-popup-inner bg-blue">
                                <div>
                                    <div class="clearfix w-600">
                                        <img src="assets/img/avatars/avatar3.png" alt="avatar 3" width="30" class="pull-left img-circle p-r-5">Alexa Johnson</div>
                                    <div class="message m-t-5">Hey you there?</div>
                                </div>
                            </div>
                        </div>
                    </li>-->
                    <!-- END CHAT HEADER -->
                <!--</ul>-->
                <!-- END TOP NAVIGATION MENU -->
           <!-- </div>
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
                        <a href="people.php"><i class="glyph-icon flaticon-account"></i><span class="sidebar-text">People</span><!--<span class="fa arrow"></span>--></a>
                          
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
                    <a class="pull-left toggle_fullscreen" href="#" rel="tooltip" data-placement="top" data-original-title="Fullscreen"><i class="glyph-icon flaticon-fullscreen3"></i></a>
                    <!--<a class="pull-left" href="lockscreen.html" rel="tooltip" data-placement="top" data-original-title="Lockscreen"><i class="glyph-icon flaticon-padlock23"></i></a>
                    <a class="pull-left" href="login.html" rel="tooltip" data-placement="top" data-original-title="Logout"><i class="fa fa-power-off"></i></a>-->
                </div>
            </div>
        </nav>
        <!-- END MAIN SIDEBAR -->

        <script type="text/javascript">
        	$('label').click(function(){
		    $(this).children('span').addClass('input-checked');
		    $(this).parent('.toggle').siblings('.toggle').children('label').children('span').removeClass('input-checked');
		});
        </script>

        <!-- BEGIN MAIN CONTENT -->
        <div id="main-content" class="dashboard">
            <!--<form id="upload" class="upload" name="form_update" action="upload.php" accept-charset="UTF-8" method="post"  enctype="multipart/form-data"> 
                <div id="drop">
                    
                    Drag & Drop
                    <a >BROWSE</a>
                    
                    <input type="file" onChange="onchange_submit();" name="txt_doc" id="txt_doc" multiple>
                    <div style="clear:both; padding-bottom:20px;">
                <ul>
                    <!-- The file uploads will be shown here -->
                <!--</ul>
               <div id="loading" style="display:none;" class="loder"><img src="assets/img/loader.gif" /></div> 
                </div>
                
                </div>
            </form>-->
            
            
            <div class="modal fade" id="modal-responsive" aria-hidden="true">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <div class="modal-header">
                            <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                            <h4 class="modal-title" id="myModalLabel"><strong>Multiple</strong> File Upload</h4>
                        </div>
                        <div class="modal-body">
                            
                                              <div class="panel panel-default">
                                              
                                              <div class="panel-body">
                                                  <div class="row">
                                                    <div class="col-md-12">
                                                      <!--<p>DropzoneJS is an open source library that provides drag'n'drop file uploads with image previews.</p><br>-->
                                                      <form action="upload.php" class="dropzone" method="post">
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
            
                <!--<div class="pull-left" style="margin-left:-145px">-->
                    
                <!--<div class="col-md-6">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            <h3 class="panel-title"><strong>Extra</strong> Validator types</h3>
                        </div>
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12 col-sm-12 col-xs-12">   
                                <form id="form2" class="form-horizontal" parsley-validate>
                                        <div class="form-group"> --> 
                                        <div class="row pull-left " style="margin-left:3px;">
                <div class="col-md-3" style="margin-top:60px;">
                    <button class="btn btn-default" data-toggle="modal" data-target="#modal-responsive" style="width:323px;"><i class="fa fa-cloud-upload"></i> Upload </button>
                </div>
                <div class="pull-left p-l-20 " style="margin-left:-145px;margin-top:100px;">
                
           		<div class="pull-left p-l-100 btn-group btn-group-vertical">
                <ul>
                    <li align="center" style="font-weight:bold; font-size:20px; color:#18a689;text-align:center">WHO</li>
                    <li><button href="#" class=" btn btn-success" style="width:150px; " disabled><input type="radio" name="who" value="aLL_terminal" hidden>All Terminal</button></li>
                    <li><button href="#" class=" btn btn-success" style="margin-top:2px; width:150px" disabled><input type="radio" name="who" value="all_apical"  hidden>Apical Terminal</button></li>
                    <li><button href="#" class=" btn btn-success" style="margin-top:2px; width:150px" disabled><input type="radio" name="who" value="all_basal" hidden>Basal Terminal</button></li>
                    <li><button href="#" class=" btn btn-success" style="margin-top:2px; width:150px" id="randomAlll" onclick="Select1(this);" active><input type="radio" name="who" value="random_all" style="margin-right:16px;" hidden>Random All<input type="number" max="100" min="0"  parsley-luhn="true" placeholder="Number" style="width:40px; margin-right:20px; visibility:hidden;" id="randomAll"></button></li>
                    <li><button href="#" class=" btn btn-success" style="margin-top:2px; width:150px" disabled><input type="radio" name="who" value="random_apical" hidden>Random Apical</button></li>
                    <li><button href="#" class=" btn btn-success" style="margin-top:2px; width:150px" disabled><input type="radio" name="who" value="random_basal" hidden>Random Basal</button></li>
                    <li><button href="#" class=" btn btn-success" style="margin-top:2px; width:150px " disabled><input type="radio" name="who" value="manual" hidden>Manual</button></li>
                </ul>
            
                </div>
            	<div class="pull-right btn-group btn-group-vertical">
                <ul>
                    <li align="center" style="font-weight:bold; font-size:20px; color:#18a689;text-align:center">WHAT</li>
                    <li><button type="radio" name="what" class=" btn btn-success" style="width:150px" name="what" value="shrink" id="shrink" disabled ><input type="radio" name="what" value="shrink" id="shrink" hidden>Shrink</button></li>
                    <li><button type="radio" name="what" class=" btn btn-success" style="margin-top:2px; width:150px" name="what" value="remove" id="remove" disabled><input type="radio" name="what" value="remove" id="remove" hidden>Remove</button></li>
                    <li><button type="radio" name="what" class=" btn btn-success" style="margin-top:2px; width:150px" name="what" value="extend" id="extend" disabled><input type="radio" name="what" value="extend" id="extend" hidden>Extend</button></li>
                    <li><button type="radio" name="what" class=" btn btn-success" style="margin-top:2px; width:150px" name="what" value="branch" id="branch" disabled><input type="radio" name="what" value="branch" id="branch" hidden>Branch</button></li>
                    <li align="center" style="font-weight:bold; margin-top:12px; font-size:20px; color:#18a689;text-align:center">EXTENT</li>
                    <li><button type="radio" class=" btn btn-success" style="margin-top:2px; width:74px" name="extent" value="percent" disabled><input type="radio" name="extent" value="percent" hidden>%</button><button type="radio" class=" btn btn-success" style="margin-top:2px; margin-left:2px; width:74px" name="extent" value="micrometers" disabled><input type="radio" name="extent" value="micrometers" hidden>μm</button></li>
                    
                    <li class="col-m"></li>
                    <li><input type="text" class="form-control" value="num" style="margin-top:5px; width:150px; heigh:20px;" disabled></li>
                    
                </ul>
            </div>
            </div>
            </div>  
                                    <!--</form>
                                </div>
                            </div>
                        
            </div>
            
            
           
            
            </div>
            </div>-->


            
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



            init();
            animate();

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
                camera.position.set(240, 240, 240);
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
                    
                    echo "v(";
                    echo $info[$row]['x1']/5;
                    echo ", ";
                    echo $info[$row]['y1']/3;
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
                    
                    echo "v(";
                    echo $info[$row]['x2']/5;
                    echo ", ";
                    echo $info[$row]['y2']/3;
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
                    echo $info[$row]['thick'];
                }
                echo "];";
            }else{
            	echo "var line1=0;";
            	echo "var line2=0;";
            	echo "var thick=0;";
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
                                                               color: 0x3E50D7,
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
                requestAnimationFrame(animate);
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


            <script language="javascript">
            function Select1(value){
                document.getElementById("randomAll").style.visibility="visible";
                document.getElementById("Category1").value=value;
            }

            function Select2(){
                
            }

            function MyFunc(){
                
                var params="";
                for(i=0; i<document.finalform.elements.length; i++)
                {
                    var fieldName = document.finalform.elements[i].name;
                    var fieldValue = document.finalform.elements[i].value;
                    alert(fieldName);
                    alert(fieldValue);
                    // use the fields, put them in a array, etc.
                    
                    // or, add them to a key-value pair strings,
                    // as in regular POST
                    
                    //params += fieldName + '=' + fieldValue + '&';
                }}
            </script>
            <div class="chatMsgContainer" style="overflow-y: scroll; pointer-events: auto; cursor: auto; display: block; ">
                <div class="chatMsg" style="display: block;">
                <span class="actualText dialogNobody">> Online (48): rprentki, corvidae, cedric, sapphiresun, renate, nkem, nkem_test, metroid_dragon, galarun, dejavu1031, mistereaton, crazybot, dougrike, ic167, matollik, aldof, taylorv, Marta_M, ggreminder, sambob496, inquizitor, michellewooten, dereksims, kockas, Kekelktus, jdoncarlos, Neonnq, klimp, Jenny223, vogon, HariSeldon, sebbuku, pzdebeer, Georgios, magnuson, mywire, ChrisFox, (137343), Rachi, wyattfoard, Nodens, sonicthewedge, hakenstock, gammaxgoblin, Hazm, tellroman, ReginaSaphier, gyutan
                </span>
                </div>
                
                <div class="chatMsg" style="display: block;">
                    <span class="actualText dialogNobody">> dereksims earned 90 points;ksbdjv;sDKJVBs;dvkljsbdv;ksDJVB;skdbjvs</span>
                </div>
                <div class="chatMsg">
                    <span class="actualText dialogNobody">> vogon earned 74 points</span>
                </div>
                <div class="chatMsg">
                    <span class="actualText dialogNobody"> a5hm0r trailblazed a cube!</span>
                </div><div class="chatMsg"><span class="actualText dialogNobody"> walty earned 104 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> HariSeldon earned 592 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> klaus13 earned 380 points from trailblazing</span></div><div class="chatMsg"><span class="actualText dialogNobody"> wolfryder101 earned 192 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> Kekelktus trailblazed a cube!</span></div><div class="chatMsg"><span class="actualText dialogNobody"> HariSeldon trailblazed a cube!</span></div><div class="chatMsg"><span class="actualText dialogNobody"> mywire earned 380 points</span></div>
                <div class="chatMsg"><span class="actualText dialogNobody"> a5hm0r earned 792 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> vogon earned 80 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> dereksims earned 74 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> Rachi earned 77 points</span></div><div class="chatMsg"><span class="actualText dialogNobody">Rachi earned the <a href="#" style="color: yellow; cursor: pointer;">Tutorial Annihilated</a> achievement!</span></div><div class="chatMsg"><span class="actualText dialogNobody"> aldof earned 582 points</span></div>
                <div class="chatMsg">
                    <div class="chatCrewCircle" style="background: rgb(204, 0, 0);"></div>
                    <span class="userEnc">&lt;</span>
                    <span class="userName">aldof</span>
                    <span class="userEnc">&gt;</span><span class="dialogNobody"></span>
                    <span class="actualText"> kdkdkddkdkdsee you later guys</span>
                </div>
                <div class="chatMsg">
                    <span class="actualText dialogNobody"> HariSeldon trailblazed a cube!</span>
                </div>
                <div class="chatMsg">
                    <span class="actualText dialogNobody"> vogon earned 62 points</span>
                </div><div class="chatMsg"><span class="actualText dialogNobody"> aldof earned 694 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> HariSeldon trailblazed a cube!</span></div><div class="chatMsg"><span class="actualText dialogNobody"> Marta_M earned 80 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> vogon earned 64 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> 1sigor earned 60 points</span></div><div class="chatMsg"><span class="actualText dialogNobody"> klimp trailblazed a cube!</span></div><div class="chatMsg"><span class="actualText dialogNobody">eyewire444 earned the <a href="#" style="color: yellow; cursor: pointer;">Birthday</a> achievement!</span></div>
                <div class="chatMsg"><span class="actualText dialogNobody">eyewire444 earned the <a href="#" style="color: yellow; cursor: pointer;">Anniversary</a> achievement!</span></div><div class="chatMsg"><span class="actualText dialogNobody">eyewire444 earned the <a href="#" style="color: yellow; cursor: pointer;">Tutorial Annihilated</a> achievement!</span></div>
            </div>
            
            <!--<textarea style="width:50%;height:20%; right:0%; bottom:0%;align:right;  margin-top:300px;margin-left:200px;position:fixed;border: 1px solid #BEBEBE; background-color:#DFE5E9; background: rgba(0, 0, 0, 0);" disabled>Explanation of the different parts:

Margin - Clears an area around the border. The margin does not have a background color, it is completely transparent
Border - A border that goes around the padding and content. The border is inherited from the color property of the box
Padding - Clears an area around the content. The padding is affected by the background color of the box
Content - The content of the box, where text and images appear
In order to set the width and height of an element correctly in all browsers, you need to know how the box model works.Explanation of the different parts:

Margin - Clears an area around the border. The margin does not have a background color, it is completely transparent
Border - A border that goes around the padding and content. The border is inherited from the color property of the box
Padding - Clears an area around the content. The padding is affected by the background color of the box
Content - The content of the box, where text and images appear
In order to set the width and height of an element correctly in all browsers, you need to know how the box model works.



</textarea>-->
            <div style="width:50%;height:20%; left:0%; bottom:0%; align:left; margin-top:300px;position:fixed;border: 0px solid #BEBEBE; background-color:#DFE5E9; background: rgba(0, 0, 0, 0); "></div>
            <!--
            
            END OF CANVAS (3D VIEW OF NEURON)
        
             -->



            <!--////////////////////////////////////////////////////////////////
             /////////////////////////////////////////////////////////////////// 
             ////////////////////////////////////////////////////////////////-->
            

            
                        
            <!--////////////////////////////////////////////////////////////////
             ///////////////////////////////////////////////////////////////////
             ////////////////////////////////////////////////////////////////-->
          
        <!-- END MAIN CONTENT -->

    </div>
    <!-- END WRAPPER -->
    <!-- BEGIN CHAT MENU -->
    <!--<nav id="menu-right">
        <ul>
            <li class="mm-label label-big">ONLINE</li>
            <li class="img no-arrow have-message">
                <span>
                    <i class="online"></i>
                    <img src="assets/img/avatars/avatar3.png"/>
                    <div class="chat-name">Alexa Johnson</div>
                    <div class="pull-right badge badge-danger hide">3</div>
                    <div >Los Angeles</div>
                </span>
                <ul class="chat-messages">
                    <li class="img"><span><div class="chat-detail"><img src="assets/img/avatars/avatar3.png"/><div class="chat-bubble">Hi you!</div></div></span>
                    </li>
                    <li class="img"><span><div class="chat-detail"><img src="assets/img/avatars/avatar3.png"/><div class="chat-bubble">You there?</div></div></span>
                    </li>
                    <li class="img"><span><div class="chat-detail"><img src="assets/img/avatars/avatar3.png"/><div class="chat-bubble">Let me know when you come back</div></div></span>
                    </li>
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                    <i class="online"></i>
                    <img src="assets/img/avatars/avatar2.png" alt="avatar 2"/>
                    <div class="chat-name">Bobby Brown</div>
                    <div>New York</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                    <i class="busy"></i>
                    <img src="assets/img/avatars/avatar13.png" alt="avatar 13"/>
                    <div class="chat-name">Fred Smith</div>
                    <div>Atlanta</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                    <i class="away"></i>
                    <img src="assets/img/avatars/avatar4.png" alt="avatar 4"/>
                    <div class="chat-name">James Miller</div>
                    <div>Seattle</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                    <i class="online"></i>
                    <img src="assets/img/avatars/avatar5.png" alt="avatar 5"/>
                    <div class="chat-name">Jefferson Jackson</div>
                    <div>Los Angeles</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="mm-label label-big m-t-30">OFFLINE</li>

            <li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar6.png" alt="avatar 6"/>
                    <div class="chat-name">Jordan</div>
                    <div>Savannah</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar7.png" alt="avatar 7"/>
                    <div class="chat-name">Kim Addams</div>
                    <div>Birmingham</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar8.png" alt="avatar 8"/>
                    <div class="chat-name">Meagan Miller</div>
                    <div>San Francisco</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                        <i class="offline"></i>
                        <img src="assets/img/avatars/avatar9.png" alt="avatar 9"/>
                        <div class="chat-name">Melissa Johnson</div>
                        <div>Austin</div>
                    </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar12.png" alt="avatar 12"/>
                    <div class="chat-name">Nicole Smith</div>
                    <div>San Diego</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar11.png" alt="avatar 11"/>
                    <div class="chat-name">Samantha Harris</div>
                    <div>Salt Lake City</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
            <li class="img no-arrow">
                <span>
                    <i class="offline"></i>
                    <img src="assets/img/avatars/avatar10.png" alt="avatar 10"/>
                    <div class="chat-name">Scott Thomson</div>
                    <div>Los Angeles</div>
                </span>
                <ul class="chat-messages">
                    <div class="chat-input">
                        <input type="text" class="form-control send-message" placeholder="Type your message" />
                    </div>
                </ul>
            </li>
        </ul>
    </nav>-->
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
function onchange_submit()
{
    //$('#form_drag_drop').submit();
    $("form#form_update").submit(function(event){
         event.preventDefault();
         //alert('tejas');
        }); 
    //alert('tejas');
    $('#form_update').submit();
    $('#btn_upload').click();
    //alert('tejas');
}
</script>
</body>

</html>

