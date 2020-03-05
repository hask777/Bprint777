<section class="prefirance_1_section">
    <div class="prefirance_1_section_bgc">

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 wrapper">
                <div class="section_heading flex center-horizontal">
                    <h2>WHY CHOOSE US</h2>
                </div>
                <div class="section_desctiption flex center-horizontal">
                    <p>They key is to have every key, the key to open every door. We don`t see them, we will never see them</p>
                </div>
                <div class="top_hits_1_line">

                </div>
                <div class="prefirance_1_items flex">
                    <?php

                        $args = array(
                            'posts_per_page' => 4,
                            'post_type' => 'advantage'
                        );
                        $advantage_post = new WP_Query($args);

                        while ( $advantage_post->have_posts() ) {
                        	$advantage_post->the_post();?>

                            <div class="prefirance_1_item col-md-6 flex">
                                <div class="prefirance_1_items_icon">

                                    <?php if(get_post_meta( $post->ID, '_advantage_font_awesome_value_key', true) == 'icon'){
                                        echo '<i class="fa fa-caret-down"></i>';
                                    } ?>

                                </div>
                                <div class="prefirance_1_items_content">
                                    <h3><?php the_title(); ?></h3>
                                    <p><?php the_content(); ?></p>
                                </div>
                            </div>
                        <?} wp_reset_query();

                    ?>
                    <div class="prefirance_1_item col-md-6 flex">
                        <div class="prefirance_1_items_icon">
                            <i class="fas fa-question"></i>
                        </div>
                        <div class="prefirance_1_items_content">
                            <h3>HIGHT QUALITY</h3>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</section>
<section>
    sf
</section>
