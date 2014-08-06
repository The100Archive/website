{exp:channel:entries channel="practices" {___s-single-entry-parameters} }

{embed="___includes/header" title= "{title}"}
{embed="___includes/2014menu" }


<div class="container blockpage">

<!--——————  ——————-->
<div class="row pad-top pad-bottom">
				<div class="twelve columns end">
				<h1 style="text-align: center;">{title}</h1>
				{if practice_website != ""}
				<p  style="text-align: center;"><a target="_blank" href="{practice_website}">{exp:low_replace find="http://" replace=""}{practice_website}{/exp:low_replace}</a></p>
				{/if}
				</div>
		
				<div class="two columns end link-orange text-black text-small">
					{if {author_id}=={zoo_member_id}}You&rsquo;re the admin for this page. <a href="{title_permalink="account/workplace"}">Edit it?</a>{/if}
				</div>
</div><!-- Row -->




<!--——————  ——————-->
<div class="row text-black pad-top">
					<div class="twelve columns" style="text-align:center;">
							<p class="text-small">{exp:playa:parents field="member_practice" status="not closed" limit="1"}{if {count} > 0}
							Associated Members{/if}{/exp:playa:parents}</p>
					</div>		
						
					<div class="twelve columns end">
					<ul class="block-grid four-up">
					{exp:playa:parents field="member_practice" status="not closed" orderby="member_surname" sort="asc"}
					{___s-member-thumbnail}
					{/exp:playa:parents}
					</ul>
					</div>
</div><!-- Row -->


<!--——————  ——————-->
<div class="row text-black pad-top">
					<div class="twelve columns" style="text-align:center;">
							<p class="text-small">{exp:playa:parents field="member_previous_practices" status="not closed" limit="1"}{if {count} > 0}
							Associated Members (former){/if}{/exp:playa:parents}</p>
					</div>			
						
					<div class="twelve columns end" >
					<ul class="block-grid four-up">
					{exp:playa:parents field="member_previous_practices" status="not closed" orderby="member_surname" sort="asc"}
					{___s-member-thumbnail}
					{/exp:playa:parents}
					</ul>
					</div>
</div><!-- Row -->

	
	<!--——————  ——————-->
		<div class="row pad-top text-black">
			<div class="twelve columns" style="text-align:center;">
					
						<p class="text-small">{exp:playa:parents channel="submissions|archive_submissions" status="Showcase|Archive" disable="category_fields|member_data|pagination" limit="1"}
						{if {count} > 0}Archived Projects{/if}{/exp:playa:parents}</p>		
			</div>
			<div class="twelve columns end link-black" style="margin-left: 0px">
				<ul class="block-grid five-up">
{exp:playa:parents channel="submissions|archive_submissions" status="Showcase|Archive" disable="category_fields|member_data|pagination"}
{if {count} > 0}{2014_s-project-link}{/exp:playa:parents}
				</ul>
			</div>
		</div><!-- Row -->
		
</div><!-- Container -->


{/exp:channel:entries}


{embed="___includes/2014footer"}
