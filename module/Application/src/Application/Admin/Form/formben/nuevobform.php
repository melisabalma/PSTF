<?php
/*este archivo es la creacion de los objetos de nuestro formulario y abtrae los datos del padre NUEVO
Asi que crearemos los obejtos de Nuevo beneficiario
Se debe hacer este archivo por cada formulario creado
*/
namespace Application\Admin\Form\formben;

use Zend\Form\Form;


class NuevobForm extends  Form 
/*Osea se refiere a la clase de zend/form/form*/

{
	public function __construct()

		{
			parent::__construct('NuevobForm');
			//parent es el que contruye al hijo con los elemento del padre 'nuevo'

			//creacion de los elementos

			 $this->add([
	            'name' => 'dni',
	            'type' => 'Text',            
	        ]);

	        $this->add([
	            'name' => 'nombre',
	            'type' => 'Text',
	        ]);
	        $this->add([
	            'name' => 'apellido',
	            'type' => 'Text',
	        ]);	

	        $this->add([
           'name' => 'submit',
           'type' => 'Submit',
           'attributes' => [
               'value' => 'Enviar',
               'id' => 'submit',
           ],
        ]);
	    }		
}
