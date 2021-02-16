<?php

class SimpleClass {

    private $array = [];
    
    public function __invoke()
    {
        return $this;
    }

    public function stdout($str) 
    {
        $this->array[] = $str;
        $newStr = implode(' ', $this->array);

        echo '<script>console.log("' . $newStr . '")</script>';

        return $this;
    }

}

$obj = new SimpleClass;
$obj()->stdout('Hello')->stdout('World'); 


