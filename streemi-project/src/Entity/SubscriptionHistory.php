<?php

namespace App\Entity;

use App\Repository\SubscriptionHistoryRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: SubscriptionHistoryRepository::class)]
class SubscriptionHistory
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $startDate = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $endDate = null;

    /**
     * @var Collection<int, User>
     */
    #[ORM\OneToMany(targetEntity: User::class, mappedBy: 'subscriptionHistory')]
    private Collection $subscription;

    #[ORM\ManyToOne(inversedBy: 'subscriptionHistories')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $subcriber = null;

    public function __construct()
    {
        $this->subscription = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getStartDate(): ?\DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate(\DateTimeInterface $startDate): static
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function getEndDate(): ?\DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate(\DateTimeInterface $endDate): static
    {
        $this->endDate = $endDate;

        return $this;
    }

    /**
     * @return Collection<int, User>
     */
    public function getSubscription(): Collection
    {
        return $this->subscription;
    }

    public function addSubscription(User $subscription): static
    {
        if (!$this->subscription->contains($subscription)) {
            $this->subscription->add($subscription);
            $subscription->setSubscriptionHistory($this);
        }

        return $this;
    }

    public function removeSubscription(User $subscription): static
    {
        if ($this->subscription->removeElement($subscription)) {
            // set the owning side to null (unless already changed)
            if ($subscription->getSubscriptionHistory() === $this) {
                $subscription->setSubscriptionHistory(null);
            }
        }

        return $this;
    }

    public function getSubcriber(): ?User
    {
        return $this->subcriber;
    }

    public function setSubcriber(?User $subcriber): static
    {
        $this->subcriber = $subcriber;

        return $this;
    }
}
