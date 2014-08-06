{___s-login-check}
{embed="___includes/header" }
{embed="___includes/2014menu" }


<div class="container">

<div class="row">
			<div class="nine columns offset-by-two end">
			{if last_segment == "confirmation"}
			<div class="alert-box orange">Great! Your profile has been updated.<a href="" class="close">&times;</a></div>
			{/if}
			</div>
</div><!-- Row -->





{exp:zoo_visitor:update_form return="account/confirmation" class="form-horizontal nicer" error_handling="inline" status="open" }


<div class="row pad-top pad-bottom">
			<div class="three columns">
					<div class="row">
						<div class="six columns offset-by-three">
						{embed="___includes/member-icon" }
						</div>
					</div>			
			</div>






<input type="hidden" name="title" value="{username}">
	
			<div class="five columns">
				<div class="row">
				<div class="control-group">
				  <label class="control-label">Your portrait image</label>
				    <div class="controls">
				        {field:member_image}
				    </div>
				</div>
				</div>

				<div class="row">
				<div class="control-group">
				    <div class="controls">
						<label class="control-label" for="member_firstname"><br />Your first name(s)</label>
				      <input type="text" class="expand input-text" name="member_firstname" id="member_firstname" placeholder="First Name" value="{member_firstname}">
				      {if error:member_firstname}<span class="alert alert-error">{error:member_firstname}</span>{/if}
				    </div>
				</div>
				</div>
				
				<div class="row">
				<div class="control-group">
				    <div class="controls">
					<label class="control-label" for="member_surname">Your surname</label>
				      <input type="text" class="expand input-text" name="member_surname" id="member_surname" placeholder="Surname" value="{member_surname}">
				      {if error:member_surname}<span class="alert alert-error">{error:member_surname}</span>{/if}
				    </div>
				</div>
				</div>
				
				<div class="row">
				<div class="control-group">
				    <div class="controls">
					<label class="control-label" for="member_website">Your website (include http://)</label>
				      <input type="url" name="member_website" class="expand input-text" id="member_website" placeholder="http://" value="{member_website}">
				      {if error:member_website}<span class="alert alert-error">{error:member_website}</span>{/if}
				    </div>
				</div>
				</div>
				
				<div class="row">
				<div class="control-group">
				 <div class="controls">
				  <label class="control-label" for="member_twitter">Your Twitter username (just the part after @)</label>
				      <input type="text"  class="expand input-text" name="member_twitter" id="inputTwitter" placeholder="Twitter Username" value="{member_twitter}">
				      {if error:inputTwitter}<span class="alert alert-error">{error:inputTwitter}</span>{/if}
				    </div>
				</div>
				</div>
</div>
{exp:channel:entries dynamic="no" channel="members" status="not closed" author_id="{zoo_member_id}" }
		<div class="two columns offset-by-one end link-orange text-black text-small">
			<p><a href="{title_permalink="people/profile"}">Click here</a> to see your profile as it is viewed by others.</p>
		</div>
{/exp:channel:entries}

</div>

<div class="row pad-top text-black">
<div class="six columns offset-by-three">
	<h4>Tell us a little more about yourself:</h4>
</div>
<div class="three columns end text-small link-red">
	<p>This information is gathered so that we can create a richer archive that tells the full story of Irish graphic design. <a href="{path="learn/kb/gathering-information"}" >Learn more about how this works &rarr;</a></p>
</div>
</div>
			
<div class="row pad-bottom">
				<div class="row">
					<div class="three columns">
						<div class="row">
							<div class="eight columns offset-by-four text-black">
								<label class="control-label">Currently Working</label>
							</div>
						</div>
					</div>	
						<div class="seven columns end playa-dark text-black">
							<div class="control-group">
								<label>Drag to the right to select</label>
								<div class="controls">{field:member_practice}</div>
								<p class="text-small text-white link-orange"><br />Don&rsquo;t see your workplace on the list? <a href="{path="account/workplace"}">Add it &rarr;</a></p>
							</div>
						</div>
					</div>
				
				<div class="row pad-top">
					<div class="three columns">
						<div class="row">
							<div class="eight columns offset-by-four text-black">
							<label class="control-label">Previously Worked</label>
							</div>
						</div>
					</div>	
						<div class="seven columns end playa-dark text-black">
						<div class="control-group">
							<label>Drag to the right to select</label>
							<div class="controls">{field:member_previous_practices}</div>
															<p class="text-small text-white link-orange"><br />Don&rsquo;t see your workplace on the list? <a href="{path="account/workplace"}">Add it &rarr;</a></p>
							
						</div>
				</div>
				</div>

	<!--		<div class="row">
					<div class="three columns">
						<div class="row">
							<div class="eight columns offset-by-four">
								<label class="control-label"><br />Previously Worked (with roles)</label>
							</div>
						</div>
					</div>	
					<div class="six columns end">				
						<div class="control-group">
							<div class="controls">{field:member_previous_practices_roles}</div>
						</div>
					</div>
				</div>
	-->			
</div>


<div class="row pad-top">
<div class="four columns offset-by-three end">
				<div class="form-actions"><button type="submit" class="xlarge black button hover-orange">Save all changes</button></div>
</div>
</div>

{/exp:zoo_visitor:update_form}

</div>
<br><br><br>

{embed="___includes/2014footer"}
