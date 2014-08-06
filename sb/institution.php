{exp:channel:entries channel="archive_submissions" {___s-single-entry-parameters} }

{embed="___includes/header" title= "{title}"}
{embed="___includes/menu" }

<div class="royalSlider rsDefault visibleNearby pad-bottom">
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



<div class="container">
	<!--——————  ——————-->
	<div class="row pad-top">
		<div class="six columns centered text-center">
			<h1>{title}</h1>
			<p class="text-small text-black">{start_date format="%d.%m.%Y"}—{end_date format="%d.%m.%Y"}</p>
		</div>
	</div>
	
	<div class="row pad-top">
		<div class="six columns offset-by-one text-black">
			<p>{submission_description}</p>
			
			<span class="text-medium">{project_details}</span>
		</div>
		
		<div class="four columns">
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
								<h4 class="text-small hide-on-phones"><br />{member_firstname} {member_surname}</h4>
								<h4 class="text-small show-on-phones text-center">{member_firstname}<br />{member_surname}</h4>
							</div>
						</a>
						</div>
					</li>
			{/exp:playa:children}	
			</ul>	
			
			<dl class="dark tabs">
			  {if production OR production_techniques OR technical_notes != ""}<dd><a href="#production_notes" class="active">Production Notes</a></dd>{/if}
			  {if submission_credits != ""}<dd><a href="#contributors">Contributors</a></dd>{/if}
			  {if additional_info != ""}<dd><a href="#other_notes">Other Notes</a></dd>{/if}
			</dl>
			
			<ul class="tabs-content text-black text-medium pad-bottom">
			   {if production OR production_techniques OR technical_notes != ""}
			   <li class="active" id="production_notesTab">
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
			  <li id="contributorsTab">
			  	<p>
			  		{submission_credits backspace="2"}
			  		{credit_name} - {credit_role}<br />
			  		{/submission_credits}
			  	</p>
			  </li>
			  {/if}
			  {if additional_info != ""}
			  <li id="other_notesTab">
			  	<p>{additional_info}</p>
			  </li>
			  {/if}
			</ul>
		
		<div class="row pad-top text-small text-fade">
				<p>
				Client: {client} <br />
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

	
</div><!-- Container -->



{/exp:channel:entries}
{embed="___includes/footer"}

