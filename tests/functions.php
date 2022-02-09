<?php
require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessBikeDetails()
    {
        $input = [ ['id' => 1, 'bikeName' => 'Cola Bottle', 'bikeClass' => 'Road', 'suspensionType' => 'None', 'idealSurface' => 'Road', 'condition' => 'Excellent', 'brand' => 'Cannondale', 'model' => 'CAAD12', 'colour' => 'Black, silver and blue'] ];
        $expectedOutput = '<div class="bikeCard"><ul><li class="bike"><h2>Name:</h2><p>'. 'Cola Bottle'. '</p><h3>Brand and model:</h3><p>' . 'Cannondale' . ' ' . 'CAAD12' . '</p><h3>Bike Type:</h3><p>' . 'Road' . '</p><h3>Condition:</h3><p>' . 'Excellent' . '</p><h3>Colour:</h3><p>' . 'Black, silver and blue' . '</p></li></ul></div>';
        $actualOutput = bikeDetails($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
    public function testfailureBikeDetails()
    {
        $input = [];
        $expectedOutput = 'No info, yo!';
        $actualOutput = bikeDetails($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testMalformedBikeDetails()
    {
        $input = "banana's can't ride bikes";

        $this->expectException(TypeError::class);

        $output = bikeDetails($input);
    }

}