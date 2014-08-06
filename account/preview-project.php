{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" }

{exp:safecracker channel="submissions" entry_id="{segment_3}" return="account/project-submitted" }
{___s-author-check}
<input type="hidden" name="status" value="Pending">
<!--—————— Submit Check ——————-->
<div class="container fixed-bottom bg-green pad-top">
	<div class="row">
		<div class="four columns offset-by-one text-regular">
			This is how your work will appear when it is assessed for selection. 
		</div>
		<form>
			<div class="four columns offset-by-one end">
				<button type="submit" class="xlarge black button">Confirm and Submit</button>
<p class="text-small"><a href="{path="account/add-project"}/{segment_3}">&larr; Or go back and make changes</a>
</p>
			</div>
		</form>
	</div>
</div>
{/exp:safecracker}


{exp:channel:entries channel="submissions" {___s-single-entry-parameters} }

{___s-project-entry}

{/exp:channel:entries}
{embed="___includes/2014footer"}
