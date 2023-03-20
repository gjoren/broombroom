<div class="hero-container"<?php echo $inlineStyles;?>>
	<div class="container">
		<div class="hero-content">
			<h2><?php echo $title;?></h2>
			<h3><?php echo $subtitle;?></h3>
		</div>
		<?php if( $btnLink ):?>
			<div class="hero-button">
				<a href="<?php echo $btnLink;?>"><?php echo $btnText;?></a>
			</div>
		<?php endif;?>
	</div>
</div>