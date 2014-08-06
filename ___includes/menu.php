{!--<ul>
<li>Subscription: {exp:tidy_credits:subscription member_id="{zoo_member_id}"} days remaining</li>
<li>Credits: {exp:tidy_credits:credits member_id="{zoo_member_id}"}</li>
<li>Submissions: {exp:tidy_credits:submissions member_id="{zoo_member_id}"}</li>
<li>Credits Available: {exp:tidy_credits:credits_available member_id="{zoo_member_id}"}</li>
<li>Can submit a project (1 or 0): {exp:tidy_credits member_id="{zoo_member_id}"}</li>
</ul>
--}


<div class="container hide-on-phones">
	<div class="row pad-bottom">
	<div class="text-menu">
			<div class="three columns">
					<div class="row">
						<div class="five columns offset-by-three">
{if logged_out}<a class="no_ul" id="show-home">{/if}
{if logged_in}<a href="{path="account"}"class="no_ul">{/if}
<img src="/site/images/100DesignArchive-logo-smallsizes.png" alt="100 Design Archive small logo"></a>

						</div>
					</div>			
				</div>
			<div class="three columns text-menu">
				<a href="{path="show/future"}" class="link-purple">Future</a> / 
				<a href="{path="now"}" class="link-orange">Now</a> / 
				<a href="" class="link-blue" data-reveal-id="100past" data-animation="fade" data-animationspeed="300">Past</a>
			</div>
			<div class="three columns end text-menu">
				<a href="{path="learn"}" class="link-red">Learn More</a>
				{if logged_out} / <a href="{path="signin/join"}" class="link-orange">Join Now</a>{/if}
			</div>
	</div>
	</div><!-- Row -->
{if logged_out}
	<div class="signed-out">
		<ul class="nav-bar">
			<li>
				<a href="{path="signin"}" class="main text-orange">Sign In <span class="glyph social">x</span></a>
			</li>
		</ul>
	</div>
{/if}
{if logged_in}
<div class="signed-in">
	<ul class="nav-bar">
		<li class="has-flyout">
			<a class="main text-orange">{exp:zoo_visitor:details}{visitor:member_firstname} {visitor:member_surname}{/exp:zoo_visitor:details}</a>
			<a href="" class="flyout-toggle"><span> </span></a>
			<div class="flyout right bg-orange">
			<span class="nub"></span>
				<ul>
					<li><a href="{path="account"}" class="full-width no-arrow small orange button hover-black text-left">
					<span class="glyph social">x &nbsp;</span>Your Account</a></li>
					
					<li><a href="{path="account/subscriptions"}" class="full-width no-arrow small orange button hover-black text-left">
					<span class="glyph general">a &nbsp;</span>Subscriptions{if "{exp:tidy_credits:subscription member_id="{zoo_member_id}"}" > 0}: {exp:tidy_credits:subscription member_id="{zoo_member_id}"} days remain{if:elseif "{exp:tidy_credits:credits_available member_id="{zoo_member_id}"}" > 0}: {exp:tidy_credits:credits_available member_id="{zoo_member_id}"} credit(s) left{/if}
					</a></li>

					<li><a href="{path="learn/kb"}" class="full-width no-arrow small orange button hover-black text-left">
					<span class="glyph general-enclosed">? &nbsp;</span>Knowledge Base</a></li>
					
					<li><a href="{if "{exp:tidy_credits member_id="{zoo_member_id}"}" > 0}{path="account/add-project"}{if:else}{path="account/subscriptions"}{/if}" class="full-width no-arrow small orange button hover-green text-left">
					<span class="glyph general">d &nbsp;</span>Submit a Project</a></li>

					<li><a id="Intercom" href="mailto:e83e95fedd931d2be0740104d3bb598a58f0db27@incoming.intercom.io" class="full-width no-arrow small orange button hover-black text-left">
					<span class="glyph social">w &nbsp;</span>Feedback / Support</a></li>
					
					<li><a href="{path="logout"}" class="full-width no-arrow small orange button hover-orange text-left">
					&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Sign Out &rarr;</a></li>

					
				</ul>
			</div>
		</li>
		<li><a href="{if "{exp:tidy_credits member_id="{zoo_member_id}"}" > 0}{path="account/add-project"}{if:else}{path="account/subscriptions"}{/if}"><span class="glyph general">d</span></a></li>
	</ul>
</div>
{/if}

</div>

<div class="container bg-dark pad-top pad-bottom show-on-phones">
Mobile site is under development :)
</div>

<div class="hide-home" style="width:100%;height: 100%;position:fixed;z-index:39;{if segment_1==""}{if:else}display:none;{/if}" id="cover" ></div>
<div class="full-window bg-dark-fade" {if segment_1==""}{if:else}style="display:none"{/if} id="home">
<div class="container">
<div class="row pad-bottom cancel-min-width">
<div class="four columns centered"><img src="/site/images/100DesignArchive-logo-white.png" alt=""></div>
</div> 
<div class="row pad-top cancel-min-width">
<p class="text-center box-text">See the <span class="link-purple"><a {if segment_1==""}href="" class="hide-home"{if:elseif segment_2=="future"}href="" id="hide-home"{if:else}href="{path="show/future"}"{/if}>Future</a></span>, the <span class="link-blue"><a href="" data-reveal-id="100past" data-animation="fade" data-animationspeed="300">Past</a></span>, what's happening <span class="link-orange"><a href="/now">Now</a></span>, <span class="link-red"><a href="{path="learn"}">Learn More</a></span> or <br /><br /><a href="{path="signin/join"}" class="large button white hover-orange">Join Now</a></p>
</div>

<div class="row pad-top cancel-min-width">
<div class="two columns offset-by-three">
<a href="" data-reveal-id="showvid" data-animation="fade" data-animationspeed="300" class="no_ul"><img src="/site/images/video.jpg" alt="" /></a>
</div>
<div class="six columns end"><p><br /><a href="" data-reveal-id="showvid" data-animation="fade" data-animationspeed="300" class="no_ul">&laquo; Watch the 2-minute introduction</a></p></div>
</div>

</div>
</div>