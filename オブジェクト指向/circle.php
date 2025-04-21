<?php

    class Rectangle{
        private $width;
        private $height;

        public function __construct($width,$height)
        {
            $this -> width = $width;
            $this -> height = $height;
        }

        public function getWidth(){
            return $this -> width;
        }

        public function getHeight(){
            return $this -> height;
        }

        public function setWidth($width){
            if( $width > 0 ){
                $this -> width = $width;
            } else{
                echo "幅は正の数でなければなりません。\n";
            }
        }

        public function setHigth( $height ){
            if ( $height > 0 ){
                $this -> height = $height;
            } else{
                echo "高さは正の値にしてください。\n";
            }
        }

        public function getArea(){
            return $this -> width *   $this -> height;
        }
    }

    $rectangle = new Rectangle(10,5);
    echo "幅: " . $rectangle->getWidth() . "\n";
    echo "面積: " . $rectangle->getArea() . "\n";  

    $rectangle->setWidth(-10);
    echo  "{$rectangle->getWidth()}"

?>