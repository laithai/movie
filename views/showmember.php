	<?php

	foreach ($members as $member){
	printf($member['name']);
	printf('<img src="%s">',base_url().'/'.$member['picture']);

	}
	?>