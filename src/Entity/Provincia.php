<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Provincia
 *
 * @ORM\Table(name="provincia")
 * @ORM\Entity
 */
class Provincia
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
     * @ORM\Column(name="PROVINCIA", type="string", length=100, nullable=true, options={"default"="NULL"})
     */
    private $provincia = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ABREV", type="string", length=4, nullable=true, options={"default"="NULL"})
     */
    private $abrev = NULL;
    
    public function __toString(): ?string
    {
        return $this->provincia;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProvincia(): ?string
    {
        return $this->provincia;
    }

    public function setProvincia(?string $provincia): self
    {
        $this->provincia = $provincia;

        return $this;
    }

    public function getAbrev(): ?string
    {
        return $this->abrev;
    }

    public function setAbrev(?string $abrev): self
    {
        $this->abrev = $abrev;

        return $this;
    }


}
