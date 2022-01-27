# csv-easy v1.0
Lee y crear archivo CSV de manera fácil y rápida



### Instalación

```Bash
composer require larc/csv-easy
```



### Uso

#### Read

```php
use Larc\CsvEasy\CSV;

//Se instancia la clase estatica y se llama llama el método read
//Al método se le pasa nombre del archivo y el delimitador. Por defecto es una coma ','
$read = CSV::read('read-test.csv', ';');
```



Devuelve un Array

```php
array(2) {
  [0]=>
  array(6) {
    ["Provincia"]=>
    string(14) "Bocas del Toro"
    ["ISO"]=>
    string(4) "PA-1"
    ["Población"]=>
    string(6) "161845"
    ["Superficie"]=>
    string(11) "3037,74 Km2"
    ["Capital"]=>
    string(14) "Bocas del Toro"
    ["Creación"]=>
    string(4) "1903"
  }
  [1]=>
  array(6) {
    ["Provincia"]=>
    string(6) "Coclé"
    ["ISO"]=>
    string(4) "PA-2"
    ["Población"]=>
    string(6) "260292"
    ["Superficie"]=>
    string(8) "4927 Km2"
    ["Capital"]=>
    string(9) "Penonomé"
    ["Creación"]=>
    string(4) "1886"
  }
}

```



#### Write

```php
use Larc\CsvEasy\CSV;

$column_name = ['No. del mes', 'Nombre del mes', 'Abreviatura'];
$data = [
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

//Nombre del archivo, Nombre de las columnas, data, delimitador por defecto ','
$write = CSV::write('write-test', $column_name, $data, ';');
```

Revuelve true / false











