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
<!--[if gt IE 8]><!--> <html class="no-js sidebar-large"> <!--<![endif]-->

<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
    <!-- BEGIN META SECTION -->
    <meta charset="utf-8">
    <title>Remod-Contact</title>
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
    <link rel="stylesheet" href="assets/plugins/summernote/summernote.css">
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>
    <!--email-->
    <script src="http://code.jquery.com/jquery-latest.js"></script>

    <link rel="icon" type="image/gif" href="assets/img/animated_favicon1.gif" >
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

	<script>
	$(document).ready(function(){

// 	$('#submit').click(function(){
// 		//$("#mycontactform").ajaxForm({url: 'send.php', type: 'post'})

// 	$.post("send.php", $("#mycontactform").serialize(),  function(response) {   
// 	 $('#success').html(response);
// 	 //$('#success').hide('slow');
// 	});
// 	return false;


// 	});

	});
	</script>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-51341189-1', 'remod.gr');
      ga('send', 'pageview');

    </script>
	<!-- end of email-->
</head>

<body data-page="email_compose">
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
    <div id="wrapper">
        <!-- BEGIN MAIN SIDEBAR -->
        <nav id="sidebar">
            <div id="main-menu">
                <ul class="sidebar-nav">
                    <li >
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

                    <li class="current">
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
        <div id="main-content" class="send-message" >
            <div class="page-title" style="margin-top:60px;"> <i class="icon-custom-left"></i>
                <h3><strong>Send</strong> Feedback</h3>
            </div>
            <div class="row" style="margin-top:40px;">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        <div class="panel-body">
                            <div class="row">
                                <div class="col-md-12">
                                    
                                    
                                    <form class="form-horizontal p-t-20" role="form" action="" id="mycontactform" method="post">
                                    
                                        <div class="form-group">
                                            <label for="from" class="col-sm-2 control-label">From:</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="from">
                                                    <!--<span class="input-group-addon bg-white cursor-pointer" data-toggle="collapse" data-target="#cc">     
                               						 CC/BCC <span class="caret"></span>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="subject" class="col-sm-2 control-label">Subject:</label>
                                            <div class="col-sm-10">
                                                <div class="input-group">
                                                    <input type="text" class="form-control" id="subject">
                                                    <!--<span class="input-group-addon bg-white cursor-pointer" data-toggle="collapse" data-target="#cc">     
                               						 CC/BCC <span class="caret"></span>-->
                                                </div>
                                            </div>
                                        </div>
                                        
                                        <div class="form-group">
                                            <label for="to" class="col-sm-2 control-label">To:</label>
                                            <div class="col-sm-6">
                                                <div class="btn-group">
                                                    <button type="button" class="btn btn-default dropdown-toggle width-230" data-toggle="dropdown">
                                                        <i class="fa fa-ellipsis-horizontal"></i><span class="float-left"><strong><?php echo CONTACT_EMAIL;?></strong>
                                                        <input id="to" value="<?php echo CONTACT_EMAIL;?>" hidden></span>
                                                        <!--<span class="float-right"><i class="fa fa-angle-down"></i></span>-->
                                                    </button>
                                                    <!--<ul class="dropdown-menu">
                                                        <li>
                                                            <a href="#">contact@remod.gr</a>
                                                        </li>
                                                    </ul>-->
                                                </div>
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <div class="summernote"></div>
	                                    <div class="text-center footer-message" name="message" id="message">

	                                        <!--<a href="#" class="btn btn-default"><i class="fa fa-times-circle"></i> Cancel</a>-->
	                                        <input class="btn btn-primary" type="button" onClick="validate_contact();" value="Send email" id="submit">
	                                        <!--<a class="btn btn-primary" type="submit" value="Send" id="submit"><i class="fa fa-share fa-fw"></i>Send email</a>-->
	                                    </div>
                                    
                                    </form>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="assets/plugins/summernote/summernote.min.js"></script>
    <!-- END PAGE LEVEL SCRIPTS -->
    <script src="assets/js/application.js"></script>

    <script src="assets/js/jquery-1.10.2.min.js"></script>
    <script src="assets/multi_upload/jquery.min.js"></script>

<script type="application/javascript" language="javascript">
	function isValidEmailAddress(emailAddress)
	{
		  var pattern = new RegExp(/^(("[\w-\s]+")|([\w-]+(?:\.[\w-]+)*)|("[\w-\s]+")([\w-]+(?:\.[\w-]+)*))(@((?:[\w-]+\.)*\w[\w-]{0,66})\.([a-z]{2,6}(?:\.[a-z]{2})?)$)|(@\[?((25[0-5]\.|2[0-4][0-9]\.|1[0-9]{2}\.|[0-9]{1,2}\.))((25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\.){2}(25[0-5]|2[0-4][0-9]|1[0-9]{2}|[0-9]{1,2})\]?$)/i);
	  return pattern.test(emailAddress);
	}

	function validate_contact()
	{
			isValid = true;
			var to = $.trim($('#to').val());
			var msg = $(".note-editable").children("p").html();
    //var msg = $.trim($('#message').val());
    //alert(to);
    //alert(msg);
			if(msg=='<br>')
			{
				 isValid = false;
				 //$('#msg_message').html('Please enter message!').show();
                alert('Please enter message!');
                return false;
			}else
			{
				//$('#msg_message').html('').show();
			}
			//alert("current stack is " + $(".note-editable").children("p").html());
			var em = $.trim($('#from').val());
			//alert(msg);
			if(!em || em.length <= 0 || !isValidEmailAddress(em))
			{
				 isValid = false;
				 //$('#msg_from').html('Please enter name!').show();
        alert('Please enter email!');
              return false;
			}else
			{
				//$('#msg_from').html('').show();
			}
			
			var sb = $.trim($('#subject').val());
			//alert(ttl);
			if(!sb && sb.length <= 0)
			{
				 isValid = false;
				// $('#msg_subject').html('Please enter subject!').show();
        alert('Please enter subject!');
        return false;
			}else
			{
				//$('#msg_subject').html('').show();
			}
			if(isValid == true)
			{

				//alert('tejas');
				$.ajax({
					type: "POST",
					url: 'send.php', 
          data: {from: em, subject: sb, message: msg ,to: to},
					success: function(resp){
						   $('#mycontactform')[0].reset();
						   $(".note-editable").children("p").html('');
						   alert(resp);
							/*if(resp == "ERR")
							{
								evalid = false;
							}
							else if(resp == "SUCC")
							{
								// $("#msg_email1").html("");
								 evalid = true;
							}*/
						}
					});
			}else
			{
				return isValid;
			}
	}
	</script>

</body>

</html>
