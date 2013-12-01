<!DOCTYPE html>
<html>
    <head>
        <link type="text/css" rel="stylesheet" href="<?php echo $base; ?>/assets/css/main.css" />
        <link type="text/css" rel="stylesheet" href="<?php echo $base; ?>/assets/css/flexslider/flexslider.css" />
        <script type='text/javascript' src='<?php echo $base; ?>/assets/js/jquery-1.9.1.js'></script>
        <script type='text/javascript' src='<?php echo $base; ?>/assets/js/jquery.flexslider-min.js'></script>
        <script type='text/javascript' src='<?php echo $base; ?>/assets/js/jqFancyTransitions.1.8.min.js'></script>
        <!-- <script type='text/javascript' src='javascript/jquery.leanModal.min.js'></script> -->
        <script type='text/javascript' src='<?php echo $base; ?>/assets/js/jquery.simplemodal.js'></script>
        <script type='text/javascript' src='<?php echo $base; ?>/assets/js/jquery-ui-1.10.3.custom.min.js'></script>
        <script src="<?php echo $base; ?>/assets/plugins/booklet/jquery.easing.1.3.js" type="text/javascript"></script>
        <script type='text/javascript' src='<?php echo $base; ?>/assets/js/main.js'></script>
        <script src="<?php echo $base; ?>/assets/plugins/booklet/jquery.booklet.latest.min.js" type="text/javascript"></script>
    	<link href="<?php echo $base; ?>/assets/plugins/booklet/jquery.booklet.latest.css" type="text/css" rel="stylesheet" media="screen, projection, tv" />
        <title>Said John | Home</title>
        <style type="text/css">
        /*#lean_overlay {
            position: fixed;
            z-index: 10000;
            top: 0px;
            left: 0px;
            height:100%;
            width:100%;
            background: #000;
            display: none;
        }*/
        /*#biography {
            width: 600px;
            min-height: 200px;
            padding: 30px; 
            display:none;
            background: #efedf2;
            border-radius: 5px; -moz-border-radius: 5px; -webkit-border-radius: 5px;
            box-shadow: 0px 0px 4px rgba(0,0,0,0.7); -webkit-box-shadow: 0 0 4px rgba(0,0,0,0.7); -moz-box-shadow: 0 0px 4px rgba(0,0,0,0.7);
        }
        .modal_close { position: absolute; top: 12px; right: 12px; display: block; width: 14px; height: 14px; background: url(images/modal_close.png); z-index: 2; }*/

        #biography-content, #biography-data {display:none; overflow: auto;}

        /* Overlay */
        #biography-overlay {background-color:#000;}

        /* Container */
        #biography-container {background-color:#eee; color:#000; font: 16px/24px "Lucida Grande",Arial,sans-serif; padding-bottom:4px; width:600px; -moz-border-radius-bottomleft:6px; -webkit-border-bottom-left-radius:6px; -moz-border-radius-bottomright:6px; -webkit-border-bottom-right-radius:6px; border-radius:0 0 6px 6px; -moz-box-shadow:0 0 64px #000; -webkit-box-shadow:0 0 64px #000; box-shadow:0 0 64px #000;}
        #biography-container a {color:#ddd;}
        #biography-container #biography-title {color:#000; background-color:#ddd; border-bottom:1px solid #ccc; font-weight:bold; padding:6px 8px; text-shadow:0 1px 0 #f4f4f4;}
        #biography-container .close {display:none; position:absolute; right:0; top:0;}
        #biography-container .close a {display:block; color:#777; font-weight:bold; padding:6px 12px 0; text-decoration:none; text-shadow:0 1px 0 #f4f4f4;}
        #biography-container .close a:hover {color:#000;}
        #biography-container #biography-data {font-size:12px; padding:6px 12px; max-height: 500px;}
        #biography-container h2 {margin:10px 0 6px;}
        #biography-container p {margin-bottom:10px;}
        #biography-container span {color:#777;}
        </style>
    </head>
    <body>
        <div id="top_bar"> Said John  </div><!-- top_bar -->
        <div id="container">
            <div id='bio_section'>
                <?php $this->load->view('templates/bio_section'); ?>
            </div><!-- bio_section -->
            <div id='title_bar'>
                <div id='title_bar_text'>
                    <span class='dark_grey'>SHEIKH SAID JOHN </span>
                    <span class='purple'>DA'AWAH TRUST FUND</span>
                </div><!-- title_bar_text -->
            </div><!-- title_bar -->
            <div id='menu_bar'>
                <a href='index'>Home</a>
                <a href='about'>About Us</a>
                <a href='projects'>Our Projects</a>
                <a href='events'>Our Events</a>
                <a href='volunteer'>Volunteer</a>
                <a href='contact'>Contact Us</a> 
            </div><!-- menu_bar -->
             <div id='donate_btn'><a href='donate'>DONATE NOW</a></div><!-- donate_btn -->