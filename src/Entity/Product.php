<?php

namespace App\Entity;

use App\Entity\Order;
use Doctrine\ORM\Mapping as ORM;
use App\Repository\ProductRepository;
use Doctrine\Common\Collections\Collection;
use Symfony\Component\HttpFoundation\File\File;
use Doctrine\Common\Collections\ArrayCollection;
use Vich\UploaderBundle\Mapping\Annotation as Vich;

#[ORM\Entity(repositoryClass: ProductRepository::class)]
#[Vich\Uploadable]
class Product
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\Column(length: 150)]
    private ?string $Name = null;

    #[ORM\Column(length: 255)]
    private ?string $Description = null;

    #[ORM\Column]
    private ?float $Price = null;

    #[ORM\Column(length: 5)]
    private ?string $Size = null;

    #[ORM\Column(length: 100)]
    private ?string $Color = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Brand $Brand = null;

    #[ORM\ManyToOne(inversedBy: 'products')]
    #[ORM\JoinColumn(nullable: false)]
    private ?Category $Category = null;

    #[ORM\ManyToMany(targetEntity: Order::class, mappedBy: 'Product')]
    private Collection $orders;

    #[ORM\ManyToOne(inversedBy: 'Product')]
    private ?Basket $basket = null;


    
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $Created_at = null;
    
    #[ORM\Column(nullable: true)]
    private ?\DateTimeImmutable $Updated_at = null;
    
    #[ORM\Column(length: 255, type: 'string')]
    private ?string $attachment = null;
    
    
    #[Vich\UploadableField(mapping: 'products', fileNameProperty: 'attachment')]
    private ?File $attachmentFile = null;
    
    
    public function __construct()
    {
        $this->orders = new ArrayCollection();
    }
    
    public function getId(): ?int
    {
        return $this->id;
    }
    
    public function getName(): ?string
    {
        return $this->Name;
    }
    
    public function setName(string $Name): self
    {
        $this->Name = $Name;
        
        return $this;
    }
    
    public function getDescription(): ?string
    {
        return $this->Description;
    }

    public function setDescription(string $Description): self
    {
        $this->Description = $Description;

        return $this;
    }

    public function getPrice(): ?float
    {
        return $this->Price;
    }

    public function setPrice(float $Price): self
    {
        $this->Price = $Price;

        return $this;
    }

    public function getSize(): ?string
    {
        return $this->Size;
    }

    public function setSize(string $Size): self
    {
        $this->Size = $Size;

        return $this;
    }

    public function getColor(): ?string
    {
        return $this->Color;
    }

    public function setColor(string $Color): self
    {
        $this->Color = $Color;

        return $this;
    }

    public function getBrand(): ?Brand
    {
        return $this->Brand;
    }

    public function setBrand(?Brand $Brand): self
    {
        $this->Brand = $Brand;

        return $this;
    }

    public function getCategory(): ?Category
    {
        return $this->Category;
    }

    public function setCategory(?Category $Category): self
    {
        $this->Category = $Category;

        return $this;
    }

    /**
     * @return Collection<int, Order>
     */
    public function getOrders(): Collection
    {
        return $this->orders;
    }

    public function addOrder(Order $order): self
    {
        if (!$this->orders->contains($order)) {
            $this->orders->add($order);
            $order->addProduct($this);
        }

        return $this;
    }

    public function removeOrder(Order $order): self
    {
        if ($this->orders->removeElement($order)) {
            $order->removeProduct($this);
        }

        return $this;
    }

    public function getBasket(): ?Basket
    {
        return $this->basket;
    }

    public function setBasket(?Basket $basket): self
    {
        $this->basket = $basket;

        return $this;
    }


    public function getCreatedAt(): ?\DateTimeImmutable
    {
        return $this->Created_at;
    }

    public function setCreatedAt(?\DateTimeImmutable $Created_at): self
    {
        $this->Created_at = $Created_at;

        return $this;
    }

    public function getUpdatedAt(): ?\DateTimeImmutable
    {
        return $this->Updated_at;
    }

    public function setUpdatedAt(?\DateTimeImmutable $Updated_at): self
    {
        $this->Updated_at = $Updated_at;

        return $this;
    }

    public function getAttachment(): ?string
    {
        return $this->attachment;
    }

    public function setAttachment(?string $attachment): self
    {
        $this->attachment = $attachment;

        return $this;
    }

    public function getAttachmentFile(): ?File
    {
        return $this->attachmentFile;
    }
    public function setAttachmentFile(?File $attachmentFile = null): void
    {
        $this->attachmentFile = $attachmentFile;
        if (null !== $attachmentFile) {
            $this->Updated_at = new \DateTimeImmutable();
        }
    }
}
