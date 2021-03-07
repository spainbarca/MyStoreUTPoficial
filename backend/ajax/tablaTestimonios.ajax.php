<?php

require_once "../controladores/testimonios.controlador.php";
require_once "../modelos/testimonios.modelo.php";

class TablaTestimonios{

	/*=============================================
	Tabla Testimonios
	=============================================*/ 

	public function mostrarTabla(){

		$testimonios = ControladorTestimonios::ctrMostrarTestimonios(null, null);

		if(count($testimonios)== 0){

 			$datosJson = '{"data": []}';

			echo $datosJson;

			return;

 		}

 		$datosJson = '{

	 	"data": [ ';

	 	foreach ($testimonios as $key => $value) {

			$calificacion = "<button class='btn btn-warning btn-sm'><i class='fas fa-star text-white'></i></button>";

			//$puntos = "<span class='my-rating-9'></span><span class='live-rating'>4</span>";

	 		$reservaUsuario = ControladorTestimonios::ctrMostrarTestimoniosInnerJoin("id_testimonio", $value["id_testimonio"]);

			/*=============================================
			ESTADO
			=============================================*/	

			if($value["aprobado"] == 0){

				$estado = "<button class='btn btn-dark btn-sm btnAprobar' estadoTestimonio='1' idTestimonio='".$value["id_testimonio"]."'>Aprobar</button>";

			}else{

				$estado = "<button class='btn btn-info btn-sm btnAprobar' estadoTestimonio='0' idTestimonio='".$value["id_testimonio"]."'>Aprobado</button>";
			}

			
		
			
			$datosJson.= '[
							
						"'.($key+1).'",
						"'.$value["id_us"].'",
						"'.$reservaUsuario["descripcion_reserva"].'",
						"'.$value["testimonio"].'",
						"'.$calificacion.'",
						"'.$estado.'",
						"'.$value["fecha"].'"
					
				],';

		}

		$datosJson = substr($datosJson, 0, -1);

		$datosJson.=  ']

		}';

		echo $datosJson;

	}

}

/*=============================================
Tabla Testimonios
=============================================*/ 

$tabla = new TablaTestimonios();
$tabla -> mostrarTabla();

