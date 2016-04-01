<?
    echo 'hello world <br/>';
    
    class MyIterator implements Iterator
    {
        private $iterArr = array();
        public function __construct($array)
        {
            if (is_array($array)) 
            {
                $this->iterArr = $array;
            }
        }
        public function rewind()
        {
            reset($this->iterArr);
        }
        public function current()
        {
            $currentEl = current($this->iterArr);
            return $currentEl;
        }
        public function key() 
        {
            $key = key($this->iterArr);
            return $key;
        }
        public function next() 
        {
            $nextEl = next($this->iterArr);
            return $nextEl;
        }
        public function valid()
        {
            $key = key($this->iterArr);
            $isValid = ($key !== NULL && $key !== FALSE);
            return $isValid;
        }
    }
    
    $helloArray = array("Hello"," ","world","!");
    $iterator = new myIterator($helloArray);
    
    foreach ($iterator as $word)
    {
        echo $word;
    }