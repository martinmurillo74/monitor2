<?php

namespace App\EventListener;

use Doctrine\Common\EventSubscriber;
use Doctrine\ORM\Event\LifecycleEventArgs;
use App\Entity\Servicio;
use Symfony\Component\DependencyInjection\ContainerInterface;

class ServicioSubscriber implements EventSubscriber {

    protected $container;

    public function __construct(ContainerInterface $container) {
        $this->container = $container;
    }


    public function getSubscribedEvents() {
        return array(
            'prePersist'
        );
    }
    
    public function isEntitySupported($entity) {
        $supported = false;
        if ($entity instanceof Servicio) {
            $supported = true;
        }
        return $supported;
    }

    public function prePersist(LifecycleEventArgs $args) {
        $this->index($args);
    }

    public function index(LifecycleEventArgs $args) {
        $entity = $args->getEntity();
        if ($this->isEntitySupported($entity)) {
            // Obtengo el año actual
            $anio = intval(date('Y'));

            // Obtengo el mes actual
            $mes = intval(date('m'));
                
            $em = $args->getEntityManager();
            $er = $em->getRepository('App:ConfigNumCaso');
            // Obtengo el numero secuencial o el 1 en caso 
            // de ser el primero del mes
            $nuevonumero = $er->getLastNumeroCaso($anio, $mes, $em);

            if (!$nuevonumero) {
                // Guardo el primer registro en la Tabla ConfigNumCaso
                $config_num_caso = new \App\Entity\ConfigNumCaso();
                $config_num_caso->setMes($mes);
                $config_num_caso->setUltimonumero(1);
                $config_num_caso->setAnio($anio);
                $em->persist($config_num_caso);
                $em->flush();
                
                $nuevonumero = 1;
            } 

            $entity->setNrocaso($nuevonumero);
            $entity->setAnio($anio);
            $entity->setMes($mes);
  

        }
    }

    

}

?>
