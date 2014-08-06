{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>View Project</h1>
</div>

{exp:channel:entries channel="submissions" {s-single-entry-parameters} }

<div class="row">

<div class="span12">
<a href="{path="login/account"}">return to account page</a>
<h1>{title}</h1>
</div>

{s-project-entry}

</div>

{/exp:channel:entries}


{s-footer}