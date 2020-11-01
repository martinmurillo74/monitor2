<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * ConfigNumLegajo
 *
 * @ORM\Table(name="config_num_caso")
 * @ORM\Entity
 * @ORM\Entity(repositoryClass="App\Repository\ConfigNumCasoRepository")
 */
class ConfigNumCaso  
{
    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer", nullable=false)
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="IDENTITY")
     */
    private $id;

    /**
     * @var integer
     *
     * @ORM\Column(name="ultimoid", type="integer", nullable=true)
     */
    private $ultimoid;
    
    /**
     * @var integer
     *
     * @ORM\Column(name="ultimonumero", type="integer", nullable=true)
     */
    private $ultimonumero;

    /**
     * @var integer
     *
     * @ORM\Column(name="mes", type="integer", nullable=true)
     */
    private $mes;
        
    /**
     * @var integer
     *
     * @ORM\Column(name="anio", type="integer", nullable=true)
     */
    private $anio;

    
    
    
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUltimoid(): ?int
    {
        return $this->ultimoid;
    }

    public function setUltimoid(?int $ultimoid): self
    {
        $this->ultimoid = $ultimoid;

        return $this;
    }

    public function getUltimonumero(): ?int
    {
        return $this->ultimonumero;
    }

    public function setUltimonumero(?int $ultimonumero): self
    {
        $this->ultimonumero = $ultimonumero;

        return $this;
    }

    public function getMes(): ?int
    {
        return $this->mes;
    }

    public function setMes(?int $mes): self
    {
        $this->mes = $mes;

        return $this;
    }

    public function getAnio(): ?int
    {
        return $this->anio;
    }

    public function setAnio(?int $anio): self
    {
        $this->anio = $anio;

        return $this;
    }

   
    
    
}
