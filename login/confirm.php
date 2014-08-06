{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>Buy Credits</h1>
</div>

<div class="row">
<div class="span8">

{exp:store:checkout
	form_class="form-horizontal"
        return="login/order/ORDER_HASH"
	error_handling="inline"
	error_delimiters='<span class="help-inline">|</span>'
	require="name|address1|address2"
        payment_method="paypal_express"}

	{if no_items}
		{redirect="login/buy-credits"}
	{/if}

	<fieldset id="billing_details">
		<legend>Billing Details</legend>

		<div class="control-group {if error:billing_name}error{/if}">
			<label class="control-label" for="billing_name">Name</label>
			<div class="controls">
				{field:billing_name} {error:billing_name}
			</div>
		</div>

		<div class="control-group {if error:billing_address1}error{/if}">
			<label class="control-label" for="billing_address1">Address</label>
			<div class="controls">
				{field:billing_address1} {error:billing_address1}
			</div>
		</div>

		<div class="control-group {if error:billing_address2}error{/if}">
                        <label class="control-label" for="billing_address2">City</label>
			<div class="controls">
				{field:billing_address2} {error:billing_address2}
			</div>
		</div>

		<div class="control-group {if error:billing_phone}error{/if}">
			<label class="control-label" for="billing_phone">Phone</label>
			<div class="controls">
				{field:billing_phone} {error:billing_phone}
			</div>
		</div>

		<div class="control-group {if error:order_email}error{/if}">
			<label class="control-label" for="order_email">Email</label>
			<div class="controls">
				{field:order_email} {error:order_email}
			</div>
		</div>

	</fieldset>

	<div class="form-actions">
		<a href="{path='login/checkout'}" class="btn">Back</a>
		<input type="submit" name="submit" value="Proceed to Paypal" class="btn btn-success" />
	</div>

{/exp:store:checkout}


</div>

</div>


{s-footer}