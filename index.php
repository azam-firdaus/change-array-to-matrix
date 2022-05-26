<?php
function tukarmatrix($array_asal, $groupkan)
    {
        $array_final = array();
        
        $bilangagn = count($array_asal);
        
        
        // untuk dapatkan index
        for($i = 0; $i < $groupkan; $i++){
            $sometet = $i;
            $asdasd = array();
            for($j = 0; $j < $bilangagn; $j++){
                if( $sometet < $bilangagn){
                    $asdasd[] = $sometet;
                }
                
                $sometet += $groupkan;
            }
            $arrara[] = $asdasd;
        }
        
        foreach($arrara as $key_each){
            $indiviv = array();
            foreach($array_asal as $key => $value){
                if(in_array($key, $key_each)){
                    $indiviv[] = $value;
                }
            }
            $array_final[] = $indiviv;
        }
        return $array_final;
    }
    
    // change this array to desired value
    $val_negeri = array(2,4,3,5,1,6,8,4,5,2,3,5,1,2,3,5,7,5,4,6,7,4,3,6,4,5,6,7,2,3,4,6,7,4,3,5,4,6);
    
    // call the function
    // second parameter is for the size of matrix, see README
    $new_aarara = tukarmatrix($val_negeri, 4);
    
    foreach($new_aarara as $val){
    	foreach($val as $valueee){
    		echo $valueee.', ';
    	}
    	echo "\n";
    }
    
?>

