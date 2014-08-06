<div class="span6">

<div id="myCarousel" class="carousel slide">
  <!-- Carousel items -->
  <div class="carousel-inner">
    
<div class="active item">
{if "{submission_images:total_rows}" >= 1}
{submission_images limit="1"}
{exp:imgsizer:size src="{image}" width="460"  alt="{title}"}
{/submission_images}
{if:else}
<img src="http://placehold.it/460x230" alt="{title}">
{/if}
</div>

{if "{submission_images:total_rows}" > 1}
{submission_images offset="1"}
<div class="item">{exp:imgsizer:size src="{image}" width="460" alt="{title}"}</div>
{/submission_images}
{if:else}
<div class="item"><img src="http://placehold.it/460x230/333333/ffffff" alt="{title}">  </div>
{/if}

</div>

  <!-- Carousel nav -->
  <a class="carousel-control left" href="#myCarousel" data-slide="prev">&lsaquo;</a>
  <a class="carousel-control right" href="#myCarousel" data-slide="next">&rsaquo;</a>
</div>


</div>

<div class="span5 offset1">
<h2>Overview</h2>
<dl class="dl-horizontal">
{if segment_2 != "preview-project"}
<dt>Selected</dt><dd>{if status == "Archive"}Archive{if:else}Showcase{/if} {categories show_group="3" limit="1"}{category_name}{/categories}</dd>
{/if}
<dt>Design Form</dt><dd>{categories show_group="2" backspace="2"}<a href="{path="showcase"}">{category_name}</a>, {/categories}</dd>
<dt>Client Type</dt><dd >{categories show_group="1" backspace="2"}<a href="{path="showcase"}">{category_name}</a>, {/categories}</dd>
{if "{submission_tags}" != ""}<dt>Descriptive Tags</dt><dd>{submission_tags}</dd>{/if}
{if "{submission_description}" != ""}<dt>Project Description</dt><dd>{submission_description}</dd>{/if}
</dl>

<h2>Credits</h2>
<dl class="dl-horizontal">
{exp:playa:children field="submission_practices"}
<dt>Design Practice</dt><dd><a href="{title_permalink="practices/profile"}">{title}</a></dd>
{/exp:playa:children}
{exp:playa:children field="submission_members" status="not closed"}
<dt>Designer</dt><dd><a href="{title_permalink="members/profile"}">{title}</a></dd>
{/exp:playa:children}
{submission_credits}
<dt>Credit #{row_count}</dt><dd>{credit_name}, {credit_role}</dd>
{/submission_credits}
</dl>

{embed="includes/.related-projects" current_id="{entry_id}" author="{author_id}" }

</div>