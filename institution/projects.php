{embed="___includes/header"}
{embed="___includes/menu" }

<!--—————— Text ——————-->


<div class="container now">
{exp:channel:entries channel="institution" limit="1"}
	
							
				<div class="row pad-top">
					<div class="six columns offset-by-three">
						<div class="pad-top text-medium pad-bottom text-black">
							<h1><a href="{url_title_path="institution"}">{title}</a><br/>
							<p class="capitalize text-small">Projects</p>
						</div>
					</div>
				</div>
				
				<div class="row pad-top text-black">
							<div class="ten columns centered link-black">
								<ul class="block-grid five-up mobile">
								
				{exp:playa:children field="i_alumni" status="not closed" disable="" paginate="" limit="5"}
					{exp:playa:parents field="submission_members" channel="submissions" status="Showcase|Archive" disable="category_fields|member_data" paginate="bottom"}
					
						{___s-project-summary}
						
						{paginate}
						    {pagination_links}
							    <ul>
							      {page}
							      <li><a href="{pagination_url}" class="{if current_page}active{/if}">{pagination_page_number}</a></li>
							      {/page}
							    </ul>
						    {/pagination_links}
						{/paginate}				
						
						
					{/exp:playa:parents}
				{/exp:playa:children}
				
				
				
								</ul>
							</div>
				</div><!-- Row -->
			
											
 
{/exp:channel:entries}

{embed="___includes/footer"}
</div>



{exp:zoo_visitor:details member_id="{author_id}"}

{visitor:url_title}

{/exp:zoo_visitor:details}