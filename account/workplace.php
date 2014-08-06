{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" }

{exp:safecracker channel="practices" id="add-group" url_title="{segment_3}" return="account/workplace-confirmation" class="form-horizontal nicer" error_handling="inline" 
rules:title="required" }
{___s-author-check}

<div class="container">
<!--—————— Text ——————-->
	<div class="row pad-top">
				<div class="five columns offset-by-three pad-bottom">
<h1>{if segment_3 != ""}Update {title}{if:else}Add a Workplace{/if} </h1>
	</div>
</div><!-- Row -->
</div>

<div class="container">
	<div class="row">
				<div class="five columns offset-by-three pad-bottom">

<div class="control-group">
  <label class="control-label" for="inputTitle">Business name</label>
    <div class="controls">
      <input type="text" name="title" class="expand input-text" id="inputTitle" placeholder="Business name" value="{title}" required >
      {if error:title}<span class="alert alert-error">{error:title}</span>{/if}
    </div>
</div>

<div class="control-group">
  <label class="control-label" for="inputWebsite">Website (include http://)</label>
    <div class="controls">
      <input type="url" name="practice_website" class="expand input-text" id="inputWebsite" placeholder="http://" value="{practice_website}">
      {if error:practice_website}<span class="alert alert-error">{error:practice_website}</span>{/if}
    </div>
</div>

<input type="hidden" name="practice_members[selections][]" value="{zoo_visitor_id}" />
</div>
</div>
</div>


{!--
<div class="container">
	<div class="row">
				<div class="seven columns offset-by-three pad-bottom">

<div class="control-group">
<label class="control-label">Members</label>
<div class="controls">
{field:practice_members}
{if error:practice_members}<span class="alert alert-error">{error:practice_members}</span>{/if}</div>
</div>
</div>
</div>
</div>
--}

<div class="container pad-top">
	<div class="row">
				<div class="five columns offset-by-three pad-bottom">


<div class="form-actions"><button type="submit" class="button xlarge black hover-orange">Save all Changes</button></div>
</div>
</div>
</div>
{/exp:safecracker}


{embed="___includes/2014footer"}
