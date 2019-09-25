<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Chofer
 *
 * @ORM\Table(name="chofer")
 * @ORM\Entity
 */
class Chofer
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
     * @ORM\Column(name="APELLIDO", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $apellido = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DNI", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $dni = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ABRCHOF", type="string", length=4, nullable=true, options={"default"="NULL"})
     */
    private $abrchof = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="INACTIVO", type="smallint", nullable=true, options={"default"="NULL"})
     */
    private $inactivo = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MOTIVO", type="string", length=255, nullable=true, options={"default"="NULL"})
     */
    private $motivo = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="LOCALIDAD", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $localidad = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="CP", type="string", length=5, nullable=true, options={"default"="NULL"})
     */
    private $cp = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROVINCIA", type="string", length=25, nullable=true, options={"default"="NULL"})
     */
    private $provincia = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="DOMICILIO", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $domicilio = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="OBS", type="text", length=16777215, nullable=true, options={"default"="NULL"})
     */
    private $obs = NULL;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getApellido(): ?string
    {
        return $this->apellido;
    }

    public function setApellido(?string $apellido): self
    {
        $this->apellido = $apellido;

        return $this;
    }

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function setDni(?int $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getAbrchof(): ?string
    {
        return $this->abrchof;
    }

    public function setAbrchof(?string $abrchof): self
    {
        $this->abrchof = $abrchof;

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

    public function getMotivo(): ?string
    {
        return $this->motivo;
    }

    public function setMotivo(?string $motivo): self
    {
        $this->motivo = $motivo;

        return $this;
    }

    public function getLocalidad(): ?string
    {
        return $this->localidad;
    }

    public function setLocalidad(?string $localidad): self
    {
        $this->localidad = $localidad;

        return $this;
    }

    public function getCp(): ?string
    {
        return $this->cp;
    }

    public function setCp(?string $cp): self
    {
        $this->cp = $cp;

        return $this;
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

    public function getDomicilio(): ?string
    {
        return $this->domicilio;
    }

    public function setDomicilio(?string $domicilio): self
    {
        $this->domicilio = $domicilio;

        return $this;
    }

    public function getObs(): ?string
    {
        return $this->obs;
    }

    public function setObs(?string $obs): self
    {
        $this->obs = $obs;

        return $this;
    }


}
