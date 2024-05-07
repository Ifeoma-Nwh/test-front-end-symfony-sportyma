<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]

class Input
{
  public string $id;
  public string $name;
  public string $type;
}