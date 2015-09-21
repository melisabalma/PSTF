<?php

namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Zend\View\Model\JsonModel;
use Application\Entity\beneficiario\Beneficiario;
use Application\Admin\Form\formben\NuevobForm;



class BeneficiarioController extends AbstractActionController
{
    public function getEntityManager()
    {
        return $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
    }

    public function indexAction()
    {
        return new ViewModel();
    }

    public function nuevoAction()
    {
        $form = new NuevobForm(); //creo el objeto  formulario      
        if ($this->request->isPost()){ //si hizo el submito en el formulario
            $data=$this->request->getPost(); //obtiene los datos del formulario
            
            $beneficiario = new Beneficiario();
            $beneficiario->setDni ($data->dni);
            $beneficiario->setNombre ($data->nombre);
            $beneficiario->setApellido ($data->apellido);            

            $em = $this->getEntityManager(); //obtengo mi EM
            $em->persist($beneficiario); //persiste los datos
            $em->flush(); //realmente hace los cambios
            //$this->flashMessenger()->addSuccessMessage('Obra Social subida!');

            return $this->redirect()->toRoute('ver-beneficiario');
        }

    }
       

    public function verbenfAction()
    {
        return new ViewModel();
    }

    public function modificarAction()
    {
        return new ViewModel();
    }

    public function eliminarAction()
    {
        return new ViewModel();
    }


}

