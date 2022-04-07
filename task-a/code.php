<?php

    /* 
     *  Function    : containsWord()
     * 
     *  Description : Checks whether a sentence contains a specific word, case insensitive.
     *  
     *  Parameters  : (string) word         - The word to find
     *                (string) sentence     - The sentence to search
     * 
     *  Return      : boolean
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     *                (In console, simply run the command 'php run.php')
     * 
     */
    
    
    function containsWord($w,$s) {

        // First convert the word and sentence to lowercase
        $word = strtolower($w);
        $sentence = strtolower($s);

        // then remove the full stop from the sentence
        $sentence = str_replace('.','',$sentence);

        // Next convert the sentence to an array
        $sentenceArray = explode(' ',$sentence);

        // then check if the word exists in the sentence array      
        if(in_array($word,$sentenceArray)) { return true; } else { return false; }

    }
