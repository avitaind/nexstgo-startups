<?php
if ( !defined( 'FW' ) ) {
	die( 'Forbidden' );
}

//getleads_print($atts);
$social_style = $atts[ 'socials' ][ 'social_style' ];

$social_item1	 = $atts[ 'socials' ][ 'social-1' ][ 'social_item' ];
$social_item3	 = $atts[ 'socials' ][ 'social-3' ];
?>

<?php if ( $social_style == 'social-1' ): ?>
	<div class="row">
		<div class="col-md-10 col-md-offset-1 text-center share-color"> 
			<?php foreach ( $social_item1 as $item ): ?>
				<div class="col-md-4">
					<a target="_blank" href="<?php echo $item[ 'link' ]; ?>" style ="background:<?php echo $item[ 'background-color' ]; ?>" class="share-block"><i class="<?php echo $item[ 'icon' ]; ?>"></i><?php echo $item[ 'title' ]; ?></a>
				</div>
			<?php endforeach; ?>
		</div>
	</div><!-- /End Row -->


<?php elseif ( $social_style == 'social-3' ): 
	?>
	
	<div class="insta-line">

		<div class="instagram-feed" data-access-token="<?php echo $social_item3[ 'access_token' ]; ?>">
			<ul class="insta-feed"></ul>
		</div>
		<!-- Instagram Logo -->
		<div class="insta-square text-center bg-green">
			<i class="fa fa-instagram vertical-center-rel inverse"></i> 
		</div>
	</div>  
<?php endif;
?>

