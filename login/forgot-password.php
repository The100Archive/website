{if logged_in}
{redirect="login/account"}
{/if}

{embed="includes/header" }

<div class="page-header">
<h1>Forgot Password</h1>
</div>


<div class="row">

<div class="span10">
<p>Enter your email address and we will email you instructions for resetting for your password.</p>

{exp:zoo_visitor:forgot_password error_handling="inline" class="form-horizontal"}
	{if password_sent}
		<div class="alert alert-success">A password reset mail has been sent to the provided email.</div>
	{if:else}

{if "{error:email}" != ""}
 <div class="alert alert-error">{error:email}</div>
{/if}

<div class="control-group">
  <label for="email" class="control-label form-label">Your email:</label>
    <div class="controls">
      <input type="email" name="email" id="email" class="form-text" value="{if email}{email}{/if}" required />
    </div>
</div>

<div class="controls">
<button class="btn btn-inverse" type="submit">Retrieve password</button>
</div>
	{/if}
{/exp:zoo_visitor:forgot_password}
</div>



</div>

{s-footer}