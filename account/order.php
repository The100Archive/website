{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" }


{exp:store:orders order_hash="{segment_3}"}

	{if no_orders}
		{redirect="404"}
	{/if}
<div class="container">

<div class="row">
			<div class="nine columns offset-by-two end">
			<div class="alert-box green">Thank you, your order has been processed.<br/>
			<a href="{path="account/add-project"}">Click here to start your submission &rarr;</a><a href="" class="close">&times;</a></div>
			</div>
</div><!-- Row -->

	<!--—————— Text ——————-->
	<div class="row pad-top">
				<div class="eight columns offset-by-three end">
					<h4>Order ID {order_id}: Summary / Invoice</h4>
					<br/>
					<p>{order_date format="%F %j, %Y"}<br/>
					Total: {order_total} &middot; Paid: {if is_order_paid}Yes{if:else}No{/if}<br/>
               	    {screen_name} ({order_email})</p>
				</div>
	</div>
        
        	<div class="row pad-top">
        	
        		<div class="nine columns offset-by-two">
		        		<div class="row">
		        		<hr/>
		        		</div>
        				{items}
        				<div class="row">
        					<div class="five columns">
        						<p class="text-small text-grey">Product</p>
        						<p>{title}: {price}</p>
        						{modifiers}
        							<p class="text-small text-black">{modifier_name}: {modifier_value} {if price_mod_val}({price_mod}){/if}</p>
        						{/modifiers}
        					</div>
        					<div class="four columns">
        						<p class="text-small text-white">Quantity</label>
        						<p>{item_qty}</p>
        					</div>
        					<div class="three columns">
        						<p class="text-small text-white">Total</p>
        						<p>{item_subtotal}</p>
        					</div>
        				</div>
        				<div class="row">
        				<div class="three columns offset-by-nine text-fade">
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
        					
        		</div><!-- row -->
   
{/exp:store:orders}
{embed="___includes/2014footer"}
