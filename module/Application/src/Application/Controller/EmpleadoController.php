<?php

//clase creada por david
namespace Application\Controller;

use Zend\Mvc\Controller\AbstractActionController;
use Zend\View\Model\ViewModel;
use Application\Entity\empleado\Empleado;
use Application\Admin\Form\formemp\Empleado as EmpleadoForm;
use DoctrineORMModule\Paginator\Adapter\DoctrinePaginator as DoctrineAdapter;
use Doctrine\ORM\Tools\Pagination\Paginator as OrmPaginator;
use Zend\Paginator\Paginator as ZfPaginator;

class EmpleadoController extends AbstractActionController
{

    protected function getEntityManager() 
    {
        return $this->getServiceLocator()->get('Doctrine\ORM\EntityManager');
    }
    
    public function indexAction()
    {
        $em = $this->getEntityManager();
        $query = $em->createQueryBuilder()
                ->select('a')
                ->from('Application\Entity\empleado\Empleado', 'a')
                ->orderBy('a.nombre', 'DESC')
                ->getQuery();
        
        
        //limitador
        $ormPaginador  = new OrmPaginator($query);
        //adaptador
        $adaptador  = new DoctrineAdapter($ormPaginador);
        //el paginador
        $zfPaginador = new ZfPaginator($adaptador);
        $paginaActual=$this->params('pagina',1);
        $zfPaginador->setCurrentPageNumber($paginaActual);
        $zfPaginador->setItemCountPerPage(3);
        
        return new ViewModel([
            'paginador'=>$zfPaginador,
        ]);
    }

    public function editarAction()
    {
        $empleadoForm = new EmpleadoForm();         
        $id_empleado = $this->params('id_empleado');
        
        $em = $this->getEntityManager();        
        $empleado = $em->find('Application\Entity\empleado\Empleado', $id_empleado);
        // con este set data populo el form , osea datos cargados en el form
        $empleadoForm->setData([
            'dni' =>$empleado->getDni(),
            'nombre' => $empleado->getNombre(),
            'apellido' => $empleado->getApellido(),
        ]);
          if ($this->request->isPost()){
            //$data almacena los datos del formulario
            $data = $this->request->getPost();
            
                //objeto de la Entidad empleado
            $empleado->setDni($data->dni);
            $empleado->setNombre($data->nombre);
            $empleado->setApellido($data->apellido);
            
            $em= $this->getEntityManager() ;
            //El persis le decimoslos objetos que cambiaron
            //ademas insert si no tiene id y si tiene id update
            $em->persist($empleado);
            //el flush hace el insert
            //el flush manda los cambios a la base, por ejemplo los campos.
            $em->flush();
            
            $this->flashMessenger()->addSuccessMessage(
                    sprintf('Empleado "%s" acutalizado correctamente', $empleado->getNombre()));
            
            return $this->redirect()->toRoute('lista_empleado');
            
        }

        return new ViewModel([
            'empleado'=>$empleado,
            'form'=>$empleadoForm,
            
                ]);
    }

    public function nuevoAction()
    {
        //muestra html
        $empleadoForm =  new EmpleadoForm();
                
        //si existe un post        
        //parte del codigo que dice
        //si este objeto tiene un request de post
        //data=a este objeto $this
        if ($this->request->isPost()){
            //$data almacena los datos del formulario
            $data = $this->request->getPost();
            
                //objeto de la Entidad empleado
            $empleado = new Empleado();
            $empleado->setDni($data->dni);
            $empleado->setNombre($data->nombre);
            $empleado->setApellido($data->apellido);
            
            $em= $this->getEntityManager() ;
            //El persis le decimoslos objetos que cambiaron
            $em->persist($empleado);
            //el flush hace el insert
            $em->flush();
            
            $this->flashMessenger()->addSuccessMessage('Empleado agregado al sistema');
            
            return $this->redirect()->toRoute('lista_empleado');
            
        }
        return new ViewModel(array(
            'form' => $empleadoForm,
            'mensaje' => 'bla bla',
        ));
    }
    public function eliminarAction()
    {
        
        $id_empleado=$this->params('id_empleado');        
        $em=$this->getEntityManager();
        $empleado=$em->find('Application\Entity\empleado\Empleado', $id_empleado);
        //Elimino a la entidad con entity
        $em->remove($empleado);
        $em->flush();            
        
        $this->flashMessenger()->addSuccessMessage('Empleado elimindao del  sistema');            
        return $this->redirect()->toRoute('lista_empleado');
        
         
        
    }


}

