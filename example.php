<?php
require 'vendor/autoload.php';

use Larc\CsvEasy\CSV;

//Read
function read() {
	$read = CSV::read('read-test.csv', ';');
	var_dump($read);
}

//Write
function write() {
	$column_name = ['No. del mes', 'Nombre del mes', 'Abreviatura'];
	$data 	= [
		['1', 'Enero', 'Ene'],
		['2', 'Febrero', 'Feb'],
		['3', 'Marzo', 'Mar'],
		['4', 'Abril', 'Abr'],
		['5', 'Mayo', 'May'],
		['6', 'Junio', 'Jun'],
		['7', 'Julio', 'Jul'],
		['8', 'Agosto', 'Ago'],
		['9', 'Septiembre', 'Sep'],
		['10', 'Octubre', 'Oct'],
		['11', 'Noviembre', 'Nov'],
		['12', 'Diciembre', 'Dic']
	];

	$write = CSV::write('write-test', $column_name, $data, ';');

	var_dump($write);
}

echo '<pre>';
//write();
read();
?>