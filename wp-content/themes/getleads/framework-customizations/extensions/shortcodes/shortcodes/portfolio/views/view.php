<?php if (!defined('FW')) die('Forbidden'); ?>


<?php
$portfolio = $atts['portfolios'];
$portfolio_style = $portfolio['portfolio_style'];

$portfolio_one = $portfolio['portfolio-1']['portfolio_item'];
$portfolio_two = $portfolio['portfolio-2']['portfolio_item'];

if ($portfolio_style == 'portfolio-1'):?>
    <?php foreach ($portfolio_one as $item): ?>
        <div class="col-md-4 col-sm-6 m-b-md">
            <div class="h caption-1 wow zoomIn">
                <!-- Item Image -->
                <figure>
                    <?php if (!empty($item['image'])): ?>
                        <img src="<?php echo esc_url($item['image']['url']); ?>" class="img-responsive" alt="<?php echo wp_kses_post($item['title']); ?>">
                    <?php endif; ?>
                    <!-- Item Caption -->
                    <figcaption>
                        <div class="caption-box vertical-center-abs <?php echo esc_attr($atts['center']);?>">
                            <?php if(!empty($item['title'])): ?>
                                <h5><?php echo wp_kses_post($item['title']); ?></h5>
                            <?php endif;?>
                            
                            <?php if(!empty($item['description'])): ?>    
                                <p class="small"><?php echo wp_kses_post($item['description']); ?></p> 
                            <?php endif;?>
                            <!-- View More Button -->
                             <?php if (!empty($item['popup_image'])): ?>
                                <a href="<?php echo esc_url($item['popup_image']['url']); ?>" class="btn btn-green m-b-0 mp-gallery" title="<?php echo wp_kses_post($item['title']); ?>"><?php echo wp_kses_post($item['btn_txt']); ?></a>
                            <?php endif;?>
                        </div>
                    </figcaption>
                </figure>
            </div>
        </div>
    <?php endforeach;
endif;
?>


<ul class="portfolio-grid">  
    <?php if ($portfolio_style == 'portfolio-2'): ?>

    <?php foreach ($portfolio_two as $item): ?>
            <!-- Portfolio Item -->
            <li class="h caption-2">
                <figure>
                    <?php if (!empty($item['image'])): ?>
                        <img src="<?php echo esc_url($item['image']['url']); ?>" class="img-responsive" alt="<?php echo wp_kses_post($item['title']); ?>">
                    <?php endif; ?>
                    <figcaption>
                        <div class="caption-box">
                            <div class="col-xs-7 <?php echo esc_attr($atts['center']);?>">
                                <?php if(!empty($item['title'])): ?>
                                    <p class="m-b-0"><?php echo wp_kses_post($item['title']); ?></p>
                                <?php endif;?>
                                    
                                <?php if(!empty($item['name'])): ?>    
                                    <p class="small m-t-0"><?php echo esc_attr($item['name']); ?></p> 
                                <?php endif; ?>
                            </div>
                            <div class="col-xs-5">
                                <?php if (!empty($item['image'])): ?>
                                    <a href="<?php echo esc_url($item['popup_image']['url']); ?>" class="btn btn-green mp-gallery" title="<?php echo wp_kses_post($item['title']); ?>"><?php echo wp_kses_post($item['btn_txt']); ?></a>
                                <?php endif;?>
                            </div>
                        </div>
                    </figcaption>
                </figure>
            </li>

        <?php endforeach;
    endif;
    ?>
</ul><!-- /End Portfolio Grid -->
