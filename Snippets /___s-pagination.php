{paginate}
{pagination_links}
                {previous_page}
                       <a href="{pagination_url}" class="page-previous">Previous Page</a>
                {/previous_page}

                {page}
                        <a href="{pagination_url}" class="page-{pagination_page_number} {if current_page}active{/if}">{pagination_page_number}</a>
                {/page}

                {next_page}
                        <a href="{pagination_url}" class="page-next">Next Page</a>
                {/next_page}
{/pagination_links}
{/paginate}