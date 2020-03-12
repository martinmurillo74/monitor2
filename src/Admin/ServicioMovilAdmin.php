<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;
use Sonata\CoreBundle\Form\Type\DatePickerType;

final class ServicioMovilAdmin extends AbstractAdmin
{
    public function  configure()
    {
        $this->parentAssociationMapping = 'servicio';
    } 

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            //->add('id')
            ->add('movil')
            ->add('chofer')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper
            //->add('id')
            ->add('movil')
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
            //->add('id')
            ->add('movil')
            ->add('chofer')
            ->add('impbase')
            ->add('impcob')
            ->add('kmini')
            ->add('kmfin')
            ->add('hsasignacion', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Asignación', 'required' => false))
            ->add('hsarribo', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Arribo', 'required' => false))
            ->add('hsfinalizacion', DatePickerType::class, array('format' => 'yyyy-MM-dd hh:mm', 'label'=>'Finalización', 'required' => false))
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            //->add('id')
            ->add('movil')
            ->add('chofer')
            ->add('impbase')
            ->add('impcob')
            ;
    }
}
