<?php
// src/Entity/Borrowing.php
namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: "App\Repository\BorrowingRepository")]
class Borrowing
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: "integer")]
    private $id;
    
    #[ORM\ManyToOne(targetEntity: "App\Entity\Student")]
    private $student;

    #[ORM\ManyToOne(targetEntity: "App\Entity\Book")]
    private $book;

    #[ORM\Column(type: "date")]
    private $dateBorrowed;

    #[ORM\Column(type: "boolean")]
    private $bookReturned;

    // getters and setters...
    public function getId(): ?int
    {
        return $this->id;
    }
    public function getStudent(): ?Student
    {
        return $this->student;
    }
    public function setStudent(?Student $student): self
    {
        $this->student = $student;
        return $this;
    }
    public function getBook(): ?Book
    {
        return $this->book;
    }
    public function setBook(?Book $book): self
    {
        $this->book = $book;
        return $this;
    }
    public function getDateBorrowed(): ?\DateTimeInterface
    {
        return $this->dateBorrowed;
    }
    public function setDateBorrowed(\DateTimeInterface $dateBorrowed): self
    {
        $this->dateBorrowed = $dateBorrowed;
        return $this;
    }
    public function getBookReturned(): ?bool
    {
        return $this->bookReturned;
    }
    public function setBookReturned(bool $bookReturned): self
    {
        $this->bookReturned = $bookReturned;
        return $this;
    }
    
}
?>