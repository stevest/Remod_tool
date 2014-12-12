<?php session_start();
$ses_id=session_id();
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
    <title>Remod-Statistics</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta content="" name="description" />
    <meta content="themes-lab" name="author" />
    <!-- END META SECTION -->
    <!-- BEGIN MANDATORY STYLE -->
    <link href="assets/css/icons/icons.min.css" rel="stylesheet">
    <link href="assets/css/bootstrap.min.css" rel="stylesheet">
    <!--<link href="assets/css/plugins.min.css" rel="stylesheet">-->
    <link href="assets/css/style.min.css" rel="stylesheet">
    <!-- END  MANDATORY STYLE -->
    <!-- BEGIN PAGE LEVEL STYLE -->
    <!-- END PAGE LEVEL STYLE -->
    <script src="assets/plugins/modernizr/modernizr-2.6.2-respond-1.1.0.min.js"></script>

    <link rel="icon" type="image/gif" href="assets/img/animated_favicon1.gif" >
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon" />

    <link href="assets/charts/css/nv.d3.css" rel="stylesheet" type="text/css">

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

    <!--                           Style of chart1                             -->
    <style>


    #chart1 {
      margin: 10px;
      min-width: 100px;
      min-height: 130px;
    /*
      Minimum height and width is a good idea to prevent negative SVG dimensions...
      For example width should be =< margin.left + margin.right + 1,
      of course 1 pixel for the entire chart would not be very useful, BUT should not have errors
    */
    }

    #chart1 svg {
      height: 650px;
    }

    #chart2 {
      height: 250px;
      margin: 10px;
      min-width: 100px;
      min-height: 100px;
    /*
      Minimum height and width is a good idea to prevent negative SVG dimensions...
      For example width should be =< margin.left + margin.right + 1,
      of course 1 pixel for the entire chart would not be very useful, BUT should not have errors
    */
    }


    #chart3 , #chart4 svg{
      height: 500px;
      min-width: 100px;
      min-height: 100px;
    /*
      margin: 10px;
      Minimum height and width is a good idea to prevent negative SVG dimensions...
      For example width should be =< margin.left + margin.right + 1,
      of course 1 pixel for the entire chart would not be very useful, BUT should not have errors
    */
    }


    </style>
    <!--                          end Style of chart1                           -->

</head>

<body data-page="charts">
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
        <nav id="sidebar" >
            <div id="main-menu">
                <ul class="sidebar-nav" style="margin-bottom:200px;">
                    <li>
                        <a href="3DA.php" ><i class="fa fa-dashboard"></i><span class="sidebar-text">Dashboard</span></a>
                    </li>
                    <li class="current">
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
        <div id="main-content" style="background-color:#ffffff;">
            <div class="page-title" style="margin-top:60px;"> <i class="icon-custom-left"></i>
                <h3><strong>Visual Statistics</strong></h3>
            </div>
            <!--                      CHART 1                                              -->
            <div style="font-weight:bold;">Dendritic lengths</div>
            <div id="chart1" class='with-3d-shadow with-transitions' style="margin-top:10px; margin-left:-122px;" >
                <svg>No Charts</svg>
            </div>

        <script src="assets/charts/d3.v3.js"></script>
        <script src="assets/charts/nv.d3.js"></script>
        <script src="assets/charts/utils.js"></script>
        <script src="assets/charts/tooltip.js"></script>
        <script src="assets/charts/legend.js"></script>
        <script src="assets/charts/axis.js"></script>
        <script src="assets/charts/multiBarHorizontal.js"></script>
        <script src="assets/charts/multiBarHorizontalChart.js"></script>
        <script src="assets/charts/stream_layers.js"></script>
        

        <script>



        long_short_data = [ 
          
            
            <?php 
                $filename = "/home/remod/users/$ses_id/downloads/statistics/dendritic_lengths.txt";
                if (file_exists($filename)) {
                    $txt_file    = file_get_contents("/home/remod/users/$ses_id/downloads/statistics/dendritic_lengths.txt");
                    $rows        = explode("\n", $txt_file);
                    $flag = 0;
                    foreach($rows as $row => $data)
                    {
                        $row_data = explode(' ', $data);
                        $info[$row]['dend']= $row_data[0];
                        $info[$row]['value']= $row_data[1];
                        if($flag==0){
                            
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                $flag=1;
                                echo "
                                {
                                key: 'Dendrite',
                                color: '#00CB98',
                                
                                values: [
                                {\"label\" :\""; echo $info[$row]['dend']; echo"\" ,
                                \"value\" : ";echo $info[$row]['value'];
                                echo"
                            }";
                            //}
                        }else{
                        	 	if(strlen($info[$row]['dend']) > 0 ){
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                echo ",
                                ";
                                echo "{\"label\" :\"";echo $info[$row]['dend']; echo"\" ,
                                \"value\" : "; echo $info[$row]['value'];
                                echo "
                            }";
                            //}
                            }
                        }
                    }
                        echo "]}";
                }
                
                echo "];";

             ?>
              



        var chart;
        nv.addGraph(function() {
          chart = nv.models.multiBarHorizontalChart()
              .x(function(d) { return d.label })
              .y(function(d) { return d.value })
              .margin({top: 30, right: 20, bottom: 50, left: 175})
              .showValues(true)
              //.tooltips(false)
              //.barColor(d3.scale.category20().range())
              .transitionDuration(250)
              //.stacked(true)

              .showControls(false);
               chart.options({
              //barColor: d3.scale.category20().range(),
              delay: 1200,
              groupSpacing: 0.1,
              reduceXTicks: false,
              staggerLabels: true
            });
          chart.yAxis
              .tickFormat(d3.format(',.2f'));

          d3.select('#chart1 svg')
              .datum(long_short_data)
              .call(chart);

          nv.utils.windowResize(chart.update);

          chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });

          return chart;
        });



        </script>
        <!--                             END OF CHART 1                               -->
        <!--                                CHART 2                                   -->
        <script src="assets/charts/multiBar.js"></script>
        <script src="assets/charts/multiBarChart.js"></script>
        <div style="font-weight:bold;">Number of dendrites (all, terminal) in basal, apical tree</div>
        <div id="chart2" class='with-3d-shadow with-transitions' style="margin-top:10px; margin-left:-122px; "  >
                <svg>No Charts</svg>
        </div>
        <script>




        var long_data = [ 
          {
                               /* key: 'All',
                                color: '#00CB98',
                                values: [
                                  { 
                                    "label" : "Basal" ,
                                    "value" : 89.765957771107
                                  } ,
                                  /*{ 
                                    "label" : "Terminal",
                                    "label" : "Basal" ,
                                    "value" : 20.765957771107
                                  } , */
                                 /* { 
                                    "label" : "Apical" , 
                                    "value" : 50
                                  } /*, 
                                  { 
                                    "label" : "Apical" , 
                                    "value" : 32.807804682612
                                  }*/ /*]}
                                  ,{
                                    key:'Terminal',
                                    color:'#ffffff',
                                    values:[
                                    {
                                        "label": "Basal",
                                        "value" : 20.766666
                                    },
                                    {
                                        "label": "Apical",
                                        "value" : 30.766666
                                    }
                                    ]}*/

                                    <?php 
                $filename = "/home/remod/users/$ses_id/downloads/statistics/number_of_dendrites.txt";
                if (file_exists($filename)) {
                    $txt_file    = file_get_contents("/home/remod/users/$ses_id/downloads/statistics/number_of_dendrites.txt");
                    $rows        = explode("\n", $txt_file);
                    $flag = 0;
                    foreach($rows as $row => $data)
                    {
                        $row_data = explode(' ', $data);
                        $info[$row]['dend']= $row_data[0];
                        $info[$row]['value']= $row_data[1];
                        $info[$row]['val']= $row_data[2];
                        if($flag==0){
                            
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                $flag=1;
                                echo "
                                
                                key: 'All',
                                color: '#00CB98',
                                
                                values: [
                                {\"label\" :\""; echo $info[$row]['dend']; echo"\" ,
                                \"value\" : ";echo $info[$row]['value'];
                                echo"
                            }";


                            //}
                        }else{
                                if(strlen($info[$row]['dend']) > 0 ){
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                echo ",
                                ";
                                echo "{\"label\" :\"";echo $info[$row]['dend']; echo"\" ,
                                \"value\" : "; echo $info[$row]['value'];
                                echo "
                            }";
                            //}
                            }
                        }
                    }
                        echo "]},";
                    $txt_file    = file_get_contents("/home/remod/users/$ses_id/downloads/statistics/number_of_dendrites.txt");
                    $rows        = explode("\n", $txt_file);
                    $flag = 0;
                    foreach($rows as $row => $data)
                    {
                        $row_data = explode(' ', $data);
                        $info[$row]['dend']= $row_data[0];
                        $info[$row]['value']= $row_data[1];
                        $info[$row]['val']= $row_data[2];
                        if($flag==0){
                            
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                $flag=1;
                                echo "
                                {
                                key: 'Terminal',
                                color: '#ffffff',
                                
                                values: [
                                {\"label\" :\""; echo $info[$row]['dend']; echo"\" ,
                                \"value\" : ";echo $info[$row]['val'];
                                echo"
                            }";


                            //}
                        }else{
                                if(strlen($info[$row]['dend']) > 0 ){
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                echo ",
                                ";
                                echo "{\"label\" :\"";echo $info[$row]['dend']; echo"\" ,
                                \"value\" : "; echo $info[$row]['val'];
                                echo "
                            }";
                            //}
                            }
                        }
                    }
                    echo "]}";

                }
                ?>
                                  ];

            /*defaultChartConfig("chart2", long_data, {
              //barColor: d3.scale.category20().range(),
              delay: 1200,
              groupSpacing: 0.1,
              reduceXTicks: false,
              staggerLabels: true
            });
            function defaultChartConfig(containerId, data, chartOptions) {
              nv.addGraph(function() {
                  var chart;
                  chart = nv.models.multiBarChart()
                    .margin({bottom: 100})
                    .transitionDuration(300)
                    ;

                  chart.options(chartOptions);
                  chart.multibar
                    .hideable(true);

                  chart.xAxis
                      .axisLabel("Current Index")
                      .showMaxMin(true)
                      .tickFormat(d3.format(',0f'));

                  chart.yAxis
                      .tickFormat(d3.format(',.1f'));

                  d3.select('#' + containerId + ' svg')
                      .datum(data)
                     .call(chart);

                  nv.utils.windowResize(chart.update);

                  chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });

                  return chart;
              });
            }*/
            
            <?php /*
                $filename = '/home/remod/application/dendritic_lengths.txt';
                if (file_exists($filename)) {
                    $txt_file    = file_get_contents('/home/remod/application/dendritic_lengths.txt');
                    $rows        = explode("\n", $txt_file);
                    $flag = 0;
                    foreach($rows as $row => $data)
                    {
                        $row_data = explode(' ', $data);
                        $info[$row]['dend']= $row_data[0];
                        $info[$row]['value']= $row_data[1];
                        if($flag==0){
                            
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                $flag=1;
                                echo "
                                {
                                key: 'Dendrite',
                                color: '#00CB98',
                                values: [
                                {\"label\" :\""; echo $info[$row]['dend']; echo"\" ,
                                \"value\" : ";echo $info[$row]['value'];
                                echo"
                            }";
                            //}
                        }else{

                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                echo ",
                                ";
                                echo "{\"label\" :\"";echo $info[$row]['dend']; echo"\" ,
                                \"value\" : "; echo $info[$row]['value'];
                                echo "
                            }";
                            //}
                            
                        }
                    }
                        echo "]}";
                }
                
                echo "];";
                */
             ?>
              
             var chart2;
        nv.addGraph(function() {
          chart2 = nv.models.multiBarHorizontalChart()
              .x(function(d) { return d.label })
              .y(function(d) { return d.value })
              .margin({top: 30, right: 20, bottom: 50, left: 175})
              .showValues(true)
              //.tooltips(false)
              //.barColor(d3.scale.category20().range())
              .transitionDuration(250)
              //.stacked(true)

              .showControls(false);
               chart2.options({
              barColor: d3.scale.category20().range(),
              
              delay: 1200,
              groupSpacing: 0.1,
              reduceXTicks: false,
              staggerLabels: true
            });
          chart2.yAxis
              .tickFormat(d3.format(',.2f'));

          d3.select('#chart2 svg')
              .datum(long_data)
              .call(chart2);

          nv.utils.windowResize(chart2.update);


          return chart2;
        });




        </script>
        <!--                               END OF CHART 2                             -->
        <!--                                   CHART 3                                -->

        <script src="assets/charts/discreteBar.js"></script>
        <script src="assets/charts/discreteBarChart.js"></script>
        <script src="assets/charts/historicalBarChart.js"></script>
        <script src="assets/charts/historicalBar.js"></script>
        
        <script>
        historicalBarChart =    [

        <?php 
                $filename = "/home/remod/users/$ses_id/downloads/statistics/bo_average_dlength.txt";
                if (file_exists($filename)) {
                    $txt_file    = file_get_contents("/home/remod/users/$ses_id/downloads/statistics/bo_average_dlength.txt");
                    $rows        = explode("\n", $txt_file);
                    $flag = 0;
                    foreach($rows as $row => $data)
                    {
                        $row_data = explode(' ', $data);
                        $info[$row]['dend']= $row_data[0];
                        $info[$row]['value']= $row_data[1];
                        if($flag==0){
                            
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                $flag=1;
                                echo "
                                {
                                key: 'Dendrite',
                                color: '#ff7f0e',
                                
                                values: [
                                {\"label\" :\""; echo $info[$row]['dend']; echo"\" ,
                                \"value\" : ";echo $info[$row]['value'];
                                echo"
                            }";
                            //}
                        }else{
                                if(strlen($info[$row]['dend']) > 0 ){
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                echo ",
                                ";
                                echo "{\"label\" :\"";echo $info[$row]['dend']; echo"\" ,
                                \"value\" : "; echo $info[$row]['value'];
                                echo "
                            }";
                            //}
                            }
                        }
                    }
                        echo "]}";
                }
                ?>
                ];

                
        </script>
        <div style="font-weight:bold;">Average dendritic length per branch order</div>
        <div id="chart4">
            <svg></svg>
        </div>
        <script>
  




nv.addGraph(function() {  
  var chart = nv.models.discreteBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      //.staggerLabels(true)
      .staggerLabels(historicalBarChart[0].values.length > 8)
      .tooltips(true)
      .showValues(true)
      .transitionDuration(250)
      //.color(historicalBarChart[0].color)
      ;
      chart.yAxis
              .axisLabel('average dendritic length')
              .tickFormat(d3.format(',.2f'));
    chart.showXAxis(true);

  d3.select('#chart4 svg')
      .datum(historicalBarChart)
      .call(chart);

  nv.utils.windowResize(chart.update);
  chart.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });
  return chart;
});
        </script>


        <!--                               END OF CHART 3                             -->
        <!--                                  CHART 4                                 -->
        <script>
        HBC =    [

        <?php 
                $filename = "/home/remod/users/$ses_id/downloads/statistics/branch_order_frequency.txt";
                if (file_exists($filename)) {
                    $txt_file    = file_get_contents("/home/remod/users/$ses_id/downloads/statistics/branch_order_frequency.txt");
                    $rows        = explode("\n", $txt_file);
                    $flag = 0;
                    foreach($rows as $row => $data)
                    {
                        $row_data = explode(' ', $data);
                        $info[$row]['dend']= $row_data[0];
                        $info[$row]['value']= $row_data[1];
                        if($flag==0){
                            
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                $flag=1;
                                echo "
                                {
                                key: 'Dendrite',
                                color: '#ff7f0e',
                                
                                values: [
                                {\"label\" :\""; echo $info[$row]['dend']; echo"\" ,
                                \"value\" : ";echo $info[$row]['value'];
                                echo"
                            }";
                            //}
                        }else{
                                if(strlen($info[$row]['dend']) > 0 ){
                            //if (strpos($info[$row]['dend'], 'dend')!==false) {
                                echo ",
                                ";
                                echo "{\"label\" :\"";echo $info[$row]['dend']; echo"\" ,
                                \"value\" : "; echo $info[$row]['value'];
                                echo "
                            }";
                            //}
                            }
                        }
                    }
                        echo "]}";
                }
                ?>
                ];

                
        </script>
        <div style="font-weight:bold;">Dendrites per branch order</div>
        <div id="chart5">
            <svg></svg>
        </div>
        <script>
  




nv.addGraph(function() {  
  var chart1 = nv.models.discreteBarChart()
      .x(function(d) { return d.label })
      .y(function(d) { return d.value })
      //.staggerLabels(true)
      .staggerLabels(HBC[0].values.length > 8)
      .tooltips(true)
      .showValues(true)
      .transitionDuration(250)
      //.color(historicalBarChart[0].color)
      ;
      chart1.yAxis
              .axisLabel('average dendritic length')
              .tickFormat(d3.format(',.2f'));
    chart1.showXAxis(true);

  d3.select('#chart5 svg')
      .datum(HBC)
      .call(chart1);

  nv.utils.windowResize(chart1.update);
  chart1.dispatch.on('stateChange', function(e) { nv.log('New State:', JSON.stringify(e)); });
  return chart1;
});
        </script>

        <!--                               END OF CHART 4                             -->
        </div>
        <!-- END MAIN CONTENT -->
        <div id="tooltip" style="margin-top:60px;"></div>

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
    <!-- PAGE LEVEL SCRIPTS -->
    <script src="assets/plugins/visible/jquery.visible.js"></script>
    <!--<script src="assets/plugins/charts-d3/d3.v3.js"></script>
    <script src="assets/plugins/charts-d3/nv.d3.js"></script>-->
    <script src="assets/plugins/charts-flot/jquery.flot.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.animator.min.js"></script>
    <script src="assets/plugins/charts-flot/jquery.flot.resize.js"></script>
    <script src="assets/plugins/charts-circliful/js/jquery.circliful.min.js"></script>
    <script src="assets/plugins/charts-morris/raphael.min.js"></script>
    <script src="assets/plugins/charts-morris/morris.min.js"></script>
    <script src="assets/js/charts.js"></script>
    <!-- END  PAGE LEVEL SCRIPTS -->
    <script src="assets/js/application.js"></script>
</body>

</html>

