{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>Buy Credits</h1>
</div>

<div class="row">
<div class="span12">

<p>You have <strong>{exp:tidy_credits member_id="{zoo_member_id}"}</strong> credits available.</p><br />
	
{exp:store:search orderby="entry_date" sort="asc"}
{exp:store:product entry_id="{entry_id}" empty_cart="yes" form_class="form-horizontal" return="login/checkout"}
<input type="hidden" id="item_qty" name="item_qty" value="1" />
<input type="submit" name="submit" value="Purchase {title} - {price}" class="btn btn-large btn-inverse" />
{if on_sale}<p><del>{regular_price}</del>{price}<span class="label label-success">Save {you_save} ({you_save_percent}%)</span>
</p>{/if}
{/exp:store:product}
{/exp:store:search}

</div>
</div>


{s-footer}