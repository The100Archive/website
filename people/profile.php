{exp:channel:entries channel="members" {___s-single-entry-parameters} }

{embed="___includes/header" title="{title}"}
{embed="___includes/2014menu"}

<div class="container blockpage">

	<!--——————  ——————-->
	<div class="row pad-top">
					<div class="twelve columns">
						<div class="row">
							<div class="two columns" style="margin: 0 auto; float: none; padding-left: 17px; width: 11%; margin-top: -40px">
							{___s-member-icon}
							</div>
						</div>			
					</div>
						<div class="twelve columns">
						<div class="row">
							<h4 style="text-align: center; width: 92.5%; margin-top: 15px;">{title}</h4> 
							<span style="width: 92.5%; display: block; text-align: center; margin-top: 5px; margin-bottom: -10px">{if member_website != ""}<a target="_blank" href="{member_website}" style="border: 0px;">{exp:low_replace find="http://" replace=""}{member_website}{/exp:low_replace}</a>{/if} {if '{member_website}' != '' AND '{member_twitter}' != ''}|{/if} {if member_twitter}<a href="http://www.twitter.com/{member_twitter}" target="_blank" style="border: 0px;">@{member_twitter}</a>{/if}</span>
							
						</div>	
						
						<div class="row text-black pad-top">
									{exp:playa:children field="member_practice" limit="1"}{if {count} > 0}
									<div class="two columns" style="margin-left: 31.8%;">
										<ul>
										<li>Currently works</li>{/if}
										{/exp:playa:children}
                                                                                {exp:playa:children field="member_practice"}
										<li><a href="{title_permalink="workplaces/profile"}">{title}</a></li>
    									        {/exp:playa:children}
									{exp:playa:children field="member_practice" limit="1"}{if {count} > 0}
										</ul>
									</div>
									{/exp:playa:children}
									
									{member_previous_practices limit="1"}{if {count} > 0}
									<div class="two columns end" style="width: 15%;">
										<ul>
										<li>Previously worked</li>
										<span style="color: white;">
										{/if}
										{/member_previous_practices}
										{member_previous_practices}
										<a style="border: 0px;" href="{title_permalink="workplaces/profile"}">{title}</a>{if count == total_results}{if:else}, {/if}
										{/member_previous_practices}
										</span>
									{member_previous_practices limit="1"}{if {count} > 0}
										</ul>
									</div>
									{/member_previous_practices}
									
									
								</div>
						</div>
			
						<div class="three columns end link-orange text-black text-small">
							{if {author_id}=={zoo_member_id}}This is your page! <a href="{path="account/profile"}">Edit it?</a>{/if}
						</div>
	</div><!-- Row -->
	
	<!--——————  ——————-->
		<div class="row pad-top text-black">
			<div class="twelve columns">
				<div class="row">
						<p class="text-small center" style="width: 100%; text-align: center;">{exp:playa:parents field="submission_members" channel="submissions|archive_submissions" status="Showcase|Archive" disable="category_fields|member_data|pagination" limit="1"}{if {count} > 0}Archived Projects{/exp:playa:parents}</p>
				</div>			
			</div>
			<div class="twelve columns link-black" style="margin-left: 0px;">
				<ul class="block-grid five-up mobile">
{exp:playa:parents field="submission_members" channel="submissions|archive_submissions" status="Showcase|Archive" disable="category_fields|member_data|pagination"}{if {count} > 0}{2014_s-project-link}{/exp:playa:parents}
				</ul>
			</div>
		</div><!-- Row -->
		
	
</div><!-- Container -->


{/exp:channel:entries}

{embed="___includes/2014footer"}
