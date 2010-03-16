<?php
// $Id$

/**
 * @file
 * Administration page callbacks for the product listing module.
 */

function admin_view_categories($page = 0)
{
	$per_page = 3;
	$result = pager_query(db_rewrite_sql("SELECT * FROM {product_categories}"), $per_page, 0, null);
	$opListing = "<table><tr>
						<th>Id</th>
						<th>Name</th>
						<th>Description</th>
						<th>Thumbnail</th>
						<th>Parent</th>
					</tr>";
	if(!db_affected_rows($result)) $opListing .= "<tr><td colspan=5>No items to display</td></tr>";
	else while ($data = db_fetch_object($result))
		$opListing .="<tr>
						<td>$data->id</td>
						<td>$data->name</td>
						<td>$data->description</td>
						<td>$data->thumbnail</td>
						<td>$data->parent_id</td>
					</tr>";
	$opListing .= "</table>";
	$opPager = theme('pager', $per_page, 1);

	return $opListing . $opPager;
}

function admin_view_products($page = 0)
{
	$per_page = 3;
	$result = pager_query(db_rewrite_sql("SELECT * FROM {products}"), $per_page, 0, null);
	$opListing = "<table><tr>
						<th>Id</th>
						<th>Category</th>
						<th>Name</th>
						<th>Price</th>
						<th>Description</th>
						<th>Merchant</th>
						<th>Thumbnail</th>
						<th>Image</th>
						<th>URL</th>
					</tr>";
	if(!db_affected_rows($result)) $opListing .= "<tr><td colspan=9>No items to display</td></tr>";
	else while ($data = db_fetch_object($result))
		$opListing .="<tr>
						<td>$data->id</td>
						<td>$data->category_id</td>
						<td>$data->name</td>
						<td>$data->price</td>
						<td>$data->description</td>
						<td>$data->merchant</td>
						<td>$data->thumbnail</td>
						<td>$data->image</td>
						<td>$data->url</td>
					</tr>";
	$opListing .= "</table>";
	$opPager = theme('pager', $per_page, 1);

	return $opListing . $opPager;
}

function productlisting_add_form($form_state, $table, $fieldlist)
{
	$form['datafile'] = array(
		'#type' => 'file',
		'#title' => t('Enter a csv containing the relevant details'),
		'#description' => t("the fields [$fieldlist] are expected in that order separated by commas and enclosed by double quotes"),
	);

	$form['submit'] = array(
		'#type' => 'submit',
		'#value' => t('Upload csv and add details'),
	);

	$form['table'] = array(
		'#type' => 'hidden',
		'#value' => $table,
	);

	$form['#attributes'] = array(
		'enctype' => 'multipart/form-data',
	);
	return $form;
}

function productlisting_add_form_validate($form_id, $form_values)
{
	empty($_FILES['files']['tmp_name']['datafile']) and 
		form_set_error('datafile', t('Please specify a csv file to upload'));
	$form_values['values']['table'] <> 'products' and $form_values['values']['table'] <> 'product_categories' and
		form_set_error('datafile', t('form corrupted. please reload'));
}

function productlisting_add_form_submit($form_id, $form_values)
{
	$file = fopen($_FILES['files']['tmp_name']['datafile'], 'r');
	list($count, $table) = array(0, $form_values['values']['table']);
	while ($line = fgetcsv($file))
		db_query("INSERT INTO {".$table."} VALUES ('" . implode("','", $line) . "')") and $count++;
	fclose($file);
	drupal_set_message(t( $count . ' new items were successfully added'));
}
