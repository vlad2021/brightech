<div class="container first">
		<?php if( get_field('title_page') ): ?>
			<h1><?php the_field('title_page'); ?></h1>
		<?php endif; ?>
		<div class="inner">
			<div class="column _left">
				<?php if( get_field('title_left') ): ?>
					<h2><?php the_field('title_left'); ?></h2>
				<?php endif; ?>
				<div class="inner">
					<div class="column">
						<?php if( get_field('address') ): ?>
							<p class="address"><?php the_field('address'); ?></p>
						<?php endif; ?>
						<?php if( get_field('phone') ): ?>
 						  <p class="phone">+<?php the_field('phone'); ?></p>
						<?php endif; ?>
					</div>
					<div class="column">
						<?php if( get_field('email') ): ?>
							<p>Email</p>
							<p><a href="mailto:<?php the_field('email'); ?>"><?php the_field('email'); ?></a></p>
						<?php endif; ?>
						<?php if( get_field('send_message') ): ?>
							<p>Send message</p>					
							<p><a href="<?php the_field('send_message_link'); ?>" target="_blank"><?php the_field('send_message'); ?></a></p>
						<?php endif; ?>
						<?php if( get_field('send_form') ): ?>
							<p>Send form</p>
							<p><a href="<?php the_field('send_form_link'); ?>" target="_blank"><?php the_field('send_form'); ?></a></p>
						<?php endif; ?>
					</div>			
				</div>
			</div>
			<div class="column _right">
				<?php if( get_field('title_right') ): ?>
					<h2><?php the_field('title_right'); ?></h2>
				<?php endif; ?>
				<?php if( get_field('text1') ): ?>
					<p><?php the_field('text1'); ?></p>
				<?php endif; ?>
				<?php if( get_field('phone') ): ?>
					<p class="phone">+<?php the_field('phone'); ?></p>
				<?php endif; ?>
			</div>			
		</div>
	</div>