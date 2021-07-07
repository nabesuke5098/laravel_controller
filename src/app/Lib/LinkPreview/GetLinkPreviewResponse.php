<?php
namespace App\Lib\LinkPreview;

final class GetLinkPreviewResponse
{
  public $title;
  public $description;
  public $cover;

  public function __contsruct(string $title, string $description, string $cover)
  {
    $this->title = $title;
    $this->description = $description;
    $this->cover = $cover;
  }
}