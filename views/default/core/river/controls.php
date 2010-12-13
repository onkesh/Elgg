<?php
/**
 * Controls on an river item
 * 
 *
 * @uses $vars['item']
 */

$object = $vars['item']->getObjectEntity();

if (isloggedin()) {
	if ($vars['item']->annotation_id == 0) {
		$params = array(
			'href' => '#',
			'text' => elgg_echo('generic_comments:text'),
			'class' => 'elgg-toggle',
			'internalid' => "elgg-toggler-{$object->getGUID()}",
		);
		echo elgg_view('output/url', $params);
		//echo elgg_view('likes/forms/link', array('entity' => $object));
	}
}