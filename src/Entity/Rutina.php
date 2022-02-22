<?php

namespace App\Entity;

use App\Repository\RutinaRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: RutinaRepository::class)]
class Rutina
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;
    

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'reservas')]
    #[ORM\JoinColumn(nullable: false)]
    private $Cliente;

    #[ORM\Column(type: 'datetime')]
    private $fechaInicio;

    #[ORM\Column(type: 'datetime')]
    private $fechaFin;

    #[ORM\ManyToOne(targetEntity: Canal::class, inversedBy: 'reservas')]
    #[ORM\JoinColumn(nullable: false)]
    private $Canal;

    #[ORM\Column(type: 'float')]
    private $precio;



    public function getId(): ?int
    {
        return $this->id;
    }

    public function getCliente(): ?User
    {
        return $this->Cliente;
    }

    public function setCliente(?User $Cliente): self
    {
        $this->Cliente = $Cliente;

        return $this;
    }

    public function getFechaInicio(): ?\DateTimeInterface
    {
        return $this->fechaInicio;
    }

    public function setFechaInicio(\DateTimeInterface $fechaInicio): self
    {
        $this->fechaInicio = $fechaInicio;

        return $this;
    }

    public function getFechaFin(): ?\DateTimeInterface
    {
        return $this->fechaFin;
    }

    public function setFechaFin(\DateTimeInterface $fechaFin): self
    {
        $this->fechaFin = $fechaFin;

        return $this;
    }

    public function getCanal(): ?Canal
    {
        return $this->Canal;
    }

    public function setCanal(?Canal $Canal): self
    {
        $this->Canal = $Canal;

        return $this;
    }

    public function getPrecio(): ?float
    {
        return $this->precio;
    }

    public function setPrecio(float $precio): self
    {
        $this->precio = $precio;

        return $this;
    }


}

