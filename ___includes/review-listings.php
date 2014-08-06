{exp:channel:entries channel="submissions" status="{embed:status}" limit="20" orderby="entry_date" sort="desc" disable="member_data" show_expired="yes"}

{if no_results}
<p>There are no entries in this section</p>
{/if}

{if count == 1}
<table>
<thead>
  <tr>
    <th>Year</th>
    <th>Project</th>
    <th>Status</th>
    <th>Votes</th>
    <th>Review</th>
  </tr>
</thead>
<tbody>
{/if}
<tr>
<td>{categories show_group="3" limit="1"}{category_name}{/categories}</td>
<td><a href="{title_permalink="/account/review-project"}" class="no_ul">{title}</a></td>
<td>{___s-project-status-label}</td>
<td>{embed="___includes/check-vote-status" yes="{submission_votes_yes:total_rows}" no="{submission_votes_no:total_rows}" }</td>
<td><a href="{title_permalink="/account/review-project"}" class="no_ul">&rarr;</a></td>
</tr>


{if count == total_results}
</tbody>
</table>
{/if}
{___s-pagination}
{/exp:channel:entries}