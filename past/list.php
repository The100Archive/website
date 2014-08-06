{embed="___includes/header" title="100 Past"}
{embed="___includes/menu" }
<div class="container">

<!--—————— Text ——————-->
<div class="row pad-bottom pad-top">
	<div class="six columns offset-by-three pad-bottom">
		<h1><a href="{path="past"}" class="no_ul">100 Past</a>{exp:channel:category_heading relaxed_categories="yes" channel="submissions"}: {category_name}{/exp:channel:category_heading}</h1>
	</div>
	<div class="three columns link-red text-black text-small">
		<p>XXXXXX <a href="{path="learn/kb/past"}">Learn More &rarr;</a></p>
	</div>
</div><!-- Row -->


<div class="row">
	<div class="ten columns centered">
		<ul class="block-grid two-up">
{exp:channel:entries channel="archive_submissions" limit="16" orderby="edit_date" sort="desc" disable="member_data" show_expired="yes"}
			<li>
				<a href="{title_permalink="past/project"}">
					<div class="square" style="background-image: url({submission_images limit="1"}{image}{/submission_images});">
						<div class="row">
							<div class="eight coumns centered">
								<h2 class="text-center">{title}</h2>
							</div>
						</div>
					</div>
				</a>
				<br />
				{exp:playa:children field="past_author" status="not closed"}
				<a href="{title_permalink="people/profile"}">
					<div class="row">
						<div class="two columns offset-by-three">
							{if member_image}
							{exp:imgsizer:size src="{member_image}" width="250" height="250" crop="yes" alt="{title}" class="full-rounded"}
							{if:else}
							<img src="/site/images/user-icons/icon-{entry_date format="%h"}.jpg" alt="{title}" class="full-rounded">
							{/if}
						</div>
						<div class="seven columns end">
							<h4 class="text-small hide-on-phones"><br />{member_firstname} {member_surname}</h4>
							<h4 class="text-small show-on-phones text-center">{member_firstname}<br />{member_surname}</h4>
						</div>
					</div>
				</a>
				{/exp:playa:children}
			</li>
{/exp:channel:entries}
		</ul>
	</div>
</div>


{embed="___includes/footer"}
</div>