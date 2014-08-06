{exp:channel:entries channel="submissions" status="{embed:status}" limit="20" orderby="entry_date" sort="desc" disable="member_data" show_expired="yes"}

{if no_results}
<p>There are no entries in this section</p>
{/if}

{if count == 1}
<table class="table table-striped">
<thead>
  <tr>
    <th>Year</th>
    <th>Project Title</th>
    <th>Status</th>
    <th>Your vote</th>
    <th>Review</th>
  </tr>
</thead>
<tbody>
{/if}
<tr>
<td>{categories show_group="3" limit="1"}{category_name}{/categories}</td>
<td><a href="{title_permalink="/login/review-project"}">{title}</a></td>
<td>{s-project-status-label}</td>
<td>{embed="includes/check-vote-status" yes="{submission_votes_yes:total_rows}" no="{submission_votes_no:total_rows}" }</td>
<td><a href="{title_permalink="/login/review-project"}">Review</a></td>
</tr>


{if count == total_results}
</tbody>
</table>
{/if}
{s-pagination}
{/exp:channel:entries}