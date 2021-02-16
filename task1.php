<?php

class SimpleClass {

    private $string;
    
    public function __invoke()
    {
        return $this;
    }

    public function stdout($str) 
    {    
        $this->string .= $str . ' ';

        return $this;
      
    }

    public function __destruct() {
        $this->console();
    }
    
    private function console() {
        echo '<script>'
            . 'console.log("' . $this->string . '")'
            . '</script>';
    }

}

$obj = new SimpleClass;
$obj()->stdout('Hello')->stdout('World'); 


