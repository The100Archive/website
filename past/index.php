{embed="___includes/header title= "100 Past"}
{embed="___includes/2014menu" }
{embed="___includes/2014menunav" nav="past"}

<div class="container">

{exp:channel:entries channel="past_archives" orderby="title" sort="desc"}

<div class="row animated wow fadeInUp" data-wow-delay="0.1s" style="visibility: hidden; margin-top: 4%; margin-bottom: 2%;padding-left: 10px;">
		<div class="eight columns centered bg-dark square" style="background-image: url({pg_archive_background_image}{url}{/pg_archive_background_image}); padding-left: 0px;">
			<div class="bg-dark-fade square">
				<div class="eight columns centered text-center">
					<div>

						<h2 style="padding-top: {if '{count}'== '1'}240px{if:elseif '{count}'== '2'}200px{if:elseif '{count}'== '3'}220px{if:elseif '{count}'== '4'}220px{/if}"><a href="{title_permalink='past/show'}" class="archive-year-title">{title}</a></h2>
						—<br>
							<a href="{title_permalink='past/show'}"><p style="opacity: 0.8;">“{intro_quote}”</p></a>
							<p style="opacity: 1;" class="text-small text-black" style="width: 100%; text-align: center;">{intro_quote_attribution}</p>
					</div>
			</div>
	</div>
</div>
</div>

{/exp:channel:entries}

</div>
<br><br><br>
<div class="container">		


{embed="___includes/2014footer"}
</div>
