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
	preg_match('/^[a-zA-Z0-9]+$/', $form_state['values']['crossword_description']) or 
		form_set_error('crossword_description', t('Please specify a valid description'));
	preg_match('/^[0-9 ]+$/', $form_state['values']['crossword_width']) or 
		form_set_error('crossword_width', t('Please specify a valid width'));
	preg_match('/^[0-9 ]+$/', $form_state['values']['crossword_height']) or 
		form_set_error('crossword_height', t('Please specify a valid height'));
}

function crossword_add_form_submit($form, $form_state)
{
//var_dump($form_state);
	db_query("INSERT INTO {crosswords} 
						VALUES (0,'%s', '%s', '%d', '%d')",
						$form_state['values']['crossword_name'], 
						$form_state['values']['crossword_description'],
						$form_state['values']['crossword_width'],
						$form_state['values']['crossword_height']);
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
		'#description' => t('Enter a description for this clue.'),
	);
	
	$form['crossword_clue_answer'] = array(
		'#type' => 'textfield',
		'#title' => t('Clue answer'),
		'#description' => t('Enter an answer for this clue.'),
	);


	$form['crossword_clue_sign'] = array(
		'#type' => 'radios',
		'#title' => t('Direction'),
		'#description' => t('Enter the direction of this crossword clue. Default is horizontal'),
		'#options' => array(t('Horizontal'), t('Vertical')),
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
preg_match('/^[0-9 ]+$/', $form_state['values']['crossword_id']) or 
form_set_error('crossword_id', t('Please specify a valid crossword id'));
preg_match('/^[a-zA-Z0-9 ]+$/', $form_state['values']['crossword_clue_clue']) or 
form_set_error('crossword_clue_clue', t('Please specify a clue'));
preg_match('/^[a-zA-Z0-9 ]+$/', $form_state['values']['crossword_clue_answer']) or 
form_set_error('crossword_clue_answer', t('Please specify a answer for the clue'));
preg_match('/^[0-9 ]+$/', $form_state['values']['crossword_clue_xpos']) or 
form_set_error('crossword_clue_xpos', t('Please specify a valid XPos'));
preg_match('/^[0-9 ]+$/', $form_state['values']['crossword_clue_ypos']) or 
form_set_error('crossword_clue_ypos', t('Please specify a valid YPos'));
}

function crossword_clue_add_form_submit($form, $form_state)
{
//var_dump($form_state);
	db_query("INSERT INTO {crossword_clues} 
						VALUES (0,'%d', '%s', '%s','%s', '%d','%d')",
						$form_state['values']['crossword_id'], 
						$form_state['values']['crossword_clue_clue'],
						$form_state['values']['crossword_clue_answer'],
						$form_state['values']['crossword_clue_sign'],
						$form_state['values']['crossword_clue_xpos'],
						$form_state['values']['crossword_clue_ypos']);
	drupal_set_message(t('the clue was successfully added to the crossword'));
}
