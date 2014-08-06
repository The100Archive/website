{exp:channel:entries channel="practices" {s-single-entry-parameters} }

{embed="includes/header" }

<div class="row">

<div class="span12">
<a href="{path="practices"}">return to directory</a>
<h1>{title}</h1>
</div>

<div class="span5">

{if practice_website != ""}
<p><a target="_blank" href="{practice_website}">{exp:low_replace find="http://" replace=""}{practice_website}{/exp:low_replace}</a></p>
{/if}

{exp:playa:children field="practice_members" status="not closed"}
{if {count} == 1}<h2>Associated Designers</h2><ul class="unstyled">{/if}
<li><a href="{title_permalink="members/profile"}">{title}</a></li>
{if {count} == total_results}</ul>{/if}
{/exp:playa:children}

</div>

<div class="span6 offset1">
<div class="row">
{exp:playa:parents channel="submissions" status="Showcase|Archive" disable="category_fields|member_data|pagination"}
{s-project-summary}
{/exp:playa:parents}
</div>
</div>

</div>

{/exp:channel:entries}

{s-footer}