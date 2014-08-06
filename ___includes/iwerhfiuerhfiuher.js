<script src="/site/javascripts/jquery-1.8.3.js"></script>
<script>



jQuery(function() {


			//GO THROUGH EVERY 

			var members = [
			{exp:channel:entries channel="archive_submissions" category="29" orderby="date" status="showcase" dynamic="yes"}
				{exp:playa:children field="submission_members" status="not closed"}
				"{title}",
				{/exp:playa:children}
			{/exp:channel:entries}
			];


			var uniqueMembers = [];
			$.each(members, function(i, el){
			    if($.inArray(el, uniqueMembers) === -1) uniqueMembers.push(el);
			});


			uniqueMembers.sort();


			console.log(uniqueMembers);


			//$('.uniquemembers').html(uniqueMembers);


var membersNumbers = [
{exp:channel:entries channel="archive_submissions" category="29" orderby="date" status="showcase" dynamic="yes"}
	"{author_ID}",
{/exp:channel:entries}
];
var uniqueMembersNumbers= [];
$.each(membersNumbers, function(i, el){
    if($.inArray(el, uniqueMembersNumbers) === -1) uniqueMembersNumbers.push(el);
});
uniqueMembersNumbers.sort();
console.log(uniqueMembersNumbers);
//$('.uniquemembers').html(uniqueMembersNumbers);








var workplaces = [
{exp:channel:entries channel="archive_submissions" category="29" orderby="date" status="showcase" dynamic="yes"}
	{submission_practices}
	"{title}",
	{/submission_practices}
{/exp:channel:entries}
];
var uniqueWorkplaces = [];
$.each(workplaces, function(i, el){
    if($.inArray(el, uniqueWorkplaces) === -1) uniqueWorkplaces.push(el);
});

$('.uniquemembers').html(uniqueWorkplaces);
//console.log(uniqueWorkplaces);

uniqueWorkplaces = $.map(uniqueWorkplaces, function(n,i){return n.toLowerCase();});
uniqueWorkplaces = $.map(uniqueWorkplaces, function(n,i){return n.replace(/ /g, '-');});



var val_to_replace = '&amp;';
var replace_with = '&';

$.each(uniqueWorkplaces, function (key, val) {
    uniqueWorkplaces[key] = val.replace(val_to_replace, replace_with);
})

//console.log(uniqueWorkplaces)
});

</script>

{exp:channel:entries channel="archive_submissions" category="29" orderby="date" status="showcase" dynamic="yes"}
	{submission_practices}
	"{url_title}",
	{/submission_practices}
{/exp:channel:entries}
<br><br><br>

{exp:channel:entries channel="archive_submissions" category="29" orderby="date" status="showcase" dynamic="yes"}
	{exp:playa:children field="submission_members" status="not closed"}
	"{url_title}",
	{/exp:playa:children}
{/exp:channel:entries}
<br><br><br><br><br>

{exp:channel:entries channel="archive_submissions" category="29" orderby="date" status="showcase" dynamic="yes"}
	{total_results}
{/exp:channel:entries}

<span class="uniquemembers"></span>