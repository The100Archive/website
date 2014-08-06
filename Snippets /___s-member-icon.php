{if member_image}
{exp:imgsizer:size src="{member_image}" width="250" height="250" crop="yes" alt="{title}" class="full-rounded"}
{if:else}
<img src="/site/images/user-icons/icon-{entry_date format="%h"}.jpg" alt="{title}" class="full-rounded">
{/if}