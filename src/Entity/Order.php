<?php

namespace App\Entity;

use App\Repository\OrderRepository;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;
use Doctrine\DBAL\Types\Types;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: OrderRepository::class)]
#[ORM\Table(name: '`order`')]
class Order
{
    #[ORM\Id]
    #[ORM\GeneratedValue]
    #[ORM\Column]
    private ?int $id = null;

    #[ORM\ManyToOne(inversedBy: 'orders')]
    private ?User $Users = null;

    #[ORM\ManyToMany(targetEntity: Product::class, inversedBy: 'orders')]
    private Collection $Product;

    #[ORM\Column(length: 255)]
    private ?string $Delivery_info = null;

    #[ORM\Column(type: Types::DATE_MUTABLE)]
    private ?\DateTimeInterface $Order_date = null;

    #[ORM\Column(type: Types::DECIMAL, precision: 10, scale: '0')]
    private ?string $Order_total = null;

    public function __construct()
    {
        $this->Product = new ArrayCollection();
    }

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getUsers(): ?User
    {
        return $this->Users;
    }

    public function setUsers(?User $Users): self
    {
        $this->Users = $Users;

        return $this;
    }

    /**
     * @return Collection<int, Product>
     */
    public function getProduct(): Collection
    {
        return $this->Product;
    }

    public function addProduct(Product $product): self
    {
        if (!$this->Product->contains($product)) {
            $this->Product->add($product);
        }

        return $this;
    }

    public function removeProduct(Product $product): self
    {
        $this->Product->removeElement($product);

        return $this;
    }

    public function getDeliveryInfo(): ?string
    {
        return $this->Delivery_info;
    }

    public function setDeliveryInfo(string $Delivery_info): self
    {
        $this->Delivery_info = $Delivery_info;

        return $this;
    }

    public function getOrderDate(): ?\DateTimeInterface
    {
        return $this->Order_date;
    }

    public function setOrderDate(\DateTimeInterface $Order_date): self
    {
        $this->Order_date = $Order_date;

        return $this;
    }

    public function getOrderTotal(): ?string
    {
        return $this->Order_total;
    }

    public function setOrderTotal(string $Order_total): self
    {
        $this->Order_total = $Order_total;

        return $this;
    }
}
