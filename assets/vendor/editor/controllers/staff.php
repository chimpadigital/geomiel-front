<?php

/*
 * Example PHP implementation used for the index.html example
 */

// DataTables PHP library
include( "../lib/DataTables.php" );

// Alias Editor classes so they are easy to use
use
	DataTables\Editor,
	DataTables\Editor\Field,
	DataTables\Editor\Format,
	DataTables\Editor\Mjoin,
	DataTables\Editor\Options,
	DataTables\Editor\Upload,
	DataTables\Editor\Validate,
	DataTables\Editor\ValidateOptions;

// Build our Editor instance and process the data coming from _POST
Editor::inst( $db, 'datatables' )
	->fields(
		Field::inst( 'tambor' ),
		Field::inst( 'color' ),
		Field::inst( 'humedad' ),
		Field::inst( 'estado' ),
		Field::inst( 'hmf' ),
		Field::inst( 'adulteracion' ),
		Field::inst( 'solidificacion' ),
		Field::inst( 'archivo' ),
		Field::inst( 'am_1' ),
		Field::inst( 'am_2' ),
		Field::inst( 'glisofato' ),
		Field::inst( 'fg' ),
		Field::inst( 'lote' ),
		Field::inst( 'observaciones' ),
	)
	->debug(true)
	->process( $_POST )
	->json();
