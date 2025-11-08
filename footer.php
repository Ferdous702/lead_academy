<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Astra
 * @since 1.0.0
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit; // Exit if accessed directly.
}

?>
<?php astra_content_bottom(); ?>
	</div> <!-- ast-container -->
	</div><!-- #content -->

    <?php /** Added by fizul haque 05-11-2024 */  ?>
    <div class="defaulttoast-container position-fixed top-50 start-0 p-3" style="z-index: 999999999999999999">
        <div id="defaultToast" class="toast hide" role="alert" aria-live="assertive" aria-atomic="true">
            <div class="toast-header">
                <strong class="me-auto toast-title">Lead Academy</strong>
                <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
            </div>
            <div class="toast-body">
            </div>
        </div>
    </div>
    <style>
        #defaultToast {

            border-top : 3px solid #af1f47;
            border-left: 1px solid #af1f47;
            border-right: 1px solid #af1f47;
            border-bottom: 1px solid #af1f47;
            color: #515151;
            background: #fff;
        }
        #defaultToast .toast-header {
            background: #ffecf1;

        }
        #defaultToast .btn-danger {
            background: #af1f47;
        }
        #defaultToast .btn-danger:hover, #defaultToast .btn-danger:focus {
            background: #8e1a3d;
        }
        #defaultToast .toast-header .btn-close:hover, #defaultToast .toast-header .btn-close:focus {
            background: #af1f47;
        }

        @media (max-width: 576px) {
            .defaulttoast-container {
                top: 50% !important;
                left: 50% !important;
                transform: translate(-50%, -50%);
            }
        }

    </style>
    <?php /** Added by fizul haque */  ?>

	<footer id="footer">
        <div class="container">
			<?php dynamic_sidebar( 'sidebar-footer' ); ?>
		</div>
	</footer>

<?php 
	// astra_content_after();
		
	// astra_footer_before();
		
	// astra_footer();
		
	// astra_footer_after(); 
?>
	</div><!-- #page -->
<?php 
	astra_body_bottom();    
	wp_footer(); 
?>
	<!-- Start of HubSpot Embed Code --> <script type="text/javascript" id="hs-script-loader" async defer src="//js.hs-scripts.com/144433395.js"></script> <!-- End of HubSpot Embed Code -->
	</body>
</html>
