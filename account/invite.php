{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu"}

<h1>Invite a Designer to Join</h1>


{if segment_3 == "confirmation"}
<div class="alert alert-success">
Your invite has been sent.
</div>
{/if}

{exp:freeform:form 
collection="Invites"
status="closed" 
user_email_template="invite" 
return="{segment_1}/{segment_2}/confirmation"
send_user_email="yes" 
form:class="form-horizontal"}

<input name="invite_name" type="hidden" value="{screen_name}">
<input name="invite_email" type="hidden" value="{username}">

<div class="control-group">
  <label class="control-label">Your Name</label>
    <div class="controls">
      <span class="help-inline">{screen_name}</span>
    </div>
</div>

<div class="control-group">
  <label class="control-label">Your Email</label>
    <div class="controls">
      <span class="help-inline">{username}</span>
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="name">Recicpient's Name</label>
    <div class="controls">
      <input type="text" name="name" id="name" placeholder="Recicpient's Name" required>
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="email">Recipient's Email</label>
    <div class="controls">
      <input type="text" name="email" id="email" placeholder="Recicpient's Email" required>
    </div>
</div>

<div class="form-actions"><button type="submit" class="btn btn-inverse">Send Invite</button></div>

{/exp:freeform:form}
{embed="___includes/2014footer"}
