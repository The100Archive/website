{embed="___includes/header" title="Team"}
{embed="___includes/2014menu" }
{embed="___includes/2014menunav" }

{exp:channel:entries channel="settings" limit="1" dynamic="no"}

<div class="container">

<div class="row pad-top pad-bottom">
	<div class="six columns offset-by-three text-black">
		<h1 class="text-white">100 Archive Team</h1>
{team_intro}

	</div>

</div><!-- Row -->

<div class="row pad-top">
	<div class="four columns offset-by-three"><h2>Curatorial Panel</h2></div>
	<div class="three columns end text-small text-black">
	{team_curatorial_panel_intro}
	</div>
</div>
<div class="row pad-top">
	<div class="ten columns offset-by-one end text-small">
		<ul class="block-grid five-up mob-three-up">
		{exp:playa:children field="team_curatorial_panel_playa" status="not closed"}
		{___s-member-thumbnail}
		{/exp:playa:children}				

						<li>
					<div class="row">
						<div class="four columns">
										<img src="/site/images/user-icons/icon-08.jpg" alt="" class="full-rounded">
									</div>
						<div class="eight columns end">
							<h4 class="text-small hide-on-phones"><br />Liam McComish</h4>
							<h4 class="text-small show-on-phones text-center">Liam<br />McComish</h4>
						</div>
					</div>
				</li>
				
						
		</ul>
	</div>
</div><!-- Row -->

<div class="row"><div class="eight columns offset-by-two end"><hr class="fade" /></div></div>

<div class="row pad-top">
	<div class="four columns offset-by-three"><h2>Professional Panel</h2></div>
	<div class="three columns end text-small text-black">
	{team_professional_panel_intro}
	</div>
</div>
<div class="row pad-top pad-bottom">
	<div class="ten columns offset-by-one end text-small">
		<ul class="block-grid five-up mob-three-up">
		{exp:playa:children field="team_professional_panel_playa" status="not closed"}
		{___s-member-thumbnail}
		{/exp:playa:children}
		</ul>
	</div>
</div><!-- Row -->

<div class="row"><div class="eight columns offset-by-two end"><hr class="fade" /></div></div>


<div class="row pad-top">
	<div class="four columns offset-by-three"><h2>Steering Committee</h2></div>
	<div class="three columns end text-small text-black">
	{team_steering_committee_intro}
	</div>
</div>
<div class="row pad-top">
	<div class="ten columns offset-by-two end text-small">
		<ul class="block-grid five-up mob-three-up">
		{exp:playa:children field="team_steering_committee_playa" status="not closed"}
		{___s-member-thumbnail}
		{/exp:playa:children}
		</ul>
	</div>
</div><!-- Row -->

<div class="row"><div class="eight columns offset-by-two end"><hr class="fade" /></div></div>


<div class="row pad-top">
	<div class="four columns offset-by-three"><h2>Founders</h2></div>
	<div class="three columns end text-small text-black">
	{team_founders_intro}
	</div>
</div>
<div class="row pad-top">
	<div class="ten columns offset-by-one end text-small">
		<ul class="block-grid five-up hide-on-phones">
{/exp:channel:entries}
{exp:channel:entries channel="members" orderby="member_surname" sort="asc" status="Members___Founding-id5|Judges-id7"}
				{___s-member-thumbnail}
{/exp:channel:entries}
		</ul>
		<ul class="block-grid three-up show-on-phones">
{exp:channel:entries channel="members" orderby="member_surname" sort="asc" status="Members___Founding-id5|Judges-id7"}
				{___s-member-thumbnail}
{/exp:channel:entries}
		</ul>
		
	</div>
</div><!-- Row -->
{exp:channel:entries channel="settings" limit="1" dynamic="no"}

{!--<div class="row pad-bottom">
	<div class="seven columns end offset-by-three">
	<div class="text-small text-black">
	{team_founders_list}
	</div>
	</div>
</div>--}

<div class="row"><div class="eight columns offset-by-two end"><hr class="fade" /></div></div>

{exp:channel:entries channel="settings" limit="1" dynamic="no"}


<div class="row pad-top pad-bottom">
	<div class="five columns end offset-by-three"><h2>Website Credits</h2>
	<div class="text-small text-black">
	{team_website_team}
	</div>
	</div>
</div>






{/exp:channel:entries}

</div>

{embed="___includes/2014footer"}
