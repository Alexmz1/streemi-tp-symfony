<?php

namespace App\Entity;

use App\Repository\CategorieMediaRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: CategorieMediaRepository::class)]
class CategorieMedia
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    /**
     * @var Collection<int, Media>
     */
    #[ORM\ManyToMany(targetEntity: Media::class, inversedBy: 'categorieMedia')]
    private Collection $media;

    /**
     * @var Collection<int, Categorie>
     */
    #[ORM\ManyToMany(targetEntity: Categorie::class, inversedBy: 'categorieMedia')]
    private Collection $category;

    public function __construct()
    {
        $this->media = new ArrayCollection();
        $this->category = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    /**
     * @return Collection<int, Media>
     */
    public function getMedia(): Collection
    {
        return $this->media;
    }

    public function addMedium(Media $medium): static
    {
        if (!$this->media->contains($medium)) {
            $this->media->add($medium);
        }

        return $this;
    }

    public function removeMedium(Media $medium): static
    {
        $this->media->removeElement($medium);

        return $this;
    }

    /**
     * @return Collection<int, Categorie>
     */
    public function getCategory(): Collection
    {
        return $this->category;
    }

    public function addCategory(Categorie $category): static
    {
        if (!$this->category->contains($category)) {
            $this->category->add($category);
        }

        return $this;
    }

    public function removeCategory(Categorie $category): static
    {
        $this->category->removeElement($category);

        return $this;
    }
}
