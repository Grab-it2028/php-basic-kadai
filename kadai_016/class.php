<!DOCTYPE html>
<html lang="ja">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php課題sort</title>
</head>
<body>
  
  <?php
  class Food {
    private $name;
    private $price;

    public function set_price(int $price) {
      $this->price = $price;
    }
    public function show_price() {
      echo $this->price;
    }

    public function __construct(string $name, int $price) {
      $this->name = $name;
      $this->price = $price;
    }
  }

  class Animal {
    private $name;
    private $height;
    private $weight;

    public function set_height(int $height) {
      $this->height = $height;
    }
    public function show_height() {
      echo $this->height;
    }

    public function __construct(string $name, int $height, int $weight) {
      $this->name = $name;
      $this->height = $height;
      $this->weight = $weight;
    }
  }
  
  $food = new Food('potato', 250);
  $animal = new Animal('dog', 60, 5000);

  print_r($food);
  print('<br>');
  print_r($animal);
  print('<br>');
  
  
  $food->show_price();
  print('<br>');
  
  $animal->show_height();
  

  ?>
  
</body>
</html>