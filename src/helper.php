<?php
/**
 *
 *
 * @package   mod_dribbleshots
 * copyright Siege21.com/Antony Doyle
 * @license GPL3
 */
defined('_JEXEC') or die('Direct Access to this location is not allowed.');
 
$userName = $params->get('username');
$shotCount = $params->get('shotcount');
$jQuery = $params->get('jQuery'); 
$dribCss = $params->get('dribcss'); 
$txtAbove = $params->get('textabove');
$shotsPerRow = $params->get('shotsPerRow');
 // Returns a reference to the global document object
$doc 					= JFactory::getDocument();
 

$doc->addCustomTag('<script src="modules/mod_dribbblr/js/jribble.js"></script>');

if ($dribCss) {
  $doc->addCustomTag('<link href="modules/mod_dribbblr/tmpl/css/dribbleshots.css" media="screen" rel="stylesheet" type="text/css" />');
}