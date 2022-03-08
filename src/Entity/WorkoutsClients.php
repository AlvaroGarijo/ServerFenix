<?php

namespace App\Entity;

use App\Repository\WorkoutsClientsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=WorkoutsClientsRepository::class)
 */
class WorkoutsClients
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\OneToMany(targetEntity=workouts::class, mappedBy="date_registration")
     */
    private $workout;

    public function __construct()
    {
        $this->workout = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, workouts>
     */
    public function getWorkout(): Collection
    {
        return $this->workout;
    }

    public function addWorkout(workouts $workout): self
    {
        if (!$this->workout->contains($workout)) {
            $this->workout[] = $workout;
            $workout->setDateRegistration($this);
        }

        return $this;
    }

    public function removeWorkout(workouts $workout): self
    {
        if ($this->workout->removeElement($workout)) {
            // set the owning side to null (unless already changed)
            if ($workout->getDateRegistration() === $this) {
                $workout->setDateRegistration(null);
            }
        }

        return $this;
    }
}
