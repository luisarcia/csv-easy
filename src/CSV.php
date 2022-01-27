<?php
namespace Larc\CsvEasy;

use Larc\CsvEasy\exception\invalidFile;

class CSV
{
	/**
	 * Lee un archivo CSV delimitado por coma
	 * @param  string $filename		Nombre del archivo
	 * @param  string $delimiter	Delimitador. Por defecto ','
	 * @return array
	 */
	static function read( string $filename, string $delimiter = ',' ): ?array
	{
		$data 	= [];
		$output = [];

		if( !$file = @fopen( $filename, 'r')) throw new invalidFile('File not found! 😱');

		while (($row = fgetcsv($file, 0, preg_quote($delimiter))) !== false) {
			$data[] = $row;
		}

		$column_name = $data[0];

		array_shift( $data );

		foreach ($data as $key => $value) {
			$output[] = array_combine($column_name, $value);
		}

		return $output;
	}

	/**
	 * Crea un archivo CSV
	 * @param  string $filename  	Nombre del archivo
	 * @param  array  $column_name  Nombre de las columnas (títulos)
	 * @param  array  $data      	Data que se quiere agregar
	 * @param  string $delimiter 	Delimitador. Default ','
	 * @return boolean
	 */
	static function write( string $filename, array $column_name, array $data, string $delimiter = ',' ): ?bool
	{
		$data 		= $data;
		$delimiter 	= preg_quote($delimiter);

		$file = fopen(sprintf('%s.csv', $filename), 'w');
		fputs($file, $bom = ( chr(0xEF) . chr(0xBB) . chr(0xBF) ));
		fputcsv($file, $column_name, $delimiter);

		for ($i=0; $i < count($data); $i++) { 
			fputcsv($file, $data[$i], $delimiter);
		}

		fseek($file, 0);
		fclose($file);

		return true;
	}
}
?>