{___s-login-check}
{embed="___includes/header"}
{embed="___includes/2014menu"}

<div class="container">
<!--—————— Text ——————-->
	<div class="row pad-top">
				<div class="five columns offset-by-three pad-bottom">
					<h4>Your Workplaces</h4>
					<p class="link-orange">You are the administrator for {exp:channel:entries channel="members" dynamic="no" entry_id="{zoo_visitor_id}" status="not closed"}
					{exp:playa:parents channel="practices" author_id="{zoo_member_id}" }
					<a href="{title_permalink="workplaces/profile"}">{title}</a> <a class="sc" href="{title_permalink="account/workplace"}">(edit?)</a>
					{/exp:playa:parents}
					{/exp:channel:entries}
					</p>			
					
					{exp:channel:entries dynamic="no" channel="members" status="Super_Admins-id1|Banned-id2|Guests-id3|Pending-id4|Members___Founding-id5|Editors-id6|Judges-id7|Members___Regular-id8" author_id="{zoo_member_id}" }
					
						<p>
						{member_practice limit="1"}
						{if {count} > 0}
						You&rsquo;re currently working at
						{/if}
						{/member_practice}
						{member_practice backspace="9"}
						<a href="{title_permalink="workplaces/profile"}">{title}</a>, 
						{/member_practice}
						
						{member_previous_practices limit="1"}
						{if {count} > 0}
						and also connected to
						{/if}
						{/member_previous_practices}
						{member_previous_practices backspace="9"}
						<a href="{title_permalink="workplaces/profile"}">{title}</a>, 
						{/member_previous_practices}.
						</p>
						
					
					
					{/exp:channel:entries}
					
		
					
					
					</p>
					
						
					<p>Add your current and previous places of work to the list if they are not present. These should be places where you are or were employed in a design role.</p></div>
		<div class="three columns offset-by-one end link-red text-black text-small">
			<p>Once you create a workplace, you will be responsible for associating members to it.
			<a href="http://">Learn more about how this works &rarr;</a></p>
		</div>
	</div><!-- Row -->


{if segment_3 == "confirmation"}
<div class="alert alert-success">
Your group has been added.
</div>
{/if}


<p><a class="" href="{path="account/workplace"}">Add Group</a></p>

<table>
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
    <td><a href="{title_permalink="___login/add-group"}">Update</a></td>
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


{embed="___includes/2014footer"}
