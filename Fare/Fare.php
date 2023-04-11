<?php

class  Fare
{
    public $age;
    public $distance;
    public $fare;

    public function setDetails($age, $distance)
    {
        $this->age = $age;
        $this->distance = $distance;
    }

    public function getDetails()
    {
        echo "Age: " . $this->age . "years old<br>";
        echo "Distance: " . $this->distance . " km <br>";
    }
    public function callCalulate()
    {
        $fare = 8;
        if (10<$this->age && $this->age < 60) {
            if ($this->distance <= 4) {
                return $fare;

            } elseif ($this->distance > 4) {
                $result = $fare + $this->distance - 4;
                return $result;
            }
        } elseif (80>$this->age && $this->age >= 60) {
            if ($this->distance <= 4) {
                $result = $fare * 0.8;
                return $result;
            } elseif ($this->distance > 4) {
                $result = ($fare + $this->distance - 4)* 0.8;
                return $result;
            }
        }else{
            return $fare;
        }
    }
}
