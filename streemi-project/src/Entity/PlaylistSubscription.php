<?php

namespace App\Entity;

use App\Repository\PlaylistSubscriptionRepository;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: PlaylistSubscriptionRepository::class)]
class PlaylistSubscription
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(type: Types::DATETIME_MUTABLE)]
    private ?\DateTimeInterface $subscribedAt = null;

    #[ORM\ManyToOne(inversedBy: 'playlistSubscriptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Playlist $playlist = null;

    #[ORM\ManyToOne(inversedBy: 'playlistSubscriptions')]
    #[ORM\JoinColumn(nullable: false)]
    private ?User $playlistUser = null;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getSubscribedAt(): ?\DateTimeInterface
    {
        return $this->subscribedAt;
    }

    public function setSubscribedAt(\DateTimeInterface $subscribedAt): static
    {
        $this->subscribedAt = $subscribedAt;

        return $this;
    }

    public function getPlaylist(): ?Playlist
    {
        return $this->playlist;
    }

    public function setPlaylist(?Playlist $playlist): static
    {
        $this->playlist = $playlist;

        return $this;
    }

    public function getPlaylistUser(): ?User
    {
        return $this->playlistUser;
    }

    public function setPlaylistUser(?User $playlistUser): static
    {
        $this->playlistUser = $playlistUser;

        return $this;
    }
}
