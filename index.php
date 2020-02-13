<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
   <?php
    class Point{
        protected float $x = 0.0;
        protected float $y = 0.0;
    public function __constructPoint(float $x, float $y){
          $this->x = $x ;  
         $this->y = $y;
        
    }    
    public function getX(){
            return $this->x;
    }
    public function getY(){
            return $this->y;
    }



    public function setX($x){
         $this->x = $x;
    }

    public function setY($y){
        $this->y = $y;
    }
   
    
    
    public function setXY($x,$y){
        $this->x = $x ;
         $this->y = $y;
       
   }    

   public function getXY(){
    return [$this->x , $this->y];
}

    public function toString()
    {
        return  "<br>($this->x ,$this->y) </br>"  ;
    }

}

    class MoveablePoint extends Point {
            private float $xSpeed = 0.0;
            private float $ySpeed = 0.0;
        public function __construct(float $x, float $y ,float $xSpeed, float $ySpeed)
        {
            $this->x = $x ;  
            $this->y = $y;
            $this->xSpeed = $xSpeed ;  
            $this->ySpeed = $ySpeed;
        }
       
        public function getXspeed(){
            return $this->xSpeed;
    }
    public function getYspeed(){
            return $this->ySpeed;
    }



    public function setXspeed($xSpeed){
         $this->xSpeed = $xSpeed;
    }

    public function setYspeed($ySpeed){
        $this->ySpeed = $ySpeed;
    }
   
    
    
    public function setXYspeed($xSpeed,$ySpeed){
        $this->xSpeed = $xSpeed ;
         $this->ySpeed = $ySpeed;
       
   }    

   public function getXYspeed(){
    return [$this->xSpeed , $this->ySpeed];
}
    public function toString()
    {
        return "<br>($this->x ,$this->y) , speed = ($this->xSpeed ,$this->ySpeed) </br>" ;
    }


    public function move(){
        $this->x += $this->xSpeed;
        $this->y += $this->ySpeed;
        return $this;
        
    }
}
    
    $point = new Point(0,0);
    $point->setX(10);
    $point->setY(10);
    $point->setXY(10,10);
   echo "Point" . $point->toString();
    $moveablePoint = new MoveablePoint(10,150,0,0);
    $moveablePoint ->setXspeed(10);
    $moveablePoint ->setYspeed(100);
    $moveablePoint ->move();
    echo "Moveable Point" . $moveablePoint->toString();
    
    
    
    ?>
</body>
</html>