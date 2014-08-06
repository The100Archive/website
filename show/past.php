{embed="___includes/header" title="100 Past"}
{embed="___includes/menu" }
<div class="container">

<!--—————— Text ——————-->
<div class="row pad-bottom pad-top">
	<div class="six columns offset-by-three pad-bottom">
		<h1><a href="{path="show/past"}" class="no_ul">Past Archive</a></h1>
	</div>
	<div class="three columns link-red text-black text-small">
		<p>The historical archive of great Irish graphic design. <a href="{path="learn/kb/past"}">Learn More &rarr;</a></p>
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
