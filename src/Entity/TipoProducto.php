<?php

namespace App\Entity;

use App\Repository\TipoProductoRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=TipoProductoRepository::class)
 */
class TipoProducto
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;
    /**
     * @ORM\Column(type="string", length=120)
     */
    private $estado;
    /**
     * @ORM\Column(type="boolean")
     */
    private $isActivo;

    /**
     * @ORM\OneToMany(targetEntity=Productos::class, mappedBy="estado_id")
     */
    private $productos;


    public function __construct($estado=null, $activo=null){

        $this->estado=$estado;
        $this->isActivo=$activo;
        $this->productos = new ArrayCollection();
        
    }
    public function getId(): ?int
    {
        return $this->id;
    }

    public function getEstado(): ?string
    {
        return $this->estado;
    }

    public function setEstado(string $estado): self
    {
        $this->estado = $estado;

        return $this;
    }

    public function getIsActivo(): ?bool
    {
        return $this->isActivo;
    }

    public function setIsActivo(bool $isActivo): self
    {
        $this->isActivo = $isActivo;

        return $this;
    }

    /**
     * @return Collection|Productos[]
     */
    public function getProductos(): Collection
    {
        return $this->productos;
    }

    public function addProducto(Productos $producto): self
    {
        if (!$this->productos->contains($producto)) {
            $this->productos[] = $producto;
            $producto->setEstadoId($this);
        }

        return $this;
    }

    public function removeProducto(Productos $producto): self
    {
        if ($this->productos->removeElement($producto)) {
            // set the owning side to null (unless already changed)
            if ($producto->getEstadoId() === $this) {
                $producto->setEstadoId(null);
            }
        }

        return $this;
    }

    
}
