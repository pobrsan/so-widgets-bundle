<?php foreach ( $settings['items'] as $item ) : ?>
	<div class="sow-carousel-item" tabindex="-1">
		<?php if ( ! empty( $item['title'] ) ) : ?>
			<h4><?php echo esc_html( $item['title'] ); ?></h4>
		<?php endif; ?>

		<div class="sow-carousel-content">
			<?php $this->render_item_content( $item, $instance ); ?>
		</div>
	</div>
	<?php
endforeach;
