<?php
/**
 * page.php
 *
 * The template for displaying all pages.
 */
?>

<?php get_header(); ?>
<div class="page-hero-bg">
    <div class="blog-hero page-hero">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">
                </div>
            </div>
        </div>
    </div>
</div>

<div class="main-content woocommerce-content-page sections"  role="main">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
			 <?php if (have_posts()) : ?>
                    <?php woocommerce_content(); ?>
                <?php endif; ?>
            </div> <!-- end main-content -->
        </div>
    </div>
</div> 
<?php get_footer(); ?>