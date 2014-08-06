{embed="___includes/header" title="Archive Review - Create Your Shortlist"}
{embed="___includes/2014menu"}

<div class="container pad-top bg-dark">
<div class="row pad-top">
<div class="three columns centered">
		<div class="row">
			<div class="five columns centered">
				<img src="/site/images/100DesignArchive-logo-smallsizes-white.png" alt="100 Design Archive small logo">
			</div>
		</div>
</div>
</div>
</div>

<div class="container pad-top bg-dark">
<div class="row pad-top pad-bottom text-grey text-center">
<h1 class="inline">Create Your Shortlist: </h1>
<ul class="inline">
<li class="text-large"><a href="" class="link-blue" data-reveal-id="process" data-animation="fade" data-animationspeed="300">Process</a></li>
<li class="text-large">|</li>
<li class="text-large"><a href="" class="link-red" data-reveal-id="criteria" data-animation="fade" data-animationspeed="300">Criteria</a></li>
</ul>
{if logged_out}
<p class="text-small pad-top-s">
<a href="{path='signin'}" class="no_ul">You must be signed in to create your shortlist. Click here to sign in now.</a>
<p>
{/if}
</div>

<div class="row pad-top">
<div class="eleven columns centered">
<ul class="block-grid five-up">
{exp:channel:entries channel="submissions" status="Showcase|Archive" limit="1000" orderby="title" sort="asc" disable="member_data" show_expired="yes"}
<li>
<a href="{title_permalink="show/project-modal/"}" class="modalshow">
<img src="{submission_images limit="1"}{image:250}{/submission_images}"  alt="{title}">
</a>
<!--<h2 class="text-small text-white">{title}</h2>-->
{if member_group == "9" OR member_group == "1"}
{exp:favorites:saved entry_id="{entry_id}"}
   
    {if not_saved}
        <span class="shortlist">
<a class="favorites_save_full" href="{permalink="forms/favorite-add/"}"><img class="bg-dark" src="/site/images/n.png" alt="n" width="20" height="20" /></a>
<a class="favorites_save" style="display:none;" href="{permalink="forms/favorite-add/"}"><img class="bg-dark" src="/site/images/n.png" alt="n" width="20" height="20" /></a>
<a class="favorites_delete" style="display:none;" href="{permalink="forms/favorite-add"}/delete/"><img class="bg-dark" src="/site/images/y.png" alt="n" width="20" height="20" /></a>
            <span class="favorites_status text-small" style="height: 20px;"></span>
        </span>
    {/if}
    {if saved}
        <span class="shortlist">
<a class="favorites_save" style="display:none;" href="{permalink="forms/favorite-add/"}"><img class="bg-dark" src="/site/images/n.png" alt="n" width="20" height="20" /></a>
<a class="favorites_delete" href="{permalink="forms/favorite-add"}/delete/"><img class="bg-dark" src="/site/images/y.png" alt="n" width="20" height="20" /></a>
            <span class="favorites_status text-small" style="height: 20px;"></span>
        </span>
    {/if}
{/exp:favorites:saved}
    {/if}

</li>
{/exp:channel:entries}
</ul>
</div>
</div><!-- Row -->
</div><!-- container -->

{if logged_in}
<div class="container pad-top bg-dark">
<div class="row pad-top pad-bottom text-grey text-center">
<a class="button large orange hover-green text-black" href="{path="account/archive-shortlist"}">Next: Finalise Your Selection</a>
<p class="text-small pad-top">Don't worry! You'll be able to come back to this page if you need to.</p>
</div>
</div>
{/if}


<div id="criteria" class="reveal-modal bg-red large">
	<h2 class="text-white"><b>Criteria</b></h2>
	<p>The selection seeks to reflect not only work of quality and distinction but work that is reflective of our society, culture and circumstances. Eligible projects may be distinguished by their ideas and beauty; their relevance and context; their invention or craft; simplicity or complexity; ambition or confidence; they may be selected because they chart current trends and tendencies; or they make simply mark a “moment in time” a high point or a low point; or a shift in practice and thinking.
		</p>
	<p>There is no fixed number of submissions that you should choose: there is no requirement to choose 100; your selection can be more or less than that. Your selection will be collated with that of the other Archive Panel members to determine the final tally.</p>
	<a class="close-reveal-modal no_ul">&#215;</a>
</div>

<div id="process" class="reveal-modal bg-blue large">
	<h2 class="text-white"><b>Process</b></h2>
	<p>The process has three parts: Shortlist, Select and Comment. This page is where you can assemble your shortlist.</p>
	<p><br />Save projects to your shortlist by clicking on the circle just below each one. Undoing your selection is easy: just click again. Your shortlist will be updated as you go &ndash; you can navigate to other pages without losing it.</p>
		<img src="/site/images/100shortlist1.gif" alt="shortlistguide"/>
	<p><br /><br />Preview project images by clicking on the thumbnail – they may take a moment to load, so please be patient. If you would like to see more information about any project, just click the <i>Details</i> button below the title.</p>
			<img src="/site/images/100shortlist3.gif" alt="shortlistguide"/>
	<p><br /><br />Once you are happy with your shortlist, click the link at the bottom of the page. You will be able to review your selection before submitting it. </p>
	
	
	<a class="close-reveal-modal no_ul">&#215;</a>
</div>


<script type="text/javascript">
    $(document).ready(function() {
        $('a.favorites_save') .click (function() {
            event.preventDefault();
            var link = $(this).attr('href')
            $(this).siblings('.favorites_status').load(link, function() {
                    $(this).siblings('.favorites_delete').show();
                });
            $(this).hide();
        });
        $('a.favorites_save_full') .click (function() {
            event.preventDefault();
            var link = $(this).attr('href')
            $(this).siblings('.favorites_status').load(link, function() {
                    $(this).siblings('.favorites_delete').show();
                });
            $(this).hide();
        });
        
        $('a.favorites_delete') .click (function() {
            event.preventDefault();
            var link = $(this).attr('href')
            $(this).siblings('.favorites_status').load(link, function() {
                    $(this).siblings('.favorites_save').show();
                });
            $(this).hide();
        });
    });
</script> 
<script type="text/javascript">
$('a.modalshow').click(function (event) {
    event.preventDefault();
    var $div = $('<div>').addClass('reveal-modal max').appendTo('body'),
        $this = $(this);
    $.get($this.attr('href'), function (data) {
        return $div.empty().html(data).append('').reveal({
            animationspeed: 0,
            animation: 'fade'
        });
    });
});
</script>




{embed="___includes/2014footer"}