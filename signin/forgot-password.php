{if logged_in}
{redirect="account"}
{/if}

{embed="___includes/header" }
{embed="___includes/2014menu" }

<div class="container">
{exp:zoo_visitor:forgot_password error_handling="inline" class="form-horizontal nicer"}
	{if password_sent}
	<div class="row">
				<div class="nine columns offset-by-two end">
				<div class="alert-box orange">A password reset mail has been sent to the provided email.<a href="" class="close">&times;</a></div>
				</div>
	</div><!-- Row -->
	{if:else}
	{if "{error:email}" != ""}
	<div class="row">
				<div class="nine columns offset-by-two end">
				<div class="alert-box red">{error:email}<a href="" class="close">&times;</a></div>
				</div>
	</div><!-- Row -->
	{/if}
{/exp:zoo_visitor:forgot_password}

	<div class="row pad-top">
	
	<div class="six columns offset-by-three">
	<h1>Forgot your password?</h1>
	</div>
	
	<div class="two columns text-small text-black link-orange end">
	<p>
	  <a href="{path="signin/join"}">Not a Member?<br />Join Now &rarr;</a>
	</p>
	</div>
	
	</div>
</div>
{exp:zoo_visitor:forgot_password error_handling="inline" class="form-horizontal nicer"}

<div class="container pad-top pad-bottom">
<div class="row">

<div class="four columns offset-by-three end">

<p>Enter your email address and we&rsquo;ll send you instructions for resetting your password.</p>



<div class="control-group">
  <label for="email" class="control-label form-label">Your email:</label>
    <div class="controls">
      <input type="email" name="email" id="email" class="expand input-text" value="{if email}{email}{/if}" required />
    </div>
</div>

<div class="controls">
<button class="button xlarge black hover-orange" type="submit">Reset password</button>
</div>
	{/if}
{/exp:zoo_visitor:forgot_password}

</div>
</div>
</div>

{embed="___includes/2014footer"}
