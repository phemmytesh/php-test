<?php

    /* 
     *  Class       : Counter
     * 
     *  Description : Simple class allowing you to count by X, get the count value, and reset the value.
     * 
     *  Parameters  : (int) count           - (optional) The starting count value [default: 0]
     *  
     *  Variables   : (private:int) count   - The count value
     * 
     *  Functions
     * 
     *      Function        : (public) count()
     * 
     *          Description : Increment the count value
     *              
     *          Parameters  : (int) n       - (optional) The value to increase the count by [default: 1]
     * 
     *          Return      : NULL
     * 
     *      Function        : (public) get()
     * 
     *          Description : Return the current count value
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : int
     * 
     *      Function        : (public) reset()
     * 
     *          Description : Reset the count value to 0
     *  
     *          Parameters  : [NONE]
     * 
     *          Return      : NULL
     * 
     *  Example     : See run.php for input/output examples
     *  
     *  Test        : Execute run.php to test your implementation.
     * 
     */

    class Counter {

        private $a;
        private $n;
        private $count;
        
         // Initiate Class
        function __construct($i = 0) {

            $this->a = 0;           
            $this->n = $i;          // gets default value for class parameter
            $this->count = $i;      // current value set to default value
            
        }

        function count($j = 1) {

            // Keep track of count
            $this->a++;

            // At first iteration, only add the default values of the paramenter in the class and count method
            if($this->a == 1) { $this->count = $this->n + $j; }

            // Subsequent iterations, set the value of the parameter in the class to 0
            // and add the default value of the paramenter in the count method
            else {
                
                $this->n = 0;
                $this->count += $this->n + $j;

            }

        }

        function get() {

            return $this->count;

        }

        function reset() {

            $this->n = 0;
            $this->count = 0;

        }
        
    }

    $counter = new Counter();