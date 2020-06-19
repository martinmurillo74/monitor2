<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Distancia
 *
 * @ORM\Table(name="distancia")
 * @ORM\Entity
 */
class Distancia
{
    /**
     * @var int
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="distancia", type="string", length=30, nullable=true, options={"default" = NULL})
     */
    private $distancia = NULL;
    
    public function __toString(): ?string
    {
        return $this->distancia;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getDistancia(): ?string
    {
        return $this->distancia;
    }

    public function setDistancia(?string $distancia): self
    {
        $this->distancia = $distancia;

        return $this;
    }


}
