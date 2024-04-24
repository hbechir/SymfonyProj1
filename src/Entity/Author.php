<?php

// src/Entity/Author.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: "App\Repository\AuthorRepository")]
class Author
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;

    #[ORM\Column(type: "string", length: 255)]
    private $name;

    #[ORM\Column(type: "string", length: 255)]
    private $surname;


    // getters and setters...
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getName(): ?string
    {
        return $this->name;
    }
    public function setName(string $name): self
    {
        $this->name = $name;
        return $this;
    }
    public function getSurname(): ?string
    {
        return $this->surname;
    }
    public function setSurname(string $surname): self
    {
        $this->surname = $surname;
        return $this;
    }
    public function __toString(): string
    {
        return $this->name . ' ' . $this->surname;
    }
    
}


?>