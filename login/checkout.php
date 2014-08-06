{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>Buy Credits</h1>
</div>

<div class="row">
<div class="span8">

<p>Review your purchase before proceeding to PayPal.</p>

{exp:store:checkout form_class="form-horizontal" error_handling="inline"  {!--next="login/confirm"--} return="login/order/ORDER_HASH" payment_method="paypal_express_test"}

{error:billing_name}

{error:billing_address1}

{error:billing_address2}

{error:billing_address3}

{error:billing_region}

{error:billing_country}

{error:billing_postcode}

{error:billing_phone}

{error:shipping_name}

{error:shipping_address1}

{error:shipping_address2}

{error:shipping_address3}

{error:shipping_region}

{error:shipping_country}

{error:shipping_postcode}

{error:shipping_phone}

{error:order_email}

{error:accept_terms}

{error:payment_method}

{error:shipping_method}

{error:promo_code}

{error:order_custom1}

{error:order_custom2}

{error:order_custom3}

{error:order_custom4}

{error:order_custom5}




	{if no_items}
		<div class="alert alert-error">Your cart is empty!</div>
	{/if}

	<table class="table">
		<thead>
			<tr>
				<th style="width:60%">Product</th>
				<th>Price</th>
				<th>Qty</th>
				<th style="text-align:right">Total</th>
			</tr>
		</thead>
		<tbody>
			{items}
				<tr>
					<td>
						<h4>{title}</h4>
						<p><small>
							{modifiers}
								<b>{modifier_name}</b>: {modifier_value} {if price_mod_val}({price_mod}){/if}<br />
							{/modifiers}
						</small></p>
					</td>
					<td>{price}</td>
					<td><input name="items[{key}][item_qty]" value="{item_qty}" class="input-mini" disabled /></td>
					<td style="text-align:right">{item_subtotal}</td>
				</tr>
			{/items}
			<tr>
				<th colspan="3">Subtotal</th>
				<th style="text-align:right">{order_subtotal}</th>
			</tr>
			<tr>
			  <td>Promo Code</td>
				<td colspan="2">{field:promo_code}</td>
				<td style="text-align:right">{order_discount}</td>
			</tr>
			
			{if tax_name}
  			<tr>
  				<td colspan="3">{tax_name} ({tax_percent}%)</td>
  				<td style="text-align:right">{order_tax}</td>
  			</tr>
  		{/if}
			<tr>
				<th colspan="3">Total</th>
				<th style="text-align:right">{order_total}</th>
			</tr>
		</tbody>
	</table>

	<div class="form-actions">
		{!--<input type="submit" name="update_cart" value="Update Totals" class="btn" />--}
		<input type="submit" name="empty_cart" value="Cancel Order" class="btn btn-danger" />
		{!--<input type="submit" name="next" value="Continue to Billing Details" class="btn btn-primary" />--}
                <input type="submit" name="submit" value="Proceed to Paypal" class="btn btn-success" />
	</div>

{/exp:store:checkout}


</div>
</div>


{s-footer}