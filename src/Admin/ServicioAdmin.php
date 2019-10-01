<<<<<<< HEAD
<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class ServicioAdmin extends AbstractAdmin
{

    /*protected $datagridValues = [
        '_sort_order' => 'DESC',
        '_sort_by' => 'id',
    ];*/
    
    /*public function createQuery($context = 'list'){
	$query = parent::createQuery($context);
        $rootAlias = $query->getRootAliases()[0];
	$now = new \DateTime('now');
        
            $query
                ->andWhere($query->expr()->eq($rootAlias . '.tipoestado', ':tipoestado'))
		->andWhere($query->expr()->eq($rootAlias . '.anio', ':anio'))
		->andWhere($query->expr()->eq($rootAlias . '.mes', ':mes'))
                ->setParameter('tipoestado', 1)
		->setParameter('anio', $now->format('Y'))
		->setParameter('mes', $now->format('m'))
                ;
        
        return $query;    
    
    }*/
    
    /*protected function configureDefaultFilterValues(array &$filterValues)
    {
 	$now = new \DateTime('now');
    
	$filterValues['tipoestado'] = [
		'value' => '1',
	];
	
	$filterValues['anio'] = [
		'value' => $now->format('Y'),
	];
	
	$filterValues['mes'] = [
		'value' => $now->format('m'),
	];
    }*/
    
    public function getFilterParameters(){
	$now = new \DateTime('now');
	$this->datagridValues = array_merge(
		array(
			'tipoestado' => array('value' => '1'), 
			'anio' => array('value' => $now->format('Y')),
			'mes' => array('value' => $now->format('m'))
		), $this->datagridValues);
	return parent::getFilterParameters();
    }

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('nrocaso')
            //->add('clienteid')
            ->add('nombre')
            //->add('tipoid')
            //->add('tipo')
            //->add('denunciante')
            //->add('dominio')
            //->add('marca')
            //->add('color')
            //->add('falla')
            //->add('calle')
            //->add('numero')
            //->add('depto')
            //->add('casa')
            /*->add('lote')
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
            ->add('hsfinalizacion')*/
            ->add('tipoestado', null, array('label' => 'Estado', 'show_filter' => true))
	    ->add('anio', null, array('label' => 'Año', 'show_filter' => true))
            ->add('mes', null, array('label' => 'Mes', 'show_filter' => true))            
            /*->add('opini')
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
            ->add('otros')*/
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
	    //->add('id', null, array('label'=>'Caso'))
            ->add('nrocaso', null, array('label'=>'Caso'))
            //->add('clienteid')
            ->add('nombre')
            //->add('tipoid')
            //->add('tipo')
            //->add('denunciante')
            ->add('dominio')
            ->add('marca')
            //->add('color')
	    ->add('colorid', null, array('label'=>'Color'))
            ->add('falla')
            //->add('calle')
            //->add('numero')
            //->add('depto')
            //->add('casa')
            //->add('lote')
            //->add('manzana')
            //->add('localidad')
            //->add('provincia')
            ->add('destino')
            //->add('localidaddest')
            //->add('kilometros')
            //->add('telefono')
            //->add('piso')
            //->add('provinciadest')
            ->add('hsllamada', null, array('label'=>'Llamada'))
            //->add('hsasignacion')
            //->add('hsarribo')
            //->add('hsfinalizacion')
            //->add('estado')
            //->add('mes')
            //->add('anio')
            //->add('opini')
            //->add('opfin')
            ->add('movilid', null, array('label'=>'Movil'))
            ->add('choferid', null, array('label'=>'Chofer'))
            //->add('movil')
            //->add('chofer')
            //->add('kmini')
            //->add('kmfin')
            //->add('codaut')
            ->add('empresaid', null, array('label'=>'Empresa'))
            //->add('empresa')
            //->add('tipocli')
            //->add('tipodist')
            //->add('obs')
            //->add('abrloc1')
            //->add('abrloc2')
            //->add('movilnro')
            //->add('abrchof')
            //->add('servfin')
            //->add('impcob')
            //->add('kmreal')
            //->add('kmaju1')
            //->add('kmaju2')
            //->add('kmtot')
            //->add('perf')
            //->add('hsliq')
            //->add('modelo')
            //->add('hsalta')
            //->add('inactivo')
            //->add('ciermec')
            //->add('mecfecha')
            //->add('opcierre')
            //->add('cerrado')
            //->add('hsprogramacion')
            //->add('impbase')
            //->add('segundos')
            //->add('tablamodificada')
            //->add('usuario')
            //->add('revisar')
            //->add('porque')
            //->add('facturaid')
            //->add('ciermov')
            //->add('otros')
	    ->add('tipoestado', null, array('label'=>'Estado'))
            ->add('_action', null, [
                'actions' => [
                    'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
	    ->add('nrocaso')
	    ->add('tipocli')
	    ->add('empresaid')
            ->add('empresa')
	    ->add('denunciante')
	    
            
            ->add('clienteid')
            ->add('nombre')
	    ->add('telefono')
	    ->add('marca')
	    ->add('modelo')
	    ->add('color')
	    ->add('dominio')	    

	    ->add('provincia')
            ->add('localidad')
            ->add('calle')
            ->add('numero')
            ->add('depto')
            ->add('lote')
            ->add('manzana')
            ->add('casa')
	    
            ->add('falla')
            ->add('destino')
	    
            /*->add('tipoid')
            ->add('tipo')            
            

            ->add('localidaddest')
            ->add('kilometros')
            
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
            ->add('otros')*/
            ;
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
}
=======
<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class ServicioAdmin extends AbstractAdmin
{

    protected $datagridValues = [
        '_sort_order' => 'DESC',
        '_sort_by' => 'id',
    ];
    
    /*protected function configureDefaultFilterValues(array &$filterValues)
    {
	$filterValues['estado'] = [
		'value' => 'Z',
	];
    }*/

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('nrocaso')
            //->add('clienteid')
            ->add('nombre')
            //->add('tipoid')
            //->add('tipo')
            //->add('denunciante')
            ->add('dominio')
            //->add('marca')
            //->add('color')
            //->add('falla')
            //->add('calle')
            //->add('numero')
            //->add('depto')
            //->add('casa')
            /*->add('lote')
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
            ->add('hsfinalizacion')*/
            ->add('estado')
            /*->add('mes')
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
            ->add('otros')*/
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
	    ->add('id', null, array('label'=>'CasoID'))
            ->add('nrocaso')
            ->add('mes')
            ->add('anio')
            //->add('clienteid')
            ->add('nombre')
            //->add('tipoid')
            //->add('tipo')
            //->add('denunciante')
            ->add('dominio')
            ->add('marca')
            ->add('color')
            ->add('falla')
            //->add('calle')
            //->add('numero')
            //->add('depto')
            //->add('casa')
            //->add('lote')
            //->add('manzana')
            //->add('localidad')
            //->add('provincia')
            ->add('destino')
            //->add('localidaddest')
            //->add('kilometros')
            //->add('telefono')
            //->add('piso')
            //->add('provinciadest')
            ->add('hsllamada')
            //->add('hsasignacion')
            //->add('hsarribo')
            //->add('hsfinalizacion')
            //->add('estado')
            //->add('opini')
            //->add('opfin')
            //->add('movilid')
            //->add('choferid')
            //->add('movil')
            //->add('chofer')
            //->add('kmini')
            //->add('kmfin')
            //->add('codaut')
            //->add('empresaid')
            ->add('empresa')
            //->add('tipocli')
            //->add('tipodist')
            //->add('obs')
            //->add('abrloc1')
            //->add('abrloc2')
            //->add('movilnro')
            //->add('abrchof')
            //->add('servfin')
            //->add('impcob')
            //->add('kmreal')
            //->add('kmaju1')
            //->add('kmaju2')
            //->add('kmtot')
            //->add('perf')
            //->add('hsliq')
            //->add('modelo')
            //->add('hsalta')
            //->add('inactivo')
            //->add('ciermec')
            //->add('mecfecha')
            //->add('opcierre')
            //->add('cerrado')
            //->add('hsprogramacion')
            //->add('impbase')
            //->add('segundos')
            //->add('tablamodificada')
            //->add('usuario')
            //->add('revisar')
            //->add('porque')
            //->add('facturaid')
            //->add('ciermov')
            //->add('otros')
            ->add('_action', null, [
                'actions' => [
                    //'show' => [],
                    'edit' => [],
                    'delete' => [],
                ],
            ]);
    }

    protected function configureFormFields(FormMapper $formMapper): void
    {
        $formMapper
	    //->add('nrocaso')
            //->add('mes')
            //->add('anio')
	    ->add('tipocli')
	    ->add('empresaid')
            ->add('empresa')
	    ->add('denunciante')
	    
            
            ->add('clienteid')
            ->add('nombre')
	    ->add('telefono')
	    ->add('marca')
	    ->add('modelo')
	    ->add('color')
	    ->add('dominio')	    

	    ->add('provincia')
            ->add('localidad')
            ->add('calle')
            ->add('numero')
            ->add('depto')
            ->add('lote')
            ->add('manzana')
            ->add('casa')
	    
            ->add('falla')
            ->add('destino')
	    
            ->add('tipoid')
            ->add('tipo')            
            

            ->add('localidaddest')
            ->add('kilometros')
            
            //->add('id')
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
}
>>>>>>> 51ad8fe070756666a39abcfcd047553950d0766e
