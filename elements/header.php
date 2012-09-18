<?php
$page = Page::getCurrentPage();
$typeHandle = $page->getCollectionTypeHandle();

$page_type_name = "pagetype_". $typeHandle;

$pagename = str_replace(" ", "",   strtolower($page->getCollectionName()));
$pagename = str_replace("+", "_",  strtolower($pagename));
$pagename = str_replace("-", "_",  strtolower($pagename));
$pagename = str_replace("'", "",   strtolower($pagename));
$pagename = str_replace("`", "",   strtolower($pagename));
$pagename = str_replace("\"", "",  strtolower($pagename));
$pagename = str_replace("__", "_", strtolower($pagename));
$pagename = "pagename_". $pagename;
define('CURRENT_PAGE_NAME', $pagename);
?>

<!DOCTYPE html>
<html>
<head>
<?php       
  Loader::element('header_required'); 
?>

<link href="<?php echo $this->getStyleSheet('typography.css')?>" rel="stylesheet" type="text/css" media="screen" />

<link rel="stylesheet" href="<?php  echo $this->getThemePath()?>/fonts/fonts.css" type="text/css" charset="utf-8" />

<link href="<?php echo $this->getThemePath() ?>/master.css" rel="stylesheet" type="text/css" media="screen" />

<?php if(isset($_SERVER['HTTPS']) && ($_SERVER['HTTPS'] == 'on')) { ?>
	<!--[if IE]>
	<script src="https://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php } else { ?>
	<!--[if IE]>
	<script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->
<?php } ?>

<script src="<?php  echo $this->getThemePath()?>/js/modernizr-1.6.min.js"></script>
</head>

<body class="<?php echo $page_type_name ." ". $pagename ?>">

<div id="container">

<div id="header">
  <div class="left"></div>
  <div class="center">
    <div id="header_logo"></div>
    <div id="header_navigation">
      <?php 
        $bt = BlockType::getByHandle('autonav');
        $bt->controller->displayPages = 'top';
        $bt->controller->orderBy = 'display_asc';
        $bt->controller->displaySubPages = 'all'; 
        $bt->controller->displaySubPageLevels = 'custom';
        $bt->controller->displaySubPageLevelsNum = '0';   
        $bt->render('templates/header_navigation');
      ?>
      <div class="clear"></div>
    </div>
    <div id="nav_btns">
      <a href="/index.php/cart" class="cart_link">Cart</a>
      <a href="/index.php/login" class="login_link">Login</a>
    </div>
  </div>
  <div class="right"></div>
  <div class="clear"></div>
</div>

<div class="clear"></div>

<div id="content_body"> <!-- begin main content -->


<?php
/*

<div id="body_container">
  <div id="head_container">
    <header>
    <hgroup id="logo">
    <h1><a href="<?php echo DIR_REL?>/"><?php       
      $block = Block::getByName('My_Site_Name');
      if($block && $block->bID) $block->display();
      else echo SITE;?></a>
    </h1>
    <h2>
    <?php  
      $a = new Area('Slogan');
      $a->display($c);
    ?>
    </h2>
    </hgroup>
    <div id="top_navigation_links">
      <?php 
        $bt = BlockType::getByHandle('autonav');
        $bt->controller->displayPages = 'top';
        $bt->controller->orderBy = 'display_asc';
        $bt->controller->displaySubPages = 'all'; 
        $bt->controller->displaySubPageLevels = 'custom';
        $bt->controller->displaySubPageLevelsNum = '0';   
        $bt->render('templates/header_navigation');
      ?>
    </div>
    </header>
  </div>
  <div id="header_banner">
  <?php  
    $a = new Area('Header');
    $a->display($c);
  ?>
  </div>
  
  <div id="content_container">
    <div id="content_container_holder">

*/
?>