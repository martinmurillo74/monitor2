<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Motivo
 *
 * @ORM\Table(name="motivo")
 * @ORM\Entity
 */
class Motivo
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
     * @ORM\Column(name="MOTIVO", type="string", length=40, nullable=true, options={"default"="NULL"})
     */
    private $motivo = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="USUARIO", type="string", length=8, nullable=true, options={"default"="NULL"})
     */
    private $usuario = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MAQUINA", type="string", length=15, nullable=true, options={"default"="NULL"})
     */
    private $maquina = NULL;

    public function getId(): ?int
    {
        return $this->id;
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

    public function getUsuario(): ?string
    {
        return $this->usuario;
    }

    public function setUsuario(?string $usuario): self
    {
        $this->usuario = $usuario;

        return $this;
    }

    public function getMaquina(): ?string
    {
        return $this->maquina;
    }

    public function setMaquina(?string $maquina): self
    {
        $this->maquina = $maquina;

        return $this;
    }


}
