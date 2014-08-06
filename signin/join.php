{if logged_in}
{redirect="account"}
{/if}

{embed="___includes/header" }
{embed="___includes/2014menu" }

<div class="container">

<div class="row">
			<div class="nine columns offset-by-two end">
			{if last_segment == "confirmation"}
			<div class="alert-box orange">We&rsquo;ve sent you link via email, which you&rsquo;ll need to click to confirm your account<a href="" class="close">&times;</a></div>
			{/if}
			</div>
</div><!-- Row -->


<div class="row pad-top">
<div class="five columns offset-by-three">
<h1>Create Your Profile</h1>
<p class="text-black">Registration is open to all practicing graphic designers based in Ireland, as well as independent Irish graphic designers domiciled abroad. All fields are mandatory unless otherwise indicated.</p>
</div>

<div class="three columns offset-by-one text-small text-black link-orange end">
<p>
  <a href="{path="signin"}">Already joined?<br />Sign in &rarr;</a>
</p>
</div>

</div>

</div>


<div class="container pad-top">
<div class="row">

<div class="five columns offset-by-three end">

{exp:zoo_visitor:registration_form return='signin/join/confirmation' error_handling="inline" class="form-horizontal nicer"

rules:member_firstname="required"
rules:member_surname="required"
rules:email="required|valid_email"
rules:email_confirm="required|valid_email"
rules:password="required|min_length[5]"
rules:password_confirm="required|min_length[5]"
rules:member_designer="required"
}


	<div class="control-group">
    <div class="controls">
      <label class="control-label" for="member_firstname">Your first name(s)</label>
      <input type="text" name="member_firstname" id="member_firstname" class="expand input-text" placeholder="First Name" value="{if member_firstname}{member_firstname}{/if}" required>
      {if error:member_firstname}<span class="alert alert-error">{error:member_firstname}</span>{/if}
    </div>
</div>

<div class="control-group">
    <div class="controls">
      <label class="control-label" for="member_surname">Your surname</label>
      <input type="text" name="member_surname" class="expand input-text" id="member_surname" placeholder="Surname" value="{if member_surname}{member_surname}{/if}" required>
      {if error:member_surname}<span class="alert alert-error">{error:member_surname}</span>{/if}
    </div>
</div>

<div class="control-group">
    <div class="controls">
      <label class="control-label" for="email">Your email address</label>
      <input type="email" name="email" class="expand input-text" id="email" placeholder="Email" value="{if email}{email}{/if}" required>
      {if error:email}<span class="alert alert-error">{error:email}</span>{/if}
    </div>
</div>

<div class="control-group">
    <div class="controls">
      <label class="control-label" for="email_confirm">Re-type email</label>
      <input type="email" name="email_confirm" class="expand input-text" id="email_confirm" placeholder="Email" value="" required>
      {if error:email_confirm}<span class="alert alert-error">{error:email_confirm}</span>{/if}
    </div>
</div>

<div class="control-group">
    <div class="controls">
      <label class="control-label" for="password">Choose your Password</label>
      <input type="password" class="expand input-text" name="password" id="password" placeholder="Password" value="{if password}{password}{/if}" required>
      {if error:password}<span class="alert alert-error">{error:password}</span>{/if}
    </div>
</div>

<div class="control-group">
    <div class="controls">
      <label class="control-label" for="password_confirm">Re-type password</label>
      <input type="password" class="expand input-text" name="password_confirm" id="password_confirm" placeholder="Password" value="{if password_confirm}{password_confirm}{/if}" required>
    </div>
</div>
</div>
</div>

<div class="container pad-top">
	<div class="row">
		<div class="one columns offset-by-two">
		      <input type="checkbox" id="member_designer[]" name="member_designer[]" value="Yes" {if member_designer == "Yes"}checked="checked"{/if} required /><!--{member_designer}-->
		</div>
		<div class="five columns end">
		      <label for="member_designer[]" class="text-regular text-white">I am a practising designer based in Ireland or an independent Irish designer domiciled abroad</label>
		      {if error:member_designer}<span class="alert alert-error">{error:member_designer}</span>{/if}
		</div>
	</div>
	<br />
	<div class="row">
		<div class="one columns offset-by-two">
			<input type="checkbox" id="member_newsletter[]" name="member_newsletter[]" value="Yes" {if member_newsletter == "Yes"}checked="checked"{/if} /><!--{member_newsletter}-->
		</div>
		<div class="five columns end">
			      <label for="member_newsletter[]" class="text-regular text-white">The 100 Design Archive may contact me via email (optional)</label>
		</div>
	</div>
</div>


{!--
{if captcha}
<div class="control-group">
  <label class="control-label" for="password_confirm">Enter the word you see in the image</label>
    <div class="controls">
      <p>{captcha}<br/><input type="text" id="captcha" name="captcha" value="" size="20" maxlength="20" style="width:140px;" required/></p>
      {if error:captcha}<span class="alert alert-error">{error:captcha}</span>{/if}
    </div>
</div>
{/if}
--}

<div class="container pad-top">
<div class="row">

<div class="four columns offset-by-three end">

<div class="controls"><button type="submit" class="xlarge black button hover-orange">Join</button></div>

</div>
</div>
</div>

{/exp:zoo_visitor:registration_form}

</div>
</div>
</div>
<br><br><br>

{embed="___includes/2014footer"}
