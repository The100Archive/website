{if logged_out}
{redirect="signin"}
{/if}

{if group_id==5}
{if segment_2 == "reviews" || segment_2 == "review-project"}
{redirect="account"}
{/if}
{/if}

{if segment_2 == "add-project" && segment_3 == ""}
{if "{exp:tidy_credits member_id="{zoo_member_id}"}" == 0}
{redirect="account"}
{/if}
{/if}