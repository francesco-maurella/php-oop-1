<?php

class Comicbook  {
  public $title;
  public $editor;
  public $date;
  public $country;
  public $series;
  public $writers;
  public $artists;
  public $language;
  public $pages;
  public $format;
  public $color;

    public function __construct (title, editor, date, country, series, writers, artists, language, pages, format, color) {
      $this->title = $title;
      $this->editor = $editor;
      $this->date = $date;
      $this->country = $country;
      $this->series = $series;
      $this->writers = $writers;
      $this->artists = $artists;
      $this->language = $language;
      $this->pages = $pages;
      $this->format = $format;
      $this->color = $color;
      $this->price = $price;
    }
}

class Bluray  {
  public $title;
  public $type;
  public $year;
  public $genre;
  public $studio;
  public $director;
  public $cast;
  public $synopsis;

    public function __construct (title, type, year, genre, studio, director, cast, synopsis) {
      $this->title = $title;
      $this->type = $type;
      $this->year = $year;
      $this->genre = $genre;
      $this->studio = $studio;
      $this->director = $director;
      $this->cast = $cast;
      $this->synopsis = $synopsis;
      $this->price = $price;
    }
}

class Actionfigures  {
  public $modelname;
  public $productor;
  public $genre;
  public $character;
  public $material;
  public $variant;
  public $price;


    public function __construct (modelname, productor, genre, character, material, variant, price) {
      $this->name = $name;
      $this->productor = $productor;
      $this->genre = $genre;
      $this->character = $character;
      $this->material = $material;
      $this->variant = $variant;
      $this->price = $price;
    }
}

 ?>
