{embed="___includes/header"}
{embed="___includes/menu" }

<!--—————— Text ——————-->


<div class="container now">
{exp:channel:entries channel="institution" limit="1"}
	
				<div class="row pad-top">
					<div class="six columns offset-by-three">
						<div class="pad-top text-medium pad-bottom text-black">
							<h1><a href="{url_title_path="institution"}">{title}</a><br/>
							<p class="capitalize text-small">{i_descriptor}</p>
						</div>
					</div>
				</div>
				
				<div class="row pad-top text-black pad-bottom">
						<div class="ten columns centered link-black">
							<ul class="block-grid five-up mobile">
			{exp:playa:children field="i_alumni" status="not closed"}{if {count} > 0}		
			{___s-member-thumbnail}{/if}
			{/exp:playa:children}
							</ul>
						</div>
				</div><!-- Row -->
							
 
{/exp:channel:entries}




{embed="___includes/footer"}
</div>