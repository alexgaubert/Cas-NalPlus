<?php
error_reporting(0); // Désactiver le rapport d'erreurs
// error_reporting(E_ALL); // Reporter toutes les erreurs PHP

echo"<!DOCTYPE html>
<html lang='fr'>
<head>
    <title>Home</title>
    <meta charset='utf-8'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/reset.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/style.css'>
    <link rel='stylesheet' type='text/css' media='screen' href='css/slider.css'>
    <link href='http://fonts.googleapis.com/css?family=Muli:400,300,300italic,400italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Passion+One:400,700' rel='stylesheet' type='text/css'>
    <script src='js/jquery-1.7.min.js'></script>
    <script src='js/jquery.easing.1.3.js'></script>
    <script src='js/tms-0.4.1.js'></script>
    <script>
		$(document).ready(function(){				   	
			$('.slider')._TMS({
				show:0,
				pauseOnHover:true,
				prevBu:'.prev',
				nextBu:'.next',
				playBu:false,
				duration:800,
				preset:'fade',
				pagination:'.pags',
				pagNums:false,
				slideshow:7000,
				numStatus:false,
				banners:'fade',
				waitBannerAnimation:false,
				progressBar:false
			})		
		});
	</script>
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
  <!--==============================header=================================-->";
  
  setlocale(LC_TIME, 'fr', 'fr_FR', 'fr_FR.ISO8859-1');

$dateBBB = strftime("%A", mktime(0, 0, 0, date('m'), date('d')-3, date('y')));
$dateBB = strftime("%A", mktime(0, 0, 0, date('m'), date('d')-2, date('y')));
$dateB = strftime("%A", mktime(0, 0, 0, date('m'), date('d')-1, date('y')));
$dateJ = strftime("%A", mktime(0, 0, 0, date('m'), date('d'), date('y')));
$dateA = strftime("%A", mktime(0, 0, 0, date('m'), date('d')+1, date('y')));
$dateAA = strftime("%A", mktime(0, 0, 0, date('m'), date('d')+2, date('y')));
$dateAAA = strftime("%A", mktime(0, 0, 0, date('m'), date('d')+3, date('y')));


$dateEntiere = strftime("%A %d %B", mktime(0, 0, 0, date('m'), date('d'), date('y')));

// echo  $dateBBB . ", " . $dateBB . ", " . $dateB . ", <B>" . $dateJ . "</b>, " . $dateA . ", " . $dateAA . ", " . $dateAAA;
			
    echo "<header>
        <h1><a href='index.php'><img src='images/Canal+_Cinéma_HD_2013.svg.png' width=300 alt=''></a></h1>
        <nav>  
			<ul class='menu2'>
				<li><a href='?day=".$dateJ."'>".strtoupper($dateEntiere)."</a></li>
			</ul>
            <ul class='menu'>";
		
			
			/*
				<li><a href='about.php'>About</a></li>
                <li><a href='services.php'>Services</a></li>
                <li><a href='products.php'>Products</a></li>
                <li><a href='contacts.php'>Contacts</a></li>
			*/
			echo "
                <li "; if($_GET['day'] == $dateBBB){ echo "class='current'"; }; echo"><a href='?day=".$dateBBB."'> ".$dateBBB."</a></li>
                <li "; if($_GET['day'] == $dateBB){ echo "class='current'"; }; echo"><a href='?day=".$dateBB."'> ".$dateBB."</a></li>
                <li "; if($_GET['day'] == $dateB){ echo "class='current'"; }; echo"><a href='?day=".$dateB."'> ".$dateB."</a></li>
                <li "; if($_GET['day'] == $dateJ || !isset($_GET['day'])){ echo "class='current'"; }; echo"><a href='?day=".$dateJ."'> ".$dateJ."</a></li>
                <li "; if($_GET['day'] == $dateA){ echo "class='current'"; }; echo"><a href='?day=".$dateA."'> ".$dateA."</a></li>
                <li "; if($_GET['day'] == $dateAA){ echo "class='current'"; }; echo"><a href='?day=".$dateAA."'> ".$dateAA."</a></li>
                <li "; if($_GET['day'] == $dateAAA){ echo "class='current'"; }; echo"><a href='?day=".$dateAAA."'> ".$dateAAA."</a></li>
            </ul>
			<ul class='menu3'>
				<li><a href='?moment=nuit'>".strtoupper('Nuit')."</a></li>
				<li><a href='?moment=matin'>".strtoupper('Matin')."</a></li>
				<li><a href='?moment=apresmidi'>".strtoupper('Apres-Midi')."</a></li>
				<li><a href='?moment=debutsoiree'>".strtoupper('Debut de soiree')."</a></li>
				<li><a href='?moment=soiree'>".strtoupper('Soiree')."</a></li>
			</ul>
         </nav>
         <div id='slide'>		
            <div class='slider'>
                <ul class='items'>
                    <li><img src='images/slider-1.jpg' alt='' /><div class='banner'><div class='banner-1'></div><a href='#' class='button-1'>Read more</a></div></li>
                    <li><img src='images/slider-2.jpg' alt='' /><div class='banner'><div class='banner-2'></div><a href='#' class='button-1'>Read more</a></div></li>
                    <li><img src='images/slider-3.jpg' alt='' /><div class='banner'><div class='banner-3'></div><a href='#' class='button-1'>Read more</a></div></li>
                </ul>
            </div>	
            <a href='#' class='prev'></a><a href='#' class='next'></a>
            <div class='line-left'></div>
            <div class='line-right'></div>
            <ul class='pags'></ul>
         </div>
    </header>   
  <!--==============================content================================-->
    <section id='content'><div class='ic'>More Website Templates @ TemplateMonster.com. May 14, 2012!</div>
        <div class='slogan'>
        	<p>We <span class='clr-1'>provide</span> you with the <span class='clr-1'>highest</span>  level of <span class='clr-1'>services</span></p>
            <p>Lorem ipsum dolor sit amet consectetur adipiscing elit vivamus sed arcu dui eu tincidunt sem.</p>
            <a href='#' class='button-2'>click here</a>
        </div>
        <div class='wrap page1-row1'>
        	<div class='box-1 border-right'>
            	<strong class='number number-1'>01.</strong>
                <span class='text-1'>Smart</span>
                <p class='text-2'>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                <p class='text-3'>Vivamus sed arcu dui, eu tincidunt sem. Vivamus hendrerit mauris ut dui.</p>
                <a href='#' class='link-1'>Read more</a>
            </div>
            <div class='box-1 border-right'>
            	<strong class='number number-2'>02.</strong>
                <span class='text-1'>Stable</span>
                <p class='text-2'>Vivamus sed arcu dui, eu tincidunt sem. </p>
                <p class='text-3'>Vivamus hendrerit mauris ut dui. gravida ut viverra lectus tincidunt. </p>
                <a href='#' class='link-1'>Read more</a>
            </div>
            <div class='box-1 border-right'>
            	<strong class='number number-3'>03.</strong>
                <span class='text-1'>Dynamic</span>
                <p class='text-2'>Cras mattis tempor eros nec tristique.</p>
                <p class='text-3'>Sed sed felis arcu, vel vehicula augue. Maecenas faucibus sagittis cursus. </p>
                <a href='#' class='link-1'>Read more</a>
            </div>
            <div class='box-1 last'>
            	<strong class='number number-4'>04.</strong>
                <span class='text-1'>Grow</span>
                <p class='text-2'>Maecenas faucibus sagittis cursus. </p>
                <p class='text-3'>Fusce tincidunt, tellus eget tristique cursus, orci mi iaculis sem, sit amet dictum velit velit</p>
                <a href='#' class='link-1'>Read more</a>
            </div>
        </div>
        <div class='wrap page1-row2'>
        	<div class='page1-col-1 border-right'>
            	<h2>We know what it takes<strong class='clr-1'>to be the leader</strong></h2>
                <div class='wrap'>
                	<img src='images/page1-img1.jpg' alt='' class='img-indent img-border'>
                    <p class=' extra-wrap clr-1'>Vertex  is one of <a href='http://blog.templatemonster.com/free-website-templates/' target='_blank' class='link'>free website templates</a> created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. Lorem ipsum dolor sit amet, consectetur. </p>
                </div>
                <p><strong>It is also XHTML & CSS valid.</strong> The PSD source files of this <a href='http://blog.templatemonster.com/2012/05/14/free-website-template-business-jquery-powered-slider/' class='link' target='_blank' rel='nofollow'>Vertex</a>  template are available for free for the registered members of TemplateMonster.com. Feel free to get them! Vivamus sed arcu dui,<br> eu tincidunt sem. </p>
                <a href='#' class='link-2'>Read more</a>
            </div>
            <div class='page1-col-2 border-right'>
            	<h2><span class='clr-1'>N</span>ews</h2>
                <div class='box-2'>
                	<a href='#' class='link-3'>05.23</a>
                    <p><a href='#' class='link'><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</strong></a> Vivamus sed arcu dui, eu tincidunt sem vivamus hendrerit.</p>
                </div>
                <div class='box-2'>
                	<a href='#' class='link-3'>05.15</a>
                    <p><a href='#' class='link'><strong>Vivamus sed arcu dui, eu tincidunt sem.</strong></a> Vivamus hendrerit mauris ut dui gravida ut viverra lectus tincidunt. </p>
                </div>
                <a href='#' class='link-2'>Read more</a>
            </div>   
            <div class='page1-col-3'>
            	<h2><span class='clr-1'>S</span>ervices</h2>
                <ul class='list-1'>
                	<li><a href='#'>Lorem ipsum dolor sit amet</a></li>
                    <li><a href='#'>Consectetur adipiscing elit</a></li>
                    <li><a href='#'>Vivamus sed arcu dui eu</a></li>
                    <li><a href='#'>Ivamus hendrerit mauris</a></li>
                    <li><a href='#'>Gravida ut viverra lectus</a></li>
                    <li><a href='#'>Cras mattis tempor eros</a></li>
                    <li><a href='#'>Sed sed felis arcu vel</a></li>
                    <li><a href='#'>Maecenas faucibus sagittis</a></li>
                    <li><a href='#'>Fusce tincidunt tellus</a></li>
                </ul>
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
      Website Template by <a class='link-4' href='http://store.templatemonster.com?aff=netsib1' target='_blank' rel='nofollow'>www.templatemonster.com</a></p>
  </footer>	       
</body>
</html>";
?>