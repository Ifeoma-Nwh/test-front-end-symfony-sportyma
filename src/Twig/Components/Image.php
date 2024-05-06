<?php

namespace App\Twig\Components;

use Symfony\UX\TwigComponent\Attribute\AsTwigComponent;

#[AsTwigComponent]

class Image
{
  public string $class;
  public string $url;
  public string $alt;
}