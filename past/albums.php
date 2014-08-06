{embed="___includes/header"}
{embed="___includes/menu" }

<!--—————— Text ——————-->


<div class="container bg-dark mob pad-top">
{exp:channel:entries channel="past_groups" limit="5"}

			<div class="bg-dark row pad-top">
				<div class="seven columns offset-by-three link-no-ul pad-top">
					<h1><a href="{if segment_3 == ""}{title_permalink="past/albums"}{if:else}{path="past/albums"}{/if}">{title}</a></h1>
				</div>
			</div>

			<!--<div class="bg-dark row">
				<div class="two columns offset-by-one">
					<div class="row">
						{exp:playa:children field="pg_author" status="not closed"}
								<br />
								<div class="eight columns link-no-ul pad-top">
									<h4 class="text-small hide-on-phones"><a href="{title_permalink="people/profile"}">{member_firstname} {member_surname}</a></h4>
									<h4 class="text-small show-on-phones text-center">{member_firstname}<br />{member_surname}</h4>
						{/exp:playa:children}
									<a href="{title_permalink="past/albums"}">{entry_date format="%d.%m.%Y"}</a>
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
				<div class="six columns">
					
					<div class="pad-top text-medium text-black">
						{if segment_3 != ""}{pg_text}{if:else}{pg_intro}<a href="{title_permalink="past/albums"}" class="text-small">Read more &rarr;</a>{/if}
					</div>
				</div>
				
				<div class="three columns text-small text-fade">
				<div class="row">
				<div class="eleven columns">
				<br />
				<p>
				{categories show_group="1" limit="1"}{if category_name!=""}Client Context:<br /> {/if}{/categories}
				{categories show_group="1" backspace="2"}<a href="{path="show/future"}">{category_name}</a>, {/categories}
				<br/><br />
				{categories show_group="2" limit="1"}{if category_name!=""}Design Context:<br /> {/if}{/categories}
				{categories show_group="2" backspace="2"}<a href="{path="show/future"}">{category_name}</a>, {/categories}
				<br/><br />
				{if "{pg_tags}" != ""}Descriptive Tags: <br/>{pg_tags}{/if}
				</p> 
				</div>
				</div>
				</div>
			</div>-->
			
	
			<div class="row bg-dark pad-top pad-bottom gap-bottom text-black">
				<div class="ten columns centered pad-top link-black">
					<ul class="block-grid five-up mobile">
						{exp:playa:children field="pg_projects" status="not closed" limit="110"}
						<li>
						<a href="{if project_details==""}{title_permalink="show/project/"}{if:else}{title_permalink="past/project/"}{/if}"> <!-- Needs conditional to send past projects to the past templates -->
						<img src="{submission_images limit="1"}{image:250}{/submission_images}">
						{title}
						</a>
						</li>
						{/exp:playa:children}
					</ul>
				</div>
			</div><!-- Row -->
			
{paginate}
{pagination_links}
    
<!-- pagination -->
		<div class="row hide-on-phones pad-top">
			<div class="nine columns offset-by-three pad-top">
				<ul class="pagination">
{previous_page}
							<li class=""><a href="{pagination_url}">&laquo;</a></li>
{/previous_page}
{if {current_page} == '1'}
							<li class="unavailable"><a href="">&laquo;</a></li>
{if:elseif {current_page} > '1'}
{first_page}
        					<li><a href="{pagination_url}">1</a></li>
{/first_page}
{/if}
{if {current_page} >= '5'}
							<li class="unavailable"><a href="">&hellip;</a></li>
{/if}
{page}
							<li class="{if current_page}current{/if}"><a href="{pagination_url}">{pagination_page_number}</a></li>
{/page}
							<li class="unavailable"><a href="">&hellip;</a></li>
{last_page}
							<li class=""><a href="{pagination_url}">{total_pages}</a></li>
{/last_page}		
{next_page}
							<li><a href="{pagination_url}">&raquo;</a></li>
{/next_page}
{if {current_page} == {total_pages}}
							<li class="unavailable"><a href="">&raquo;</a></li>
{/if}

				</ul>
			</div>
		</div>
		
{/pagination_links}

<div class="show-on-phones text-center">

{if previous_page}
<a class="prev" href="{auto_path}">&larr; Previous Page</a> &nbsp;
{/if}

{if {current_page} != '1'   AND  "{current_page}" != "{total_pages}"  }&nbsp;&nbsp;&nbsp;{/if}

{if next_page}
<a class="next" href="{auto_path}">Next Page &rarr;</a>
{/if}

</div>

{/paginate}


{/exp:channel:entries}
</div>

<div class="container">		


{embed="___includes/footer"}
</div>