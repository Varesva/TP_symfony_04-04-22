<?php

namespace App\Entity;

use App\Repository\CategorieRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=CategorieRepository::class)
 */
class Categorie
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
    private $article_alphab;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getArticleAlphab(): ?string
    {
        return $this->article_alphab;
    }

    public function setArticleAlphab(string $article_alphab): self
    {
        $this->article_alphab = $article_alphab;

        return $this;
    }
}
