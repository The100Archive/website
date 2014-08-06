{s-login-check}
{embed="includes/header" }

<div class="page-header">
<h1>Review Project</h1>
</div>

<div class="row">

{s-reviews-subnav}

{exp:channel:entries channel="submissions" limit="1" disable="member_data|pagination" show_expired="yes" require_entry="yes" status="open|closed|Pending|Showcase|Archive" }

<div class="span6">
<a href="{path="login/reviews"}">return to list of projects</a>

<h1>{title} <em>- {s-project-status-label}</em></h1>

{if segment_4 == "voted"}
<div class="alert alert-success">
Your vote has been submitted
</div>
{/if}


<div class="row">
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
</div>


<h2>Overview</h2>
<dl class="dl-horizontal">
<dt>Selected</dt><dd>{if status == "Archive"}Archive{if:else}Showcase{/if} {categories show_group="3" limit="1"}{category_name}{/categories}</dd>
<dt>Design Form</dt><dd>{categories show_group="2" backspace="2"}<a href="{path="showcase"}">{category_name}</a>, {/categories}</dd>
<dt>Client Type</dt><dd >{categories show_group="1" backspace="2"}<a href="{path="showcase"}">{category_name}</a>, {/categories}</dd>
{if "{submission_tags}" != ""}<dt>Descriptive Tags</dt><dd>{submission_tags}</dd>{/if}
{if "{submission_description}" != ""}<dt>Project Description</dt><dd>{submission_description}</dd>{/if}
</dl>

{/exp:channel:entries}

<div class="row">
<div class="well span6 clearfix">
<h4>Vote</h4>
<p>Should this project be published in the Showcase or not</p>
<div class="row">
{exp:safecracker channel="submissions" url_title="{segment_3}" return="login/review-project/{segment_3}/voted" class="form-inline pull-left" }
<input type="hidden" name="status" id="status" value="closed">
<input type="hidden" name="field_id_38[row_order][]" value="row_new_0" />
<input type="hidden" name="field_id_38[row_new_0][col_id_7][selections][]" value="{zoo_visitor_id}" />
<input type="hidden" name="field_id_38[row_new_0][col_id_8]" value="{screen_name}"/>
<button type="submit" class="btn span2 btn-danger btn-large">No</button>
{/exp:safecracker}
{exp:safecracker channel="submissions" url_title="{segment_3}" return="login/review-project/{segment_3}/voted" class="form-inline pull-left" }
<input type="hidden" name="status" id="status" value="Showcase">
<input type="hidden" name="field_id_37[row_order][]" value="row_new_0" />
<input type="hidden" name="field_id_37[row_new_0][col_id_5][selections][]" value="{zoo_visitor_id}" />
<input type="hidden" name="field_id_37[row_new_0][col_id_6]" value="{screen_name}"/>
<button type="submit" class="btn span2 btn-success btn-large">Yes</button>
{/exp:safecracker}
</div>
</div>
</div>


</div>

{s-footer}