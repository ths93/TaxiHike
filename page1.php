<!DOCTYPE html>
<html>
<title>&nbsp;</title>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<script src="https://maps.googleapis.com/maps/api/js?sensor=false&v=3&libraries=geometry"></script>
	
	<link rel="stylesheet" href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css">
        <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>

        
	<link rel="stylesheet" type="text/css" href="http://ququplay.github.io/jquery-mobile-square-ui-theme/css/jquery.mobile.squareui.css" />
	<script src="http://ququplay.github.io/jquery-mobile-square-ui-theme/js/jquery.min.js"></script>
	<script src="http://ququplay.github.io/jquery-mobile-square-ui-theme/js/jqm.min.js"></script>
	<script type="text/javascript" charset="utf-8" src="cordova.js"></script>
		
	<style>
		#content1 {
		padding: 0;
		position : absolute !important;
		top : 40px !important;  
		right : 0; 
		bottom : 0px !important;  
		left : 0 !important;     
		}	

                .icon-green {
                color: #006600;
                }
                .icon-white {
                color: #ffffff;
                }
                 	
	        .hdr {
                background-color: #e0e0e0;
                }
                .hdr1 {
                color: #006600;
                font-size: 32px;
                font-weight: bold;
                }
                .hdr2 {
                color: #006600;
                font-size: 20px;
                font-weight: normal;
                margin-top:-5px;
                }
         </style>
         <script>
         var myVar = setInterval(function(){ myTimer() }, 1000);

         function myTimer() {
            var d = new Date();
            var dt = Date();
            var t = d.toLocaleTimeString();
            document.getElementById("time").innerHTML = d.toDateString() + ' - ' + t;
         }

         $(document).ready(function() {
            $("#taxi").click(function() {
              //alert('');  
              navigator.notification.beep(2);
              navigator.notification.vibrate(1000);
            });
         });
   
         $(document).ready(function() {
            $("#hike").click(function() {
              alert('');  
            });
         });
      

         </script>

</head>
	
<body>
  <div data-role="page">

    <div data-role="panel" id="panel" data-position="right" data-theme="a" data-display="push"></div>

    <div data-role="header">
      <a data-iconpos="notext" data-role="button" data-icon="home" title="Home">Home</a>
      <h1>TaxiHike</h1>
      <a data-iconpos="notext" href="#panel" data-role="button" data-icon="flat-menu"></a>
    </div>

		
	
    <div data-role="content" role="main">

      
     <div class="container-fluid hdr">
        <center>
	<span id="taxi" class="fa-stack fa-5x">
	  <i class="fa fa-circle fa-stack-2x icon-green"></i>
	  <i class="fa fa-taxi fa-stack-1x icon-white fa-inverse"></i>
	</span>
        
	<span id="hike" class="fa-stack fa-5x">
	  <i class="fa fa-circle fa-stack-2x icon-green"></i>
	  <i class="fa fa-thumbs-up fa-stack-1x icon-white fa-inverse"></i>
	</span>
        </center>

        <center>
          <div class="hdr1">Taxi Hike</div>
          <div class="hdr2">versjon 1.0.1</div>
        </center>
        <br>
        
     </div>

      <p id="time"></p><br>

      <fieldset class="ui-grid-a">
        <div class="ui-block-a"><a href="page2"><button data-icon="flat-settings" data-theme="a">Button A</button></a></div>
        <div class="ui-block-b"><button data-icon="flat-new" data-theme="b">Button B</button></div>
      </fieldset>
      <fieldset class="ui-grid-a">
        <div class="ui-block-a"><button data-icon="flat-man" data-theme="g">Button G</button></div>
        <div class="ui-block-b"><button data-icon="flat-mail" data-theme="d">Button D</button></div>
      </fieldset>
      <fieldset class="ui-grid-a">
        <div class="ui-block-a"><button data-icon="flat-lock" data-theme="e">Button E</button></div>
        <div class="ui-block-b"><button data-icon="flat-menu" data-theme="f">Button F</button></div>
      </fieldset>
      <br>
      <fieldset class="ui-grid-solo">
       <div class="ui-block-a"><button data-icon="flat-menu" data-theme="f">Button F</button></div>
      </fieldset>

	  
	  
 
  <div id="highlight"> </div>
</body>

</html>
