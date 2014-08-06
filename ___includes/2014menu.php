<div class="menu">
	<div class="menu-l"><a href="#" class="no_ul" id="menu-l-show"><img src="/site/images/menu-l.png" alt="Site Menu"></a></div>
	<div class="menu-l" style="display: none;"><a href="#" class="no_ul" id="menu-l-hide"><img src="/site/images/menu-r.png" alt="Site Menu"></a></div>
	
	{if segment_2=="2014" OR segment_1==""}
	{if:else}
	<div class="menu-c"><a href="{site_url}" class="no_ul">Home</a></div>
	{/if}
	
	{if logged_in}
	{embed="___includes/2014menuicon"}
	{if:else}
		<div class="menu-r"><a href="#" class="no_ul" id="menu-r-show"><img src="/site/images/menu-r.png" alt="User Menu"></a></div>
	{/if}
	
</div>
<div class="menu-gap"></div>

<div class="menu-l-expanded bg-light">
	<ul class="text-purple">
		<li>Archive
			<ul class="text-medium">
				<li><a href="{path="future"}">Future</a></li>
				<li><a href="{path="past"}">Past</a></li>
			</ul>
		</li>
		<li>News
			<ul class="text-medium">
				<li><a href="{path="present"}">Present</a></li>
			</ul>
		</li>
		<li>Community
			<ul class="text-medium">
				<li><a href="{path="people"}">People</a></li>
				<li><a href="{path="workplaces"}">Workplaces</a></li>
				<li><a href="{path="people/team"}">Team</a></li>
				<li><a href="{path="signin/join"}">Join</a></li>
			</ul>
		</li>
		<li>About
			<ul class="text-medium">
				<li><a href="{path="learn"}">Learn More</a></li>
				<li><a href="{path="learn/kb"}">Knowledge Base</a></li>
			</ul>
		</li>
		<li>Connect
			<ul class="text-medium">
				<li>
				<a href="http://twitter.com/100archive" target="_blank"><span class="glyph social">e</span></a> 
				<a href="https://www.facebook.com/100designarchive" target="_blank"><span class="glyph social">d</span></a> 
				<a href="http://eepurl.com/xDj_f" target="_blank"><span class="glyph general">h</span></a> 
				</li>
			</ul>
		</li>
	</ul>
</div>




<div class="menu-r-expanded bg-light">

{if logged_in}
<ul class="text-orange">
	<li>
		{if member_group == "1"}Administrator{/if}
		{if member_group == "6"}Site Editor{/if}
		{if member_group == "8"}Member{/if}
		{if member_group == "5"}Founding Member{/if}
		{if member_group == "7"}Professional Panel{/if}
		{if member_group == "9"}Archive Panel{/if}
	
		<ul class="text-medium">
			<li>
{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
<a href="{title_permalink="people/profile"}">{exp:zoo_visitor:details}{visitor:member_firstname} {visitor:member_surname}{/exp:zoo_visitor:details}</a>
{/exp:channel:entries}
			</li>
		</ul>
	</li>
	<li>Your Projects
		<ul class="text-medium">
			<li><a href="{if "{exp:tidy_credits member_id="{zoo_member_id}"}" > 0}{path="account/add-project"}{if:else}{path="account/subscriptions"}{/if}">Create New</a></li>
			<li><a href="{path="account/projects"}">See All</a></li>
		</ul>
	</li>
	<li>Plan
		<ul class="text-medium">
			<li><a href="{path="account/subscriptions"}">
			{if "{exp:tidy_credits:subscription member_id="{zoo_member_id}"}" > 0}Subscription<br />{exp:tidy_credits:subscription member_id="{zoo_member_id}"} days until renewal{if:elseif "{exp:tidy_credits:credits_available member_id="{zoo_member_id}"}" > 0}Pay Per Submission <br />{exp:tidy_credits:credits_available member_id="{zoo_member_id}"} credit(s) left<br /><span class="text-small">Save up to 90% by subscribing</span>{if:else}Pay Per Submission<br /><span class="text-small">Save up to 90% by subscribing</span>{/if}
			</a></li>
		</ul>
	</li>
	
	{if member_group == "7" OR member_group == "1"}
		<li>100 Future Review
			<ul class="text-medium">
				{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
					<li>{embed="includes/submissions-judge-count" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" } projects require your attention. {embed="___includes/2014submissions-judge-next-project" start="Yes" ids="{exp:playa:parent_ids channel="submissions" field="submission_votes_yes|submission_votes_no"}" }
					</li>
				{/exp:channel:entries}
		        {if member_group == "1"}<li><a href="{path="account/reviews"}">Full list &rarr;</a></li>{/if}
			</ul>
		</li>
	{/if}
	
	{if member_group == "9" OR member_group == "1"}
		<li>100 Past Review
	        <ul class="text-medium">
	        	<li><a href="{path="account/archive-review"}">Click here to begin &rarr;</a></li>
			</ul>
		</li>
	{/if}
	
	
	<li>
		<ul class="text-small text-fade">
			<li><a href="{path="logout"}">Sign Out</a></li>
		</ul>
	</li>
</ul>


{if:else}

<p class="text-medium">Sign in</p>
{exp:zoo_visitor:login_form class="form-horizontal nicer" id="formRegister"}
<div class="control-group">
    <div class="controls">
  <label class="control-label" for="username">Email</label>
      <input type="email" class="expand input-text" name="username" id="username" placeholder="Email" value="{if username}{username}{/if}" required>
    </div>
</div>

<div class="control-group">
    <div class="controls">
  <label class="control-label" for="password">Password</label>
      <input type="password" class="expand input-text" name="password" id="password" placeholder="Password" value="{if password}{password}{/if}" required>
    </div>
</div>

<div class="controls text-small link-orange no_ul"><p><a href="{path="signin/forgot-password"}">Forgot your password?</a></p><button type="submit" class="button xlarge black hover-orange">Sign In</button>
</div>

{/exp:zoo_visitor:login_form}
	
<p class="text-medium pad-top-l"><a href="{path="signin/join"}">Not a Member?<br />Join Now &rarr;</a></p>
{/if}

</div>











<div id="wrap"> <!-- WRAP -->
