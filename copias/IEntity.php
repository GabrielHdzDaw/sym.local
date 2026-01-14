<?php
namespace App\Entity;
interface IEntity
{
    public function toArray(): array;
    public function getId(): ?int;
}