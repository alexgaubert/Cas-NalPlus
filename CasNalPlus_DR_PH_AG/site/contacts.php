<?php
echo"<!DOCTYPE html>
<html lang='fr'>
<head>
    <title>Contacts</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'>
    <script src='js/jquery-1.7.min.js'></script>
    <script src='js/jquery.easing.1.3.js'></script>
	<!--[if lt IE 8]>
       <div style=' clear: both; text-align:center; position: relative;'>
         <a href='http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode'>
           <img src='http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg' border='0' height='42' width='820' alt='You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today.' />
        </a>
      </div>
    <![endif]-->
    <!--[if lt IE 9]>
   		<script type='text/javascript' src='js/html5.js'></script>
    	<link rel='stylesheet' type='text/css' media='screen' href='css/ie.css'>
	<![endif]-->
</head>
<body>
<div class='bg'>
<div class='bg-2'>
  <!--==============================header=================================-->
    <header>
        <h1><a href='index.php'><img src='images/Canal+_Cinéma_HD_2013.svg.png' width=300 alt=''></a></h1>
        <nav>  
            <ul class='menu'>
                <li><a href='index.php'>Home</a></li>
                <li><a href='about.php'>About</a></li>
                <li><a href='services.php'>Services</a></li>
                <li><a href='products.php'>Products</a></li>
                <li class='current'><a href='contacts.php'>Contacts</a></li>
            </ul>
         </nav>
    </header>   
  <!--==============================content================================-->
    <section id='content'><div class='ic'>More Website Templates @ TemplateMonster.com. May 14, 2012!</div>
        <div class='slogan top-1'>
        	<p>We <span class='clr-1'>provide</span> you with the <span class='clr-1'>highest</span>  level of <span class='clr-1'>services</span></p>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vivamus sed arcu dui eu tincidunt sem.</p>
            <a href='#' class='button-2'>click here</a>
        </div>
        <div class='page5-row1'>
            <div class='page5-col-1 border-right'>
            	<h2><span class='clr-1'>C</span>ontact info</h2>
                <dl class='adr'>
                    <dt class='clr-1'><strong>Vertex</strong></dt>
                    <dd><strong>8901 Marmora Road, Glasgow, D04 89GR</strong></dd>
                    <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
                    <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
                    <dd><span>Email:</span><a href='#' class='link'>mail@thomsander.com</a></dd>
                    <dd>&nbsp;</dd>
                    <dd><strong>9863 Mill Road, Cambridge, MG09 99HT</strong></dd>
                    <dd><span>Telephone:</span><strong>+1 959 603 6035</strong></dd>
                    <dd><span>Fax:</span><strong>+1 504 889 9898</strong></dd>
                    <dd><span>Email:</span><a href='#' class='link'>mail@thomsander.com</a></dd>
                </dl> 
            </div>
            <div class='page5-col-2'>
            	<h2><span class='clr-1'>C</span>ontact form:</h2>
                <form id='form' method='post' >
                  <fieldset>
                    <label><strong>Full name:</strong><input type='text' value=''><strong class='clear'></strong></label>
                    <label><strong>Email:</strong><input type='text' value=''><strong class='clear'></strong></label>
                    <label><strong>Message:</strong><textarea></textarea><strong class='clear'></strong></label>
                    <strong class='clear'></strong>
                    <div class='btns'><a href='#' class='link-2'>Clear</a><a href='#' class='link-2' onClick='document.getElementById('form').submit()'>Send</a></div>
                  </fieldset>  
                </form> 
            </div>    
        </div>
    </section> 
</div>       
</div> 
<!--==============================aside=================================-->
  <aside>
  	<div class='wrap'>
   	  <div class='aside-col-1 border-right-2'>
        	<h3><span class='clr-1'>N</span>ewsletter:</h3>
            <form id='form-search' method='post'>
              <span>Enter you email here:</span>
              <input type='text' value='' onBlur='if(this.value=='') this.value=''' onFocus='if(this.value =='' ) this.value='''  />
              <a href='#' onClick='document.getElementById('form-search').submit()' class='link-2'>subscribe</a>
            </form>
        </div>
        <div class='aside-col-2 border-right-2'>
        	<h3><span class='clr-1'>U</span>seful info:</h3>
            <p>Lorem ipsum dolor sit amet, consectetur. adipiscing elit. Vivamus sed arcu dui, eu tincidunt sem viamus hendrerit. </p>
        </div>  
        <div class='aside-col-3 border-right-2'>
            <dl class='adrss'>
                <dd><span>Freephone:</span><strong>+1 800 559 6580</strong></dd>
                <dd><span>Telephone:</span><strong>+1 800 603 6035</strong></dd>
                <dd><span>Fax:</span><strong>+1 800 889 9898</strong></dd>
                <dd><span>E-mail:</span><a href='#' class='link'><strong>mail@demolink.org</strong></a></dd>
            </dl> 
            <p><strong>9870St Vincent Place,<br>
Glasgow, DC 45 Fr 45.</strong></p>
        </div>  
        <div class='aside-col-4'>
        	<div class='soc-icons'>
            	<a href='#'><img src='images/icon-1.png' alt=''></a><a href='#'><img src='images/icon-2.png' alt=''></a><a href='#'><img src='images/icon-3.png' alt=''></a>
            </div>
        </div>  
    </div>
  </aside>
<!--==============================footer=================================-->
  <footer>
      <p><strong>© 2012  Vertex</strong><br>
      Website Template by <a class='link-4' href='http://www.templatemonster.com/' target='_blank' rel='nofollow'>www.templatemonster.com</a></p>
  </footer>	       
</body>
</html>";
?>