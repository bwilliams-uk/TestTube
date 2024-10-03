<?php

use Demo\Calculator;

return new class extends BaseTest {

    public function boot()
    {
        return new Calculator;
    }

    public function testAdd($calculator)
    {
        $output = $calculator->add(2, 3);
        $this->assertEquals(5, $output);
    }
};
