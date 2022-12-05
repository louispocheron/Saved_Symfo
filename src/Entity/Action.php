<?php

namespace App\Entity;

use App\Repository\ActionRepository;
use Doctrine\ORM\Mapping as ORM;
use ApiPlatform\Core\Annotation\ApiResource;

#[ORM\Entity(repositoryClass: ActionRepository::class)]
class Action
{
    #[ORM\Id]   
    #[ORM\GeneratedValue]
    #[ORM\Column(type: 'integer')]
    private $id;

    #[ORM\Column(type: 'string', length: 255)]
    private $villeDepart;

    #[ORM\Column(type: 'string', length: 255)]
    private $villeArrive;

    #[ORM\Column(type: 'integer')]
    private $km;

    #[ORM\Column(type: 'string', length: 5000)]
    private $raisons;

    #[ORM\Column(type: 'time', nullable: true)]
    private $heureDepart;

    #[ORM\Column(type: 'time', nullable: true)]
    private $heureArrivee;

    #[ORM\Column(type: 'date')]
    private $date;

    #[ORM\ManyToOne(targetEntity: User::class, inversedBy: 'actions')]
    #[ORM\JoinColumn(nullable: false)]
    private $user;

    #[ORM\ManyToOne(targetEntity: Associations::class, inversedBy: 'actions')]
    private $association;

    #[ORM\Column(type: 'string', nullable: true)]
    private $duree;

    #[ORM\Column(type: 'integer', nullable: true)]
    private $frais;

    #[ORM\Column(type: 'datetime', nullable: true)]
    private $createdAt;

    #[ORM\Column(type: 'decimal', nullable: true)]
    private $fraisKilometrique;

    #[ORM\Column(type: 'string')]
    private $charges;

    #[ORM\Column(type: 'string', length: 100)]
    private $groupe;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $dons;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $heuresValorisees;

    #[ORM\Column(type: 'string', length: 255, nullable: true)]
    private $aPayer;

    #[ORM\Column(type: 'decimal')]
    private $bareme;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getVilleDepart(): ?string
    {
        return $this->villeDepart;
    }

    public function setVilleDepart(string $villeDepart): self
    {
        $this->villeDepart = $villeDepart;

        return $this;
    }

    public function getVilleArrive(): ?string
    {
        return $this->villeArrive;
    }

    public function setVilleArrive(string $villeArrive): self
    {
        $this->villeArrive = $villeArrive;

        return $this;
    }

    public function getKm(): ?int
    {
        return $this->km;
    }

    public function setKm(int $km): self
    {
        $this->km = $km;

        return $this;
    }

    public function getRaisons(): ?string
    {
        return $this->raisons;
    }

    public function setRaisons(string $raisons): self
    {
        $this->raisons = $raisons;

        return $this;
    }

    public function getHeureDepart(): ?\DateTimeInterface
    {
        return $this->heureDepart;
    }

    public function setHeureDepart(?\DateTimeInterface $heureDepart): self
    {
        $this->heureDepart = $heureDepart;

        return $this;
    }

    public function getHeureArrivee(): ?\DateTimeInterface
    {
        return $this->heureArrivee;
    }

    public function setHeureArrivee(?\DateTimeInterface $heureArrivee): self
    {
        $this->heureArrivee = $heureArrivee;

        return $this;
    }

    public function getDate(): ?\DateTimeInterface
    {
        return $this->date;
    }

    public function setDate(\DateTimeInterface $date): self
    {
        $this->date = $date;

        return $this;
    }

    public function getUser(): ?user
    {
        return $this->user;
    }

    public function setUserId(?user $users): self
    {
        $this->user = $users;

        return $this;
    }

    public function getAssociation(): ?associations
    {
        return $this->association;
    }

    public function setAssociation(?associations $association): self
    {
        $this->association = $association;

        return $this;
    }

    public function getDuree(): ?string
    {
        return $this->duree;
    }

    public function setDuree(string $duree): self
    {
        $this->duree = $duree;

        return $this;
    }

    public function getFrais(): ?int
    {
        return $this->frais;
    }

    public function setFrais(?int $frais): self
    {
        $this->frais = $frais;

        return $this;
    }

    public function getCreatedAt(): ?\DateTime
    {
        return $this->createdAt;
    }

    public function setCreatedAt(\DateTime $createdAt): self
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    public function getFraisKilometrique(): ?string
    {
        return $this->fraisKilometrique;
    }

    public function setFraisKilometrique(?string $fraisKilometrique): self
    {
        $this->fraisKilometrique = $fraisKilometrique;

        return $this;
    }

    public function getCharges(): ?string
    {
        return $this->charges;
    }

    public function setCharges(string $charges): self
    {
        $this->charges = $charges;

        return $this;
    }

    public function getGroupe(): ?string
    {
        return $this->groupe;
    }

    public function setGroupe(string $groupe): self
    {
        $this->groupe = $groupe;

        return $this;
    }

    public function getDons(): ?string
    {
        return $this->dons;
    }

    public function setDons(?string $dons): self
    {
        $this->dons = $dons;

        return $this;
    }

    public function getHeuresValorisees(): ?string
    {
        return $this->heuresValorisees;
    }

    public function setHeuresValorisees(?string $heuresValorisees): self
    {
        $this->heuresValorisees = $heuresValorisees;

        return $this;
    }

    public function getAPayer(): ?string
    {
        return $this->aPayer;
    }

    public function setAPayer(?string $aPayer): self
    {
        $this->aPayer = $aPayer;

        return $this;
    }

    public function getBareme()
    {
        return $this->bareme;
    }

    public function setBareme($bareme): self
    {
        $this->bareme = $bareme;

        return $this;
    }
}
