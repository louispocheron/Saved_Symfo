<?php

namespace App\Entity;

use App\Entity\User;
use App\Repository\AssociationsRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;
use Symfony\Bridge\Doctrine\Validator\Constraints\UniqueEntity;
use Symfony\Component\Validator\Constraints as Assert;
use ApiPlatform\Core\Annotation\ApiResource;



#[ORM\Entity(repositoryClass: AssociationsRepository::class)]
#[UniqueEntity(fields: ['numeroSiret'], message: 'Ce numéro SIRET est déjà utilisé par une association')]
#[UniqueEntity(fields: ['name'], message: 'Une association utilise déja ce nom')]

class Associations
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 1000)]
    private $name;

    #[ORM\Column(type: 'string', length: 3000, nullable: true)]
    private $logo;

    #[ORM\Column(type: 'string', length: 5000, nullable: true)]
    private $description;


    #[ORM\ManyToMany(targetEntity: User::class, mappedBy: 'association')]
    private $users;

    #[ORM\OneToMany(mappedBy: 'association', targetEntity: Action::class)]
    private $actions;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'admin')]
    private $user;


    // minimum length of the string must be 10 characters
    #[Assert\Length(min: 14, minMessage: "Le numéro SIRET doit contenir au moins 14 caractères")]
    #[ORM\Column(type: 'string', length: 255)]
    private $numeroSiret;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $region;

    #[ORM\Column(length: 255, nullable: false)]
    private ?string $departement = null;

    public function __construct()
    {
        $this->users = new ArrayCollection();
        $this->actions = new ArrayCollection();
    }

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

    public function getLogo(): ?string
    {
        return $this->logo;
    }

    public function setLogo(string $logo): self
    {
        $this->logo = $logo;

        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(?string $description): self
    {
        $this->description = $description;

        return $this;
    }


    /**
     * @return Collection<int, User>
     */
    public function getUsers(): Collection
    {
        return $this->users;
    }

    public function addUser(User $user): self
    {
        if (!$this->users->contains($user)) {
            $this->users[] = $user;
            $user->addAssociation($this);
        }

        return $this;
    }

    public function removeUser(User $user): self
    {
        if ($this->users->removeElement($user)) {
            $user->removeAssociation($this);
        }

        return $this;
    }

    /**
     * @return Collection<int, Action>
     */
    public function getActions(): Collection
    {
        return $this->actions;
    }

    public function addAction(Action $action): self
    {
        if (!$this->actions->contains($action)) {
            $this->actions[] = $action;
            $action->setAssociation($this);
        }

        return $this;
    }

    public function removeAction(Action $action): self
    {
        if ($this->actions->removeElement($action)) {
            // set the owning side to null (unless already changed)
            if ($action->getAssociation() === $this) {
                $action->setAssociation(null);
            }
        }

        return $this;
    }

    public function getUser(): ?User
    {
        return $this->user;
    }

    public function setUser(?User $user): self
    {
        $this->user = $user;

        return $this;
    }

    public function getNumeroSiret(): ?string
    {
        return $this->numeroSiret;
    }

    public function setNumeroSiret(string $numeroSiret): self
    {
        $this->numeroSiret = $numeroSiret;

        return $this;
    }

    public function getRegion(): ?string
    {
        return $this->region;
    }

    public function setRegion(?string $region): self
    {
        $this->region = $region;

        return $this;
    }

    public function getDepartement(): ?string
    {
        return $this->departement;
    }

    public function setDepartement(?string $departement): self
    {
        $this->departement = $departement;

        return $this;
    }
}
