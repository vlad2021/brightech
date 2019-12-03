<div class="container third">

		<?php if( get_field('contact_form_title') ): ?>
			<h3><?php the_field('contact_form_title'); ?></h3>
		<?php endif; ?>

		<div class="inner">
			<div class="column _left">
				<?php if( get_field('form_test') ): ?>
					<?php the_field('form_test'); ?>
				<?php endif; ?>
			</div>
			<div class="column _right">
				<?php if( get_field('right_text') ): ?>
					<p class="black-txt"><?php the_field('right_text'); ?></h3>
				<?php endif; ?>
			</div>
		</div>	

	</div>