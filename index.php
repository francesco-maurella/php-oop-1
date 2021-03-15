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


$comic_001 = new Comicbook('Superman #159', 'Superman', 'DC', '02/2021', 'US', 'J. Strazinsky', 'R. Morales', 'eng', 32, 'comic', true);
$comic_002 = new Comicbook('Batman #147', 'Batman', 'DC', '03/2021', 'US', 'G. Morrison', 'T. Daniels', 'eng', 32, 'comic', true);
$comic_003 = new Comicbook('Ultimate Spider-man #12', 'Spider-man', 'Marvel', '08/2002', 'US', 'B. M. Bendis', 'M. Bagley', 'eng', 32, 'comic', true);
$comic_004 = new Comicbook('V for Vendetta', 'One-shot', 'Vertigo', '01/1991', 'US', 'A. Moore', 'D. Lloyd', 'eng', 185, 'hard-cover', true);
$comic_005 = new Comicbook('Dylan Dog #121', 'Dylan Dog', 'Bonelli', '01/1995', 'IT', 'T. Sclavi', 'B. Brindisi', 'ita', 98, 'trade-paperback', false);

$bray_001 = new Bluray ('Man of Steel', 'movie', '2012', 'US', 'action', 'Warner Bros', 'Zack Snyder', 'Henry Cavill, Amy Adams');
$bray_002 = new Bluray ('Dellamorte Dellamore', 'movie', '1995', 'IT', 'drama', 'Rai Cinema', 'Michele Soavi', 'Rupert Everett');
$bray_003 = new Bluray ('Arrow - Season 1', 'tv', '2011', 'US', 'action', 'CW', 'Greg Berlanti', 'Stephen Ammel');

$afigure_001 = new Actionfigures ('Hell Spawn', 'McFarlane Toys', 'statue', 'plastic', 2002);
$afigure_001 = new Actionfigures ('Magic', 'Hasbro', 'cards', 'hard-paper', 2019);
$afigure_001 = new Actionfigures ('Jason Funko Pop', 'Blumhouse', 'funkopop', 'plastic', 2017);

echo '<b>Titolo</b> : ' . $comic_001->title . '<br />';
echo '<b>Serie</b> : ' . $comic_001->series . '<br />';
echo '<b>Editore</b> : ' . $comic_001->editor . '<br />';
echo '<b>Data pubblicazione</b> : ' . $comic_001->date . '<br />';
echo '<b>Paese</b> : ' . $comic_001->country . '<br />';
echo '<b>Testi</b> : ' . $comic_001->writers . '<br />';
echo '<b>Disegni</b> : ' . $comic_001->artists . '<br />';
echo '<b>Lingua</b> : ' . $comic_001->language . '<br />';
echo '<b>Pagine</b> : ' . $comic_001->pages . '<br />';
echo '<b>Formato</b> : ' . $comic_001->format . '<br />';
echo '<b>Colori</b> : ' . $comic_001->colors . '<br />';
echo '<hr /> <br />';

echo '<b>Titolo</b> : ' . $comic_002->title . '<br />';
echo '<b>Serie</b> : ' . $comic_002->series . '<br />';
echo '<b>Editore</b> : ' . $comic_002->editor . '<br />';
echo '<b>Data pubblicazione</b> : ' . $comic_002->date . '<br />';
echo '<b>Paese</b> : ' . $comic_002->country . '<br />';
echo '<b>Testi</b> : ' . $comic_002->writers . '<br />';
echo '<b>Disegni</b> : ' . $comic_002->artists . '<br />';
echo '<b>Lingua</b> : ' . $comic_002->language . '<br />';
echo '<b>Pagine</b> : ' . $comic_002->pages . '<br />';
echo '<b>Formato</b> : ' . $comic_002->format . '<br />';
echo '<b>Colori</b> : ' . $comic_002->colors . '<br />';
echo '<hr /> <br />';

echo '<b>Titolo</b> : ' . $comic_003->title . '<br />';
echo '<b>Serie</b> : ' . $comic_003->series . '<br />';
echo '<b>Editore</b> : ' . $comic_003->editor . '<br />';
echo '<b>Data pubblicazione</b> : ' . $comic_003->date . '<br />';
echo '<b>Paese</b> : ' . $comic_003->country . '<br />';
echo '<b>Testi</b> : ' . $comic_003->writers . '<br />';
echo '<b>Disegni</b> : ' . $comic_003->artists . '<br />';
echo '<b>Lingua</b> : ' . $comic_003->language . '<br />';
echo '<b>Pagine</b> : ' . $comic_003->pages . '<br />';
echo '<b>Formato</b> : ' . $comic_003->format . '<br />';
echo '<b>Colori</b> : ' . $comic_003->colors . '<br />';
echo '<hr /> <br />';

echo '<b>Titolo</b> : ' . $comic_004->title . '<br />';
echo '<b>Serie</b> : ' . $comic_004->series . '<br />';
echo '<b>Editore</b> : ' . $comic_004->editor . '<br />';
echo '<b>Data pubblicazione</b> : ' . $comic_004->date . '<br />';
echo '<b>Paese</b> : ' . $comic_004->country . '<br />';
echo '<b>Testi</b> : ' . $comic_004->writers . '<br />';
echo '<b>Disegni</b> : ' . $comic_004->artists . '<br />';
echo '<b>Lingua</b> : ' . $comic_004->language . '<br />';
echo '<b>Pagine</b> : ' . $comic_004->pages . '<br />';
echo '<b>Formato</b> : ' . $comic_004->format . '<br />';
echo '<b>Colori</b> : ' . $comic_004->colors . '<br />';
echo '<hr /> <br />';

echo '<b>Titolo</b> : ' . $comic_005->title . '<br />';
echo '<b>Serie</b> : ' . $comic_005->series . '<br />';
echo '<b>Editore</b> : ' . $comic_005->editor . '<br />';
echo '<b>Data pubblicazione</b> : ' . $comic_005->date . '<br />';
echo '<b>Paese</b> : ' . $comic_005->country . '<br />';
echo '<b>Testi</b> : ' . $comic_005->writers . '<br />';
echo '<b>Disegni</b> : ' . $comic_005->artists . '<br />';
echo '<b>Lingua</b> : ' . $comic_005->language . '<br />';
echo '<b>Pagine</b> : ' . $comic_005->pages . '<br />';
echo '<b>Formato</b> : ' . $comic_005->format . '<br />';
echo '<b>Colori</b> : ' . $comic_005->colors . '<br />';
echo '<hr /> <br />';
