<?php

class Test {

    /**
     * @var int id
     */
    private $id;

    /**
     * Returns an integer ID
     * @return int
     */
    public function testMethod() 
    {
        return $this->id;
    }

}

$rc = new ReflectionClass('Test');
$str = $rc->getMethod('testMethod')->getDocComment();

echo '<script>console.log(`' . $str . '`)</script>';
