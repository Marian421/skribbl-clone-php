<?php

namespace App\Entity;

use App\Repository\UsersRepository;
use Doctrine\ORM\Mapping as ORM;

#[ORM\Entity(repositoryClass: UsersRepository::class)]
class Users
{
  #[ORM\Id]
  #[ORM\GeneratedValue]
  #[ORM\Column]
  private ?int $id = null;

  #[ORM\Column(length: 180, unique: true)]
  private ?string $email = null;

  #[ORM\Column(length: 255)]
  private ?string $password_hash = null;

  #[ORM\Column(length: 100)]
  private ?string $display_name = null;

  #[ORM\Column]
  private ?\DateTime $created_at = null;

  #[ORM\Column(nullable: true)]
  private ?\DateTime $updated_at = null;

  public function getId(): ?int
  {
    return $this->id;
  }

  public function getEmail(): ?string
  {
    return $this->email;
  }

  public function setEmail(string $email): static
  {
    $this->email = $email;

    return $this;
  }

  public function getPasswordHash(): ?string
  {
    return $this->password_hash;
  }

  public function setPasswordHash(string $password_hash): static
  {
    $this->password_hash = $password_hash;

    return $this;
  }

  public function getDisplayName(): ?string
  {
    return $this->display_name;
  }

  public function setDisplayName(string $display_name): static
  {
    $this->display_name = $display_name;

    return $this;
  }

  public function getCreatedAt(): ?\DateTime
  {
    return $this->created_at;
  }

  public function setCreatedAt(\DateTime $created_at): static
  {
    $this->created_at = $created_at;

    return $this;
  }

  public function getUpdatedAt(): ?\DateTime
  {
    return $this->updated_at;
  }

  public function setUpdatedAt(?\DateTime $updated_at): static
  {
    $this->updated_at = $updated_at;

    return $this;
  }
}
