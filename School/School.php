<?php
class School
{
    public $name;
    public $yearlevel;
    public $unit;
    public $choice;

    public function setDetails($name, $yearlevel, $unit,$choice)
    {
        $this->name = $name;
        $this->yearlevel = $yearlevel;
        $this->unit = $unit;
        $this->choice = $choice;
    }
    public function getName()
    {
        echo $this->name;
    }
    public function getYearlevel()
    {
        echo  $this->yearlevel;
    }
    public function getUnit()
    {
        echo $this->unit;
    }


    public function setUnit($yearlevel)
    {
        if ($yearlevel == 1) {
            return 550;
        } elseif ($yearlevel == 2) {
            return 630;
        } elseif ($yearlevel == 3) {
            return 470;
        } else
            return 501;
    }
    public function setLabfee($yearlevel)
    {
        if ($this->choice == 'without') {
            return 0;
        } else {
            if ($yearlevel == 1) {
                return 3359;
            } elseif ($yearlevel == 2) {
                return 4000;
            } elseif ($yearlevel == 3) {
                return 2890;
            } else {
                return 3555;
            }
        }
    }
    public function calulateFee($yearlevel)
    {
        $result = $this->setUnit($yearlevel) * $this->unit + $this->setLabfee($yearlevel);
        echo $result;
    }
}
