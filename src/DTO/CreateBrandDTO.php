<?php
// src/DTO/CreateCategoryDTO.php

namespace App\DTO;

use Symfony\Component\Validator\Constraints as Assert;

class CreateBrandDTO
{
    #[Assert\NotBlank(message: 'Le nom est obligatoire.')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le nom doit faire au moins {{ limit }} caractères.',
        maxMessage: 'Le nom ne peut pas dépasser {{ limit }} caractères.'
    )]
    public string $name;

    #[Assert\NotBlank(message: 'Le pays est obligatoire.')]
    #[Assert\Length(
        min: 2,
        max: 100,
        minMessage: 'Le pays doit contenir au moins {{ limit }} caractères',
        maxMessage: 'Le pays ne peut pas dépasser {{ limit }} caractères.'
    )]
    public ?string $country = null;
}