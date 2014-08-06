{exp:channel:entries channel="archive_submissions|submissions" {___s-single-entry-parameters} }

{embed="___includes/header" title="{title}"}
<div class="bg-dark">
{embed="___includes/2014menu" }

<div class="royalSlider rsDefault visibleNearby past-project-slider" >
{submission_images}
	<a class="rsImg" href="{exp:ce_img:pair src="{image}" quality="90" height="1000" allow_scale_larger="no" crop="no" add_dims="no" cache="yes" refresh="360"}{made}{/exp:ce_img:pair}"></a>
{/submission_images}
{secondary_images}
	<a class="rsImg" href="{exp:ce_img:pair src="{image}" quality="90" height="1000" allow_scale_larger="no" crop="no" add_dims="no" cache="yes" refresh="360"}{made}{/exp:ce_img:pair}"></a>
{/secondary_images}
{if submission_video}
    <a class="rsImg" href="{exp:ce_img:pair src="{submission_images limit="1"}{image}{/submission_images}" allow_scale_larger="yes" width="1000" height="600" crop="yes" filter="gaussian_blur,20"}{made}{/exp:ce_img:pair}" data-rsVideo="{submission_video}"></a>
{/if}
</div>
</div>


<div class="container bg-dark">
	<!--——————  ——————-->
	<div class="row pad-top">
	<div class="eleven columns centered bg-dark">
	<div class="row">
		<div class="pad-top six columns centered text-center">
			<h1>{title}</h1>
			<p class="text-small text-black">{if '{start_date}' == '0'}{if:else}{start_date format="%d.%m.%Y"}{/if}—{if '{end_date}' == '0'}{if:else}{end_date format="%d.%m.%Y"}{/if}</p>
		</div>
	</div>
	
	<div class="row pad-top bg-dark pad-bottom">
		<div class="six columns offset-by-one text-black pad-bottom">
			<p>{submission_description}</p>
			
			<span class="text-medium">{project_details}</span>
		</div>
		
		<div class="four columns">
		<div class="row">
		<div class="eleven columns">
			<div style="overflow:hidden">
				{if submission_url}
				<ul class="pad-bottom">
				<a target="_blank" href="{submission_url}">{exp:low_replace find="http://" replace=""}{submission_url}{/exp:low_replace}</a>
				</ul>
				{/if}
			</div>
			
			<!--data-reveal-id="myModal"-->	
			
			<ul class="block-grid one-up">
			<p class=" text-small text-black pad-bottom link-no-ul">Designed by<br/>
			{exp:playa:children field="submission_practices"}
			<a href="{title_permalink="workplaces/profile"}">{title}</a>
			{/exp:playa:children}</p>
			{exp:playa:children field="submission_members|practices" status="not closed"}
					<li class="pad-bottom">
						<div class="row pad-bottom">
						<a  href="{title_permalink="people/profile"}">
							<div class="two columns">
									{if member_image}
									{exp:imgsizer:size src="{member_image}" width="250" height="250" crop="yes" alt="{title}" class="full-rounded"}
									{if:else}
									<img src="/site/images/user-icons/icon-{entry_date format="%h"}.jpg" alt="{title}" class="full-rounded">
									{/if}
							</div>
							<div class="nine columns end">
								<h4 class="text-small hide-on-phones archive-designer-title">{member_firstname} {member_surname}</h4>
								<h4 class="text-small show-on-phones text-center">{member_firstname}<br />{member_surname}</h4>
							</div>
						</a>
						</div>
					</li>
			{/exp:playa:children}	
			</ul>	

			
			{if production && production_techniques && technical_notes == ""} 
			<hr style="border-color: #646464; margin-bottom: -20px; margin-top: -20px;">
			{if:else}
			<dl class="light tabs">
			  {if submission_credits != ""}<dd><a href="#contributors" class="active">Contributors</a></dd>{/if}
			{if production OR production_techniques OR technical_notes != ""}<dd><a href="#production_notes">Production Notes</a></dd>{/if}
			  {if additional_info != ""}<dd><a href="#other_notes">Other</a></dd>{/if}
			</dl>
			{/if}
			
			<ul class="tabs-content text-black text-medium pad-bottom">
			   {if production OR production_techniques OR technical_notes != ""}
			   <li id="production_notesTab">
		  		<div class="row">
		  			<p>
		  			Printers, Programmers, Manufacturers:<br />
			  		{production}
			  		{name}<br />
			  		{/production}
			  		</p>
		  		<div class="row">
		  			<p>
		  			{production_techniques}
		  			{category}: {type}<br />
		  			{/production_techniques}
		  			</p>
		  		</div>
		  		<div class="row">
		  			<p>
		  			Technical Notes:<br />
		  			{technical_notes}
		  			</p>
		  		</div>
			  </li>
			  {/if}
			  {if submission_credits != ""}
			  <li class="active" id="contributorsTab">
			  	<p>
			  		{submission_credits backspace="2"}
			  		{credit_name} - {credit_role}<br />
			  		{/submission_credits}
			  	</p>
			  </li>
			  {/if}
			  {if additional_info != ""}
			  <li id="other_notesTab" class="text-small">
			  	<p class="text-small">{additional_info}</p>
			  </li>
			  {/if}
			</ul>
		
		<div class="row pad-top text-small text-fade">
				<p>
				{if '{client}' != ''}Client: {client} {if:else}{/if}<br />
				{categories show_group="1" limit="1"}{if category_name!=""}Client Context: {/if}{/categories}
				{categories show_group="1" backspace="2"}<a href="{path="show/future"}">{category_name}</a>, {/categories}
				<br/>
				{categories show_group="2" limit="1"}{if category_name!=""}Design Context: {/if}{/categories}
				{categories show_group="2" backspace="2"}<a href="{path="show/future"}">{category_name}</a>, {/categories}
				<br/>
				{if "{submission_tags}" != ""}Descriptive Tags: {submission_tags}{/if}
				</p> 
		</div>
		{if zipped_file != ""}
		<div class="row pad-top text-small text-fade">
		        {if member_group == "1"}<p>Download a zip file of the original images <a href="http://www.100archive.com/content/zips/{zipped_file}">here &darr;</a></p>{/if}
		</div>
		{/if}
		</div>
	</div>
	</div>
	</div>
	</div>
	</div>
</div><!-- Container -->


{/exp:channel:entries}
{embed="___includes/2014footer"}