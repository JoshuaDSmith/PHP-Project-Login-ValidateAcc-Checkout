<?php

class NewCar {
    public $STR_Name;
    private $STR_Color;
    private $STR_Promo;
    public $Price;
    public $Percentage;

    function __construct($STR_Name, $STR_Color,$Price,$Percentage)
	{
      $this -> STR_Name = $STR_Name; 
      $this -> STR_Color = $STR_Color; 
      $this -> Price = $Price;
      $this -> Percentage = $Percentage; 
    }

    function get_STR_Name() 
	{
      return $this->STR_Name;
    }
    function TestFunction() 
	{
      return $this->STR_Color;
    }
    function get_STR_Color() 
	{
      return $this->STR_Color = "green";
    }
    
    function get_STR_Promo($STR_Promo) 
	{
      return $this->PromoCode = $STR_Promo;
    } 
    public function get_Percentage() 
	{
        $INT_PercentageOff = $this-> Price / $this->Percentage;
        $INT_newvalue = $this-> Price - $INT_PercentageOff;
        return $INT_newvalue; 
    }
   public function get_Multiplication($Data) 
   {
        $newvalue = $Data * $this -> Percentage;
        
        $HTML_Output = $newvalue; 

        return $HTML_Output;
   }

   public function SwitchNamePrinciples($Data) 
   {
        $StrLength =  strlen($Data);

        switch ($StrLength) {
            case 3:
            return "BMW";
            break;

            case 4:
            return "Audi";
            break;

            case 5:
            return "Honda";
            break;

            case 7:
            return "Bentley";
            break;

            default:
            return "Some other Vehicle";
            break;
        
        
   }
  }
}

?>

<a href='./page2.php'> Click me </a>;
