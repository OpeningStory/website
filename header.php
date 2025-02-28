<?php define('BASE_URL', 'http://192.168.1.2/web'); ?>

<!DOCTYPE html>

<html lang="en">

<head>

  <title>slrncl > <?php echo $page; ?> <?php if ( $is_post ) { echo '>'.$post_title; } ?></title>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="Nicolas Solerieu - Web designer, father, cyclist and weirdo based in San Luis Obsipo, CA" />
  <link rel="icon" href="<?php echo BASE_URL; ?>/assets/favicon.svg" type="image/svg+xml">
  <link rel="icon" type="image/x-icon" href="<?php echo BASE_URL; ?>/assets/favicon.ico">
  <link rel="apple-touch-icon" href="<?php echo BASE_URL; ?>/assets/apple-touch-icon.png">

  <meta name="author" content="Nicolas SOLERIEU">
  <meta name="publisher" content="Nicolas SOLERIEU">

  <link href="https://github.com/nsolerieu" rel="me">
  <link rel="canonical" href="http://192.168.1.2/web">

  <meta property="og:title" content="<?php echo $page; ?> <?php if ( $is_post ) { echo '>'.$post_title; } ?>" />
  <meta property="og:type" content="website" />
  <meta property="og:image" content="<?php echo BASE_URL; ?>/assets/img/og-image.png" />

  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/boot.css" >
  <link rel="stylesheet" href="<?php echo BASE_URL; ?>/assets/css/style.css" >

</head>

<!-- BODY -->
<body id="body" class="page page-<?php echo $page; ?>">

<div class="overlay"></div>

<header>
  <div class="container-small">
    <div class="row">
      <div class="col-100 header-container">

        <div class="main-header">
          <div class="header-path">
            <a href="<?php echo BASE_URL; ?>" class="text-color-secondary">slrncl.com</a>
            <span class="text-color-secondary" style="margin-top:4px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M8.59 16.58L13.17 12L8.59 7.41L10 6l6 6l-6 6z"/></svg></span>

            <?php if ( $is_post ) { ?> 
              <a href="<?php echo BASE_URL; ?>/blog/" class="text-color-secondary">blog</a> <span class="text-color-secondary" style="margin-top:4px;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M8.59 16.58L13.17 12L8.59 7.41L10 6l6 6l-6 6z"/></svg></span>
			  <span style="text-overflow:ellipsis;overflow:hidden;white-space:nowrap;max-width:50px;"><?php echo $post_title; ?></span>
            <?php } else { ?>  
              <span><?php echo $page; ?></span>
            <?php } ?>

          </div>
		  
		  <div class="header-menu-bt">
		    <div class="open-menu-button button small secondary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M7.41 8.58L12 13.17l4.59-4.59L18 10l-6 6l-6-6z"/></svg></div>
		    <div class="close-menu-button button small secondary" style="display: none;"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" viewBox="0 0 24 24"><path fill="currentColor" d="M7.41 15.41L12 10.83l4.59 4.58L18 14l-6-6l-6 6z"/></svg></div>
		  </div>
		  <div class="menu-panel box small primary-bg">
		    <div class="nav-columns">
		      <div class="column">
		        <div class="footer-bottom">
		          <a href="<?php echo BASE_URL; ?>/work.php" class="text-small text-color-secondary">活路</a><span>&sdot;</span>
		          <a href="<?php echo BASE_URL; ?>/moments/" class="text-small text-color-secondary">照片</a><span>&sdot;</span>
		          <a href="<?php echo BASE_URL; ?>/blog/" class="text-small text-color-secondary">长话</a>
		        </div>
		      </div>
		    </div>
		  </div>
		  
        </div>
      </div>
    </div>
  </div>
</header>