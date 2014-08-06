{paginate}
{pagination_links}
<div class="span12 paginate">
                {previous_page}
                        <span class="pull-left"><a href="{pagination_url}" class="page-previous">Previous Page</a></span>
                {/previous_page}

                {page}
                        <span><a href="{pagination_url}" class="page-{pagination_page_number} {if current_page}active{/if}">{pagination_page_number}</a></span>
                {/page}

                {next_page}
                        <span  class="pull-right"><a href="{pagination_url}" class="page-next">Next Page</a></span >
                {/next_page}
</div>
{/pagination_links}
{/paginate}