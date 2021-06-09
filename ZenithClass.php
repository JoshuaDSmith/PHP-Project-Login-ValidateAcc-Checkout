<?php
		}
		
    }

    $INT_DriverCount++;

}

// JOSH IGNORE THIS

foreach($ARR_Data['Policy'] as $Table => $Value)
{
    foreach($ARR_Data['Policy'][$Table] as $Column => $Value2)
    {
        if($Column == 'OnPolicy') 
        {
            
            $ARR_OnPolicyColumns = array_keys($ARR_Data['Policy'][$Table][0]);
            
            for($k = 0; $k < count($ARR_OnPolicyColumns); $k++)
            {
                
                if($ARR_OnPolicyColumns[$k] == 'Person' || $ARR_OnPolicyColumns[$k] == 'Address' || $ARR_OnPolicyColumns[$k] == 'Contact')
                {
                
                    foreach($ARR_Data['Policy'][$Table][0][$ARR_OnPolicyColumns[$k]] as $OnPolicySubTable => $OnPolicySubValue)
                    {
                        $STR_Filter = '
                            AND SaveReference_Column = "'.$ARR_OnPolicyColumns[$k].'_'.$OnPolicySubTable.'"
                        ';

                        $SaveReferenceResult = $classData -> SaveReference($STR_Filter);
                        for ($z = 0; $z < $SaveReferenceResult -> num_rows; $z++)
                        {

                            $Row = $SaveReferenceResult -> fetch_object();
                            $SaveReference = $Row -> SaveReference;
            
                            //$ARR_Data['Policy'][$Key1][$Key2][$Value2]['SaveRef'] = $SaveReference;
                            $ARR_Data['Policy'][$Table][0][$ARR_OnPolicyColumns[$k]][$OnPolicySubTable]['SaveRef'] = $SaveReference;
            
                        }
                    }
                
                }
                else
                {
                
                    $STR_Filter = '
                        AND SaveReference_Column = "'.$Table.'_'.$ARR_OnPolicyColumns[$k].'"
                    ';

                    $SaveReferenceResult = $classData -> SaveReference($STR_Filter);
                    for ($z = 0; $z < $SaveReferenceResult -> num_rows; $z++)
                    {

                        $Row = $SaveReferenceResult -> fetch_object();
                        $SaveReference = $Row -> SaveReference;
            
                        //$ARR_Data['Policy'][$Key1][$Key2][$Value2]['SaveRef'] = $SaveReference;
                        $ARR_Data['Policy'][$Table][0][$ARR_OnPolicyColumns[$k]]['SaveRef'] = $SaveReference;
            
                    }
                    
                }
                
            }
        } 
        else
        {
            //echo $Key1.'_'.$Key2.'<br>';
            $STR_Filter = '
                AND SaveReference_Column = "'.$Table.'_'.$Column.'"
            ';

            $SaveReferenceResult = $classData -> SaveReference($STR_Filter);
            for ($k = 0; $k < $SaveReferenceResult -> num_rows; $k++)
            {

                $Row = $SaveReferenceResult -> fetch_object();
                $SaveReference = $Row -> SaveReference;
            
                //$ARR_Data['Policy'][$Key1][$Key2][$Value2]['SaveRef'] = $SaveReference;
                $ARR_Data['Policy'][$Table][$Column]['SaveRef'] = $SaveReference;
            
            }
        }
    }
}

return $ARR_Data;

    
}