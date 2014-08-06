{s-login-check}
{embed="includes/header" }

<div class="row">
<div class="span8">

{exp:store:orders order_hash="{segment_3}"}

	{if no_orders}
		{redirect="404"}
	{/if}

	<div class="page-header">
		<h1>Order Summary / Invoice</h1>
                <p>You can now <a href="{path="login/add-project"}">submit a project</a> to the 100 Archive.</p>
	</div>

	<div class="row">
		<div class="span4">
			<fieldset>
				<legend>Summary</legend>
				<div>
					<b>Order ID:</b> {order_id}<br />
					<b>Date:</b> {order_date format="%j %M %Y"}<br />
					<b>Total:</b> {order_total}<br />
					<b>Paid:</b> {if is_order_paid}Yes{if:else}No{/if}
				</div>
			</fieldset>
		</div>
		<div class="span4">
			<fieldset>
				<legend>Customer Details</legend>
				<div>
                                        <div>{screen_name}</div>
					<div>{order_email}</div>
				</div>
			</fieldset>
		</div>
		
	</div>
 

        <br />
	<table class="table table-condensed">
		<thead>
			<tr>
				<th style="width:60%">Product</th>
				<th style="text-align:right">Price</th>
				<th style="text-align:center">Qty</th>
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
					<td style="text-align:right">{price}</td>
					<td style="text-align:center">{item_qty}</td>
					<td style="text-align:right">{item_subtotal}</td>
				</tr>
			{/items}
			<tr>
				<th colspan="3">Subtotal</th>
				<th style="text-align:right">{order_subtotal}</th>
			</tr>
			<tr>
				<th colspan="3">Total</th>
				<th style="text-align:right">{order_total}</th>
			</tr>
		</tbody>
	</table>

{/exp:store:orders}


</div>

</div>


{s-footer}