<?php 
class ControllerTemplate 
{
	public function CTLTemplate()
	{
		//include() Si no se encuentra dicho código, saltará un error tipo “Warning” y el programa seguirá ejecutándose (aunque como consecuencia de no incluirse el código puede que no funcione correctamente, o sí, depende de la situación).
		include "Views/template.php";
	}
}
