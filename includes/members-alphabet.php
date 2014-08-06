{exp:low_alphabet:entries parse="inward" channel="members" orderby="title" alpha_ignore="the|a" numbers="after" group_numbers="yes" numbers_label="#" alpha_filter="{segment_3}" disable="categories|member_data|pagination"}
 
  {if {exp:playa:total_parents status="Archive"} > 0 || segment_2 == ""}
    <li>
      {if low_alphabet_heading}
        <h3>{low_alphabet_label}</h3>
        <ol class="unstyled">
          <li>
      {/if}

{if '{exp:playa:total_parents channel="submissions" status="not Archive"}' > 0}{exp:playa:total_parents channel="submissions" status="not Archive"}{/if}

           <a href="{title_permalink="members/profile/"}">{title}</a>
      {if low_alphabet_footer}
          </li>
        </ol>&nbsp;
      {/if}
    </li>
  {/if}
  {if count == total_results}</ol>{/if}
{/exp:low_alphabet:entries}