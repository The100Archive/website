{embed="___includes/header"}
{embed="___includes/menu" }

<!--—————— Text ——————-->


<div class="container now">
{exp:channel:entries channel="past_groups" limit="5"}
			<div class="pad-top row">
			
				<div class="seven columns offset-by-three link-no-ul pad-top">
					<h1>{title}</h1>
				</div>
			</div>



			
			<div class="row">
				<div class="two columns offset-by-one">
					<div class="row">
						{exp:playa:children field="pg_author" status="not closed"}
								<br />
								<div class="eight columns link-no-ul pad-top">
									<h4 class="text-small hide-on-phones"><a href="{title_permalink="people/profile"}">{member_firstname} {member_surname}</a></h4>
									<h4 class="text-small show-on-phones text-center">{member_firstname}<br />{member_surname}</h4>
						{/exp:playa:children}
									<a href="{title_permalink="now"}">{entry_date format="%d.%m.%Y"}</a>
								</div>
						{exp:playa:children field="pg_author" status="not closed"}
								<a href="{title_permalink="people/profile"}">
								<div class="four columns">
									{if member_image}
									{exp:imgsizer:size src="{member_image}" width="250" height="250" crop="yes" alt="{title}" class="full-rounded"}
									{if:else}
									<img src="/site/images/user-icons/icon-{entry_date format="%h"}.jpg" alt="{title}" class="full-rounded">
									{/if}
								</div>
								</a>
						{/exp:playa:children}
					</div>
				</div>
				<div class="six columns end">
					
					<div class="pad-top text-medium text-black">
						{pg_text}
					</div>
				</div>
			</div>
			
	
			
 
{/exp:channel:entries}




{embed="___includes/footer"}
</div>