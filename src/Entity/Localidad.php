<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * Localidad
 *
 * @ORM\Table(name="localidad")
 * @ORM\Entity
 */
class Localidad
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
     * @ORM\Column(name="LOCALIDAD", type="string", length=200, nullable=true, options={"default"="NULL"})
     */
    private $localidad = NULL;

    /**
     * @var string|null
     *
     * @ORM\Column(name="ABREV", type="string", length=45, nullable=true, options={"default"="NULL"})
     */
    private $abrev = NULL;
    
       /**
     * @var \Provincia
     *
     * @ORM\ManyToOne(targetEntity="Provincia")
     * @ORM\JoinColumns({
     *   @ORM\JoinColumn(name="PROVINCIAID", referencedColumnName="ID")
     * })
     */
    private $provinciaid; 

    public function __toString(): ?string
    {
	if ($this->localidad != $this->provinciaid){
		return $this->localidad.' ('.$this->provinciaid.')';
	}else return $this->localidad;
    }    

    public function getId(): ?int
    {
        return $this->id;
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

    public function getProvinciaid()
    {
        return $this->provinciaid;
    }

    public function setProvinciaid($provinciaid): self
    {
        $this->provinciaid = $provinciaid;

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
