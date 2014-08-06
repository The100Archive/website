{embed="___includes/header"}
{embed="___includes/menu" }

<!--—————— Text ——————-->


<div class="container now">
{exp:channel:entries channel="news" limit="1"}
			<div class="pad-top row">
				<div class="seven columns offset-by-three link-no-ul pad-top">
					<h1><a href="{title_permalink="now"}">{title}</a></h1>
				</div>
			</div>


{if news_slideshow != ""}
	<div class="row">
		<div class="ten columns offset-by-one">
			<div class="newsslider royalSlider rsMinW pad-top">
				{news_slideshow}
					<a class="rsImg" href="{exp:ce_img:pair src="{url}" width="1400" allow_scale_larger="yes" crop="no" add_dims="no"}{made}{/exp:ce_img:pair}"></a>
				{/news_slideshow}
			</div>
		</div>
	</div>
{/if}

{if news_video != ""}
<div class="row">
	<div class="ten columns offset-by-one">
		<div class="flex-video widescreen vimeo gap-top">
			{news_video}
		</div>
	</div>
</div>
{/if}

			
			<div class="row">
				<div class="two columns offset-by-one">
					<div class="row">
						{exp:playa:children field="news_author" status="not closed"}
								<br />
								<div class="eight columns link-no-ul pad-top">
									<h4 class="text-small hide-on-phones"><a href="{title_permalink="people/profile"}">{member_firstname} {member_surname}</a></h4>
									<h4 class="text-small show-on-phones text-center">{member_firstname}<br />{member_surname}</h4>
						{/exp:playa:children}
									<a href="{title_permalink="now"}">{entry_date format="%d.%m.%Y"}</a>
								</div>
						{exp:playa:children field="news_author" status="not closed"}
								<a href="{title_permalink="people/profile"}">
								<div class="four columns">
									{if member_image}
									{exp:imgsizer:size src="{member_image}" width="250" height="250" crop="yes" alt="{title}" class="full-rounded"}
									{if:else}
									<img src="/site/images/user-icons/icon-{entry_date format="%h"}.jpg" alt="{title}" class="full-rounded">
									{/if}
								</div>
								</a>
						{/exp:playa:children}
					</div>
				</div>
				<div class="six columns end">
					
					<div class="pad-top text-medium text-black">
					{exp:trunchtml chars="500" ending="<a href='{url_title_path="now/entry"}'>Read more</a>"}{news_text}{/exp:trunchtml} 
					
						{!--{if last_segment!="now"}
						<p class="text-fade pad-top"><i>What do you think? Let us know on <a href="https://twitter.com/100archive" target="_blank">Twitter</a> or <a href="https://www.facebook.com/100designarchive" target="_blank">Facebook</a></i></p>
						{/if}--}
					</div>
				</div>
			</div>
			
	



{/exp:channel:entries}





<!-- Comments [if segment] -->

<div class="row pad-top">
<div class="six columns offset-by-three">

<div id="comments">

	
    <p class="text-medium text-white">Comments:</p> 
	
	
    {exp:comment:entries}
	{if no_results}
    	<p class="text-medium text-white pad-bottom">There are no comments, be the first to add one.</p>
    {/if}
    
     <div class="pad-bottom"><div class="text-black text-medium"><p class="">{comment}</p></div>
    	 <span class="">Posted by</span>: <span class="namedate"><a href="{path="/people/profile/"}/{exp:zoo_visitor:details member_id="{author_id}"}{visitor:url_title}{/exp:zoo_visitor:details}">{name}</a></span> | <span class="namedate">{comment_date format="%F %d, %Y"}</span>
     </div>
    {/exp:comment:entries}   
    <hr />  
    
    
    {if logged_in}
    <div class="pad-top">          
    <p class="text-medium text-white">Add a comment:</p>
   
    {exp:comment:form form_class="nicer"} 
              
           
     <label>Message</label>
     <textarea id="comment-content" name="comment" class="expand" cols="" rows="" name="{comment}"></textarea> 

      <input name="submit" type="submit" class="black x-large button" value="Submit" />
    {/exp:comment:form}
    </div>
    {if:else}
    <div class="pad-top text-medium text-white pad-top no_ul ">
    <a class="medium button black hover-orange nicer" href="{path="/signin"}" style="font-weight: bold;">Sign in</a>&nbsp; to leave a comment</a>
    </div>
    {/if}
</div> 

</div>
</div>





{embed="___includes/footer"}
</div>