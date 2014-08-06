<ul>
<li>Subscription: {exp:tidy_credits:subscription member_id="{zoo_member_id}"} days remaining</li>
<li>Credits: {exp:tidy_credits:credits member_id="{zoo_member_id}"}</li>
<li>Submissions: {exp:tidy_credits:submissions member_id="{zoo_member_id}"}</li>
<li>Credits Available: {exp:tidy_credits:credits_available member_id="{zoo_member_id}"}</li>
<li>Default: {exp:tidy_credits member_id="{zoo_member_id}"}</li>
</ul>

<p>
{if {exp:tidy_credits member_id="{zoo_member_id}"}}
Yes
{if:else}
No
{/if}
</p>