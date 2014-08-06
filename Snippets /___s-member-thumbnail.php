<li>
	<a href="{title_permalink="people/profile"}">
	<div class="row">
		<div class="four columns">
			{if member_image}
			{exp:imgsizer:size src="{member_image}" width="250" height="250" crop="yes" alt="{title}" class="full-rounded"}
			{if:else}
			<img src="/site/images/user-icons/icon-{entry_date format="%h"}.jpg" alt="{title}" class="full-rounded">
			{/if}
		</div>
		<div class="eight columns end">
			<h4 class="text-small hide-on-phones"><br />{member_firstname} {member_surname}</h4>
			<h4 class="text-small show-on-phones text-center">{member_firstname}<br />{member_surname}</h4>
		</div>
	</div>
	</a>
</li>
