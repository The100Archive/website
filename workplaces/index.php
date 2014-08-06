{embed="___includes/header" }
{embed="___includes/2014menu" }
{embed="___includes/2014menunav" }

<div class="container">

<div class="row pad-top">
	<div class="six columns end offset-by-three">
		<h4>Directory of Workplaces</h4>
	</div>
</div><!-- Row -->
<div class="row pad-top">
	<div class="ten columns offset-by-two text-regular text-black">
  		<div class="row"> 	
  			<ul class="css-columns">
{exp:low_alphabet:entries parse="inward" channel="practices" orderby="title" alpha_ignore="the|a" numbers="after" group_numbers="yes" numbers_label="#" disable="categories|member_data|pagination" limit="1000"}

	        	{if low_alphabet_heading}
	        		<li class="pad-top">{low_alphabet_label}</li>
	    		{/if}
	       		<li><a href="{title_permalink="workplaces/profile/"}">{title}</a></li>
			
{/exp:low_alphabet:entries}
			</ul>
		</div>
	</div>
</div>	
			




{embed="___includes/2014footer"}
