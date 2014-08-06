{embed="___includes/header" }
{embed="___includes/2014menu" }
{embed="___includes/2014menunav" }

<div class="container">

<div class="row pad-top">
	<div class="twelve columns end">
		<h4 style="text-align: center; padding-left: 13px">Directory of Members</h4>
	</div>
	{if logged_out}
	<div class="three columns end link-orange text-black text-small offset-by-four" style="text-align: center;padding-left: 5px;"><br>
	  <a href="{path="signin/join"}">Not a Member?<br />Join Now &rarr;</a>
	</div>
	{/if}
</div><!-- Row -->
<div class="row pad-top">
	<div class="ten columns offset-by-two text-medium text-black" style="padding-left: 13px">
  		<div class="row"> 	
  			<ul class="css-columns">
{exp:low_alphabet:entries parse="inward" status="Judges-id7|Members___Founding-id5|Members___Regular-id8" channel="members" orderby="member_surname|member_firstname" alpha_ignore="the|a" numbers="after" group_numbers="yes" numbers_label="#" disable="categories|member_data|pagination" limit="1000"}

	        	{if low_alphabet_heading}
	        		<li class="pad-top">{low_alphabet_label}</li>
	    		{/if}
	       			<li><a href="{title_permalink="people/profile/"}">{member_firstname} {member_surname}</a></li>
		
{/exp:low_alphabet:entries}
			</ul>
		</div>
	</div>
</div>				
				
</div>


{embed="___includes/footer"}
