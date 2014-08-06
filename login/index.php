{if logged_in}
{redirect="login/account"}
{/if}

{embed="includes/header" }

<div class="page-header">
<h1>Login to your account</h1>
</div>

<div class="row">
<div class="span5 offset1">
<fieldset>
<legend>Login</legend>


{if logged_in}
	You are already logged in.
{if:else}
	{exp:zoo_visitor:login_form return="login/account" error_handling="inline" class="form-horizontal" id="formRegister"}

{if "{error:login}" != ""}
<div class="alert alert-error">{error:login}</div>
{/if}

<div class="control-group">
  <label class="control-label" for="username">Email</label>
    <div class="controls">
      <input type="email" name="username" id="username" placeholder="Email" value="{if username}{username}{/if}" required>
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="password">Password</label>
    <div class="controls">
      <input type="password" name="password" id="password" placeholder="Password" value="{if password}{password}{/if}" required>
    </div>
</div>

<div class="controls"><p><a href="{path="login/forgot-password"}">Forgot Password?</a></p><button type="submit" class="btn btn-inverse">Login</button>
</div>

	{/exp:zoo_visitor:login_form}
{/if}
</fieldset>
</div>



<div class="span4 offset1">
<fieldset>
<legend>Register</legend>
<p>
  <a class="btn btn-large btn-inverse" href="/login/register">Not a Member?<br /><small>Sign Up Here</small></a>
</p>
</fieldset>
</div>

</div>

{s-footer}