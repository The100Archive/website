{embed="___includes/header"}
{embed="___includes/2014menu" }

<!--—————— Text ——————-->
<div class="row">
			<ul class="top-nav">
			<li><a href="/past_dev/" class="past-link">Past</a></li>
			<li class="ui-state-default ui-corner-top ui-tabs-active ui-state-active"><a href="/now/2014now" class="present-link">Present</a></li>
			<li><a href="/show/2014future" class="future-link">Future</a></li>
			</ul>
</div><!-- Row -->

<div class="container now">
{exp:channel:entries channel="news" limit="5"}
			<div class="row">
			
				<div class="twelve columns link-no-ul pad-top">
					<h1 style="text-align:center;"><a href="{title_permalink="now/entry"}">{title}</a></h1>
				</div>
			</div>


{if news_slideshow != ""}
	<div class="row">
		<div class="nine columns centered">
			<div class="{news_slideshow}{if total_files > "1"}newsslider {if:else}newsslider_single{/if}{/news_slideshow} royalSlider rsMinW pad-top">
				{news_slideshow}
					<a class="rsImg" href="{exp:ce_img:pair src="{url}" width="1400" allow_scale_larger="yes" crop="no" add_dims="no"}{made}{/exp:ce_img:pair}"></a>
				{/news_slideshow}
			</div>
		</div>
	</div>
{/if}

{if news_video != ""}
<div class="row">
	<div class="nine columns centered">
		<div class="flex-video widescreen vimeo gap-top">
			{news_video}
		</div>
	</div>
</div>
{/if}

			
			<div class="row">
				<div class="two columns offset-by-one">
					<div class="row">
						{exp:playa:children field="news_author" status="not closed"}
								<br />
								<div class="eight columns link-no-ul pad-top">
									<h4 class="text-small hide-on-phones"><a href="{title_permalink="people/profile"}">{member_firstname} {member_surname}</a></h4>
									<h4 class="text-small show-on-phones text-center">{member_firstname}<br />{member_surname}</h4>
						{/exp:playa:children}
									<a href="{title_permalink="now"}">{entry_date format="%d.%m.%Y"}</a>
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
					<a href="{url_title_path="now/entry"}">Continue Reading &rarr;</a>
					{if:else}
					{exp:trunchtml chars="370" inline=" ..."  ending="<a href='{url_title_path="now/entry"}'>Continue Reading &rarr;</a>"}{news_text}{/exp:trunchtml} 
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
{embed="___includes/2014footer"}

 </div>