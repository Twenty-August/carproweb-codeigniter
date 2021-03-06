<!DOCTYPE html>
<html lang="en">
    <head>
        <?php _widget('head');?>
    </head>
    <body class="<?php _widget('custom_paletteclass'); ?>">
        <header class="header">
            <?php _widget('custom_header_menu-for-loginuser');?>
            <?php _widget('header_main_color');?>
        </header><!-- /.header -->
        <?php _widget('top_search-cityguide');?>
        <main class="">
            <div class="container container-palette bg-first">
                <div class="container">  
                    <div class="row">
                        <div class="col-md-9 left-side">
                             <?php _widget('center_recentlistings_noheader');?>
                        </div>
                        <div class="col-md-3 right-side sidebar">
                            <?php _widget('right_mapllistings');?>
                        </div>
                    </div>
                </div>
            </div> 
            <?php _widget('bottom_defaultcontent');?>
            <?php _widget('bottom_imagegallery');?>
        </main>

        <?php _subtemplate( 'footers', _ch($subtemplate_footer, 'default')); ?>
        <?php _widget('custom_popup');?>
        <?php _widget('custom_palette');?>
        <?php _widget('custom_javascript');?>
    </body>
</html>