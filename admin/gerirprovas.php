<?php include("verificar.php")?>
<?php
//@session_start();
ini_set("error_reporting", E_ALL);

require __DIR__ . '/../config.php';
require __DIR__ . '/../autoload.php';
//require __DIR__ . '/../bootstrap.php';
//use classes\authentication\Authentication;
//use classes\db\Database;
use classes\db\TableBD;


//Create an object 
$table= new TableBD();

//Set the path for the html template
$table->setTemplate( "tabela.php");

//Set title of the list
$table->setTitle("Adicionar provas");

//select the table in the datebase
//SELECT `CodigoProva`, `Nome`, `DataInicio`, `DataFim`, `Descricao`, `CodigoLocal`, `CodigoTipoProva`, `Inscricao` FROM `Prova`
$table->prepareTable("Prova");

//list of fields for list, new, edit and import records
$table->setFieldsAtive("CodigoProva, Nome, DataInicio, DataFim, Descricao, CodigoLocal, CodigoTipoProva",'list');
$table->setFieldsAtive("Nome, DataInicio, DataFim, Descricao, CodigoLocal, CodigoTipoProva, Inscricao", 'new');
$table->setFieldsAtive("Nome, DataInicio, DataFim, Descricao, CodigoLocal, CodigoTipoProva, Inscricao", 'edit');
$table->setFieldsAtive("Nome, DataInicio, DataFim, Descricao, CodigoLocal, CodigoTipoProva, Inscricao", 'csv');

//define field name passw as a password, hidding the file 
//$table->setFieldPass("passw",0, "md5");

//define lists of values to supplay to a field
$table->setFieldList("CodigoLocal",1," SELECT `CodigoLocal`, `Local` FROM `TipoLocal` ORDER BY `Local`",1);
$table->setFieldList("CodigoTipoProva",1," SELECT `CodigoTipoProva`, `Tipo` FROM `TipoProva` ORDER BY `Tipo`",1);

//$table->setFieldList("active",2,"1=>Active,0=>Inactive");

//the fiekd to be present as an image
//$table->setImageField("photo","../fotos/thumbs/",30);

//Link each record on the listo to external page passing the key value
$table->setLinkPage("gerirfotos.php");

//Labels for fields
$table->setLabel('CodigoProva',"Código da prova");
$table->setLabel('Descricao',"Discrição");
$table->setLabel('CodigoLocal',"Local");
$table->setLabel('CodigoTipoProva',"Tipo de prova");

//defines a criterion for the viewing action, where criterion is an sql (where) criterion that equals fields with values
//$table->setCriterio("type='Admin'");

//Do what is necessary to maintain the table in an html page. Lists the data and allows you to insert new ones, edit and delete records. Use a 'do' parameter to make decisions
$table->showHTML();


?>
