<?php

$pay_system =['PerfectMoney','Payeer','Payza','AdvCash'];


$count_pay_system = count($pay_system);


echo '<form method = "post"> <h4>SELECT PAYMENTS</h4>';


for($i=0;$i<$count_pay_system;$i++)
{

    //echo $i . '->' . $pay_system[$i] . '<br>' ;
    
    echo  '<label>
                <input type="radio" name="pay_carrier['.$i.']"   value="  '.$pay_system[$i] .'   ">'.$pay_system[$i] .'</label> ';
}



echo '<br><br><input type = "submit" name = "submit" value ="Submit"> 
        </form> ';

    if(isset($_POST["submit"]))  
    { 
     
        foreach($_POST['pay_carrier'] as $value)
        {
          $values[] = $value;
        }
        
        echo implode(',',$values);
    } 


?>
