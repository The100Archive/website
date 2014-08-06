{s-login-check}

{embed="includes/header" }

<div class="page-header">
<h1>Preview Project</h1>
<p>Please review your project details and click back if you need to make any necessary changes.</p>
</div>

{exp:channel:entries channel="submissions" {s-single-entry-parameters} }

<div class="row">

<div class="span12">
<h1>{title}</h1>
</div>

{s-project-entry}

</div>

{/exp:channel:entries}


{exp:safecracker channel="submissions" entry_id="{segment_3}" return="login/add-project/confirmation" }
{s-author-check}
<input type="hidden" name="status" value="Pending">
<div class="form-actions centered">
<a href="{path="login/add-project"}/{segment_3}" class="btn btn-inverse">Go Back and Make Changes</a>
<button type="submit" class="btn btn-primary">Submit Your Project</button>
</div>
{/exp:safecracker}

{s-footer}