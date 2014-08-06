{embed="___includes/header" }
{embed="___includes/menu" }







<div class="container">


<!--—————— Text ——————-->
<div class="row">
	<div class="nine columns ">
		<div class="row">
			<div class="eight columns offset-by-four">
				<h4>Results of your search:</h4>
			</div>
		</div><!-- row -->
	</div><!-- nine -->
	<div class="two columns end link-red text-black text-small">
		<p><a href="{url_title_path="___practices"}">Click here</a> to return to the overall directory</p>
	</div>
</div><!-- Row -->



<div class="row pad-top">
	<div class="nine columns">
		<div class="row">
			<form class="nicer">
				<div class="eight columns offset-by-four">
				{exp:low_search:results query="{segment_3}" limit="100" status="not closed"}
					<p><a href="{title_permalink="___practices/profile/"}">{title}</a></p>
				{if no_results}<p>No search results</p>{/if}
				{/exp:low_search:results}
				</div>
			</form>
		</div><!-- row -->
	</div><!-- nine -->
</div><!-- Row -->


<div class="row pad-top">
	<div class="nine columns">
		<div class="row">
			<form class="nicer">
				<div class="eight columns offset-by-four">
					<label for="practicesearch">Search practices again</label>
					<input type="text" class="expand input-text" id="practicesearch" placeholder="" />
				</div>
			</form>
		</div><!-- row -->
	</div><!-- nine -->
</div><!-- Row -->

{!--
{___s-practice-search}
--}



</div>

{embed="includes/footer"}
