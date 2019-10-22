<?php

declare(strict_types=1);

namespace App\Admin;

use Sonata\AdminBundle\Admin\AbstractAdmin;
use Sonata\AdminBundle\Datagrid\DatagridMapper;
use Sonata\AdminBundle\Datagrid\ListMapper;
use Sonata\AdminBundle\Form\FormMapper;
use Sonata\AdminBundle\Show\ShowMapper;

final class ClienteAdmin extends AbstractAdmin
{

    protected function configureDatagridFilters(DatagridMapper $datagridMapper): void
    {
        $datagridMapper
            ->add('empresaid')
            ->add('id')
            ->add('nombre')
            ->add('dni')
            ->add('tipo')
            ->add('dominio')
            ->add('poliza')
            ->add('vigencia')
            ->add('tipo2')
            ->add('provin')
            ->add('marcamod')
            ;
    }

    protected function configureListFields(ListMapper $listMapper): void
    {
        $listMapper            
            //->add('id')
            ->add('nombre')
            //->add('dni')
            //->add('tipo')
            ->add('dominio')
			->add('empresaid')
            ->add('poliza')
            ->add('vigencia')
            //->add('tipo2')
            ->add('provin')
            //->add('marcamod')
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
            ->add('empresaid')
            ->add('id')
            ->add('nombre')
            ->add('dni')
            ->add('tipo')
            ->add('dominio')
            ->add('poliza')
            ->add('vigencia')
            ->add('tipo2')
            ->add('provin')
            ->add('marcamod')
            ;
    }

    protected function configureShowFields(ShowMapper $showMapper): void
    {
        $showMapper
            ->add('empresaid')
            ->add('id')
            ->add('nombre')
            ->add('dni')
            ->add('tipo')
            ->add('dominio')
            ->add('poliza')
            ->add('vigencia')
            ->add('tipo2')
            ->add('provin')
            ->add('marcamod')
            ;
    }
}
