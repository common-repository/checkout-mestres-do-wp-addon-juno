<fieldset id="<?php echo esc_attr( $id ); ?>-form" class="wc-payment-form">
	<div class="payment-method-description">
		<?php echo esc_html($description); ?>
	</div>

	<?php if ( empty( $installments ) ) : ?>
		<input type="hidden" name="<?php echo esc_attr( $id ); ?>-installments" value="1">
	<?php else : ?>
		<section class="wc-payment-form-fields">
			<p class="form-row form-row-wide">
				<label for="<?php echo esc_attr( $id ); ?>-installments">
					<?php echo esc_html__( 'Número de parcelas' ); ?>
				</label>
				<select id="<?php echo esc_attr( $id ); ?>-installments" name="<?php echo esc_attr( $id ); ?>-installments" class="input-select">
					<?php foreach ( $installments as $value => $label ) : ?>
						<option value="<?php echo esc_attr( $value ); ?>">
							<?php echo esc_html($label); ?>
						</option>
					<?php endforeach; ?>
				</select>
			</p>
		</section>
	<?php endif; ?>
</fieldset>

