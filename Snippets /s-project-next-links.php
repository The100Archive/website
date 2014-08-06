<div class="row next-prev-links">
<div class="span12">

{exp:channel:next_entry channel="submissions" {if segment_1 == "archive"}status="Archive"{/if}  {if segment_1 != "archive"}status="not closed"{/if} category="{categories show_group="3" limit="1" backspace="1"}{category_id}|{/categories}"  }
    <div class="pull-right">{if segment_1 == "archive"}<a href="{path='archive/project'}" title="{title}">{/if}{if segment_1 != "archive"}<a href="{path='showcase/project'}" title="{title}">{/if}Next entry</a></div>
{/exp:channel:next_entry}

{exp:channel:prev_entry channel="submissions" {if segment_1 == "archive"}status="Archive"{/if}  {if segment_1 != "archive"}status="not closed"{/if} category="{categories show_group="3" limit="1" backspace="1"}{category_id}|{/categories}"}
    <div class="pull-left">{if segment_1 == "archive"}<a href="{path='archive/project'}" title="{title}">{/if}{if segment_1 != "archive"}<a href="{path='showcase/project'}" title="{title}">{/if}Previous entry</a></div>
{/exp:channel:prev_entry}
</div>
</div>