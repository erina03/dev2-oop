<?php
class Employee
{
    public $name;
    public $position;
    public $civil_status;
    public $emp_status;
    public $hrs_worked;

    public function __construct($name,$civil_status,$position,$emp_status,$hrs_worked)
    {
       $this->name          = $name;
       $this->position      = $position;
       $this->civil_status  = $civil_status;
       $this->emp_status    = $emp_status;
       $this->hrs_worked    = $hrs_worked;
    }

    public function getName()
    {
       return $this->name;
    }

    public function sethealthCare()
    {
       if($this->civil_status == 'single'){
        return 200;
       }else{
        return 75;
       }
    }

    public function regularPay()
    {
      if($this->position =='admin'){
         if($this->emp_status =='Contractual'){
            return 350;
         }elseif($this->emp_status =='probationary'){
            return 400;
         }else{
            return 500;
         }
      }else{
         if($this->emp_status =='Contractual'){
            return 300;
         }elseif($this->emp_status =='probationary'){
            return 350;
         }else{
            return 400;
         }
      }
    }

    public function calRegulerpay()
    {
      if($this->hrs_worked >= 40){
         $regularPay = ($this->regularPay()/8)* 40;
      return $regularPay;
      }else{
         $regularPay = ($this->regularPay()/8)*$this->hrs_worked;
         return $regularPay;
      }
    }
    public function overtimePay()
    {
      if($this->position =='admin'){
         if($this->emp_status =='Contractual'){
            return 15;
         }elseif($this->emp_status =='probationary'){
            return 30;
         }else{
            return 40;
         }
      }else{
         if($this->emp_status =='Contractual'){
            return 10;
         }elseif($this->emp_status =='probationary'){
            return 25;
         }else{
            return 30;
         }
      }
    }
    public function calovertimePay()
    {
      if($this->hrs_worked >= 40){
         $pay = $this->hrs_worked -40;
         $overpay = $this->overtimePay()*$pay;
      return $overpay;
      }else{
         return 0;
      }
    }

    public function grossIncome()
    {
      $grossincome = $this->calovertimePay() + $this->calRegulerpay();
      return $grossincome ;
    }

    public function calTax()
    {
      if($this->civil_status =='single'){
         if($this->grossIncome()<=1000){
            return 0;
         }else{
            $tax = $this->grossIncome()*0.05;
            return $tax;
         }
      }else{
         if($this->grossIncome()<=1500){
            return 0;
         }else{
            $tax = $this->grossIncome()*0.03;
            return $tax;
         }
      }
    }

    public function netIncome()
    {
      $netincome =$this->grossIncome()-($this->calTax()+ $this->sethealthCare());
      return $netincome;
    }

}
