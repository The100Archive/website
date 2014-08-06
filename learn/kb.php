{embed="___includes/header" }
{embed="___includes/2014menu" }

<div class="container">

		<div class="row pad-top pad-bottom">
			<div class="twelve columns end centered" style="text-align: center;">
				<h1><a href="{path="learn"}" class="no_ul centred">Learn More:</a> Knowledge Base</h1>
			</div>
		</div>

</div><!-- end container -->

<div class="container bg-light mob">
	<div class="row bg-light pad-bottom">
			<div class="three columns pad-top">
			
				<dl class="nice vertical tabs">
{if segment_3 == ""}
		{exp:channel:entries channel="settings" limit="1" dynamic="no" disable="categories|category_fields|member_data|trackbacks"}
			{settings_kb limit="1"}
			<dd><a href="{url_title_path='learn/kb'}" {if last_segment == "kb"}class="active"{/if}>{title}</a></dd>
			{/settings_kb}
			{settings_kb offset="1"}
			<dd><a href="{url_title_path='learn/kb'}" {if last_segment == url_title}class="active"{/if}>{title}</a></dd>
			{/settings_kb}
		{/exp:channel:entries}
{/if}

{if segment_3 != ""}
							{exp:channel:entries channel="settings" limit="1" dynamic="no" disable="categories|category_fields|member_data|trackbacks"}
							{settings_kb}
							<dd><a href="{url_title_path='learn/kb'}" {if last_segment == url_title}class="active"{/if}>{title}</a></dd>
							{/settings_kb}
							{/exp:channel:entries}	
{/if}
				</dl>
							
				<span class="show-on-phones"><br /><br /><hr /></span>
			</div>


{if segment_3 == ""}
			<div class="six columns">
			<h2 class="pad-top">
			{if segment_3 == ""}{exp:channel:entries channel="settings" limit="1" dynamic="no" disable="categories|category_fields|member_data|trackbacks"}{settings_kb limit="1"}{title}{/settings_kb}{/exp:channel:entries}{/if}{if segment_3 != ""}{exp:channel:entries channel="kb" {___s-single-entry-parameters}}{title}{/exp:channel:entries}{/if}
			</h2>
					{exp:channel:entries channel="settings" limit="1" dynamic="no" disable="categories|category_fields|member_data|trackbacks"}
					{settings_kb limit="1"}
{core_structure limit="1"}
<a name="{row_id}"></a>
<h4 class="text-red pad-top">&mdash;{structure_title}</h4>
{structure_text}
{/core_structure}

{core_structure offset="1"}
<a name="{row_id}"></a>
<h5 class="text-red pad-top">&mdash;{structure_title}</h5>
{structure_text}<br />
{/core_structure}
			</div><!-- end six columns -->


			<div class="two columns end pad-top ">
			<ul class="text-small link-red hide-on-phones">
			<li class="text-red">On this page:</li>
			{core_structure}
			<li><a href="#{row_id}">{structure_title}</a>
			{/core_structure}
			</div>	
			
			
			{/settings_kb}
			{/exp:channel:entries}
{/if}

{if segment_3 != ""}
			<div class="six columns">
			<h2 class="pad-top">
			{if segment_3 == ""}{exp:channel:entries channel="settings" limit="1" dynamic="no" disable="categories|category_fields|member_data|trackbacks"}{settings_kb limit="1"}{title}{/settings_kb}{/exp:channel:entries}{/if}{if segment_3 != ""}{exp:channel:entries channel="kb" {___s-single-entry-parameters}}{title}{/exp:channel:entries}{/if}
			</h2>
			
					{exp:channel:entries channel="kb" {___s-single-entry-parameters}}
					{core_structure limit="1"}
					<a name="{row_id}"></a>
					<h4 class="text-red pad-top">&mdash;{structure_title}</h4>
					{structure_text}
					{/core_structure}
					
					{core_structure offset="1"}
					<a name="{row_id}"></a>
					<h5 class="text-red pad-top">&mdash;{structure_title}</h5>
					{structure_text}<br />
					{/core_structure}
			</div><!-- end six columns -->


			<div class="two columns end pad-top">
			<ul class="text-small link-red hide-on-phones">
			<li class="text-red">On this page:</li>
			{core_structure}
			<li class="text-fade"><a href="#{row_id}">{structure_title}</a>
			{/core_structure}
			</div>	
			
			{/exp:channel:entries}
{/if}

	</div><!-- end panel bg-white -->
	</div><!-- end row -->
</div><!-- end container -->


<!-- END PAGE -->
{embed="___includes/2014footer"}
