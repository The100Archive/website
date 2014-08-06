{exp:channel:entries channel="news" {___s-single-entry-parameters} }

{embed="___includes/header" title= "{title}"}
{embed="___includes/menu" }

<div id="newsslider">
<div class="royalSlider rsDefault visibleNearby pad-bottom">
{news_slideshow}
	<div class="rsImg">{url}</div>
	<a class="rsImg" href="{exp:ce_img:pair src="{url}" quality="90" height="1000" allow_scale_larger="no" crop="no" add_dims="no"}{made}{/exp:ce_img:pair}"></a>
{/news_slideshow}
</div>
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
			{!--<div style="overflow:hidden">
				{if submission_url}
				<ul>
				<a target="_blank" href="{submission_url}">{exp:low_replace find="http://" replace=""}{submission_url}{/exp:low_replace}</a>
				</ul>
				{/if}
			</div>--}
			
			<!--data-reveal-id="myModal"-->	
			<ul class="block-grid one-up">
			{exp:playa:children field="submission_members" status="not closed"}
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
			  <dd><a href="#simple1" class="active">Production Notes</a></dd>
			  <dd><a href="#simple2">Contributors</a></dd>
			  <dd><a href="#simple3">Additional Info</a></dd>
			</dl>
			
			<ul class="tabs-content text-black text-medium">
			  <li id="simple1Tab">
		  		<div class="row">
		  			<p>
		  			Printers, Programmers, Manufacturers:<br />
			  		{production}
			  		<a href="{link}">{name}</a>
			  		{/production}
			  		</p>
		  		<div class="row">
		  			<p>
		  			{production_techniques}
		  			{category}:<br /> {type}
		  			{/production_techniques}
		  			</p>
		  		</div>
		  		<div class="row">
		  			<p>
		  			Technical Notes:<br />
		  			{techinical_notes}
		  			</p>
		  		</div>
			  </li>
			  <li id="simple2Tab">
			  	<p>
			  		{submission_credits backspace="2"}
			  		{credit_name} - {credit_role}<br />
			  		{/submission_credits}
			  	</p>
			  </li>
			  <li id="simple3Tab">
			  	<p>{additional_info}</p>
			  </li>
			</ul>
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
	
	<div class="row pad-bottom">
		<div class="eight columns centered dark-tabs">
		</div>
	</div>
</div><!-- Container -->



{/exp:channel:entries}
{embed="___includes/footer"}

