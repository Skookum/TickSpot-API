<?php //This will delete all of the current projects held within an account. Be very careful before doing this as the projects will not able to to be retrieved. There are no selectors on this yet so every project will be removed from the account. Please make sure you use use the 'get all projects' first if you want to back up the information held within the projects. 
$d = tickspot::delete_all_projects(); echo $d; ?>