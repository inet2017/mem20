<?php

namespace App\Entity;

use App\Repository\TipoProductoRepository;
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
}
