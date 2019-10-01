<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Movil
 *
 * @ORM\Table(name="movil")
 * @ORM\Entity
 */
class Movil
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
     * @var string|null
     *
     * @ORM\Column(name="PATENTE", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $patente = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOVILNRO", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $movilnro = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KM", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $km = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="INACTIVO", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $inactivo = NULL;
    
    public function __toString()
    {
        return $this->nombre;
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre()
    {
        return $this->nombre;
    }

    public function setNombre($nombre): self
    {
        $this->nombre = $nombre;

        return $this;
    }

    public function getPatente(): ?string
    {
        return $this->patente;
    }

    public function setPatente(?string $patente): self
    {
        $this->patente = $patente;

        return $this;
    }

    public function getMovilnro(): ?string
    {
        return $this->movilnro;
    }

    public function setMovilnro(?string $movilnro): self
    {
        $this->movilnro = $movilnro;

        return $this;
    }

    public function getKm(): ?int
    {
        return $this->km;
    }

    public function setKm(?int $km): self
    {
        $this->km = $km;

        return $this;
    }

    public function getInactivo(): ?int
    {
        return $this->inactivo;
    }

    public function setInactivo(?int $inactivo): self
    {
        $this->inactivo = $inactivo;

        return $this;
    }


}
