<!doctype html>
<html lang="en">
<head>
<title>{if embed:title != ""}{embed:title} - {/if}{site_name}</title>
<meta charset="{charset}">
{if embed:meta != ""}{embed:meta}{/if}
{if embed:description != ""}<meta name="description" content="{embed:description}">{/if}

<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="/interface/css/bootstrap.css" rel="stylesheet" media="screen">
<link href="/interface/css/bootstrap-responsive.css" rel="stylesheet">
<link href="/interface/css/styles.css" rel="stylesheet" type="text/css" media="all">

<!--[if lt IE 9]>
<script src="/interface/js/html5shiv-printshiv.js"></script>
<![endif]-->

{!-- Keep this here, to get SAEF form to work --}
<script src="http://code.jquery.com/jquery-latest.js"></script>


</head>
<body>
<div id="container" class="container">


<header class="masthead">
<div id="utility" class="pull-right"><a href="{path="site/home"}">Home</a> <span class="divider">|</span> <a href="{path="members"}">Directory of Members</a> <span class="divider">|</span> <a href="{path="practices"}">Directory of Practices</a></div>
<a href="{path="site/home"}"><img id="logo" src="/interface/img/template/logo.gif" alt="the 100 Design Archive"></a>
</header>


<nav id="primary">
<ul class="nav clearfix">
  <li class="{if segment_1=="showcase"}active{/if}"><a href="{path="showcase"}">Showcase</a></li>
  <li class="{if segment_1=="archive"}active{/if}"><a href="{path="archive"}">Archive</a></li>
  <li class="{if segment_1=="about"}active{/if}"><a href="{path="about"}">About</a></li>
  <li class="{if segment_1=="login"}active{/if}"><a href="{path="login"}">{if logged_in}My Account{/if}{if logged_out}Login{/if}</a></li>
  </ul>
</nav>

<div id="main" class="row">
<div class="span12">


{if segment_1 == "login"}
{if logged_in}
<nav id="secondary" class="clearfix">
<ul class="nav clearfix">
  <li><a href="{path="login/account"}">Account</a></li>
  <li><a href="{path="login/buy-credits"}">Buy Credits</a></li>
{if "{exp:tidy_credits member_id="{zoo_member_id}"}" > 0}
  <li><a href="{path="login/add-project"}">Submit Project</a></li>
{/if}
  <li><a href="{path="login/profile"}">My Profile</a></li>
  <li><a href="{path="login/groups"}">My Groups</a></li>
{if group_id == "1" || group_id == "6" || group_id == "7"}
  <li><a href="{path="login/reviews"}">Review</a></li>
{/if}
  <li><a href="{path="login/invite"}">Invite</a></li>
  <li><a href="{path="logout"}">Logout</a></li>
  </ul>
</nav>
{/if}
{/if}