{if logged_in}
{redirect="login/account"}
{/if}

{embed="includes/header" }

<div class="page-header">
<h1>Register</h1>
</div>
<p>Some introduction copy</p>

<div class="row">
<div class="span12">


{exp:zoo_visitor:registration_form return='login/register/confirmation' error_handling="inline" class="form-horizontal"

rules:member_firstname="required"
rules:member_surname="required"
rules:email="required|valid_email"
rules:email_confirm="required|valid_email"
rules:password="required|min_length[5]"
rules:password_confirm="required|min_length[5]"
rules:member_designer="required"
}


<fieldset>
	<div class="control-group">
  <label class="control-label" for="member_firstname">First Name*</label>
    <div class="controls">
      <input type="text" name="member_firstname" id="member_firstname" placeholder="First Name" value="{if member_firstname}{member_firstname}{/if}" required>
      {if error:member_firstname}<span class="alert alert-error">{error:member_firstname}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="member_surname">Surname*</label>
    <div class="controls">
      <input type="text" name="member_surname" id="member_surname" placeholder="Surname" value="{if member_surname}{member_surname}{/if}" required>
      {if error:member_surname}<span class="alert alert-error">{error:member_surname}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="email">Email*</label>
    <div class="controls">
      <input type="email" name="email" id="email" placeholder="Email" value="{if email}{email}{/if}" required>
      {if error:email}<span class="alert alert-error">{error:email}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="email_confirm">Re-type Email*</label>
    <div class="controls">
      <input type="email" name="email_confirm" id="email_confirm" placeholder="Email" value="{if email_confirm}{email_confirm}{/if}" required>
      {if error:email_confirm != ""}<span class="alert alert-error">{error:email_confirm}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="password">Choose Password*</label>
    <div class="controls">
      <input type="password" name="password" id="password" placeholder="Password" value="{if password}{password}{/if}" required>
      {if error:password}<span class="alert alert-error">{error:password}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="password_confirm">Re-type Password*</label>
    <div class="controls">
      <input type="password" name="password_confirm" id="password_confirm" placeholder="Password" value="{if password_confirm}{password_confirm}{/if}" required>
    </div>
</div>

<div class="control-group">
    <div class="controls"> 
      <label class="checkbox"><input type="checkbox" name="member_designer" value="Yes" {if member_designer == "Yes"}checked="checked"{/if} required /> <!-- {member_designer } --> I am a practising designer based in Ireland or<br /> an independent Irish designer domiciled abroad</label>
      {if error:member_designer}<span class="alert alert-error">{error:member_designer}</span>{/if}
    </div>
</div>

<div class="control-group">
    <div class="controls">
      <label class="checkbox"><input type="checkbox" name="member_newsletter" value="Yes" {if member_newsletter == "Yes"}checked="checked"{/if} /> <!-- {member_newsletter} --> The 100 Design Archive may contact me via email</label>
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

</fieldset>

<div class="controls"><button type="submit" class="btn btn-inverse">Submit</button></div>

{/exp:zoo_visitor:registration_form}

</div>
</div>


{s-footer}