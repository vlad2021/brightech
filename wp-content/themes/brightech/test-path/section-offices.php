<div class="container second">
    <?php if( get_field('tabs_title') ): ?>
        <h3><?php the_field('tabs_title'); ?></h3>
    <?php endif; ?>

<!-- TABS NAV HERE -->
<ul class="list-of-tabs">
    <li 
        class="tablinks" 
        onclick="openPage( event, '<?php the_field('office_name_1'); ?>')" 
        id="defaultOpen">
        <?php the_field('office_name_1'); ?>
    </li>
    <li 
        class="tablinks" 
        onclick="openPage( event, '<?php the_field('office_name_2'); ?>')">
        <?php the_field('office_name_2'); ?>
    </li>
    <li 
        class="tablinks" 
        onclick="openPage( event, '<?php the_field('office_name_3'); ?>')">
        <?php the_field('office_name_3'); ?>
    </li>
    <li 
        class="tablinks" 
        onclick="openPage( event, '<?php the_field('office_name_4'); ?>')">
        <?php the_field('office_name_4'); ?>
    </li>
</ul>

<!-- TAB Kyiv -->

    <div id="<?php the_field('office_name_1'); ?>" class="tabcontent">

        <?php if( get_field('office_title_1') ): ?>
            <h5><?php the_field('office_title_1'); ?></h5>
        <?php endif; ?>

        <?php if( get_field('office_address_1') ): ?>
            <p><?php the_field('office_address_1'); ?></p>
        <?php endif; ?>

        <?php if( get_field('link_on_map_1') ): ?>
            <div class="wrapper">
                <iframe 
                    class="mapsFrame"
                    src="<?php the_field('link_on_map_1'); ?>" >
                </iframe>
            </div>
        <?php endif; ?>

    </div>

<!-- TAB New york -->
    <div id="<?php the_field('office_name_2'); ?>" class="tabcontent">

        <?php if( get_field('office_title_2') ): ?>
            <h5><?php the_field('office_title_2'); ?></h5>
        <?php endif; ?>

        <?php if( get_field('office_address_2') ): ?>
            <p><?php the_field('office_address_2'); ?></p>
        <?php endif; ?>

        <?php if( get_field('link_on_map_2') ): ?>
            <div class="wrapper">
                <iframe 
                    class="mapsFrame"
                    src="<?php the_field('link_on_map_2'); ?>" >
                </iframe>
            </div>
        <?php endif; ?>

    </div>


<!-- TAB Barcelona -->
    <div id="<?php the_field('office_name_3'); ?>" class="tabcontent">

        <?php if( get_field('office_title_3') ): ?>
            <h5><?php the_field('office_title_3'); ?></h5>
        <?php endif; ?>

        <?php if( get_field('office_address_3') ): ?>
            <p><?php the_field('office_address_3'); ?></p>
        <?php endif; ?>

        <?php if( get_field('link_on_map_3') ): ?>
            <div class="wrapper">
                <iframe 
                    class="mapsFrame"
                    src="<?php the_field('link_on_map_3'); ?>" >
                </iframe>
            </div>
        <?php endif; ?>

    </div>

<!-- TAB Rome -->
    <div id="<?php the_field('office_name_4'); ?>" class="tabcontent">

        <?php if( get_field('office_title_4') ): ?>
            <h5><?php the_field('office_title_4'); ?></h5>
        <?php endif; ?>

        <?php if( get_field('office_address_4') ): ?>
            <p><?php the_field('office_address_4'); ?></p>
        <?php endif; ?>

        <?php if( get_field('link_on_map_4') ): ?>
            <div class="wrapper">
                <iframe 
                    class="mapsFrame"
                    src="<?php the_field('link_on_map_4'); ?>" >
                </iframe>
            </div>
        <?php endif; ?>

    </div>

</div>
