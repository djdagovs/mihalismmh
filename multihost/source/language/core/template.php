<?php
/* 
     // ======================================== \
     // Package: Mihalism Multi Host
     // Version: 5.0.0
     // Copyright (c) 2007, 2008, 2009 Mihalism Technologies
     // License: http://www.gnu.org/licenses/gpl.txt GNU Public License
     // LTE: 1249043233 - Friday, July 31, 2009, 07:27:13 AM CDT -0500
     // ======================================== /
     
     This file contains some language settings that are a part of Mihalism Multi Host but were not able to 
     be placed into template files. In each setting, %s represents a place holder for a value that will 
     be dynamically generated by Mihalism Multi Host; so be careful while editing to not remove them.
     
     Language file index:
		6697 -- Notice to show for
		3384 -- Notice to show for pagination when there is only one page
		3484 -- Previous page button for pagination list
		5475 -- Next page button for pagination list
		7033 -- Pagination inner body
		5834 -- Pagination outer wrapper
		4552 -- Error to be displayed if file links cannot be generated

*/
    
	$mmhclass->lang['6697'] = "<i>Not Installed</i>";
	$mmhclass->lang['3384'] = "Viewing Only Page";
	$mmhclass->lang['3484'] = "<a href=\"%s\">« Previous</a>";
	$mmhclass->lang['5475'] = "<a href=\"%s\">Next »</a>";
	$mmhclass->lang['7033'] = "Page %s of %s • %s";
	$mmhclass->lang['5834'] = "<div class=\"pagination\">%s</div>";
	$mmhclass->lang['4552'] = "Failed to create image links.";


?>