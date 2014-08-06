{exp:channel:entries channel="pages" limit="1" disable="categories|member_data|pagination" require_entry="yes"}
{if no_results}
{redirect="404"}
{/if}
{embed="___includes/header" title="{if "{page_title}" != ""}{page_title}{if:else}{title}{/if}"}
<h1>{if "{page_title}" != ""}{page_title}{if:else}{title}{/if}</h1>

{content}

{/exp:channel:entries}
{___s-footer}