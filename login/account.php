{s-login-check}

{embed="includes/header" }
{embed="includes/2014menu" }
{embed="includes/2014menunav" }

<div class="page-header">
<h1>My Account</h1>
</div>

<div class="row">
<div class="span12">

<div class="row">
<p class="span3"><a class="btn btn-block btn-large btn-inverse" href="{path="login/buy-credits"}">1. Buy Credits<br /><small>Click here to see the options for 1, 5 or 10 credits</small></a></p>
<p class="span3"><a class="btn btn-block btn-large btn-inverse" href="{path="login/groups"}">2. Company Listing<br /><small>Business owners or administrators, add your company details here</small></a></p>
<p class="span3"><a class="btn btn-block btn-large btn-inverse" href="{path="login/profile"}">3. Update Profile<br /><small>Change your personal information</small></a></p>
<p class="span3"><a class="btn btn-block btn-large btn-inverse {if {exp:tidy_credits member_id="{zoo_member_id}"} == 0}disabled{/if}" href="{path="login/add-project"}">4. Submit Project<br /><small>Submit a project<br />for consideration</small></a></p>
</div>

<h2>Account Stats</h2>
<ul class="unstyled">
<li>You have purchased <strong>{exp:tidy_credits:credits member_id="{zoo_member_id}"}</strong> credits</li>
<li>You have submitted <strong>{exp:tidy_credits:submissions member_id="{zoo_member_id}"}</strong> projects</li>
<li>You have <strong>{exp:tidy_credits member_id="{zoo_member_id}"}</strong> credits available</li>
</ul>

<h2>My Projects</h2>

{exp:channel:entries dynamic="no" channel="submissions" limit="100" status="open|closed|pending|incomplete|showcase|archive" year="2013"  author_id="{zoo_member_id}" }

{if no_results}
<p>You have not submitted any projects yet.</p>
{/if}

{if count==1}
<table class="table table-striped">
<thead>
  <tr>
    <th>Year</th>
    <th>Project Title</th>
    <th>Categories</th>
    <th>Status</th>
    <th>View</th>
    <th>Edit</th>
  </tr>
</thead>
<tbody>
{/if}

  <tr>
    <td>{categories show_group="3" limit="1"}{category_name}{/categories}</td>
    <td>{title}</td>
    <td>{categories show_group="1|2" backspace="2"}{category_name}, {/categories}</td>
    <td>{s-project-status-label}</td>
    <td><a href="{title_permalink="login/view-project"}">View</a></td>
    <td>{if status == "Incomplete" || status == "Pending"}<a href="{path="login/add-project"}/{entry_id}">Edit</a>{/if}</td>
  </tr>

{if count == total_results}
</tbody>
</table>
{/if}
{/exp:channel:entries}



</tbody>
</table>

</div>
</div>


{embed="includes/2014footer" }