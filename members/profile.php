{exp:channel:entries channel="members" {s-single-entry-parameters} }

{embed="includes/header" }

<div class="row">

<div class="span12">
<a href="{path="members"}">return to directory</a>
<h1>{title}</h1>
</div>

<div class="span5">

{if member_website != ""}
<p><a target="_blank" href="{member_website}">{exp:low_replace find="http://" replace=""}{member_website}{/exp:low_replace}</a></p>
{/if}

{exp:playa:children field="member_practice"}
{if {count} == 1}<h2>Currently Working</h2><ul class="unstyled">{/if}
<li><a href="{title_permalink="practices/profile"}">{title}</a></li>
{if {count} == total_results}</ul>{/if}
{/exp:playa:children }

{member_previous_practices_roles}
{if {count} == 1}<h2>Previously Worked</h2><ul class="unstyled">{/if}
<li>{if "{role}" != ""}{role} at {/if}{practice}<a href="{title_permalink="practices/profile"}">{title}</a>{/practice}</li>
{if {count} == total_results}</ul>{/if}
{/member_previous_practices_roles}

{exp:playa:parents channel="practices" status="not closed"}
{if {count} == 1}<h2>Associated Design Practices</h2><ul class="unstyled">{/if}
<li><a href="{title_permalink="practices/profile"}">{title}</a></li>
{if {count} == total_results}</ul>{/if}
{/exp:playa:parents}

</div>

<div class="span6 offset1">
<div class="row">
{exp:playa:parents field="submission_members" channel="submissions" status="Showcase|Archive" disable="category_fields|member_data|pagination"}
{s-project-summary}
{/exp:playa:parents}
</div>
</div>

</div>

{/exp:channel:entries}

{s-footer}