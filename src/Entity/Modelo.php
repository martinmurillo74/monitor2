<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Modelo
 *
 * @ORM\Table(name="modelo")
 * @ORM\Entity
 */
class Modelo
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
     * @ORM\Column(name="MODELO", type="string", length=100, nullable=false)
     */
    private $modelo;

    /**
     * @var \Marca
     *
     * @ORM\ManyToOne(targetEntity="Marca")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="marcaid", referencedColumnName="ID")
     * })
     */
    private $marcaid;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getModelo(): ?string
    {
        return $this->modelo;
    }

    public function setModelo(string $modelo): self
    {
        $this->modelo = $modelo;

        return $this;
    }

    public function getMarcaid()
    {
        return $this->marcaid;
    }

    public function setMarcaid($marcaid): self
    {
        $this->marcaid = $marcaid;

        return $this;
    }


}
