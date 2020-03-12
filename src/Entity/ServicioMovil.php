<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ServicioMovil
 *
 * @ORM\Table(name="servicio_movil", indexes={@ORM\Index(name="fk_servicio_movil_movil1_idx", columns={"movil_id"}), @ORM\Index(name="fk_servicio_movil_servicio1_idx", columns={"servicio_id"})})
 * @ORM\Entity
 */
class ServicioMovil
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
     * @var \Servicio
     *
     * @ORM\ManyToOne(targetEntity="Servicio")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="servicio_id", referencedColumnName="ID")
     * })
     */
    private $servicio;

    /**
     * @var \Movil
     *
     * @ORM\ManyToOne(targetEntity="Movil")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="movil_id", referencedColumnName="ID")
     * })
     */
    private $movil;
    
    /**
     * @var \Chofer
     *
     * @ORM\ManyToOne(targetEntity="Chofer")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="chofer_id", referencedColumnName="ID")
     * })
     */
    private $chofer;
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="IMPBASE", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $impbase = NULL;
    
    /**
     * @var float|null
     *
     * @ORM\Column(name="IMPCOB", type="float", precision=10, scale=0, nullable=true, options={"default"="NULL"})
     */
    private $impcob = NULL;
    
    /**
     * @var int|null
     *
     * @ORM\Column(name="KMINI", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kmini = NULL;

    /**
     * @var int|null
     *
     * @ORM\Column(name="KMFIN", type="integer", nullable=true, options={"default"="NULL"})
     */
    private $kmfin = NULL;
    
    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSASIGNACION", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsasignacion = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSARRIBO", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsarribo = NULL;

    /**
     * @var \DateTime|null
     *
     * @ORM\Column(name="HSFINALIZACION", type="datetime", nullable=true, options={"default"="NULL"})
     */
    private $hsfinalizacion = NULL;
    

   public function __toString() {
        return ''.$this->getMovil();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getServicio(): ?Servicio
    {
        return $this->servicio;
    }

    public function setServicio(?Servicio $servicio): self
    {
        $this->servicio = $servicio;

        return $this;
    }

    public function getMovil(): ?Movil
    {
        return $this->movil;
    }

    public function setMovil(?Movil $movil): self
    {
        $this->movil = $movil;

        return $this;
    }

    public function getImpbase(): ?float
    {
        return $this->impbase;
    }

    public function setImpbase(?float $impbase): self
    {
        $this->impbase = $impbase;

        return $this;
    }

    public function getImpcob(): ?float
    {
        return $this->impcob;
    }

    public function setImpcob(?float $impcob): self
    {
        $this->impcob = $impcob;

        return $this;
    }

    public function getChofer(): ?Chofer
    {
        return $this->chofer;
    }

    public function setChofer(?Chofer $chofer): self
    {
        $this->chofer = $chofer;

        return $this;
    }

    public function getKmini(): ?int
    {
        return $this->kmini;
    }

    public function setKmini(?int $kmini): self
    {
        $this->kmini = $kmini;

        return $this;
    }

    public function getKmfin(): ?int
    {
        return $this->kmfin;
    }

    public function setKmfin(?int $kmfin): self
    {
        $this->kmfin = $kmfin;

        return $this;
    }

    public function getHsasignacion(): ?\DateTimeInterface
    {
        return $this->hsasignacion;
    }

    public function setHsasignacion(?\DateTimeInterface $hsasignacion): self
    {
        $this->hsasignacion = $hsasignacion;

        return $this;
    }

    public function getHsarribo(): ?\DateTimeInterface
    {
        return $this->hsarribo;
    }

    public function setHsarribo(?\DateTimeInterface $hsarribo): self
    {
        $this->hsarribo = $hsarribo;

        return $this;
    }

    public function getHsfinalizacion(): ?\DateTimeInterface
    {
        return $this->hsfinalizacion;
    }

    public function setHsfinalizacion(?\DateTimeInterface $hsfinalizacion): self
    {
        $this->hsfinalizacion = $hsfinalizacion;

        return $this;
    }

    


}
