<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Form\Type\ModelListType;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Form\Type\DatePickerType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Sonata\CoreBundle\Form\Type\CollectionType;
use App\Application\ToolsBundle\Form\Type\DependentFilteredEntityType;
use Sonata\AdminBundle\Route\RouteCollection;

final class ServiciohisAdmin extends AbstractAdmin
{
    protected $baseRouteName = 'admin_app_serviciohis';
    protected $baseRoutePattern = "serviciohis";
    
    protected function configureRoutes(RouteCollection $collection)
    {
        // Only `list` and `show` route will be active
        $collection->clearExcept(array('list', 'edit', 'delete', 'export'));
    }

    protected $datagridValues = [
	'_page' => 1,
        '_sort_order' => 'DESC',
        '_sort_by' => 'id',
    ];
    
    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('provinciaid', 'doctrine_orm_choice', array(
				'show_filter' => true,
				'label' => 'Provincia', 
                                'required' => true), 
				ChoiceType::class, 
				array(
					'choices' => array(
						'Tucumán' => 25,  // The key (value1) will contain the actual value that you want to filter on
						'Sgo. del Estero' => 23,  // The 'Name Two' is the "display" name in the filter
				), 
				'expanded' => true,    
				'multiple' => false,
				'attr' => array('style' => 'margin-top: 7px;'),
                                'required' => true,
                                'placeholder' => false,
                                ),  
			)
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            ->add('nrocaso', null, array('label'=>'Caso'))
            ->add('nombre')
            ->add('dominio')
	    ->add('marcaid', null, array('label'=>'Marca'))
	    ->add('modeloid', null, array('label'=>'Modelo'))
            ->add('destino')
            ->add('hsllamada', 'date', array('label'=>'Llamada', 'format' => 'd/m/Y h:m'))
            ->add('choferid', null, array('label'=>'Chofer'))
            ->add('empresaid', null, array('label'=>'Empresa'))
            ->add('_action', null, [
                'actions' => [
                    //'show' => ['template' => '/ServicioAdmin/list__action_show.html.twig',],
                    'edit' => ['template' => '/ServicioAdmin/list__action_edit.html.twig',],
                    'delete' => ['template' => '/ServicioAdmin/list__action_delete.html.twig',],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
	
	 $filterParameters = $this->getFilterParameters();
	 
	 $provincia = $filterParameters["provinciaid"]['value'];
	 
	
    
	$now = new \DateTime();
	
        $formMapper
		->add('prioridadid', null, array('label'=>'prioridad'))
		->add('tipocli', null, array('label'=>'Tipo Cliente'))
		->add('empresaid', null, array('label'=>'Empresa'))            
		->add('hsllamada', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Llamada', 'required' => false))
		->add('codaut', null, array('label'=>'Autorización'))
		->add('denunciante', null, array('label'=>'Denunciante'))

		->add('clienteid', ModelListType::class, array('label'=>'Asegurado', 'btn_add'=>false, 'btn_delete'=>false, 'required'=>false))
		->add('nombre')
		->add('dominio')
		->add('telefono')
		->add('marcaid', null, array('label'=>'Marca'));
		
		$container = $this->getConfigurationPool()->getContainer();
		$dependant_entities = $container->getParameter('application_tools.dependent_filtered_entities');

		$subscriber = $container->get('application_tools.dependent_filtered_entity_subscriber');

		$form_options = $dependant_entities['modelo_by_marca']['form_options'];
		$form_options = array_merge($form_options, array('required'=>false));

		$formMapper->add('modeloid', DependentFilteredEntityType::class, $form_options);
		$subscriber->addField('modeloid', $form_options);

		$formMapper->getFormBuilder()->addEventSubscriber($subscriber);
		
		$formMapper
		//->add('modeloid', null, array('label'=>'Modelo'))
		->add('colorid', null, array('label'=>'Color'))

		->add('provinciaid', null, array('label' => 'Provincia'));		
		
		//->add('localidadid')		
		$container = $this->getConfigurationPool()->getContainer();
		$dependant_entities = $container->getParameter('application_tools.dependent_filtered_entities');

		$subscriber = $container->get('application_tools.dependent_filtered_entity_subscriber');

		$form_options = $dependant_entities['localidad_by_provincia']['form_options'];
		$form_options = array_merge($form_options, array('required'=>false));

		$formMapper->add('localidadid', DependentFilteredEntityType::class, $form_options);
		$subscriber->addField('localidadid', $form_options);

		$formMapper->getFormBuilder()->addEventSubscriber($subscriber);
		
		$formMapper
		->add('calle')
		->add('numero')
		->add('depto')
		->add('lote')
		->add('manzana')
		->add('casa')
		->add('fallaid', ModelAutoCompleteType::class, [
			'property' => 'falla',
			'btn_add' => 'Agregar Falla'
		])
		->add('destino')
	
		->add('provinciadestid');
		
		//->add('localidaddestid')

		$container = $this->getConfigurationPool()->getContainer();
		$dependant_entities = $container->getParameter('application_tools.dependent_filtered_entities');

		$subscriber = $container->get('application_tools.dependent_filtered_entity_subscriber');

		$form_options = $dependant_entities['localidaddest_by_provinciadest']['form_options'];
		$form_options = array_merge($form_options, array('required'=>false));

		$formMapper->add('localidaddestid', DependentFilteredEntityType::class, $form_options);
		$subscriber->addField('localidaddestid', $form_options);

		$formMapper->getFormBuilder()->addEventSubscriber($subscriber);
		
		$formMapper
		->add('destino')

//		->add('kmini')
//		->add('kmfin')
//
//		->add('hsasignacion', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Asignación', 'required' => false))
//		->add('hsarribo', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Arribo', 'required' => false))
//		->add('hsfinalizacion', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Finalización', 'required' => false))


		->add('movilId', CollectionType::class, array('label' => "Movil", 'btn_add' => 'Agregar Movil'), array(
                    'edit' => 'inline',
                    'allow_delete' => true,
                    'inline' => 'table'))
   
		//->add('choferid', null, array('label'=>'Mecánico'))
                        
		->add('tipoid', null, array('label'=>'Tipo Servicio'))
		
		->add('tipodist', null, array('label'=>'Distancia'))
		
	    ->add('tipoestado', null, array('label'=>'Estado'))
	    
	    
	    ->add('impbase')
	    ->add('impcob')
	    
	    ->add('obs');		
    }
	
	
    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('nrocaso')
            ->add('clienteid')
            ->add('nombre')
            ->add('tipoid')
            ->add('tipo')
            ->add('denunciante')
            ->add('dominio')
            ->add('marca')
            ->add('color')
            ->add('falla')
            ->add('calle')
            ->add('numero')
            ->add('depto')
            ->add('casa')
            ->add('lote')
            ->add('manzana')
            ->add('localidad')
            ->add('provincia')
            ->add('destino')
            ->add('localidaddest')
            ->add('kilometros')
            ->add('telefono')
            ->add('id')
            ->add('piso')
            ->add('provinciadest')
            ->add('hsllamada')
            ->add('hsasignacion')
            ->add('hsarribo')
            ->add('hsfinalizacion')
            ->add('estado')
            ->add('mes')
            ->add('anio')
            ->add('opini')
            ->add('opfin')
            ->add('movilid')
            ->add('choferid')
            ->add('movil')
            ->add('chofer')
            ->add('kmini')
            ->add('kmfin')
            ->add('codaut')
            ->add('empresaid')
            ->add('empresa')
            ->add('tipocli')
            ->add('tipodist')
            ->add('obs')
            ->add('abrloc1')
            ->add('abrloc2')
            ->add('movilnro')
            ->add('abrchof')
            ->add('servfin')
            ->add('impcob')
            ->add('kmreal')
            ->add('kmaju1')
            ->add('kmaju2')
            ->add('kmtot')
            ->add('perf')
            ->add('hsliq')
            ->add('modelo')
            ->add('hsalta')
            ->add('inactivo')
            ->add('ciermec')
            ->add('mecfecha')
            ->add('opcierre')
            ->add('cerrado')
            ->add('hsprogramacion')
            ->add('impbase')
            ->add('segundos')
            ->add('tablamodificada')
            ->add('usuario')
            ->add('revisar')
            ->add('porque')
            ->add('facturaid')
            ->add('ciermov')
            ->add('otros')
            ;
    }
    
    public function prePersist($object) {
        $object->setMovilId($object->getMovilId());
    }

    public function preUpdate($object) {
        $object->setMovilId($object->getMovilId());
    }
}