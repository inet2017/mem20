<?php

namespace App\Entity;

use App\Repository\ProductosRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ProductosRepository::class)
 */
class Productos
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\ManyToOne(targetEntity=producto::class, inversedBy="productos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $producto;

    /**
     * @ORM\ManyToOne(targetEntity=Fabricante::class, inversedBy="productos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $fabricante_id;

    /**
     * @ORM\ManyToOne(targetEntity=TipoProducto::class, inversedBy="productos")
     * @ORM\JoinColumn(nullable=false)
     */
    private $estado_id;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getProducto(): ?producto
    {
        return $this->producto;
    }

    public function setProducto(?producto $producto): self
    {
        $this->producto = $producto;

        return $this;
    }

    public function getFabricanteId(): ?Fabricante
    {
        return $this->fabricante_id;
    }

    public function setFabricanteId(?Fabricante $fabricante_id): self
    {
        $this->fabricante_id = $fabricante_id;

        return $this;
    }

    public function getEstadoId(): ?TipoProducto
    {
        return $this->estado_id;
    }

    public function setEstadoId(?TipoProducto $estado_id): self
    {
        $this->estado_id = $estado_id;

        return $this;
    }
}
