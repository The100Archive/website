{if segment_2=="past"}
<li class="block-{entry_date format="%g"}">
{if:elseif segment_2=="future"}
<li class="future-{switch="1|3|4|2|3|1|4|2"}" id="infinite">
{if:elseif segment_1=="show"}
<li class="future-{switch="1|3|4|2|3|1|4|2"}" id="infinite">
{if:elseif segment_1==""}
<li class="future-{switch="1|3|4|2|3|1|4|2"}" id="infinite">
{if:else}
<li>
{/if}
{if status=="Archive"}<a href="{title_permalink="show/project/"}">{/if}
{if status=="Showcase"}<a href="{title_permalink="show/project/"}">{/if}
{if status=="Incomplete"}<a href="{path="account/add-project"}/{entry_id}">{/if}
<img src="{submission_images limit="1"}{image:1000}{/submission_images}">
{if status=="Pending"}<span class="round orange label">Awaiting Review</span>{/if}
{if status=="Incomplete"}<span class="round red label">Incomplete: Click to Edit</span>{/if}
{if status=="closed"}<span class="round fade label">Unsuccessful</span>{/if}<h2 class="text-small text-white">
{if status=="Archive"}&#9734; {/if}{title}</h2>
{if status!="closed|Pending"}</a>{/if}
</li>
