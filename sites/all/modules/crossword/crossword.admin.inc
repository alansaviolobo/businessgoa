<?php

function crossword_add_form($form_state)
{
	$form['crossword_name'] = array(
		'#type' => 'textfield',
		'#title' => t('Title'),
		'#description' => t('Enter the title of the crossword.'),
		'#size' => 25
	);

	$form['crossword_description'] = array(
		'#type' => 'textarea',
		'#title' => t('Description'),
		'#description' => t('Enter a description for this crossword.'),
	);

	$form['crossword_width'] = array(
		'#type' => 'textfield',
		'#title' => t('Width'),
		'#description' => t('Enter the width of this crossword.'),
		'#size' => 3
	);

	$form['crossword_height'] = array(
		'#type' => 'textfield',
		'#title' => t('Height'),
		'#description' => t('Enter the height of this crossword.'),
		'#size' => 3
	);

	$form['crossword_submit'] = array(
		'#type' => 'submit',
		'#value' => t('Create new crossword'),
	);

	return $form;
}

function crossword_add_form_validate($form, $form_state)
{
	preg_match('/^[a-zA-Z0-9 ]+$/', $form_state['values']['crossword_name']) or 
		form_set_error('crossword_name', t('Please specify a valid name'));
	preg_match('/^[a-zA-Z0-9 ]+$/', $form_state['values']['crossword_name']) or 
		form_set_error('crossword_name', t('Please specify a valid name'));
	preg_match('/^[a-zA-Z0-9 ]+$/', $form_state['values']['crossword_name']) or 
		form_set_error('crossword_name', t('Please specify a valid name'));
	preg_match('/^[a-zA-Z0-9 ]+$/', $form_state['values']['crossword_name']) or 
		form_set_error('crossword_name', t('Please specify a valid name'));

}

function crossword_add_form_submit($form, $form_state)
{
var_dump($form_state);
	//db_query("INSERT INTO {crosswords} VALUES (0, '%s', '%s', '%s')", 1, 2, 3);
	drupal_set_message(t('the crossword was successfully added'));
}

function crossword_clue_add_form($form_state)
{
	$form['crossword_id'] = array(
		'#type' => 'textfield',
		'#title' => t('Crossword Id'),
		'#description' => t('Enter the id of the crossword.'),
		'#size' => 3
	);

	$form['crossword_clue_clue'] = array(
		'#type' => 'textfield',
		'#title' => t('Clue Description'),
		'#description' => t('Enter a description for this crossword.'),
	);

	$form['crossword_clue_sign'] = array(
		'#type' => 'radios',
		'#title' => t('Direction'),
		'#description' => t('Enter the direction of this crossword clue.'),
		'#options' => array(t('Horizontal'), t('Vertical'))
	);

	$form['crossword_clue_xpos'] = array(
		'#type' => 'textfield',
		'#title' => t('X Position'),
		'#description' => t('Enter the X position of this crossword clue.'),
		'#size' => 3
	);

	$form['crossword_clue_ypos'] = array(
		'#type' => 'textfield',
		'#title' => t('Y Position'),
		'#description' => t('Enter the Y position of this crossword clue.'),
		'#size' => 3
	);

	$form['crossword_clue_submit'] = array(
		'#type' => 'submit',
		'#value' => t('Create new crossword clue'),
	);

	return $form;
}

function crossword_clue_add_form_validate($form, $form_state)
{
	empty($_FILES['files']['tmp_name']['datafile']) and 
		form_set_error('datafile', t('Please specify a csv file to upload'));
	$form_values['values']['table'] <> 'products' and $form_values['values']['table'] <> 'product_categories' and
		form_set_error('datafile', t('form corrupted. please reload'));
}

function crossword_clue_add_form_submit($form, $form_state)
{
	$file = fopen($_FILES['files']['tmp_name']['datafile'], 'r');
	list($count, $table) = array(0, $form_values['values']['table']);
	while ($line = fgetcsv($file))
		db_query("INSERT INTO {".$table."} VALUES ('" . implode("','", $line) . "')") and $count++;
	fclose($file);
	drupal_set_message(t( $count . ' new items were successfully added'));
}
