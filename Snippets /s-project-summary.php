{if segment_2=="profile"}
<article class="summary span2 {switch="clearfix|column2|column3"}">
{if:elseif segment_1=="archive"}
<article class="summary span2 {switch="clearfix|column2|column3|column4"}">
{if:else}
<article class="summary span2 {switch="clearfix|column2|column3|column4|column5|column6"}">
{/if}

{if status=="Archive"}<a href="{title_permalink="archive/project/"}">{if:else}<a href="{title_permalink="showcase/project/"}">{/if}
<div class="photo">
{if status=="Archive"}<i class="icon-star"></i>{/if}

{if "{submission_images:total_rows}" >= 1}
{submission_images limit="1"}
{exp:imgsizer:size src="{image}" width="140" height="140" alt="{title}"}
{exp:ce_img:single src="{image}" max="140" alt="{title}"}
{/submission_images}
{if:else}
<img src="http://placehold.it/140x140" alt="{title}">
{/if}

</div>
<h2>{title}</h2>
</a>
<p><strong>Design Form:</strong> {categories show_group="2" backspace="2"}<a href="{path="showcase"}">{category_name}</a>, {/categories}<br />
<strong>Client Type:</strong> {categories show_group="1" backspace="2"}<a href="{path="showcase"}">{category_name}</a>, {/categories}</p>

</article>