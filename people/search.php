{embed="___includes/header" }

<h1>Member Search Results</h1>

{___s-member-search}

<ol>
{exp:low_search:results query="{segment_3}" limit="100" status="not closed"}
  <li><a href="{title_permalink="___members/profile/"}">{title}</a></li>
{if no_results}No search results{/if}
{/exp:low_search:results}
</ol>


{embed="___includes/footer"}
