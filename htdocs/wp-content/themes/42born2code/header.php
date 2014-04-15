<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" <?php language_attributes() ?>>
<head profile="http://gmpg.org/xfn/11">

<meta http-equiv="content-type" content="<?php bloginfo('html_type') ?>; charset=<?php bloginfo('charset') ?>" />
<meta name="description" content="" />
<meta name="keywords" content="" />
<title><?php wp_title( '-', true, 'right' ); echo wp_specialchars( get_bloginfo('name'), 1 ) ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_directory'); ?>/style.css" type="text/css" media="screen" />

	<!--[if lte IE 6]><script type="text/javascript" src="<?php bloginfo('template_url'); ?>/js/supersleight-min.js"></script><![endif]-->
<?php wp_enqueue_script(get_bloginfo('template_directory').'/js/jquery.js'); ?>
<?php wp_enqueue_script('superfish', get_bloginfo('template_directory').'/js/superfish.js', array('jquery'), '1.7'); ?>
<?php wp_enqueue_script(get_bloginfo('template_directory').'/js/nav.js'); ?>
<?php if (trim(get_option('ft_header_code')) <> "") { echo stripslashes(get_option('ft_header_code')); } ?>
<?php if (is_singular()) wp_enqueue_script('comment-reply'); ?>

<?php wp_head(); ?> <!-- #NE PAS SUPPRIMER cf. codex wp_head() -->
</head>
<body <?php body_class() ?>>
<div id="top">
	<div class="pads clearfix"><?php wp_nav_menu( array( 'menu' => 'MenuH', 'sort_column' => 'menu_order', 'container_class' => 'nav' ) ); ?>
	</div>
</div>
<div id="header" style = "width:1058px">
	<div class="pads clearfix">
		<a href="<?php echo get_option('home'); ?>">
			<img id="site-logo" src="<?php bloginfo('template_directory'); ?>/images/logo.png" alt="<?php bloginfo('name'); ?>" />
		</a>
		<form role="search" method="get" class="search-form" action="<?php echo home_url( '/' ); ?>">
	<label>
		<span class="screen-reader-text">Rechercher sur le site</span>
		<input type="search" class="search-field" placeholder="Recherche …" value="" name="s" title="Search for:" />
	</label>
	<input type="submit" class="search-submit" value="Search" />
</form>

<form name="registerform" id="registerform" action="http://wordpress.local.42.fr:8080/wp-login.php?action=register" method="post">
	<p>
		<label for="user_login">Identifiant<br />
		<input type="text" name="user_login" id="user_login" class="input" value="" size="20" /></label>
	</p>
	<p>
		<label for="user_email">E-mail<br />
		<input type="text" name="user_email" id="user_email" class="input" value="" size="25" /></label>
	</p>
	<p class="alo_easymail_reg_optin"><input type="checkbox" id="alo_em_opt" name="alo_em_opt" value="yes" class="input" checked="checked" /> <label for="alo_em_opt" >Oui, j'aimerais recevoir votre Lettre électronique</label></p><input type="hidden" id="alo_em_lang" name="alo_em_lang" value="fr" /> 	<p id="reg_passmail">Un mot de passe vous sera envoyé sur votre adresse de messagerie.</p>
	<br class="clear" />
	<input type="hidden" name="redirect_to" value="" />
	<p class="submit"><input type="submit" name="wp-submit" id="wp-submit" class="button button-primary button-large" value="Inscription" /></p>
</form>
</form>

<p id="nav">
<a href="http://wordpress.local.42.fr:8080/wp-login.php">Connexion</a> |
<a href="http://wordpress.local.42.fr:8080/wp-login.php?action=lostpassword" title="Récupération de mot de passe">Mot de passe oublié&nbsp;?</a>
</p>
</p>
		<div class="nav-wrap">
			<div id="nav">
			<?php wp_nav_menu( array( 'theme_location' => 'primary-menu', 'sort_column' => 'menu_order', 'container_class' => 'nav' ) ); ?>
			</div>
		</div>
	</div>
</div><!--  #header -->

<div id="container">
	<div class="pads clearfix">