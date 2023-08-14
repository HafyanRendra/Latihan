<?php
class Shape{
    public function area(){
        return 0;
    }
}


Class Circle extends Shape {
    public $radius;

    public function __construct($radius){
        $this->radius= $radius;
    }

    public function area(){
        return $this->radius*$this->radius*3.14;
        
    }


}

Class Rectangle extends shape {
    public $width;
    public $height;

    public function __construct($width, $height){
        $this->width = $width;
        $this->height = $height;
    }

    public function area(){
        return $this->width * $this->height;
      
    }
}

$shapes = [
    new Circle(10),
    new Rectangle(10,10),
];

foreach ($shapes as $shape){
    echo "Area: ". $shape->area(). "<br>";
}

?>