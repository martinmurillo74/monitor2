<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Empresa
 *
 * @ORM\Table(name="empresa")
 * @ORM\Entity
 */
class Empresa
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
     * @ORM\Column(name="NOMBRE", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $nombre = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="TIPOEMP", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $tipoemp = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CALLE", type="string", length=30, nullable=true, options={"default"="NULL"})
     */
    private $calle = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="NUMERO", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $numero = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TELEFONO", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $telefono = NULL;

    public function __toString(): ?string
    {
        return $this->nombre;
    }    

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->nombre;
    }

    public function setNombre(?string $nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getTipoemp(): ?int
    {
        return $this->tipoemp;
    }

    public function setTipoemp(?int $tipoemp): self
    {
        $this->tipoemp = $tipoemp;

        return $this;
    }

    public function getCalle(): ?string
    {
        return $this->calle;
    }

    public function setCalle(?string $calle): self
    {
        $this->calle = $calle;

        return $this;
    }

    public function getNumero(): ?int
    {
        return $this->numero;
    }

    public function setNumero(?int $numero): self
    {
        $this->numero = $numero;

        return $this;
    }

    public function getTelefono(): ?string
    {
        return $this->telefono;
    }

    public function setTelefono(?string $telefono): self
    {
        $this->telefono = $telefono;

        return $this;
    }


}
