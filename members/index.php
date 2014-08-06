{embed="includes/header" }

<div class="page-header">
<h1>Directory of Members</h1>
</div>


{s-member-search}

<p><a class="btn" href="{path="members/archive"}">View Archive Members</a> <a class="btn" href="{path="members"}">View All Members</a></p>

<div class="row">
<div class="span12">

{exp:low_alphabet:entries parse="inward" status="not closed" channel="members" orderby="member_surname|member_firstname" alpha_ignore="the|a" numbers="after" group_numbers="yes" numbers_label="#" disable="categories|member_data|pagination"}
  
  {if {exp:playa:total_parents status="Archive"} > 0 || segment_2 == ""}
      {if low_alphabet_heading}
      <h3>{low_alphabet_label}</h3><ol class="unstyled">
      {/if}
      <li><a href="{title_permalink="members/profile/"}">{member_surname}, {member_firstname}</a></li>
      {if low_alphabet_footer}</ol>&nbsp;{/if}
  {/if}

{/exp:low_alphabet:entries}

</div>
</div>


{s-footer}