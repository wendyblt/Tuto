<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class Category
{
    /**
     * @ORM\Id()
     * @ORM\GeneratedValue()
     * @ORM\Column(type="integer")
     *
     * @var int
     */
    private $id;

    /**
     * @ORM\Column(type="string")
     *
     * @var string
     */
    private $label;

    /**
     * @ORM\OneToMany(targetEntity=Resource::class, mappedBy="category")
     */
    private $resources;

    public function getId(): int
    {
        return $this->id;
    }

    public function getLabel(): string
    {
        return $this->label;
    }

    public function setLabel(string $label): Category
    {
        $this->label = $label;

        return $this;
    }

    /**
     * @return mixed
     */
    public function getResources()
    {
        return $this->resources;
    }

    /**
     * @param mixed $resources
     *
     * @return Category
     */
    public function setResources($resources)
    {
        $this->resources = $resources;

        return $this;
    }
}
