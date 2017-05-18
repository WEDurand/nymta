<div id="mainbox">
	<div id="topbar">
		<div id="branding">
			<a href="http://www.mta.info/" target="_blank"><img src="<?php print $logo; ?>" alt="<?php print $site_name; ?>"></a>
		</div>
		<div id="search">
			<?php print render($page['topbar-links']); ?>
			<br/>
			<div id="search_box" style="width:230px; height:32px; float:right; margin-top:4px; margin-right:0; padding-right:0;">
				<?php print render($page['search']); ?>
			</div>
		</div>
		<div id="horizontalcssmenu" style="clear: both;">
			<?php print render($page['nav']); ?>
		</div>
	</div>
       <?php print $messages; ?>
	<?php if(drupal_is_front_page()) { ?>
	<div class="container" class="roundCorners clearfix">
		<?php
		if (isset($field_banner_image)) {
		?>
		<div class="jumbotron" style="background:url(<?php print $field_banner_image; ?>)">
      	</div>
		<?php
			};
		?>
        <div class="mtasi-map">
	<?php 
		hide($node_content['field_banner_image']);
		print render($node_content);
	} else {
		print render($page['content']);
	}
	?>
        </div>
        </div>
	<?php if(drupal_is_front_page()) { ?>
	<div class="region region-footer">
		<div id="block-block-36" class="block block-block">
			<div class="content">
				<div class="prepend-3" style="width: 904px; border-top-color: rgb(180, 180, 180); border-bottom-color: rgb(180, 180, 180); border-top-width: 1px; border-bottom-width: 1px; border-top-style: solid; border-bottom-style: solid;">
				<?php print render($page['footer_menu']); ?>
				</div>
			</div>
		</div>
		<div id="block-block-31" class="block block-block">
			<?php print render($page['footer_copyright']); ?>
		</div>
	</div>
	<?php
			};
        ?>
</div>
