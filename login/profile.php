{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>{screen_name}</h1>
</div>

<div class="row">
<div class="span9">

{if segment_3 == "confirmation"}
<div class="alert alert-success">
Your profile has been updated.
</div>
{/if}

{exp:zoo_visitor:update_form return="login/profile/confirmation" class="form-horizontal" error_handling="inline" status="open" }

<input type="hidden" name="title" value="{username}">

<div class="control-group">
  <label class="control-label" for="member_firstname">First name</label>
    <div class="controls">
      <input type="text" name="member_firstname" id="member_firstname" value="{member_firstname}">
      {if error:member_firstname}<span class="alert alert-error">{error:member_firstname}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="member_surname">Surname</label>
    <div class="controls">
      <input type="text" name="member_surname" id="member_surname" value="{member_surname}">
      {if error:member_surname}<span class="alert alert-error">{error:member_surname}</span>{/if}
    </div>
</div>


<div class="control-group">
  <label class="control-label">Image</label>
    <div class="controls">
        {field:member_image}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="member_website">Website</label>
    <div class="controls">
      <input type="url" name="member_website" id="member_website" placeholder="please include http://" value="{member_website}">
      {if error:member_website}<span class="alert alert-error">{error:member_website}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="member_twitter">Twitter</label>
    <div class="controls">
      <input type="url" name="member_twitter" id="inputTwitter" placeholder="please include http://" value="{member_twitter}">
      {if error:inputTwitter}<span class="alert alert-error">{error:inputTwitter}</span>{/if}
    </div>
</div>

<div class="control-group">
<label class="control-label">Currently Working</label>
<div class="controls">{field:member_practice}</div>
</div>

<div class="control-group">
<label class="control-label">Previously Worked</label>
<div class="controls">{field:member_previous_practices}</div>
</div>

<div class="control-group">
<label class="control-label">Previously Worked (with roles)</label>
<div class="controls">{field:member_previous_practices_roles}</div>
</div>

<div class="form-actions"><button type="submit" class="btn btn-inverse">Submit</button></div>

{/exp:zoo_visitor:update_form}

</div>

<div class="span3">
<p><a class="btn btn-block btn-inverse" href="{path="login/buy-credits"}">Buy Credits</a></p>
<p><a class="btn btn-block btn-inverse" href="{path="login/add-project"}">Submit Project</a></p>
<p><a class="btn btn-block btn-inverse" href="{path="login/account"}">My Projects</a></p>
</div>

</div>


{s-footer}