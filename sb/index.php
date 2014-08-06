{if member_group == "1"}
<ul>
{exp:channel:entries dynamic="no"parse="inward" status="Judges-id7|Members___Founding-id5|Members___Regular-id8" channel="members" limit="1000"}
{if member_newsletter=="Yes"}<li>{username}</li>{/if}
{/exp:channel:entries}
</ul>
{if:else}
Sign in as a super admin to see this page
{/if}