<?php

    /* 
     *  Function    : generateSentence()
     * 
     *  Description : Generate a sentence listing out all items provided in an array.
     *  
     *  Parameters  : (string)               start         - The start of the sentence
     *                (array[string])        items         - The list of items
     *                (string/array[string]) append        - (optional) item types to be appended to each item
     * 
     *  Return      : string
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */

    
    function generateSentence($s,$a,$o = NULL) {

        // First list the variables to initiate the comma-seperated list, counter, 
        // get last key in the array of the required parameter 
        // and get datatype of the optional parameter
        $list = '';
        $i = 0;
        $last = array_key_last($a);
        $type = gettype($o);

        // Go through each value of the array in the required parameter
        foreach($a as $key => $value) {

            // Get the all values asides the last and second to the last
            if($i < ($last - 1)) {
                
                // Where the optional value is a string
                if($type == 'string') { $list .= $value . ' ' . $o . ', '; }

                // Where the optional value is an array
                elseif($type == 'array') { $list .= $value . ' ' . $o[$key] . ', '; }

                // Where the optional value is not given
                elseif($type == 'NULL') { $list .= $value . ', '; }
            
            // Get the second to the last value
            } elseif($i == ($last - 1)) {

                // Where the optional value is a string
                if($type == 'string') { $list .= $value . ' ' . $o . ' '; }

                // Where the optional value is an array
                elseif($type == 'array') { $list .= $value . ' ' . $o[$key] . ' '; }

                // Where the optional value is not given
                elseif($type == 'NULL') { $list .= $value . ' '; }

            // Get the last value
            } else { 

                // Where the optional value is a string
                if($type == 'string') { $list .= 'and ' . $value . ' ' . $o; }

                // Where the optional value is an array
                elseif($type == 'array') { $list .= 'and ' . $value . ' ' . $o[$key]; }

                // Where the optional value is not given
                elseif($type == 'NULL') { $list .= 'and ' . $value; } 
            
            }

            $i++;

        } unset($i,$key,$value); 

        // Return the solution
        return $s . ': ' . $list . '.';
        
    }