<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Tipoestado
 *
 * @ORM\Table(name="falla")
 * @ORM\Entity
 */
class Falla
{
    /**
     * @var int
     *
     * @ORM\Column(name="ID", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var string|null
     *
     * @ORM\Column(name="falla", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $falla = NULL;
    
    public function __toString(): ?string
    {
        return $this->falla;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getFalla(): ?string
    {
        return $this->falla;
    }

    public function setFalla(?string $falla): self
    {
        $this->falla = $falla;

        return $this;
    }


}
