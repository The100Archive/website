{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" }

<div class="container">
<!--—————— Text ——————-->
	<div class="row pad-top">
				<div class="five columns offset-by-three pad-bottom">
					<h4>Subscription Options</h4>
					<p class="text-black">{if "{exp:tidy_credits:subscription member_id="{zoo_member_id}"}" > 0}You have an annual subscription, which expires in {exp:tidy_credits:subscription member_id="{zoo_member_id}"}&nbsp;days. To go ahead and submit a project, click the <b>+</b> icon on the top right of the page.
					{if:elseif "{exp:tidy_credits:credits_available member_id="{zoo_member_id}"}" > 0}You have {exp:tidy_credits:credits_available member_id="{zoo_member_id}"} credit(s) left on your account, so you are ready to go ahead and submit a project. Click the <b>+</b> icon on the top right of the page to get started.{if:else}In order to submit your work, you&rsquo;ll need to pick a payment method below. {/if}
					</p>
				</div>
		<div class="two columns offset-by-one end link-red text-black text-small">
			<p>How did we come up with these prices? <a href="{path="learn/kb/subscription-pricing"}">Read our pricing FAQ</a></p>
		</div>
	</div><!-- Row -->

	
	<!--—————— ——————-->
	<div class="row">
			<div class="three columns offset-by-two text-large text-green">
				<div class="row pad-bottom">
					<div class="eleven columns end">
						<p class="text-large"><span class="text-white">&euro;20</span>/project<br />Pay Per Submission</p>
						<p>Buy single credits, each of which allows you to submit a single&nbsp;project.</p>
					</div>
				</div>
				{exp:store:search orderby="entry_date" sort="asc" limit="1"}
				{exp:store:product entry_id="{entry_id}" empty_cart="yes" form_class="form-horizontal" return="account/checkout"}
				<input type="hidden" id="item_qty" name="item_qty" value="1" />
				<input type="submit" name="submit" value="{title} »" class="xlarge black button hover-green" />
				{/exp:store:product}
				{/exp:store:search}
			</div>
			<div class="four columns offset-by-one end text-large text-orange">
				<div class="row pad-bottom">
					<div class="eleven columns end">
					<p class="text-large"><span class="text-white">&euro;8.35</span>/month<br />Annual<br />Subscription</p>
					<p>Our best value plan by far. Pay &euro;100 yearly and submit up to 50 projects over the next 12 months. That’s up to 90% less than paying per submission.</p>
				</div>
				</div>
				{exp:store:search orderby="entry_date" sort="asc" offset="1" limit="1"}
				{exp:store:product entry_id="{entry_id}" empty_cart="yes" form_class="form-horizontal" return="account/checkout"}
				<input type="hidden" id="item_qty" name="item_qty" value="1" />
				<input type="submit" name="submit" value="{title} »" class="xlarge black button hover-orange" />
				{/exp:store:product}
				{/exp:store:search}
			</div>
		</div>

</div><!-- Container -->


{embed="___includes/2014footer"}
