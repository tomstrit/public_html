<?php include("verificar.php")?>
<?php
@session_start();
if(!isset($_SESSION["Tipo"])){
    header('Location: https://vianaconnect.alunos.esmonserrate.org/login.php');
}else{
    if($_SESSION["Tipo"]!=1){
        header('Location: https://vianaconnect.alunos.esmonserrate.org/admin/erro.php');
    }
}
?>
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
$table->setTitle("Adicionar atletas");

//select the table in the datebase
//SELECT `CodigoAtleta`, `Nome`, `Email`, `PalavraPasse`, `FotoPerfil`, `Descricao`, `CodigoDesporto`, `Clube`, `CodigoCategoria`, `Tipo`, `Privado`, `Feature` FROM `Atletas`
$table->prepareTable("Atletas");

//list of fields for list, new, edit and import records
$table->setFieldsAtive("Nome, Email, FotoPerfil, Descricao, CodigoDesporto, Tipo, Privado, Feature",'list');
$table->setFieldsAtive("Nome, Email, PalavraPasse, FotoPerfil, Descricao, CodigoDesporto, Clube, CodigoCategoria, Tipo, Privado, Feature", 'new');
$table->setFieldsAtive("Nome, Email, PalavraPasse, FotoPerfil, Descricao, CodigoDesporto, Clube, CodigoCategoria, Tipo, Privado, Feature", 'edit');
$table->setFieldsAtive("Nome, Email, PalavraPasse, FotoPerfil, Descricao, CodigoDesporto, Clube, CodigoCategoria, Tipo, Privado, Feature", 'csv');

//define field name passw as a password, hidding the file 
//$table->setFieldPass("passw",0, "md5");

//define lists of values to supplay to a field
$table->setFieldList("CodigoCategoria",1,"SELECT `CodigoCategoria`, `Categoria` FROM `Categoria` ORDER BY Categoria",1);
$table->setFieldList("CodigoDesporto",1,"SELECT `CodigoDesporto`, `Nome`, `Descrição`, `Foto` FROM `Desportos` ORDER BY Nome",1);
$table->setFieldList("Tipo",2,"1=>Admin,100=>Atleta",1);
$table->setFieldList("Privado",2,"1=>Público,2=>Privado",1);

//the fiekd to be present as an image
$table->setImageField("FotoPerfil","",50);

//Link each record on the listo to external page passing the key value
//$table->setLinkPage("/public/perfil.php");

//Labels for fields
$table->setLabel('CodigoDesporto',"desporto");
$table->setLabel('Privado',"Privacidade");
//$table->setLabel('name',"Full Name");
//$table->setLabel('passw',"Password");

//defines a criterion for the viewing action, where criterion is an sql (where) criterion that equals fields with values
//$table->setCriterio("type='Admin'");

//Do what is necessary to maintain the table in an html page. Lists the data and allows you to insert new ones, edit and delete records. Use a 'do' parameter to make decisions
$table->showHTML();


?>
