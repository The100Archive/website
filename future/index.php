{embed="___includes/header" title="100 Future"}
{embed="___includes/2014menu" }
{embed="___includes/2014menunav" nav="future"}
<div class="container">

<!--—————— Text ——————-->
<div class="row pad-bottom pad-top">
	<div class="three columns link-red text-black text-small">
		<p>The living archive of submitted work, approved by the professional panel. <a href="{path="learn/kb/future"}">Learn More &rarr;</a></p>
	</div>
</div><!-- Row -->

<ul class="future-gallery" id="infinite-holder">
{exp:channel:entries channel="submissions" limit="16" status="Showcase|Archive" orderby="date" sort="desc" disable="member_data" show_expired="yes"}

{___s-project-summary}

{paginate}
{pagination_links}
    
<!-- pagination -->
		<div class="row hide-on-phones pad-top">
			<div class="six columns centered pad-top">
				<ul class="pagination-center">
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


</ul>
<br><br><br>

{embed="___includes/2014footer"}
