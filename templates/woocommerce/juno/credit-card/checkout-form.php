<fieldset id="<?php echo esc_attr( $id ); ?>-form" class="wc-payment-form" data-cart-total="<?php echo esc_attr( json_encode( $installments ) ); ?>">
	<div class="payment-method-description">
		<?php echo esc_html($description); ?>
	</div>
	<div class="fields-wrapper">
		<?php
		// os campos de cartão de crédito são criados no client-side pelo javascript
		// veja o arquivo: assets/src/js/checkout-credit-card.js
		?>
	</div>
</fieldset>
