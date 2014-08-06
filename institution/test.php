{embed="___includes/header"}
{embed="___includes/menu" }

<!--—————— Text ——————-->





{exp:channel:entries channel="submissions"}
    {exp:vmg_nested:playa:children prefix="people" field="submission_members" entry_id="{entry_id}"}
        wooptidoo
        {if no_parents} no parent {/if}
    {/exp:vmg_nested:playa:children}
{/exp:channel:entries}




{embed="___includes/footer"}
