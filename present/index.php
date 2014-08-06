{embed="___includes/header"}
{embed="___includes/2014menu" }
{embed="___includes/2014menunav" nav="present" }

<!--—————— Text ——————-->


<div class="container now" style="margin-left: 10px">
{exp:channel:entries channel="news" limit="5"}
			<div class="pad-top row">
			
				<div class="twelve columns animated wow fadeInUp">
					<h1 style="text-align: center;"><a href="{title_permalink="present/entry"}">{title}</a></h1>
				</div>
			</div>


{if news_slideshow != ""}
	<div class="row">
		<div class="ten columns offset-by-one animated wow fadeInUp">
			<div class="newsslider_single rsMinW pad-top">
				{news_slideshow}
					<a href="{title_permalink="present/entry"}" class="no_ul"><img class="rsImg" src="{exp:ce_img:pair src="{url}" width="1400" allow_scale_larger="yes" crop="no" add_dims="no"}{made}{/exp:ce_img:pair}"></a>
				{/news_slideshow}
			</div>
		</div>
	</div>
{/if}

{if news_video != ""}
<div class="row">
	<div class="ten columns offset-by-one">
		<div class="flex-video widescreen vimeo gap-top">
			{news_video}
		</div>
	</div>
</div>
{/if}

			
			<div class="row animated wow fadeInUp">
				<div class="two columns offset-by-two">
					<div class="row">
						{exp:playa:children field="news_author" status="not closed"}
								<br />
								<div class="eight columns link-no-ul pad-top">
									<h4 class="text-small hide-on-phones"><a href="{title_permalink="people/profile"}">{member_firstname} {member_surname}</a></h4>
									<h4 class="text-small show-on-phones text-center">{member_firstname}<br />{member_surname}</h4>
						{/exp:playa:children}
									<a href="{title_permalink="present"}">{entry_date format="%d.%m.%Y"}</a>
								</div>
						{exp:playa:children field="news_author" status="not closed"}
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
					
					<div class="pad-top text-medium text-black pad-bottom blog-text">
					{if news_text:has_excerpt}
					{news_text:excerpt}
					<a href="{url_title_path="present/entry"}">Continue Reading &rarr;</a>
					{if:else}
					{exp:trunchtml chars="350" inline=" ..."  ending="<a href='{url_title_path="present/entry"}'>Continue Reading &rarr;</a>"}{news_text}{/exp:trunchtml} 
					{/if}
					
					
						{!--{if last_segment!="now"}
						<p class="text-fade pad-top"><i>What do you think? Let us know on <a href="https://twitter.com/100archive" target="_blank">Twitter</a> or <a href="https://www.facebook.com/100designarchive" target="_blank">Facebook</a></i></p>
						{/if}--}
					</div>
				</div>
			</div>
			
	



{paginate}
{pagination_links}
    
<!-- pagination -->
		<div class="row hide-on-phones pad-top">
			<div class="twelve columns pad-top">
				<ul class="pagination" style="text-align: center; width: 300px; margin: 0 auto; " >
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
<br><br><br>
{/paginate}

{/exp:channel:entries}
{embed="___includes/2014footer"}

 </div>