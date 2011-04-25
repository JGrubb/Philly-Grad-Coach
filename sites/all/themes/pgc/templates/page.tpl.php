<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="<?php print $language->language ?>" lang="<?php print $language->language ?>" dir="<?php print $language->dir ?>">
  <head>
    <?php print $head ?>
    <?php print $styles ?>
    <title><?php print $head_title ?></title>
  </head>
  <body <?php print drupal_attributes($attr) ?>>
		<div id="header">
			<div id="inner-header">
				<div class="container_16">

				  <?php print $skipnav ?>
					<div class="grid_16">

				  <div id='branding'><div class='limiter clear-block'>
						<div id="logo" class="grid_5 alpha">
				    	<a href="/"><img src="/<?php print $directory ?>/images/logo.jpg"></a>
						</div>
						<div class="grid_11 omega">
						<?php if ($header): ?>
					    <div id='header-block'><div class='limiter clear-block'>
					      <?php print $header; ?>
					    </div></div>
					  <?php endif; ?>
							<div id="site-name"><?php print $site_name ?></div>
							<div id="slogan"><?php print $site_slogan?></div>
						</div>
				  </div></div>
					<?php if ($help || ($show_messages && $messages)): ?>
				    <div id='console'><div class='limiter clear-block'>
				      <?php print $help; ?>
				      <?php if ($show_messages && $messages): print $messages; endif; ?>
				    </div></div>
				  <?php endif; ?>
					</div>
				</div>
				<div class="clear-block"></div>
			</div>
		</div>
		
	<div class="container_16">

  	<div id='page'><div class='limiter clear-block'>
      <div id='left' class='clear-block grid_3'><?php print $left ?></div>
		
			<div id="main-wrapper">
				<?php if ($account_nav): ?>
				<div class="grid_13" id="account-nav">
					<?php print $account_nav ?>
				</div>
				<?php endif; ?>
		    <div id='main' class='clear-block grid_10'>
					<div id="inner-main">
		        <?php if ($title): ?><h1 class='page-title'><?php print $title ?></h1><?php endif; ?>
		        <?php if ($tabs) print $tabs ?>
		        <?php if ($tabs2) print $tabs2 ?>
		        <div id='content' class='clear-block'><?php print $content ?></div>
					</div>
		    </div>

		    <?php if ($right): ?>
		      <div id='right' class='clear-block grid_3'>
						<div id="inner-right">
						<?php print $right ?>
						</div>
					</div>
		    <?php endif; ?>
			</div><!-- end main-wrapper-->

  </div></div>

  	<div id="footer"><div class='limiter clear-block'>
    <?php print $feed_icons ?>
    <?php print $footer ?>
    <?php print $footer_message ?>
  	</div></div>

	  <?php print $scripts ?>
	  <?php print $closure ?>
		</div>
  </body>
</html>
