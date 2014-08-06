
{exp:channel:next_entry channel="submissions" {if segment_1 == "___archive"}status="Archive"{/if}  {if segment_1 != "___archive"}status="not closed"{/if} category="{categories show_group="3" limit="1" backspace="1"}{category_id}|{/categories}"  }
    {if segment_1 == "___archive"}<a href="{path='___archive/project'}" title="{title}">{/if}{if segment_1 != "___archive"}<a href="{path='___showcase/project'}" title="{title}">{/if}Next entry</a></div>
{/exp:channel:next_entry}

{exp:channel:prev_entry channel="submissions" {if segment_1 == "___archive"}status="Archive"{/if}  {if segment_1 != "___archive"}status="not closed"{/if} category="{categories show_group="3" limit="1" backspace="1"}{category_id}|{/categories}"}
   {if segment_1 == "___archive"}<a href="{path='___archive/project'}" title="{title}">{/if}{if segment_1 != "archive"}<a href="{path='___showcase/project'}" title="{title}">{/if}Previous entry</a></div>
{/exp:channel:prev_entry}
