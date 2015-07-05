<?php 
/**
* dkpdf-button.php
* This template is used to display DK PDF Button
*
* Do not edit this template directly, 
* copy this template and paste in your theme inside a directory named dkpdf 
*/ 
?>

<?php

	global $post;

	// check if we're using polylang plugin 
	if( function_exists( 'pll_register_string' )  ) {

		// get button text setting value from polylang
		$pdfbutton_text = pll__( 'PDF Button' );

  	} else {

  		$pdfbutton_text = sanitize_option( 'dkpdf_pdfbutton_text', get_option( 'dkpdf_pdfbutton_text', 'PDF Button' ) );

  	}

  	$pdfbutton_align = sanitize_option( 'dkpdf_pdfbutton_align', get_option( 'dkpdf_pdfbutton_align', 'right' ) );

?>

<?php

	$hide_pdfbutton = sanitize_meta( '_hide_pdfbutton', get_post_meta( $post->ID,  '_hide_pdfbutton' ), 'checkbox' );

	// only show button if _hide_pdfbutton post meta is not checked
	if ( ! $hide_pdfbutton ) { ?>

		<div class="dkpdf-button-container" style="text-align:<?php echo $pdfbutton_align;?>">

			<a class="dkpdf-button" href="<?php echo esc_url( add_query_arg( 'pdf', $post->ID ) );?>" target="_blank"><span class="dkpdf-button-icon"><i class="fa fa-file-pdf-o"></i></span> <?php echo $pdfbutton_text;?></a>

		</div>

	<?php }

?>



