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

$dateBBB = strftime("%a %d %B", mktime(0, 0, 0, date('m'), date('d')-3, date('y')));
$dateBB = strftime("%a %d %B", mktime(0, 0, 0, date('m'), date('d')-2, date('y')));
$dateB = strftime("%a %d %B", mktime(0, 0, 0, date('m'), date('d')-1, date('y')));
$dateJ = strftime("%a %d %B", mktime(0, 0, 0, date('m'), date('d'), date('y')));
$dateA = strftime("%a %d %B", mktime(0, 0, 0, date('m'), date('d')+1, date('y')));
$dateAA = strftime("%a %d %B", mktime(0, 0, 0, date('m'), date('d')+2, date('y')));
$dateAAA = strftime("%a %d %B", mktime(0, 0, 0, date('m'), date('d')+3, date('y')));


$dateEntiere = strftime("%A %d %B", mktime(0, 0, 0, date('m'), date('d'), date('y')));

// echo  $dateBBB . ", " . $dateBB . ", " . $dateB . ", <B>" . $dateJ . "</b>, " . $dateA . ", " . $dateAA . ", " . $dateAAA;
			
    echo "<header>
        <h1><a href='index.php?moment=apresmidi&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "'><img src='images/Canal+_Cinéma_HD_2013.svg.png' width=300 alt=''></a></h1>
        <nav> 
			<ul class='menu2'>
				<li><a href='recherche.php'><u>Rechercher un programme</u></a></li>
				<li><a href='?day=".$dateJ."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "'>".strtoupper($dateEntiere)."</a></li>
				<li><a href='guilde.php'><u>Mon guilde Nal+</u></a></li>
			</ul>
            <ul class='menu'>";
		/*
			
			
				<li><a href='about.php'>About</a></li>
                <li><a href='services.php'>Services</a></li>
                <li><a href='products.php'>Products</a></li>
                <li><a href='contacts.php'>Contacts</a></li>
			
			
			// if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';};
			// &day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ}; 
			// var_dump($_GET['moment']);
			// var_dump($_GET['day']);

			?>
                <li <?php if($_GET['day'] == $dateBBB){ echo "class='current'"; }; echo"><a href='?day=".$dateBBB."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "'> ".$dateBBB."</a></li>
                <li "; if($_GET['day'] == $dateBB){ echo "class='current'"; }; echo"><a href='?day=".$dateBB."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "'> ".$dateBB."</a></li>
                <li "; if($_GET['day'] == $dateB){ echo "class='current'"; }; echo"><a href='?day=".$dateB."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "'> ".$dateB."</a></li>
                <li "; if($_GET['day'] == $dateJ || !isset($_GET['day'])){ echo "class='current'"; }; echo"><a href='?day=".$dateJ."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "'> ".$dateJ."</a></li>
                <li "; if($_GET['day'] == $dateA){ echo "class='current'"; }; echo"><a href='?day=".$dateA."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "'> ".$dateA."</a></li>
                <li "; if($_GET['day'] == $dateAA){ echo "class='current'"; }; echo"><a href='?day=".$dateAA."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "'> ".$dateAA."</a></li>
                <li "; if($_GET['day'] == $dateAAA){ echo "class='current'"; }; echo"><a href='?day=".$dateAAA."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "'> ".$dateAAA."</a></li>
            </ul>
			<ul class='menu3'>
				<li "; if($_GET['moment'] == 'nuit'){ echo "class='current'"; }; echo"><a href='?moment=nuit
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "'>".strtoupper('Nuit')."</a></li>
				<li "; if($_GET['moment'] == 'matin'){ echo "class='current'"; }; echo"><a href='?moment=matin
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "'>".strtoupper('Matin')."</a></li>
				<li "; if($_GET['moment'] == 'apresmidi'){ echo "class='current'"; }; echo"><a href='?moment=apresmidi
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "'>".strtoupper('Apres-Midi')."</a></li>
				<li "; if($_GET['moment'] == 'debutsoiree'){ echo "class='current'"; }; echo"><a href='?moment=debutsoiree
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "'>".strtoupper('Debut de soiree')."</a></li>
				<li "; if($_GET['moment'] == 'soiree'){ echo "class='current'"; }; echo"><a href='?moment=soiree
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "'>".strtoupper('Soiree')."</a></li>
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
		 */
		 echo "
    </header>   
  <!--==============================content================================-->
  
    <section id='content'><div class='ic'>More Website Templates @ TemplateMonster.com. May 14, 2012!</div>
        <div class='slogan'>
        	<p>Sur quel <span class='clr-1'>mot clé</span> voulez-vous effectuer votre <span class='clr-1'>recherche</span> ?</p>
            <p>Plusieurs choix s'offrent à vous, vous n'avez juste qu'à cocher les cases puis remplir les </br>
			zones de champs qui s'affichent et lancer la recherche en cliquant sur le bouton ci-dessous. </p>
            <a href='#' class='button-2'>Démarrer</a>
        </div>
        <div class='wrap page1-row1'>
        	<div class='box-1 border-right'>
            	<strong class='number number-1'>01.</strong>
                <span class='text-1'>Nom</span>
					<select class='text-2' name='select'>
					  <option value='value1'>Valeur 1</option> 
					  <option value='value2' selected>Valeur 2</option>
					  <option value='value3'>Valeur 3</option>
					</select>
					<p class='text-3'></p>
                <input id='' type='checkbox'>
            </div>
            <div class='box-1 border-right'>
            	<strong class='number number-2'>02.</strong>
                <span class='text-1'>Genre</span>
					<select class='text-2' name='select'>
					  <option value='value1'>Valeur 1</option> 
					  <option value='value2' selected>Valeur 2</option>
					  <option value='value3'>Valeur 3</option>
					</select>
					<p class='text-3'></p>
                <input id='' type='checkbox'>
            </div>
            <div class='box-1 border-right'>
            	<strong class='number number-3'>03.</strong>
                <span class='text-1'>Année</span>
					<select class='text-2' name='select'>
					  <option value='value1'>Valeur 1</option> 
					  <option value='value2' selected>Valeur 2</option>
					  <option value='value3'>Valeur 3</option>
					</select>
					<p class='text-3'></p>
                <input id='' type='checkbox'>
            </div>
            <div class='box-1 last'>
            	<strong class='number number-4'>04.</strong>
                <span class='text-1'>Durée</span>
					<select class='text-2' name='select'>
					  <option value='value1'>Valeur 1</option> 
					  <option value='value2' selected>Valeur 2</option>
					  <option value='value3'>Valeur 3</option>
					</select>
					<p class='text-3'></p>
                <input id='' type='checkbox'>
            </div>
        </div>
		<div class='wrap page1-row1'>
        	<div class='box-1 border-right'>
            	<strong class='number number-1'>05.</strong>
                <span class='text-1'>Nationnalité</span>
					<select class='text-2' name='select'>
					  <option value='value1'>Valeur 1</option> 
					  <option value='value2' selected>Valeur 2</option>
					  <option value='value3'>Valeur 3</option>
					</select>
					<p class='text-3'></p>
                <input id='' type='checkbox'>
            </div>
            <div class='box-1 border-right'>
            	<strong class='number number-2'>06.</strong>
                <span class='text-1'>Chaîne</span>
					<select class='text-2' name='select'>
					  <option value='value1'>Valeur 1</option> 
					  <option value='value2' selected>Valeur 2</option>
					  <option value='value3'>Valeur 3</option>
					</select>
					<p class='text-3'></p>
                <input id='' type='checkbox'>
            </div>
            <div class='box-1 border-right'>
            	<strong class='number number-3'>07.</strong>
                <span class='text-1'>Réalisateur</span>
					<select class='text-2' name='select'>
					  <option value='value1'>Valeur 1</option> 
					  <option value='value2' selected>Valeur 2</option>
					  <option value='value3'>Valeur 3</option>
					</select>
					<p class='text-3'></p>
                <input id='' type='checkbox'>
            </div>
            <div class='box-1 last'>
            	<strong class='number number-4'>08.</strong>
                <span class='text-1'>Présentateur</span>
					<select class='text-2' name='select'>
					  <option value='value1'>Valeur 1</option> 
					  <option value='value2' selected>Valeur 2</option>
					  <option value='value3'>Valeur 3</option>
					</select>
					<p class='text-3'></p>
                <input id='' type='checkbox'>
            </div>
        </div>";
		/*
        <div class='wrap page1-row2'>
        	<div class='page1-col-1 border-right'>
            	<h2>We know what it takes<strong class='clr-1'>to be the leader</strong></h2>
                <div class='wrap'>
                	<img src='images/page1-img1.jpg' alt='' class='img-indent img-border'>
                    <p class=' extra-wrap clr-1'>Vertex  is one of <a href='http://blog.templatemonster.com/free-website-templates/' target='_blank' class='link'>free website templates</a> created by TemplateMonster.com team. This website template is optimized for 1280X1024 screen resolution. Lorem ipsum dolor sit amet, consectetur. </p>
                </div>
                <p><strong>It is also XHTML & CSS valid.</strong> The PSD source files of this <a href='http://blog.templatemonster.com/2012/05/14/free-website-template-business-jquery-powered-slider/' class='link' target='_blank' rel='nofollow'>Vertex</a>  template are available for free for the registered members of TemplateMonster.com. Feel free to get them! Vivamus sed arcu dui,<br> eu tincidunt sem. </p>
                <a href='#' class='link-1'>Go</a>
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
                <a href='#' class='link-1'>Go</a>
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
		*/
		echo "
    </section> 
</div>       
</div> 
<!--==============================aside=================================-->
  <aside>
  	<div class='wrap'>
   	  <div class='aside-col-1 border-right-2'>
        	<h3><span class='clr-1'>N</span>ewsletter:</h3>
            <form id='form-search' method='post'>
              <span>Entrez votre email ici :</span>
              <input type='text' value='' onBlur='if(this.value=='') this.value=''' onFocus='if(this.value =='' ) this.value='''  />
              <a href='#' onClick='document.getElementById('form-search').submit()' class='link-2'>Souscrire</a>
            </form>
        </div>
        <div class='aside-col-2 border-right-2'>
        	<h3><span class='clr-1'>I</span>nformation utile:</h3>
            <p>Site crée par Dimitry ROBIN en collaboration avec Alex GAUBERT et Pierre HERMANGE pour le TP CasNalPlus.</p>
        </div>  
        <div class='aside-col-3 border-right-2'>
            <dl class='adrss'>
                <dd><span>Freephone:</span><strong>+1 800 559 6580</strong></dd>
                <dd><span>Telephone:</span><strong>+33 7 77 88 86 69</strong></dd>
                <dd><span>Fax:</span><strong>+1 800 889 9898</strong></dd>
                <dd><span>E-mail:</span><a href='#' class='link'><strong>dimy@hotmail.fr</strong></a></dd>
            </dl> 
            <p><strong>09 Impasse Antonio Vivaldi,<br>
49125, Tiecé, France.</strong></p>
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
      <p><strong>© 2016  CasNalPlus</strong><br>
      Copyright <a class='link-4' href='http://dimitryrobin.fr' target='_blank' rel='nofollow'>www.dimitryrobin.fr</a></p>
  </footer>	       
</body>
</html>";
?>