{if member_image}
{exp:imgsizer:size src="{member_image}" width="36" height="36" crop="yes" alt="{title}"}
{if:else}
<img src="/site/images/user-icons/icon-{entry_date format="%h"}.jpg" alt="{title}">
{/if}
