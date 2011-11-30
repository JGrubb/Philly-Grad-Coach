<?php

function pgc_preprocess(&$variables) {
	$node = $variables['node'];
	global $user;
	if ($user->uid != 0) {
		if ($node->type == "event") {
			$variables['event_class'] = '';
			if ($node->field_trainer[0]['uid'] == NULL) {
			$variables['event_class'] = 'red';
		} else {
				$num_trainers = $node->field_number_of_trainers[0]['value'];
				$count = count($node->field_trainer);
				if($count < $num_trainers) {
					$variables['event_class'] = 'red';
				} else {
					$variables['event_class'] = 'green';
				}
			}
		return $variables;
		}
	}
}

function pgc_theme($existing, $type, $theme, $path) {
	return array(
		'user_register' => array(
			'arguments' => array('form' => NULL),
			'template'  => 'templates/user-create',
		),
	);
}

function pgc_preprocess_views_view_unformatted__home_listing(&$vars) {
	//dsm($vars);
	/*$vars['classes'] = 'AWERSOME';
	pgc_preprocess_views_view_fields($vars);
  if($vars['count'] < $vars['num_trainers']) {
		$vars['event_class'] = 'red';
	} else {
		$vars['event_class'] = 'green';
	}
	return $vars;*/
	$view = $vars['view'];
	$rows = $vars['rows'];
	
	foreach ($rows as $id => $row) {
		$data = $view->result[$id];
		$event_class = get_the_classes($data->nid);
		$vars['classes'][$id] .= ' ' . $event_class;
	}
}

function get_the_classes($nid) {
	$node = node_load($nid);
	global $user;
	if ($user->uid != 0) {
		$event_class = '';
		if ($node->field_trainer[0]['uid'] == NULL) {
			$event_class= 'red';
		} else {
			$num_trainers = $node->field_number_of_trainers[0]['value'];
			$count = count($node->field_trainer);
			if($count < $num_trainers) {
				$event_class = 'red';
			} else {
				$event_class = 'green';
			}
		}
		return $event_class;
	}
}

function pgc_preprocess_views_view_fields(&$vars) {
	//dsm($vars);
  $vars['num_trainers'] = $fields['field_num_of_trainers_value']->content;
  $vars['count'] = $fields['field_trainer_uid']->content;
  //dsm($vars);
  return $vars;
}

function pgc_preprocess_flag(&$variables) {
	
}