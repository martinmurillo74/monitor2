<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Cliente
 *
 * @ORM\Table(name="cliente", uniqueConstraints={@ORM\UniqueConstraint(name="DOMINIO", columns={"DOMINIO"})}, indexes={@ORM\Index(name="IDX_F41C9B25521E1991", columns={"empresa_id"})})
 * @ORM\Entity
 */
class Cliente
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
     * @ORM\Column(name="NOMBRE", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $nombre = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="DNI", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $dni = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TIPO", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $tipo = NULL;

    /**
     * @var string
     *
     * @ORM\Column(name="DOMINIO", type="string", length=8, nullable=false)
     */
    private $dominio;

    /**
     * @var string|null
     *
     * @ORM\Column(name="POLIZA", type="string", length=10, nullable=true, options={"default"="NULL"})
     */
    private $poliza = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="VIGENCIA", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $vigencia = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="TIPO2", type="string", length=3, nullable=true, options={"default"="NULL"})
     */
    private $tipo2 = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="PROVIN", type="string", length=20, nullable=true, options={"default"="NULL"})
     */
    private $provin = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="MARCAMOD", type="string", length=50, nullable=true, options={"default"="NULL"})
     */
    private $marcamod = NULL;

    /**
     * @var \Empresa
     *
     * @ORM\ManyToOne(targetEntity="Empresa")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="empresa_id", referencedColumnName="ID")
     * })
     */
    private $empresaid;
    
    public function __toString()
    {
        return $this->nombre.' - '.$this->dominio;
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

    public function getDni(): ?int
    {
        return $this->dni;
    }

    public function setDni(?int $dni): self
    {
        $this->dni = $dni;

        return $this;
    }

    public function getTipo(): ?string
    {
        return $this->tipo;
    }

    public function setTipo(?string $tipo): self
    {
        $this->tipo = $tipo;

        return $this;
    }

    public function getDominio(): ?string
    {
        return $this->dominio;
    }

    public function setDominio(string $dominio): self
    {
        $this->dominio = $dominio;

        return $this;
    }

    public function getPoliza(): ?string
    {
        return $this->poliza;
    }

    public function setPoliza(?string $poliza): self
    {
        $this->poliza = $poliza;

        return $this;
    }

    public function getVigencia(): ?\DateTimeInterface
    {
        return $this->vigencia;
    }

    public function setVigencia(?\DateTimeInterface $vigencia): self
    {
        $this->vigencia = $vigencia;

        return $this;
    }

    public function getTipo2(): ?string
    {
        return $this->tipo2;
    }

    public function setTipo2(?string $tipo2): self
    {
        $this->tipo2 = $tipo2;

        return $this;
    }

    public function getProvin(): ?string
    {
        return $this->provin;
    }

    public function setProvin(?string $provin): self
    {
        $this->provin = $provin;

        return $this;
    }

    public function getMarcamod(): ?string
    {
        return $this->marcamod;
    }

    public function setMarcamod(?string $marcamod): self
    {
        $this->marcamod = $marcamod;

        return $this;
    }

    public function getEmpresaid(): ?Empresa
    {
        return $this->empresaid;
    }

    public function setEmpresa(?Empresa $empresaid): self
    {
        $this->empresaid = $empresaid;

        return $this;
    }


}
