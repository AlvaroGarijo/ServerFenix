<?php

namespace App\Entity;

use App\Repository\ClientsRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ClientsRepository::class)
 */
class Clients
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $name;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $email;

    /**
     * @ORM\Column(type="datetime")
     */
    private $date_of_registration;

    /**
     * @ORM\ManyToOne(targetEntity=User::class, inversedBy="clients")
     * @ORM\JoinColumn(nullable=false)
     */
    private $userClient;

   

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

    public function getEmail(): ?string
    {
        return $this->email;
    }

    public function setEmail(string $email): self
    {
        $this->email = $email;

        return $this;
    }

    public function getDateOfRegistration(): ?\DateTimeInterface
    {
        return $this->date_of_registration;
    }

    public function setDateOfRegistration(\DateTimeInterface $date_of_registration): self
    {
        $this->date_of_registration = $date_of_registration;

        return $this;
    }

    public function getUserClient(): ?User
    {
        return $this->userClient;
    }

    public function setUserClient(?User $userClient): self
    {
        $this->userClient = $userClient;

        return $this;
    }

   
}
