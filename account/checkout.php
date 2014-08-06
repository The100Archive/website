{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" } 


<div class="container">


{exp:store:checkout form_class="form-horizontal nicer" {!--next="login/confirm"--} return="account/order/ORDER_HASH" payment_method="paypal_express"}

	{if no_items}
<div class="row">
			<div class="nine columns offset-by-two end">
			<div class="alert-box red">Your cart is empty.<br/><a href="{path="account/subscriptions"}">Take a look at the available options on our Subscriptions page &rarr;</a><a href="" class="close">&times;</a></div>
			</div>
</div><!-- Row -->
	{/if}





	
	
	
	<!--—————— Text ——————-->
	<div class="row pad-top">
				<div class="eight columns offset-by-three end">
					<h4>Your Order</h4>
				</div>
	</div><!-- Row -->





	<!--—————— Forms ——————-->
	<div class="row pad-top">
		<div class="nine columns offset-by-two">
				{items}
				<div class="row">
					<div class="five columns">
						<p class="text-small text-grey">Product</p>
						<p>{title}: {price}</p>
						{modifiers}
							<p class="text-small text-black">{modifier_name}: {modifier_value} {if price_mod_val}({price_mod}){/if}</p>
						{/modifiers}
					</div>

					{if entry_id == "206"}
					<div class="four columns">
						<label for="quantity" class="text-white">Quantity</label>
						<p>1</p>
					</div>
					<div class="three columns">
						<p class="text-small text-white">Total</p>
						<p>{item_subtotal}</p>
					</div>
					{if:else}
					<div class="four columns">
						<label for="quantity" class="text-white">Quantity</label>
						<input name="items[{key}][item_qty]" type="text" value="{item_qty}" class="expand input-text" id="quantity" placeholder="1" />
					</div>
					<div class="three columns">
						<p class="text-small text-white">Total</p>
						<p>{item_subtotal}</p>
					</div>
					{/if}
				</div>
				<div class="row">
				<div class="four columns offset-by-five">
				<label for="promo_code" class="text-fade">Promo Code</label>
				<input type="text" name="promo_code" id="promo_code" value="{promo_code}" class="expand input-text form-fade"/>
				<input type="submit" name="update_cart" value="Update Totals" class="button small fade" />
				</div>
				<div class="three columns text-fade">
					<p class="text-small">Discount</p>
					<p>{order_discount}</p>
				</div>
				</div>
				{/items}

			
				{if tax_name}
				<div class="row">
				<hr/>
				</div>
				<div class="row">
					<div class="nine columns">
						<p>{tax_name} &#64; ({tax_percent}%)</p>
					</div>
					<div class="three columns">
						<p>{order_tax}</p>
					</div>
				</div>
				{/if}
			
				<div class="row">
				<hr/>
				</div>
				<div class="row">
					<div class="four columns offset-by-five">
						<p>Total</p>
					</div>
					<div class="three columns">
						<p>{order_total}</p>
					</div>
				</div>
				
				<div class="row gap-top">
					
					<div class="six columns offset-by-five">
						<input type="submit" name="submit" value="Process your Order »" class="xlarge black button hover-orange"></a>
					</div>
				</div>
				
		</div><!-- row -->
	
	
	
</div><!-- Container -->
{/exp:store:checkout}



{embed="___includes/2014footer"}
