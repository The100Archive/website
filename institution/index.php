{embed="___includes/header"}
{embed="___includes/menu" }

<!--—————— Text ——————-->

{exp:channel:entries channel="institution" limit="1"}

<div class="container">
	
	<div class="row pad-top">
		<div class="six columns offset-by-three">
			<div class="pad-top text-medium pad-bottom text-black">
				<h1 class="">{title}</h1>
				<p class="text-small"><a target="_blank" href="{i_url}">{exp:low_replace find="http://" replace=""}{i_url}{/exp:low_replace}</a></p>
			</div>
		</div>
	</div>


	<div class="row">
		
		<div class="four columns offset-by-six end">
			<div class="text-small text-black">
				{i_description}
			</div>
		</div>
		
	</div>
	
	
	
	<div class="row">
		<div class="six columns offset-by-three">
			<div class="pad-top text-medium pad-bottom">
				<h2 class="capitalize text-medium">Recent {i_descriptor} Projects</h2>
				{!--<a class="text-small" href="{url_title_path="institution/projects"}">View all projects</a>--}
			</div>
		</div>
	</div>
	
</div>



<div class="royalSlider rsDefault visibleNearby">
	{exp:playa:children field="i_alumni" status="not closed" limit="6"}
		{exp:playa:parents field="submission_members" channel="submissions" status="Showcase|Archive" disable="category_fields|member_data|pagination" limit="1"}
				 	<div>
				        <img class="rsImg" src="{submission_images limit="1"}{image}{/submission_images}" alt="" />
				        <figure class="rsCaption"><a class="rsImg" href=""><a class="no_ul text-small" href="{url_title_path="show/project"}">
				        <div class="container text-left">
					        <div class="row">
						        <div class="six columns offset-by-three">
						        {title}
						        </div>
					        </div>
				        </div>
				        </a></figure>
				    </div>
		{/exp:playa:parents}
	{/exp:playa:children}
</div>

			
			
<div class="container pad-top gap-top">		
				<div class="row pad-top">
					<div class="six columns offset-by-three">
						<div class="text-medium text-black">
							<hr class="white" />
						</div>
					</div>
				</div>
				
				
				<div class="row">
						<div class="pad-top six columns offset-by-three">
							<div class="pad-top text-medium pad-bottom">
								<h2 class="capitalize text-medium">{i_descriptor}</h2>
								<a class="text-small" href="{url_title_path="institution/people"}">View all {i_descriptor}</a>
							</div>
						</div>
					</div>
				
				
				<div class="row pad-top text-black pad-bottom">
						<div class="ten columns centered link-black">
							<ul class="block-grid five-up mobile">
			{exp:playa:children field="i_alumni" status="not closed" limit="20"}{if {count} > 0}		
			{___s-member-thumbnail}{/if}
			{/exp:playa:children}
							</ul>
						</div>
				</div><!-- Row -->
				
				<div class="row">
					<div class="six columns offset-by-three">
						<div class="text-medium text-black">
							<hr class="white" />
						</div>
					</div>
				</div>
				
				
				<div class="row">
						<div class="pad-top six columns offset-by-three">
							<div class="pad-top text-medium pad-bottom">
								<h2 class="capitalize text-medium">Current Staff</h2>
								<a class="text-small" href="{url_title_path="institution/staff"}">View all staff</a>
							</div>
						</div>
					</div>
					
					
					<div class="row pad-top text-black pad-bottom">
							<div class="ten columns centered link-black">
								<ul class="block-grid five-up mobile">
				{exp:playa:children field="i_staff" status="not closed" limit="10"}{if {count} > 0}		
				{___s-member-thumbnail}{/if}
				{/exp:playa:children}
								</ul>
							</div>
				</div><!-- Row -->
					
					
 
{/exp:channel:entries}




{embed="___includes/footer"}
</div>