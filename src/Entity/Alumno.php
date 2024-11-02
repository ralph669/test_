<?php

namespace App\Entity;

use App\Repository\AlumnoRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: AlumnoRepository::class)]
class Alumno
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 75)]
    private ?string $Nombre = null;

    #[ORM\Column(length: 75)]
    private ?string $Apellidos = null;

    #[ORM\Column(length: 255)]
    private ?string $Grado = null;

    #[ORM\Column]
    private ?int $Edad = null;

    #[ORM\Column(length: 75, nullable: true)]
    private ?string $Seccion = null;

    #[ORM\Column(length: 255,  nullable: true)]
    private ?string $foto = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getNombre(): ?string
    {
        return $this->Nombre;
    }

    public function setNombre(string $Nombre): static
    {
        $this->Nombre = $Nombre;

        return $this;
    }

    public function getApellidos(): ?string
    {
        return $this->Apellidos;
    }

    public function setApellidos(string $Apellidos): static
    {
        $this->Apellidos = $Apellidos;

        return $this;
    }

    public function getGrado(): ?string
    {
        return $this->Grado;
    }

    public function setGrado(string $Grado): static
    {
        $this->Grado = $Grado;

        return $this;
    }

    public function getEdad(): ?int
    {
        return $this->Edad;
    }

    public function setEdad(int $Edad): static
    {
        $this->Edad = $Edad;

        return $this;
    }

    public function getSeccion(): ?string
    {
        return $this->Seccion;
    }

    public function setSeccion(?string $Seccion): static
    {
        $this->Seccion = $Seccion;

        return $this;
    }

    public function getFoto(): ?string
    {
        return $this->foto;
    }

    public function setFoto(string $foto): static
    {
        $this->foto = $foto;

        return $this;
    }
}
