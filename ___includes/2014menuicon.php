{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
	<div class="menu-r menu-r-logged"><a href="#" class="no_ul" id="menu-r-show">
	{if member_image}
	{exp:imgsizer:size src="{member_image}" width="36" height="36" crop="yes" alt="{title}"}
	{if:else}
	<img src="/site/images/user-icons/icon-{entry_date format="%h"}.jpg" alt="{title}">
	{/if}
	</a></div>
{/exp:channel:entries}
