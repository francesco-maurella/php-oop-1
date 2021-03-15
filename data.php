<?php

class Comicbook  {
  public $title;
  public $series;
  public $editor;
  public $date;
  public $country;
  public $writers;
  public $artists;
  public $language;
  public $pages;
  public $format;
  public $color;

    public function __construct ($title, $series, $editor, $date, $country, $writers, $artists, $language, $pages, $format, $color) {
      $this->title = $title;
      $this->series = $series;
      $this->editor = $editor;
      $this->date = $date;
      $this->country = $country;
      $this->writers = $writers;
      $this->artists = $artists;
      $this->language = $language;
      $this->pages = $pages;
      $this->format = $format;
      $this->color = $color;
    }
}

class Bluray  {
  public $title;
  public $type;
  public $year;
  public $country;
  public $genre;
  public $studio;
  public $director;
  public $cast;

    public function __construct ($title, $type, $year, $country, $genre, $studio, $director, $cast) {
      $this->title = $title;
      $this->type = $type;
      $this->year = $year;
      $this->year = $country;
      $this->genre = $genre;
      $this->studio = $studio;
      $this->director = $director;
      $this->cast = $cast;
    }
}

class Actionfigures  {
  public $modelname;
  public $productor;
  public $type;
  public $material;
  public $year;

    public function __construct ($modelname, $productor, $type, $material, $year) {
      $this->modelname = $modelname;
      $this->productor = $productor;
      $this->type = $type;
      $this->material = $material;
      $this->year = $year;
    }
}

class Catalogue  {
  public $name;
  public $comics = [];
  public $blurays = [];
  public $aFigures = [];

  public function __construct ($name) {
    $this->name = $name;
  }

  public function addComic($comic) {
      $this->comics[] = $comic;
  }

  public function addBluray($bluray) {
      $this->blurays[] = $bluray;
  }

  public function addAFigure($aFigure) {
      $this->aFigures[] = $aFigure;
  }
}


$comic_001 = new Comicbook('Superman #159', 'Superman', 'DC', '02/2021', 'US', 'J. Strazinsky', 'R. Morales', 'eng', 32, 'comic', true);
$comic_002 = new Comicbook('Batman #147', 'Batman', 'DC', '03/2021', 'US', 'G. Morrison', 'T. Daniels', 'eng', 32, 'comic', true);
$comic_003 = new Comicbook('Ultimate Spider-man #12', 'Spider-man', 'Marvel', '08/2002', 'US', 'B. M. Bendis', 'M. Bagley', 'eng', 32, 'comic', true);
$comic_004 = new Comicbook('V for Vendetta', 'One-shot', 'Vertigo', '01/1991', 'US', 'A. Moore', 'D. Lloyd', 'eng', 185, 'hard-cover', true);
$comic_005 = new Comicbook('Dylan Dog #121', 'Dylan Dog', 'Bonelli', '01/1995', 'IT', 'T. Sclavi', 'B. Brindisi', 'ita', 98, 'trade-paperback', false);

$bray_001 = new Bluray ('Man of Steel', 'movie', '2012', 'US', 'action', 'Warner Bros', 'Zack Snyder', 'Henry Cavill, Amy Adams');
$bray_002 = new Bluray ('Dellamorte Dellamore', 'movie', '1995', 'IT', 'drama', 'Rai Cinema', 'Michele Soavi', 'Rupert Everett');
$bray_003 = new Bluray ('Arrow - Season 1', 'tv', '2011', 'US', 'action', 'CW', 'Greg Berlanti', 'Stephen Ammel');

$afigure_001 = new Actionfigures ('Hell Spawn', 'McFarlane Toys', 'Statue', 'plastic', 2002);
$afigure_002 = new Actionfigures ('Magic', 'Hasbro', 'Role playing game', 'hard-paper', 2019);
$afigure_003 = new Actionfigures ('Jason Funko Pop', 'Blumhouse', 'FunkoPop', 'plastic', 2017);

$comicsShop = new Catalogue ('Worlds Finest - Comics Shop');

$comicsShop->addComic($comic_001);
$comicsShop->addComic($comic_002);
$comicsShop->addComic($comic_003);
$comicsShop->addComic($comic_004);
$comicsShop->addComic($comic_005);

$comicsShop->addBluray($bray_001);
$comicsShop->addBluray($bray_002);
$comicsShop->addBluray($bray_003);

$comicsShop->addAFigure($afigure_001);
$comicsShop->addAFigure($afigure_002);
$comicsShop->addAFigure($afigure_003);
