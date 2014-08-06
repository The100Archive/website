{exp:channel:entries channel="past_archives" sort="asc"}
{embed="___includes/header" title= "Archive {title}"}
{/exp:channel:entries}

{embed="___includes/2014menu" }
<script>

							//FILTERING DROPDOWN VALUE GETTING

							$(function() {
							//create array from looping through all projects and outputting the designers name 


							//{exp:channel:entries channel="past_archives" sort="asc"}

							//var archiveMembers = [

							//		{exp:playa:children field="pg_projects" status="not closed" disable=""}
							//		"{author}",
							//		{/exp:playa:children}
							//];

							//var membersID = [

							//		{exp:playa:children field="pg_projects" status="not closed" disable=""}
							//		"{author_id}",
							//		{/exp:playa:children}
							//];
							//{/exp:channel:entries}

							// IF ARCHIVE 2013 USE THESE ARRAYS
							var members2013 = 
							["Adam Gallacher","Amie Norman","Billy Brady","Bobby Tannam","Brian Heffernan","Brian Nolan","Brian O’Tuama","Bridget Butler","Catherine Robertson","Cian McKenna","Clare Lynch","Conor Clarke","Conor Nolan","Dan Flynn","Daniel Morehead","Danielle Townsend","David Donohoe","David Smith","David Wall","Declan Stone","Eamon Spelman","Emma Conway","Evan McGuinness","Fiona O’Leary","Freddie Stevens","Garech Stone","Garrett Bennis","George Beattie","Holly Brennan","James Delaney","James Kelleher","Jamie Helly","Johnny Kelly","Kathryn Wilson","Keith Byrne","Kenneth Deegan","Kim Robinson","Lara Hanlon","Marcus Swan","Max Phillips","Mel O’Rourke","Naoise Ó Conchubhair","Nathan Somers","Nik Dillon","Oran Day","Patrick Mullen","Paul Gately","Paul Guinan","Paul McBride","Paula McEntee","Peter Maybury","Rachel Kerr","Rocky Grennell","Ronan Devlin","Rory Bradley","Rory McCormick","Rory Simms","Rossi McAuley","Ruza Leko","Sally Caulwell","Sarah Fox","Sarah Moloney","Scott Burnett","Seán Mongey","Shane Delahunty","Simon Roche","Simon Sweeney","Sinéad McAleer","Stephen McCarthy","Steve O Connell","Susan Murphy","Wayne Daly"];

							var memberURL2013 = 
							["adam-gallacher","amie-norman","billy-brady","bobby-tannam","brian-heffernan","brian-nolan","brian-otuama","bridget-butler","catherine-robertson","cian-mckenna","clare-lynch","conor-clarke","conor-nolan","dan-flynn","daniel-morehead","danielle-townsend","david-donohoe","david-smith","david-wall","declan-stone","eamon-spelman","emma-conway","evan-mcguinness","fiona-oleary","freddie-stevens","garech-stone","garrett-bennis","george-beattie","holly-brennan","james-delaney","james-kelleher","jamie-helly1","johnny-kelly","kathryn-wilson","keith-byrne","kenneth-deegan","kim-robinson","lara-hanlon","marcus-swan","max-phillips","mel-orourke","naoise-conchubhair","nathan-somers","nik-dillon","oran-day","patrick-mullen","paul-gately","paul-guinan","paul-mcbride","paula-mcentee","peter-maybury","rachel-kerr","rocky-grennell","ronan-devlin","rory-bradley","rory-mccormick","rory-simms","rossi-mcauley","ruza-leko","sally-caulwell","sarah-fox","sarah-moloney","scott-burnett","sean-mongey","shane-delahunty","simon-roche","simon-sweeney","sinead-mcaleer","stephen-mccarthy","steve-o-connell","susan-murphy","wayne-daly"];

							var workplaces2013 = ["Limerick School of Art & Design", "Atelier David Smith", "Dynamo", "a–ok", "AAD", "Creative Inc", "Detail. Design Studio", "Conor & David", "Pentagram", "HMH Publishing", "Freelance", "TypeGroup", "Jein Devlin", "MRCS1", "David Donohoe studio", "Origin Design", "Language Communications", "Slater Design", "loft27design", "Nexus Productions", "Imagination", "designworks", "Ogilvy & Mather", "Nathan Somers Design", "Design Factory", "Norman-Hulzink", "Danielle Townsend Design", "Spin", "The Stone Twins", "Motif", "Peter Maybury"];

							var workplacesURL2013 = ["limerick-school-of-art-design", "atelier-david-smith1", "dynamo", "aok", "aad1", "creative-inc", "detail-design-studio", "conor-david", "pentagram", "hmh-publishing", "freelance", "typegroup", "jeindevlin", "mrcs1", "david-donohoe-studio", "origin-design", "language-communications", "slater-design", "loft27design", "nexus-productions", "imagination", "designworks", "ogilvy-mather", "nathan-somers-design", "design-factory", "norman-hulzink", "danielle-townsend-design", "spin", "the-stone-twins", "motif", "peter-maybury"];

							// IF ARCHIVE 2012 USE THESE ARRAYS
							// IF ARCHIVE 2011 USE THESE ARRAYS
							// IF ARCHIVE 2010 USE THESE ARRAYS


							var clientContext = [
								{exp:channel:categories category_group="1" style="linear"}
								    "{category_name}",{/exp:channel:categories}
							];


							var disciplines = [
								{exp:channel:categories category_group="2" style="linear"}
								    "{category_name}",{/exp:channel:categories}
							];


							//console.log(workplaces);
							//workplaces = $.map(workplaces, function(n,i){return n.toLowerCase();});

																
							//remove the duplicates from the array
							//var uniqueNames = [];
							//$.each(archiveMembers, function(i, el){
							//    if($.inArray(el, uniqueNames) === -1) uniqueNames.push(el);
							//});

							//var uniqueIDs = [];
							//$.each(membersID, function(i, el){
							//    if($.inArray(el, uniqueIDs) === -1) uniqueIDs.push(el);
							//});
	

							//for each name in the array, output it as an option 


							var memberDropdown = $('#filters');
							var index;
										for (index = 0; index < members2013.length; ++index) {
									    memberDropdown.append('<option value=".' + memberURL2013[index] + '">' + members2013[index] + '</option>');
							
									}
									memberDropdown.prepend('<option value="*">Designer</option>');


							var workplaceDropdown = $('#workplace-filter');
							var workplaceIndex;
										for (workplaceIndex = 0; workplaceIndex < workplaces2013.length; workplaceIndex++) {
											workplaceDropdown.append('<option value=".' + workplacesURL2013[workplaceIndex] + '">' + workplaces2013[workplaceIndex] + '</option>');
										};
										workplaceDropdown.prepend('<option value="*">Workplace</option>');


										

							var clientContextDropdown = $('#clientContext-filter');
							var clientContextIndex;
										for (clientContextIndex = 0; clientContextIndex < clientContext.length; clientContextIndex++) {
											clientContextDropdown.append('<option value=".' + clientContext[clientContextIndex] + '">' + clientContext[clientContextIndex] + '</option>');
										};
										clientContextDropdown.prepend('<option value="*">Client Context</option>');

							var disciplineDropdown = $('#disciplineDropdown-filter');
							var disciplioneIndex;
										for (disciplioneIndex = 0; disciplioneIndex < disciplines.length; disciplioneIndex++) {
											disciplineDropdown.append('<option value=".' + disciplines[disciplioneIndex] + '">' + disciplines[disciplioneIndex] + '</option>');
										};
										disciplineDropdown.prepend('<option value="*">Discipline</option>');

							});



							</script>

							


{exp:channel:entries channel="past_archives" sort="asc"}
<!--—————— Text ——————-->

<div class="container mob pad-top">

				<div class="bg-dark-light row " style="padding-left: 10px;">
						<div class="eight columns centered text-center pad-top-xl">
							<h2 class="archive-title">{title}</h2>
						</div>
				</div>
				<div class="bg-dark-light row pad-top" style="padding-left: 10px;">
					<div class="seven columns archive-intro-page" style="margin: 0 auto; float: none; width: 60%;">
						<p class="text-small text-black" style="width: 100%; text-align: center;">Introduction</p>
						{pg_intro}
						{pg_text}
						<!-- {embed="past_dev/gather"} -->
					</div>
					<div style="margin-top: 60px;">
						<div class="two columns offset-by-two" style="margin-left: 21%;">

							<ul class="text-blue">
								<li>Archive Panel</li>
								{exp:playa:children field="pg_archive_panel" status="not closed"}
								<li><a href="{title_permalink="people/profile"}">{member_firstname} {member_surname}</a></li>
								{/exp:playa:children}
							</ul>
						</div>
						<div class="two columns" style="float: left;">
							
							<ul class="text-blue">
								<li>Professional Panel</li>
								{exp:playa:children field="pg_professional_panel" status="not closed"}
								<li><a href="{title_permalink="people/profile"}">{member_firstname} {member_surname}</a></li>
								{/exp:playa:children}
							</ul>
						</div>
											<div class="clearfix"></div>
											<br>
											<hr style="width: 79%; border-color: #646464; margin: 0 auto; opacity: 0.4; margin-left:12%;">
											<br>
											<br>
						<p class="text-small text-grey" style="width: 100%; text-align: center;">Projects Archive</p>
						<p class="text-small text-grey" style="width: 100%; text-align: center;">
						{if '{segment_3}' == '2013-archive'}
							Filter By:	<select id="filters"></select>
										<select id="workplace-filter"></select>
										<select id="clientContext-filter"></select>
										<select class="disc" id="disciplineDropdown-filter"></select>
									</p>
						{if:else}
						{/if}
					</div>
				</div>
			
				<div class="row bg-dark-light pad-top pad-bottom gap-bottom text-black" style="padding-left: 10px;">
					<div class="ten columns centered pad-top link-black">
						<ul id="archive-container" class="block-grid four-up mobile">

							{exp:playa:children field="pg_projects" status="not closed" limit="100" disable="" orderby="random"}

							<?php
								$workplace = "{submission_practices limit='1'}{url_title}{/submission_practices}";
								$workplace = strtolower($workplace);
								$workplace = preg_replace("/[\s-]+/", " ", $workplace);
								$workplace = preg_replace('/[.,]/', '', $workplace);
								$workplace = preg_replace("/[\s_]/", "-", $workplace);

							?>

							<li class="item {author_id} {categories}{category_name} {/categories} <?php echo $workplace ?> {submission_members status='not closed'}{url_title} {/submission_members}"><a href="{title_permalink='past/project/'}">
							<img class="bg-light" src="{submission_images limit="1"}{image:250}{/submission_images}"></a><br>
							<a class="project-homepage-link-title" href="/past/project/{url_title}">{title}</a> 
							{/exp:playa:children}
							  </li>
						</ul>
					</div>
				</div><!-- Row -->
</div>
{/exp:channel:entries}

{embed="___includes/2014footer"}
