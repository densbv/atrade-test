<?php

class SimpleClass {

    public function __invoke(string $str = '') 
    {
        if ($str !== '') {
            $this->console($str);
        }

        return $this;
    }

    public function console(string $str) 
    {
        echo '<script>'
        . 'console.log("' . $str . '")'
        . '</script>'; 
    }

}

(new SimpleClass)('Hello')()('world')()('!');


