<?php

class SimpleClass {

    protected $string;
    
    public function __invoke()
    {
        return $this;
    }

    public function stdout($str) 
    {    
        $this->console($this->string .= $str . ' ');

        return $this;
    }
    
    private function console($str) 
    {
        echo '<script>'
            . 'console.log("' . $str . '")'
            . '</script>';
    }

}

$obj = new SimpleClass;
$obj()->stdout('Hello')->stdout('World'); 


