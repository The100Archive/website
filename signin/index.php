{if logged_in}
{redirect="account"}
{/if}

{embed="___includes/header" }
{embed="___includes/2014menu" }

<div class="container">
{exp:zoo_visitor:login_form return="account" error_handling="inline" class="form-horizontal nicer" id="formRegister"}
{if logged_in}
	You are already logged in.
{if:else}

{if "{error:login}" != ""}
<div class="row">
			<div class="nine columns offset-by-two end">
			<div class="alert-box red">{error:login}<a href="" class="close">&times;</a></div>
			</div>
</div><!-- Row -->
{/if}
{/exp:zoo_visitor:login_form}


<div class="row pad-top">
<div class="six columns offset-by-three">
<h1>Sign in</h1>
</div>

<div class="two columns text-small text-black link-orange end">
<p>
	  <a href="{path="signin/join"}">Not a Member?<br />Join Now &rarr;</a>
</p>
</div>

</div>

</div>
{exp:zoo_visitor:login_form return="account" error_handling="inline" class="form-horizontal nicer" id="formRegister"}


<div class="container pad-top pad-bottom">
<div class="row">

<div class="four columns offset-by-three end">
<div class="control-group">
    <div class="controls">
  <label class="control-label" for="username">Email</label>
      <input type="email" class="expand input-text" name="username" id="username" placeholder="Email" value="{if username}{username}{/if}" required>
    </div>
</div>

<div class="control-group">
    <div class="controls">
  <label class="control-label" for="password">Password</label>
      <input type="password" class="expand input-text" name="password" id="password" placeholder="Password" value="{if password}{password}{/if}" required>
    </div>
</div>

<div class="controls text-small link-orange"><p><a href="{path="signin/forgot-password"}">Forgot your password?</a></p><button type="submit" class="button xlarge black hover-orange">Sign In</button>
</div>

	{/exp:zoo_visitor:login_form}
{/if}
</fieldset>
</div>
</div>
</div>
<br><br><br>




{embed="___includes/2014footer"}
