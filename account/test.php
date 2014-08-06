<h2>Zoo Member: {zoo_member_id}</h2>
<h2>Zoo Visitor: {zoo_visitor_id}</h2>



{if "{exp:tidy_credits:subscription member_id="{zoo_member_id}"}" > 0}You have an annual subscription, which expires in {exp:tidy_credits:subscription member_id="{zoo_member_id}"} days.
				





{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
<h2>{title} - {entry_id}</h2>
{embed="includes/submissions-judge-count" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" }
{/exp:channel:entries}


{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
<h2>{title} - {entry_id}</h2>
{embed="includes/submissions-judge-count" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" }
{/exp:channel:entries}

<hr />

{exp:channel:entries dynamic="off" channel="submissions" status="not closed" entry_id="289"}
{!-- Checks if the judge has already voted on this project or not. If so, the embed will redirect them back to the account page--}
{embed="includes/submissions-judge-check" id="{exp:playa:child_ids child_id="{zoo_visitor_id}" channel="members" field="submission_votes_yes|submission_votes_no"}" }
{/exp:channel:entries}


<hr />

{!-- Outputs link to next project, or message saying no more projects to review --}
{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
{embed="includes/submissions-judge-next-project" start="Yes" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" }
{/exp:channel:entries}

<hr />

{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
There are currently {embed="includes/submissions-judge-count" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" } projects requiring your attention. 
{embed="includes/submissions-judge-next-project" start="Yes" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" }
{/exp:channel:entries}