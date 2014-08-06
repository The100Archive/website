{exp:stash:set name="cat_id" parse_tags="yes"}
{exp:channel:entries channel="submissions" limit="1" status="archive" orderby="entry_date" sort="desc" disable="member_data" show_expired="yes"}
{categories show_group="3"}{category_id}{/categories}
{/exp:channel:entries}
{/exp:stash:set}

{exp:stash:set name="cat_title" parse_tags="yes"}
{exp:channel:entries channel="submissions" limit="1" status="archive" orderby="entry_date" sort="desc" disable="member_data" show_expired="yes"}
{categories show_group="3"}{category_name}{/categories}
{/exp:channel:entries}
{/exp:stash:set}

{embed="includes/header" }

<div class="page-header">
<h1>Archive {if segment_3_category_name != ""}{segment_3_category_name}{if:else}{exp:stash:get name="cat_title"}{/if}</h1>
</div>

<div class="row">
<div class="span8">
<p>Projects that have been added to the archive have been highlighted as important pieces of Irish communication and graphic design. They have been deemed important for their cultural relevance and impact as well as from a creative, qualitative and objective perspective.</p>
</div>
</div>


<div class="btn-group">
{exp:channel:categories style="linear" channel="submissions" category_group="3" show_empty="no"}
    <a class="btn" href="{path='archive'}">{category_name}</a>
{/exp:channel:categories}
<br /><br />
</div>

<div class="row">

<div class="span9">
<div class="row">
{embed="includes/archive-submissions-by-year" cat_id="{exp:stash:get name="cat_id"}" }
</div>
</div>

<div class="span3">
<h4>Jury Panel</h4>
{embed="includes/archive-jury-by-year" cat_id="{exp:stash:get name="cat_id"}" }
</div>

</div>

{s-footer}