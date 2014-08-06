<div class="royalSlider rsDefault visibleNearby pad-bottom">
{submission_images}
	<a class="rsImg" href="{image:1000}"></a>
{/submission_images}
{if submission_video}
    <a class="rsImg" href="{exp:ce_img:pair src="{submission_images limit="1"}{image}{/submission_images}" allow_scale_larger="yes" width="1000" height="600" crop="yes" filter="gaussian_blur,20"}{made}{/exp:ce_img:pair}" data-rsVideo="{submission_video}"></a>
{/if}
</div>
 


<div class="container">
	<!--——————  ——————-->
	<div class="row pad-top">
		<div class="six columns offset-by-five">
			<h1>{title}</h1>
		</div>
	</div>
	
	<div class="row">
		<div class="six columns push-five text-black">
			<p>{submission_description}</p>
		</div>
		<div class="three columns pull-seven" style="overflow:hidden">
			{if submission_url}
			<ul>
			<a target="_blank" href="{submission_url}">{exp:low_replace find="http://" replace=""}{submission_url}{/exp:low_replace}</a>
			</ul>
				{/if}
				
		</div>
	</div>
	<div class="row pad-top text-small text-fade">
		<div class="six columns offset-by-five">
<p>
{categories show_group="1" limit="1"}{if category_name!=""}Client Context: {/if}{/categories}
{categories show_group="1" backspace="2"}<a href="{path="show/future"}">{category_name}</a>, {/categories}
<br/>
{categories show_group="2" limit="1"}{if category_name!=""}Design Context: {/if}{/categories}
{categories show_group="2" backspace="2"}<a href="{path="show/future"}">{category_name}</a>, {/categories}
<br/>
{if "{submission_tags}" != ""}Descriptive Tags: {submission_tags}{/if}
</p>

		</div>
	</div>
	
</div><!-- Container -->



<!--
<h2>Overview</h2>
<dl>
{if segment_2 != "preview-project"}
<dt>Selected</dt><dd>{if status == "Archive"}Archive{if:else}Showcase{/if} {categories show_group="3" limit="1"}{category_name}{/categories}</dd>
{/if}
<dt>Design Form</dt><dd>{categories show_group="2" backspace="2"}<a href="{path="___showcase"}">{category_name}</a>, {/categories}</dd>
<dt>Client Type</dt><dd >{categories show_group="1" backspace="2"}<a href="{path="___showcase"}">{category_name}</a>, {/categories}</dd>
{if "{submission_tags}" != ""}<dt>Descriptive Tags</dt><dd>{submission_tags}</dd>{/if}
</dl>

<h2>Credits</h2>
<dl>
{exp:playa:children field="submission_practices"}
<dt>Design Practice</dt><dd><a href="{title_permalink="___workplaces/profile"}">{title}</a></dd>
{/exp:playa:children}
{exp:playa:children field="submission_members" status="not closed"}
<dt>Designer</dt><dd><a href="{title_permalink="___members/profile"}">{title}</a></dd>
{/exp:playa:children}
{submission_credits}
<dt>Credit #{row_count}</dt><dd>{credit_name}, {credit_role}</dd>
{/submission_credits}
</dl>

{embed="___includes/.related-projects" current_id="{entry_id}" author="{author_id}" }

</div>
-->



	

