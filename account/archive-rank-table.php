<html>
<head>
<style>
table,th,td
{
border:1px solid black;
border-collapse:collapse;
}
th,td{
	width: 200px;
}
/* tables */
table.tablesorter {
	font-family:arial;
	background-color: #CDCDCD;
	margin:10px 0pt 15px;
	font-size: 8pt;
	width: 100%;
	text-align: left;
}
table.tablesorter thead tr th, table.tablesorter tfoot tr th {
	background-color: #e6EEEE;
	border: 1px solid #FFF;
	font-size: 8pt;
	padding: 4px;
}
table.tablesorter thead tr .header {
	background-image: url(bg.gif);
	background-repeat: no-repeat;
	background-position: center right;
	cursor: pointer;
}
table.tablesorter tbody td {
	color: #3D3D3D;
	padding: 4px;
	background-color: #FFF;
	vertical-align: top;
}
table.tablesorter tbody tr.odd td {
	background-color:#F0F0F6;
}
table.tablesorter thead tr .headerSortUp {
	background-image: url(asc.gif);
}
table.tablesorter thead tr .headerSortDown {
	background-image: url(desc.gif);
}
table.tablesorter thead tr .headerSortDown, table.tablesorter thead tr .headerSortUp {
background-color: #8dbdd8;
}
</style>

<head>

</head>

<body>
{if logged_out}
<a href="{path='signin'}">You must be signed in as an administrator to see this page. Click here to sign in now.</a>
{/if}
{if member_group == "1"}

<table class="tablesorter">
<tr>
	<th>Title</th>
<!--<th>Image</th>		-->
	<th>Rank</th>
	<th>Year</th>  
	<th>Entrant</th>  
	<th>Email</th>  
	<th>Practice</th>  
	<th>Entry Date</th>  
</tr>
{exp:favorites:rank channel="submissions" limit="1000" status="Showcase|Archive" orderby="count" sort="desc" show_expired="yes"}
<tr>
  <td><a href="{title_permalink="show/project/"}">{title}</a></td>
<!--<td><img src="{submission_images limit="1"}{image:250}{/submission_images}"  alt="{title}"></td> -->
  <td>{exp:favorites:entry_count entry_id="{entry_id}"}{favorites_count_public}{/exp:favorites:entry_count}</td>
  <td>0000</td>  
  <td>{author}</td>  
  <td>{username}</td>  
  <td>{exp:playa:children field="submission_practices" limit="1"}{title}{/exp:playa:children}</td>  
  <td>{entry_date format='%d/%m/%y'}</td>  
</tr>
{/exp:favorites:rank}
</table>

{/if}

</body>
</html>
