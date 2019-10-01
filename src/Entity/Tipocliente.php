<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipocliente
 *
 * @ORM\Table(name="tipocliente")
 * @ORM\Entity
 */
class Tipocliente
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
     * @ORM\Column(name="TIPO", type="string", length=45, nullable=false)
     */
    private $tipo;

    public function __toString(): ?string
    {
        return $this->tipo;
    }      
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }


}
