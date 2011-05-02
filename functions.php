<?php

/**
 * Make theme available for translation
 * Translations can be filed in the /languages/ directory
 */
load_theme_textdomain('lessonpie', TEMPLATEPATH.'/languages');

$locale = get_locale();
$locale_file = TEMPLATEPATH."/languages/$locale.php";
if (is_readable($locale_file))
{
	require_once($locale_file);
}
 
// Get the page number
function get_page_number()
{
	if (get_query_var('paged'))
	{
		print ' | '.__('Page ', 'lessonpie').get_query_var('paged');
    }
}

?>