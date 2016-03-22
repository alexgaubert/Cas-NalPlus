<?php
require('Class/Connexion.class.php');

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
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'>".strtoupper($dateEntiere)."</a></li>
				<li><a href='guilde.php'><u>Mon guilde Nal+</u></a></li>
			</ul>
			</br>
            <ul class='menu'>";
		
			
			/*
				<li><a href='about.php'>About</a></li>
                <li><a href='services.php'>Services</a></li>
                <li><a href='products.php'>Products</a></li>
                <li><a href='contacts.php'>Contacts</a></li>
			*/
			
			// if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';};
			// &day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ}; 
			// var_dump($_GET['moment']);
			// var_dump($_GET['day']);

			?>
                <li <?php if($_GET['day'] == $dateBBB){ echo "class='current'"; }; echo"><a href='?day=".$dateBBB."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'> ".$dateBBB."</a></li>
                <li "; if($_GET['day'] == $dateBB){ echo "class='current'"; }; echo"><a href='?day=".$dateBB."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'> ".$dateBB."</a></li>
                <li "; if($_GET['day'] == $dateB){ echo "class='current'"; }; echo"><a href='?day=".$dateB."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'> ".$dateB."</a></li>
                <li "; if($_GET['day'] == $dateJ || !isset($_GET['day'])){ echo "class='current'"; }; echo"><a href='?day=".$dateJ."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'> ".$dateJ."</a></li>
                <li "; if($_GET['day'] == $dateA){ echo "class='current'"; }; echo"><a href='?day=".$dateA."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'> ".$dateA."</a></li>
                <li "; if($_GET['day'] == $dateAA){ echo "class='current'"; }; echo"><a href='?day=".$dateAA."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'> ".$dateAA."</a></li>
                <li "; if($_GET['day'] == $dateAAA){ echo "class='current'"; }; echo"><a href='?day=".$dateAAA."
				&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'> ".$dateAAA."</a></li>
            </ul>
			<ul class='menu3'>
				<li "; if($_GET['moment'] == 'nuit'){ echo "class='current'"; }; echo"><a href='?moment=nuit
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'>".strtoupper('Nuit')."</a></li>
				<li "; if($_GET['moment'] == 'matin'){ echo "class='current'"; }; echo"><a href='?moment=matin
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'>".strtoupper('Matin')."</a></li>
				<li "; if($_GET['moment'] == 'apresmidi'){ echo "class='current'"; }; echo"><a href='?moment=apresmidi
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'>".strtoupper('Apres-Midi')."</a></li>
				<li "; if($_GET['moment'] == 'debutsoiree'){ echo "class='current'"; }; echo"><a href='?moment=debutsoiree
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'>".strtoupper('Debut de soiree')."</a></li>
				<li "; if($_GET['moment'] == 'soiree'){ echo "class='current'"; }; echo"><a href='?moment=soiree
				&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; 
				echo "&total="; if(isset($_GET['total'])) { echo $_GET['total']; } echo "'>".strtoupper('Soiree')."</a></li>
			</ul>
			
         </nav>
         <div id='slide'>			 
            <div class='slider'>";
			
			echo "
                <ul class='items'>
                    <li><img src='' alt='' /><div class='banner'><div class=''></div><a href='#' class=''></a></div></li>
                    <li><img src='' alt='' /><div class='banner'><div class=''></div><a href='#' class=''></a></div></li>
                    <li><img src='' alt='' /><div class='banner'><div class=''></div><a href='#' class=''></a></div></li>
                </ul>";
				
				
				echo "
				<table border='1' style='width:100%'>";
				
				// Recupère tous les nal +
				$nvlleConnexion2 = new Connexion();
				$bdd2 = $nvlleConnexion2->IDconnexion;
				
				$SQL0 = "SELECT UPPER(c.LIBELLE) FROM chaine as c LIMIT 0, 4";
					
				$resultat0 = $bdd2->query($SQL0);					
								
				$n=0;				
				
				while ($resultat2=$resultat0->fetch(PDO::FETCH_BOTH))
				{	
					// Requete pour les programmes
					$nvlleConnexion = new Connexion();
					$bdd = $nvlleConnexion->IDconnexion;
					
					$fdf = $_GET['day'];
					
					// var_dump($fdf);
					$joursC = substr($fdf, 5, 2);
					// var_dump($joursC); // 21
					$mois = substr($fdf, 8, 12);
					// var_dump($mois); // mars
					$joursL = substr($fdf, 0, 3);
					// var_dump($joursL); // lun
					
					$dateURL = strftime("%Y-%m-%d", mktime(0, 0, 0, date('m'), $joursC, date('y')));
					// var_dump($dateURL);
					
					
					$momento = $_GET['moment'];
					// var_dump($momento);
					
					$SQL = "SELECT UPPER(c.libelle), da.DATEH, p.nom, UPPER(t.LIBELLE), p.DUREE, p.INEDIT, p.HD, pe.LIBELLE
					FROM programme as p INNER JOIN diffusion as di on p.CODE = di.CODE INNER JOIN chaine as c on di.ID_1 = c.ID INNER JOIN date_heure as da on di.ID = da.ID 
					INNER JOIN type_programme as t on p.ID_CORRESPOND = t.ID INNER JOIN periode as pe on da.ID_REL_1 = pe.ID
					WHERE c.libelle = '" .$resultat2[0]. "' AND SUBSTR(da.DATEH, 1, 10) = '".$dateURL."' 
					AND pe.LIBELLE = '".$momento."'			;"; //  AND da.DATEH = '" .. "' SUBSTR(`DATEH`, 1, 10)
					
					$resultat = $bdd->query($SQL);	
					
					// Tableau
					$tab = array();
					
					while($resultat1=$resultat->fetch(PDO::FETCH_BOTH))
					{
						$tab[] = $resultat1;
					}
					// var_dump($tab[0][1]);
					
					$heure = substr($tab[0][1],10,6);
					
					$duree1 = substr($tab[0][4],0,2);
					$duree2 = substr($tab[0][4],3,2);
					
					// var_dump($tab[0][4]);
					
					if(isset($tab[0][4]))
					{
						$duree = $duree1 . " H " . $duree2;
					}
					else
					{
						$duree = "";
					}
					
					// cellule 2
					$heure2 = substr($tab[1][1],10,6);
					
					$duree3 = substr($tab[1][4],0,2);
					$duree4 = substr($tab[1][4],3,2);
					
					if(isset($tab[1][4]))
					{
						$duree5 = $duree3 . " H " . $duree4;
					}
					else
					{
						$duree5 = "";
					}
					
					// cellule 3
					$heure3 = substr($tab[2][1],10,6);
					
					$duree9 = substr($tab[2][4],0,2);
					$duree8 = substr($tab[2][4],3,2);
					
					if(isset($tab[1][4]))
					{
						$duree6 = $duree9 . " H " . $duree8;
					}
					else
					{
						$duree6 = "";
					}
					
					$nal_avant = substr($resultat2[0], 0, 4); 
					$nal_apres = substr($resultat2[0], 5, 20);
					$nal = $nal_avant . "</br>" . $nal_apres;
										
					
					// Gestion Logo Nal+
					if($nal_apres == "CINEMA")
					{
						$nom.$n = "<img width='30%' src='images\cinema.png'></img>";
					}
					
					if(empty($nal_apres))
					{
						$nom.$n = "<img width='30%' src='images\canalplus.png'></img>";
					}
					
					if($nal_apres == "SERIES")
					{
						$nom.$n = "<img width='30%' src='images\series.png'></img>";
					}
					
					if($nal_apres == "SPORT")
					{
						$nom.$n = "<img width='30%' src='images\sport.png'></img>";
					}
					
					
					// Gestion Rediffusion OU Avant première
					if($tab[0][5] == 0)
					{
						$image_ap = "<img width='20%' src=''></img>";
						
						if(isset($tab[0][5]))
						{
							$diffusion = "REDIFFUSION";
						}
						else
						{
							$diffusion = "";
						}
					}
					else
					{
						$image_ap = "<img width='20%' src='images\ap.png'></img>";
						
						if(isset($tab[0][5]))
						{
							$diffusion = "1ERE";
						}
						else
						{
							$diffusion = "";
						}
					}
					
					// cellule 2
					// Gestion Rediffusion OU Avant première
					if($tab[1][5] == 0)
					{
						$image_ap2 = "<img width='20%' src=''></img>";
						
						if(isset($tab[1][5]))
						{
							$diffusion2 = "REDIFFUSION";
						}
						else
						{
							$diffusion2 = "";
						}
					}
					else
					{
						$image_ap2 = "<img width='20%' src='images\ap.png'></img>";
						
						if(isset($tab[1][5]))
						{
							$diffusion2 = "1ERE";
						}
						else
						{
							$diffusion2 = "";
						}
					}
					
					// cellule 3
					// Gestion Rediffusion OU Avant première
					if($tab[2][5] == 0)
					{
						$image_ap3 = "<img width='20%' src=''></img>";
						
						if(isset($tab[2][5]))
						{
							$diffusion3 = "REDIFFUSION";
						}
						else
						{
							$diffusion3 = "";
						}
					}
					else
					{
						$image_ap3 = "<img width='20%' src='images\ap.png'></img>";
						
						if(isset($tab[2][5]))
						{
							$diffusion3 = "1ERE";
						}
						else
						{
							$diffusion3 = "";
						}
					}
					
					// Gestion HD ou pas
					if($tab[0][6] == 1)
					{
						$image_hd = "<img width='20%' src='images\log_hd.png'></img>";
					}
					else
					{
						$image_hd = "<img src=''></img>";
					}
					
					if(isset($tab[0][4]) && isset($tab[0][5]))
					{
						$duree_diffus = $duree." - ".$diffusion;
					}
					else
					{
						$duree_diffus = "";
					}
					
					// cellule 2
					if($tab[1][6] == 1)
					{
						$image_hd2 = "<img width='20%' src='images\log_hd.png'></img>";
					}
					else
					{
						$image_hd2 = "<img src=''></img>";
					}
					
					if(isset($tab[1][4]) && isset($tab[1][5]))
					{
						$duree_diffus2 = $duree5." - ".$diffusion2;
					}
					else
					{
						$duree_diffus2 = "";
					}
					
					// cellule 2
					if(isset($tab[1][4]) && isset($tab[1][5]))
					{
						$duree_diffus2 = $duree5." - ".$diffusion2;
					}
					else
					{
						$duree_diffus2 = "";
					}
					
					// cellule 3
					if($tab[2][6] == 1)
					{
						$image_hd3 = "<img width='20%' src='images\log_hd.png'></img>";
					}
					else
					{
						$image_hd3 = "<img src=''></img>";
					}
					
					if(isset($tab[2][4]) && isset($tab[2][5]))
					{
						$duree_diffus3 = $duree6." - ".$diffusion3;
					}
					else
					{
						$duree_diffus3 = "";
					}
					
					// cellule 3
					if(isset($tab[2][4]) && isset($tab[2][5]))
					{
						$duree_diffus3 = $duree6." - ".$diffusion3;
					}
					else
					{
						$duree_diffus3 = "";
					}
					
					
					// var_dump(strlen($tab[0][2]));
					
					if(strlen($tab[0][2]) >= 19)
					{
						$lib_film = substr($tab[0][2], 0, 19) . "..";
						// var_dump($lib_film);
					}
					else
					{
						$lib_film = $tab[0][2];
					}
					
					if(strlen($tab[1][2]) >= 19)
					{
						$lib_film2 = substr($tab[1][2], 0, 19) . "..";
						// var_dump($lib_film);
					}
					else
					{
						$lib_film2 = $tab[1][2];
					}
					
					if(strlen($tab[2][2]) >= 19)
					{
						$lib_film3 = substr($tab[2][2], 0, 19) . "..";
						// var_dump($lib_film);
					}
					else
					{
						$lib_film3 = $tab[2][2];
					}
					
					// var_dump(stripslashes($tab[0][2]));
					
					// Ce qu'on affiche dans la cellule 1
					$cellule = $heure . "</br><b><a href='?film=".addslashes($tab[0][2])."&moment=".$_GET['moment']."&day=".$_GET['day']."&total=".$_GET['total']."#ancre1'>".$lib_film ."</b></br><font color='grey'>" . $tab[0][3] . "</br>".$duree_diffus."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>";
					
					// Ce qu'on affiche dans la cellule 2
					$cellule2 = $heure2 . "</br><b><a href='?film=".addslashes($tab[1][2])."&moment=".$_GET['moment']."&day=".$_GET['day']."&total=".$_GET['total']."#ancre1'>".$lib_film2 ."</b></br><font color='grey'>" . $tab[1][3] . "</br>".$duree_diffus2."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>";
					
					// Ce qu'on affiche dans la cellule 3
					$cellule3 = $heure3 . "</br><b><a href='?film=".addslashes($tab[2][2])."&moment=".$_GET['moment']."&day=".$_GET['day']."&total=".$_GET['total']."#ancre1'>".$lib_film3 ."</b></br><font color='grey'>" . $tab[2][3] . "</br>".$duree_diffus3."&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</font>";
					
					
					if(isset($_GET['total']))
					{						
						$total = $_GET['total']+1;
					}
					else
					{
						$total = 1;
					}
					
					echo "
					<tr>
						<td align=center valign=middle height=83 width=25%>";
							echo "<b>" . $nom.$n .  "<p class='flotte2'>" . $nal . "</p></b>
						</td>
						<td align=center valign=middle  bgcolor='gray' width=2%>";
							echo "<font color='white'><a href='?total="; ?><?php if(isset($_GET['total'])) { $total = $_GET['total']-1; echo $total;} else{$total = 1; echo $total;}; ?><?php echo "
							&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; echo "
							&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; echo "'>◁</a></font>
						</td>
						<td valign=middle  width=20%>
							<p class='flotte'>".$cellule . "</p><p>". $image_hd . "</br>" . $image_ap ."	</p>					
						</td>
						<td valign=middle  width=20%>
							<p class='flotte'>".$cellule2 . "</p><p>". $image_hd2 . "</br>" . $image_ap2 ."	</p>		
						</td>
						<td valign=middle  width=20%>
							<p class='flotte'>".$cellule3 . "</p><p>". $image_hd3 . "</br>" . $image_ap3 ."	</p>	
						</td>
						<td align=center valign=middle  bgcolor='gray' width=2%>";
							echo "<font color='white'><a href='?total="; ?><?php if(isset($_GET['total'])) { $total = $_GET['total']+1; echo $total;} else{$total = 1; echo $total;}; ?><?php echo "
							&moment="; if(isset($_GET['moment'])) { echo $_GET['moment']; } else { echo 'apresmidi';}; echo "
							&day="; if(isset($_GET['day'])) { echo $_GET['day']; } else { echo $dateJ; }; echo "'>▷</a></font>
						</td>
					</tr>";
					 /* <HR width=100%> */
					 
					$n=$n+1;
				}
				
				echo "
				</table>
				
				
            </div>	
            <a href='#' class='prev'></a><a href='#' class='next'></a>
            <div class='line-left'></div>
            <div class='line-right'></div>
            <ul class='pags'></ul>
         </div>
    </header>   
  <!--==============================content================================-->";

if(isset($_GET['film']))
{
	echo "
	<div id='ancre1'>
	</div>
    <section id='content'><div class='ic'>More Website Templates @ TemplateMonster.com. May 14, 2012!</div>
        <div class='slogan'>
        	<p>Fiche du programme : <span class='clr-1'>".stripslashes($_GET['film'])."</span></p>
            <p></br>Dominic Toretto et sa 'famille' doivent faire face à Deckard Shaw, bien décidé à se venger de la mort de son frère.
			Le 'New York Daily New' a d'ailleurs décidé de mettre fin à ce suspens tendancieux en révélant les décisions de la production. Universal envisagerait ainsi d'utiliser pas moins de 4 doublures 
			et de recourir aux images de synthèse pour rendre la présence de Paul Walker crédible.  Car le choix est clair pour l'équipe du film, le personnage de Brian O'Conner ne peut pas mourir et sera 
			alors mis à la retraite à la fin de ce 7e épisode.</br></br></p>
		
			
            <a href='#' class='button-2'>Remonter</a>
        </div>
        <div class='wrap page1-row1'>
        	<div class='box-1 border-right'>
            	<strong class='number number-1'>01.</strong>
                <span class='text-1'>Genre</span>
                <p class='text-3'>Action</p>
            </div>
            <div class='box-1 border-right'>
            	<strong class='number number-2'>02.</strong>
                <span class='text-1'>Date de sortie</span>
                <p class='text-3'>2007</p>
            </div>
            <div class='box-1 border-right'>
            	<strong class='number number-3'>03.</strong>
                <span class='text-1'>Durée</span>
                <p class='text-3'>1h30</p>
            </div>
            <div class='box-1 last'>
            	<strong class='number number-4'>04.</strong>
                <span class='text-1'>Réalisé par</span>
                <p class='text-3'>Martin Weisz</p>
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
	*/
	echo "
	<div class='slogan'>
        	<p><span class='clr-1'>Ca</span>sting</p>
            <p></br>Depuis l’annonce dramatique du terrible accident de Paul Walker les plus folles rumeurs ont couru sur l’avenir de la saga Fast and Furious 7. 
			Entre la possibilité de voir le frère de l’acteur reprendre le rôle à l’écran, celle de voir son personnage tout simplement disparaître alors qu’il avait participé à 75% du tournage, 
			tout était annoncé puis démenti. Finalement cette rumeur quelque peu nauséabonde, notamment pour la famille devrait prendre fin dans les prochains jours. Si nous sommes loin du scandale 
			de la vente sur le web des derniers objets de Paul Walker au moment de l’accident, le feuilleton sur sa présence dans FF7 a un peu trop duré.</br></br></p>
		
			
        </div>
    </section>
";
}
echo "	
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