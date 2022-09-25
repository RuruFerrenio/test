<?php
class Rectangle{
    
    private $width;
    private $height;
    
    public function setWidth($width){
        $this->width = $width;
    }
    
    public function setHeight($height){
        $this->height = $height;
    }
    
    public function getWidth(){
        return $this->width;
    }
    
    public function getHeight(){
        return $this->height;
    }
    
    public function __construct($width,$height){
        $this->setWidth($width);
        $this->setHeight($height);
    }
    
    public function calculateArea(){
        return $this->getWidth() * $this->getHeight();
    }
}

class Circle{
    
    private $radius;
    
    public function setRadius($radius){
        $this->radius = $radius;
    }
    
    public function getRadius(){
        return $this->radius;
    }
    
    public function __construct($radius){
        $this->setRadius($radius);
    }
    
    public function calculateArea(){
        return $this->getRadius() * $this->getRadius() * pi();
    }
}

class AreaCalculator{
    
    public function calculate($shapes = []){
        
        $area = null;
        
        if(is_array($shapes)){
            foreach($shapes as $shape){
                $area[] = $shape->calculateArea();
            }
        }
        else{
            $area = $shapes->calculateArea();
        }

        return $area;
    }
    
}

$circle = new Circle(5);
$rect = new Rectangle(8,5);
$obj = new AreaCalculator();
print_r($obj->calculate(Array($rect,$circle)));
echo $obj->calculate($rect);
echo $obj->calculate($circle);