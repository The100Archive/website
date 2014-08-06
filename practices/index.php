{embed="includes/header" }

<div class="page-header">
<h1>Directory of Practices</h1>
</div>

{s-practice-search}

<div class="row">
<div class="span12">
{exp:low_alphabet:entries parse="inward" channel="practices" orderby="title" alpha_ignore="the|a" numbers="after" group_numbers="yes" numbers_label="#" alpha_filter="{segment_3}" disable="categories|member_data|pagination"}

      {if low_alphabet_heading}
        <h3>{low_alphabet_label}</h3>
        <ol class="unstyled">
      {/if}
        <li><a href="{title_permalink="practices/profile/"}">{title}</a></li>
      {if low_alphabet_footer}
        </ol>&nbsp;
      {/if}

{/exp:low_alphabet:entries}
</div>
</div>

{s-footer}