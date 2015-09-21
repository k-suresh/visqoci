<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>VisQo</title>
<?php
echo $assets['header_asset'];
?>
<script>
$(document).ready(function(){
    //Handles menu drop down
    $('.dropdown-menu').find('form').click(function (e) {
        e.stopPropagation();
    });
});
</script>
</head>

<body>

<div class="main">
    <!--header Start-->
	<div class="header-main">

	<div class="header">
	
    	<div class="head-left">
        	<ul>
                <li>
                    <div class="dropdown ">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" title="Ask Question"><i class="ask-question"></i></a>
                        <?php include 'askquestion.php' ?>
                    </div>
        		</li>
                <li>
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" title="People You May Know"><i class="people-you-know"></i></a>
                        <div class="dropdown-menu drop-people arrow-top" aria-labelledby="dropdownMenu">
                         SearchBuddy
                        </div>                        
                    </div>
        		</li>
                <li>
                    <div class="dropdown">
                        <a href="#" data-toggle="dropdown" class="dropdown-toggle" title="Search User"><i class="search-user"></i></a>                        
                         <?php include 'user_search.php' ?>                        
                    </div>
        		</li>
            </ul>
        </div>
        <div class="head-center"><a href="index.html" title="VisQo"><img src="<?php echo site_url();?>assets/images/logo.png" width="191" height="60" alt=""></a></div>
        <div class="head-right">
        	<ul>
            	<li><a href="#" title="User">UserName <i class="user"></i></a></li>
                <li><a href="#Login" data-toggle="modal" title="Login"><i class="login"></i></a></li>
                <li><a href="#Registration" data-toggle="modal" title="Registration"><i class="registration"></i></a></li>
                <li><a href="#" title="Notifications"><i class="notifications"></i></a></li>
                <li><a href="#" title="Logout"><i class="logout"></i></a></li>
            </ul>
        </div>
    </div>
	</div>
	<!--header End-->