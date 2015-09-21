<?php
/**
 * Zend Framework (http://framework.zend.com/)
 *
 * @link      http://github.com/zendframework/ZendSkeletonApplication for the canonical source repository
 * @copyright Copyright (c) 2005-2015 Zend Technologies USA Inc. (http://www.zend.com)
 * @license   http://framework.zend.com/license/new-bsd New BSD License
 */

return array(
    'router' => array(
        'routes' => array(
            'home' => array(
                'type' => 'Zend\Mvc\Router\Http\Literal',
                'options' => array(
                    'route'    => '/',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Index',
                        'action'     => 'index',
                    ),
                ),
            ),
//Esto corresponde al modulo de beneficiarios
            //aqui entramos a la vista o index de la vista de Beneficiario
            'beneficiario'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/beneficiario',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Beneficiario',
                        'action'=>'index',
                                    ),
                                ),
                            ),
            //Aqui a la vista de nuevo beneficiario
            'nuevo-beneficiario'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/nuevo-beneficiario',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Beneficiario',
                        'action'=>'nuevo',
                                    ),
                                ),
                            ),
            //Aqui a la vista de ver beneficiario
            'ver-beneficiario'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/ver-beneficiario',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Beneficiario',
                        'action'=>'verbenf',
                                    ),
                                ),
                            ),
            //Aqui a la vista de modificar beneficiario
            'mod-beneficiario'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/mod-beneficiario',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Beneficiario',
                        'action'=>'modificar',
                                    ),
                                ),
                            ),
            //Aqui a la vista de Eliminar beneficiario
            'del-beneficiario'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/del-beneficiario',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Beneficiario',
                        'action'=>'eliminar',
                                    ),
                                ),
                            ),




//Esto corresponde al modulo de Producto
            //aqui entramos a la vista o index de la vista de Producto
            'producto'=> array(
                'type'=>'Zend\Mvc\Router\Http\literal',
                'options'=> array(
                    'route' => '/producto',
                     'default'=>array(
                        'controller'=>'Application\Controller\Producto',
                        'action'=>'index',
                                    ),
                                ),
                            ),

//Aqui a la vista de nuevo producto
            'nuevo-producto'=> array(
                'type'=>'Zend\Mvc\Router\Http\literal',
                'options'=> array(
                    'route' => '/nuevo-producto',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Producto',
                        'action'=>'nuevo',
                                    ),
                                ),
                            ),
            //Aqui a la vista de ver producto
            'ver-producto'=> array(
                'type'=>'Zend\Mvc\Router\Http\literal',
                'options'=> array(
                    'route' => '/ver-producto',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Producto',
                        'action'=>'ver',
                                    ),
                                ),
                            ),
            //Aqui a la vista de modificar Producto
            'mod-producto'=> array(
                'type'=>'Zend\Mvc\Router\Http\literal',
                'options'=> array(
                    'route' => '/mod-producto',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Producto',
                        'action'=>'modificar',
                                    ),
                                ),
                            ),
            //Aqui a la vista de Eliminar Producto
            'del-producto'=> array(
                'type'=>'Zend\Mvc\Router\Http\literal',
                'options'=> array(
                    'route' => '/del-producto',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Producto',
                        'action'=>'eliminar',
                                    ),
                                ),
                            ),

//Esto corresponde al modulo de Stock
            //aqui entramos a la vista o index de la vista de Stock
            'stock'=> array(
                'type'=>'Zend\Mvc\Router\Http\literal',
                'options'=> array(
                    'route' => '/Stock',
                     'default'=>array(
                        'controller'=>'Application\Controller\Stock',
                        'action'=>'index',
                                    ),
                                ),
                            ),

//Aqui a la vista de ver stock
            'ver-stock'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/ver-stock',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Stock',
                        'action'=>'verstock',
                                    ),
                                ),
                            ),
            //Aqui a la vista de modificar Stock
            'mod-stock'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/mod-stock',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\Stock',
                        'action'=>'modstock',
                                    ),
                                ),
                            ),

//Esto corresponde al modulo de Asistencia mensual
            //aqui entramos a la vista o index de la vista de Asistencia Mensual
            'asistencia-mensual'=> array(
                'type'=>'Zend\Mvc\Router\Http\literal',
                'options'=> array(
                    'route' => '/asisten-mens',
                     'default'=>array(
                        'controller'=>'Application\Controller\AsistMen',
                        'action'=>'index',
                                    ),
                                ),
                            ),

//Aqui a la vista de nuevo Asistencia Mensual
            'nuevo-asistmen'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/nuevo-asistmen',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\AsistMen',
                        'action'=>'registro',
                                    ),
                                ),
                            ),
            //Aqui a la vista de ver Asistencia Mensual
            'ver-asistmen'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/ver-asistmen',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\AsistMen',
                        'action'=>'verreg',
                                    ),
                                ),
                            ),
            //Aqui a la vista de modificar Asistencia Mensual
            'mod-asistmen'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/mod-asistmen',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\AsistMen',
                        'action'=>'modreg',
                                    ),
                                ),
                            ),
            //Aqui a la vista de Eliminar Asistencia Mensual
            'del-asistmen'=> array(
                'type'=>'Zend\Mvc\Router\Http\Literal',
                'options'=> array(
                    'route' => '/del-asistmen',
                    'defaults'=>array(
                        'controller'=>'Application\Controller\AsistMen',
                        'action'=>'elimreg',
                                    ),
                                ),
                            ),
//Esto corresponde a todo lo referido a los empleados
                        //index empleados
            'lista_empleado' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment', // 'Zend\Mvc\Router\Http\Literal'
                'options' => array(
                    'route' => '/lista-empleado[/:pagina]',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Empleado',
                        'action' => 'index',
                        'pagina'=>1,
                    ),
                ),
            ),
            //listar empelados index fin
            //secion nuevo empleado
            'nuevo_empleado' => array(
                'type' => 'literal', // 'Zend\Mvc\Router\Http\Literal'
                'options' => array(
                    'route' => '/nuevo-empleado',
                    'defaults' => array(
                        'controller' => 'Application\Controller\Empleado',
                        'action' => 'nuevo',
                    ),
                ),
            ),
            //Seccion editar empelado
            'editar_empleado' => array(
                'type' => 'Zend\Mvc\Router\Http\Segment',
                'options' => array(
                    'route' => '/editar-empleado/:id_empleado',                    
                    'constraints' => array(
                        'id_empleado' => '[0-9]+',
                    ),
                    'defaults' => array(
                        'controller' => 'Application\Controller\Empleado',
                        'action' => 'editar',
                    ),
                ),
            ),






            // The following is a route to simplify getting started creating
            // new controllers and actions without needing to create a new
            // module. Simply drop new controllers in, and you can access them
            // using the path /application/:controller/:action
            'application' => array(
                'type'    => 'Literal',
                'options' => array(
                    'route'    => '/application',
                    'defaults' => array(
                        '__NAMESPACE__' => 'Application\Controller',
                        'controller'    => 'Index',
                        'action'        => 'index',
                    ),
                ),
                'may_terminate' => true,
                'child_routes' => array(
                    'default' => array(
                        'type'    => 'Segment',
                        'options' => array(
                            'route'    => '/[:controller[/:action]]',
                            'constraints' => array(
                                'controller' => '[a-zA-Z][a-zA-Z0-9_-]*',
                                'action'     => '[a-zA-Z][a-zA-Z0-9_-]*',
                            ),
                            'defaults' => array(
                            ),
                        ),
                    ),
                ),
            ),
        ),
    ),
    'service_manager' => array(
        'abstract_factories' => array(
            'Zend\Cache\Service\StorageCacheAbstractServiceFactory',
            'Zend\Log\LoggerAbstractServiceFactory',
        ),
        'aliases' => array(
            'translator' => 'MvcTranslator',
        ),
    ),
    'translator' => array(
        'locale' => 'en_US',
        'translation_file_patterns' => array(
            array(
                'type'     => 'gettext',
                'base_dir' => __DIR__ . '/../language',
                'pattern'  => '%s.mo',
            ),
        ),
    ),
    'controllers' => array(
        'invokables' => array(
            'Application\Controller\Index' => 'Application\Controller\IndexController',
            'Application\Controller\Beneficiario' => 'Application\Controller\BeneficiarioController',
            'Application\Controller\Producto' => 'Application\Controller\ProductoController',  
            'Application\Controller\Stock' => 'Application\Controller\StockController',
            'Application\Controller\AsistMen' => 'Application\Controller\AsistMenController',
            'Application\Controller\Empleado' => 'Application\Controller\EmpleadoController'


        ),
    ),

            
    




    'view_manager' => array(
        'display_not_found_reason' => true,
        'display_exceptions'       => true,
        'doctype'                  => 'HTML5',
        'not_found_template'       => 'error/404',
        'exception_template'       => 'error/index',
        'template_map' => array(
            'layout/layout'           => __DIR__ . '/../view/layout/layout.phtml',
            'application/index/index' => __DIR__ . '/../view/application/index/index.phtml',
            'error/404'               => __DIR__ . '/../view/error/404.phtml',
            'error/index'             => __DIR__ . '/../view/error/index.phtml',
        ),
        'template_path_stack' => array(
            __DIR__ . '/../view',
        ),
    ),
    // Placeholder for console routes
    'console' => array(
        'router' => array(
            'routes' => array(
            ),
        ),
    ),


    'doctrine' => array(
        'driver' => array(
            // Definimos como y donde Doctrine va a parsear las configuracion de las entidades 
            'annotation_driver' => array(
                'class' => 'Doctrine\ORM\Mapping\Driver\AnnotationDriver',
                'cache' => 'array',
                'paths' => array(
                    __DIR__ . '/../src/Application/Entity',
                ),
            ),
            // Para la conexión que llamamos orm_default (la configuramos en doctrine.local.php)
            // declaramos los namespaces que vamos a usar y con que driver esta configurado.
            'orm_default' => array(
                'drivers' => array(
                    'Application\Entity' => 'annotation_driver'
                ),
            ),
        ),
    ),
);