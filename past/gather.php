<script src="/site/javascripts/jquery-1.8.3.js"></script>
<script>


jQuery(function() {
var members = [
{exp:channel:entries channel="archive_submissions" category="29" orderby="date" status="showcase" dynamic="yes"}
	{exp:playa:children field="submission_members" status="not closed"}
	"{url_title} {username}",
	{/exp:playa:children}
{/exp:channel:entries}
];
var uniqueMembers = [];
$.each(members, function(i, el){
    if($.inArray(el, uniqueMembers) === -1) uniqueMembers.push(el);
});
uniqueMembers.sort();


var val_to_replace = '&#8217;';
var replace_with = "’";

$.each(uniqueMembers, function (key, val) {
    uniqueMembers[key] = val.replace(val_to_replace, replace_with);
})


var list = $('.2013uniquemembers'); // create UL
extractResult(uniqueMembers);   // run function and fill the UL with LI's

function extractResult(result){     
    jQuery.each(result, function(index, value) {
        // create a LI for each iteration and append to the UL
        $('<li />', {text: value}).appendTo(list);
    });
}




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

//Convert things into a URL style string for using with masonry
//uniqueWorkplaces = $.map(uniqueWorkplaces, function(n,i){return n.toLowerCase();});
//uniqueWorkplaces = $.map(uniqueWorkplaces, function(n,i){return n.replace(/ /g, '-');});


var val_to_replace = '&amp;';
var replace_with = '&';

$.each(uniqueWorkplaces, function (key, val) {
    uniqueWorkplaces[key] = val.replace(val_to_replace, replace_with);
})

uniqueWorkplaces.sort();

var listWorkplace2013 = $('.2013uniqueworkplaces'); // create UL
extractResultWork(uniqueWorkplaces);   // run function and fill the UL with LI's

function extractResultWork(result){     
    jQuery.each(result, function(index, value) {
        // create a LI for each iteration and append to the UL
        $('<li />', {text: value}).appendTo(listWorkplace2013);
    });
}

//$('.2013uniqueworkplaces').html(uniqueWorkplaces);


var projects = [
{exp:channel:entries channel="archive_submissions" category="29" orderby="date" status="showcase" dynamic="yes" limit="250"}
    "{title}",
{/exp:channel:entries}
];

var val_to_replace = '&amp;';
var replace_with = '&';

$.each(projects, function (key, val) {
    projects[key] = val.replace(val_to_replace, replace_with);
})

var val_to_replace_two = '&#8217;';
var replace_with_two = "’";

$.each(projects, function (key, val) {
    projects[key] = val.replace(val_to_replace_two, replace_with_two);
})

var val_to_replace_three = '&#8216;';
var replace_with_three = "‘";

$.each(projects, function (key, val) {
    projects[key] = val.replace(val_to_replace_three, replace_with_three);
})



//Convert things into a URL style string for using with masonry
//uniqueWorkplaces = $.map(uniqueWorkplaces, function(n,i){return n.toLowerCase();});
//uniqueWorkplaces = $.map(uniqueWorkplaces, function(n,i){return n.replace(/ /g, '-');});


projects.sort();

var listProjects2013 = $('.2013projects'); // create UL
extractResultProject(projects);   // run function and fill the UL with LI's

function extractResultProject(result){     
    jQuery.each(result, function(index, value) {
        // create a LI for each iteration and append to the UL
        $('<li />', {text: value}).appendTo(listProjects2013);
    });
}

//$('.2013uniqueworkplaces').html(uniqueWorkplaces);

});

</script>






<style>

.total-proj-amount {
    display: none;
}

body > div:nth-child(1) > h2 > span:nth-child(1) {
    display: inline-block;
}

</style>

<div style="width: 1000px; display: inline-block;">
<h1>&nbsp;&nbsp;&nbsp;Awarded Projects, People &amp; Places — 2013</h1>
<h2>&nbsp;&nbsp;&nbsp;&nbsp;Projects 2013 — {exp:channel:entries channel="archive_submissions" category="29" orderby="date" status="showcase" dynamic="no" limit="500"}<span class="total-proj-amount">{total_results}</span>{/exp:channel:entries}</h2>
    
    <ul class="2013projects" style="float: left; width: 300px;"></ul>
	<ul class="2013uniquemembers" style="float: left; width: 300px;"></ul>
	<ul class="2013uniqueworkplaces" style="float: left; width: 300px;"></ul>
</div>


