<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Prioridad
 *
 * @ORM\Table(name="prioridad")
 * @ORM\Entity
 */
class Prioridad
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false, options={"unsigned"=true})
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string
     *
     * @ORM\Column(name="PRIORIDAD", type="string", length=100, nullable=false)
     */
    private $prioridad;

    /**
     * @var string
     *
     * @ORM\Column(name="COLOR", type="string", length=100, nullable=false)
     */
    private $color;
    
    public function __toString()
    {
        return $this->prioridad;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getPrioridad(): ?string
    {
        return $this->prioridad;
    }

    public function setPrioridad(string $prioridad): self
    {
        $this->prioridad = $prioridad;

        return $this;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor($color): self
    {
        $this->color = $color;

        return $this;
    }


}
