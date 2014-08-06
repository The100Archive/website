{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>My Groups</h1>
</div>

<div class="row">
<div class="span10">

{if segment_3 == "confirmation"}
<div class="alert alert-success">
Your group has been added.
</div>
{/if}


<p class="pull-right"><a class="btn btn-inverse" href="{path="login/add-group"}">Add Group</a></p>

<p>Here you can create and manage businesses and associations.<br />Only the person who creates a group can add and remove members from it.</p>

<table class="table table-striped">
<thead>
  <tr>
    <th>Group Name</th>
    <th>Author</th>
    <th>Status</th>
    <th>&nbsp;</th>
  </tr>
</thead>
<tbody>

{exp:channel:entries channel="members" dynamic="no" entry_id="{zoo_visitor_id}" status="not closed" }
{exp:playa:parents channel="practices" author_id="{zoo_member_id}" }
  <tr>
    <td>{title}</td>
    <td>{author}</td>
    <td>Group Admin</td>
    <td><a href="{title_permalink="login/add-group"}">Update</a></td>
  </tr>
{/exp:playa:parents}
{exp:playa:parents channel="practices" author_id="not {zoo_member_id}" }
  <tr>
    <td>{title}</td>
    <td>{author}</td>
    <td>Group Member</td>
    <td></td>
  </tr>
{/exp:playa:parents}

{/exp:channel:entries}

</tbody>
</table>

</div>
</div>


{s-footer}