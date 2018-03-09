<?php 
// sentencia que sera incluido por unica vez - se impide la carga de un mismo archivo más de una vez.
// establece que el código del archivo invocado es requerido, es decir, obligatorio para el funcionamiento del programa. Por ello, si el archivo especificado en la función require() no se encuentra saltará un error “PHP Fatal error” y el programa PHP se detendrá.
require_once "Controllers/template.controller.php";

require_once "Controllers/users.controller.php";
require_once "Controllers/categories.controller.php";
require_once "Controllers/products.controller.php";
require_once "Controllers/customers.controller.php";
require_once "Controllers/sales.controller.php";


require_once "Models/users.model.php";
require_once "Models/categories.model.php";
require_once "Models/products.model.php";
require_once "Models/customers.model.php";
require_once "Models/sales.model.php";








// crearemos un objeto de tipo template
$template = new ControllerTemplate();
// Ahora podremos acceder todas las clases que existen en la clase ControllerTemplate mediante (->) 
// Y dentro de ControllerTemplate tendremos una funcion que invocara una vista :)
$template->CTLTemplate();


