<script src="/site/javascripts/jquery-1.8.3.js"></script>
<script>


jQuery(function() {
var members = [
{exp:channel:entries channel="archive_submissions" category="28" orderby="date" status="showcase" dynamic="yes"}
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
{exp:channel:entries channel="archive_submissions" category="28" orderby="date" status="showcase" dynamic="yes"}
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

});

</script>





<div style="width: 1000px; display: inline-block;">
<h1>AWARDED PEOPLE AND PLACES 2012</h1>
	<ul class="2013uniquemembers" style="float: left; width: 300px;"></ul>
	<ul class="2013uniqueworkplaces" style="float: left; width: 300px;"></ul>
</div>


