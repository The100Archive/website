{embed="___includes/header"}
{embed="___includes/menu" }
<div class="container">

<!--—————— Text ——————-->
<div class="row pad-bottom pad-top">
	<div class="six columns offset-by-three pad-bottom">
		<h1><a href="{path="show/future"}" class="no_ul">100 Future</a>{exp:channel:category_heading relaxed_categories="yes" channel="submissions"}: {category_name}{/exp:channel:category_heading}</h1>
	</div>
	<div class="three columns link-red text-black text-small">
		<p>The living archive of submitted work, approved by the professional panel. <a href="{path="learn/kb/future"}">Learn More &rarr;</a></p>
	</div>
</div><!-- Row -->

</div>

<ul class="future-gallery">
{exp:channel:entries channel="submissions" limit="25" status="Showcase|Archive" orderby="entry_date" sort="desc" disable="member_data" show_expired="yes"}
{___s-project-summary}
{___s-pagination}
{/exp:channel:entries}
</ul>


{embed="___includes/footer"}
