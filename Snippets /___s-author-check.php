{!-- if user is trying to edit entry they are not the author of, redirect them out --}
{if "{author_id}" != "{zoo_member_id}"}
{redirect="account"}
{/if}

{if "{channel_id}" == 2}
{if "{status}" == "open" || "{status}" == "Showcase"  || "{status}" == "Archive" || "{status}" == "closed"}
{redirect="account"}
{/if}
{/if}