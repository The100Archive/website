{if {embed:num_submissions} >= {embed:credits}}
0
{if:else}
{exp:mx_calc expression="{embed:credits} - {embed:num_submissions}"}
{/if}