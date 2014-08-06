{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>{if segment_3 != ""}Update{if:else}Add{/if} Group</h1>
</div>

<div class="row">
<div class="span10">

{exp:safecracker channel="practices" id="add-group" url_title="{segment_3}" return="login/groups/confirmation" class="form-horizontal" error_handling="inline" 
rules:title="required" }

<div class="control-group">
  <label class="control-label" for="inputTitle">Title</label>
    <div class="controls">
      <input type="text" name="title" id="inputTitle" placeholder="Title" value="{title}" required >
      {if error:title}<span class="alert alert-error">{error:title}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="inputWebsite">Website</label>
    <div class="controls">
      <input type="url" name="practice_website" id="inputWebsite" placeholder="please include http://" value="{practice_website}" required>
      {if error:practice_website}<span class="alert alert-error">{error:practice_website}</span>{/if}
    </div>
</div>

<input type="hidden" name="practice_members[selections][]" value="{zoo_visitor_id}" />

<div class="control-group">
<label class="control-label">Members</label>
<div class="controls">
<p><strong>Select members associated with this design practice</strong><br />Drag the members that you want to associate with your this group to the right column, including yourself.
Look for them using the keyword search. Member not listed? <a href="{path="login/invite"}">Invite them to register.</a><br />
You will automatically be added as a member for any group you create.</p>{field:practice_members}
{if error:practice_members}<span class="alert alert-error">{error:practice_members}</span>{/if}</div>
</div>


{!--
<div class="control-group">
  <label class="control-label">Members (Test)</label>
    <div class="controls">
        {field:practice_members_test}
    </div>
</div>
--}

<div class="form-actions"><button type="submit" class="btn btn-inverse">Submit</button></div>

{/exp:safecracker}
</div>
</div>


{s-footer}