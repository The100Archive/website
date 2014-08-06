{embed="___includes/header" title="100 Past"}
{embed="___includes/menu" }
<div class="container">

<!--—————— Text ——————-->
<div class="row pad-top">
	<div class="six columns end offset-by-three pad-bottom">
		<h1>100 Past: Curatorial Statement</h1>
	</div>
</div>
</div>


<!-- Dark Container -->
<div class="container bg-dark mob">
<div class="row bg-dark pad-top pad-bottom">
			
		<div class="row">
			<div class="five columns offset-by-five text-large">
			<p class="text-blue">The 100 Archive is a unique initiative that will collect, document and make accessible the history of Irish visual communication design.</p>
			<p>It is a digital repository that will provide illustrated case studies. These will include: design work produced in Ireland; projects by Irish designers living abroad; and projects created by international companies for Irish clients. These will be selected based on design, cultural or technical significance.</p>
			<p>As the archive expands it will capture the narrative of Irish graphic design from the mid-twentieth century through to the present day, across the entire island of Ireland. The 100 Archive is overseen by a curatorial panel comprising visual communication design educators, practitioners and researchers. The panel will complement the projects selected for the annual 100 Showcase with work from earlier decades.</p>
			<p>As the archive evolves the panel will seek to gather inputs from the wider design community. Over time the 100 Archive will become a valuable resource for anyone interested in the history of Irish visual communication design.</p>
			</div>
			
			<div class="two columns pull-eight">
				<ul class="text-blue">
					<li>Curatorial Panel</li>
					{exp:channel:entries channel="settings" limit="1" dynamic="no"}
					{exp:playa:children field="team_curatorial_panel_playa" status="not closed"}
					<li><a href="{title_permalink="people/profile"}">{member_firstname} {member_surname}</a></li>
					{/exp:playa:children}	
					<li><a href="">Liam McComish</a></li>
{/exp:channel:entries}
				</ul>
			</div>
		</div>
</div>
</div>


{embed="___includes/footer"}
