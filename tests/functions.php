<?php
require '../functions.php';

use PHPUnit\Framework\TestCase;

class Functions extends TestCase
{
    public function testSuccessbikeDetails()
    {
        $input = [ ['id' => 1, 'bikeName' => 'Cola Bottle', 'bikeClass' => 'Road', 'suspensionType' => 'None', 'idealSurface' => 'Road', 'condition' => 'Excellent', 'brand' => 'Cannondale', 'model' => 'CAAD12', 'colour' => 'Black, silver and blue'] ];
        $expectedOutput = '<div class="bikeCards"><p class="bikeList"><ul><il class="bike"><h2>Name:</h2> ' . 'Cola Bottle' . ' <h3>Brand and model:</h3> ' . 'Cannondale' . ' ' . 'CAAD12' . ' <h3>Bike Type:</h3> ' . 'Road' . '  ' . ' <h3>Condition:</h3> ' . 'Excellent' . '<h3>Colour:</h3>' . 'Black, silver and blue' . '</il></ul></p></div>';
        $actualOutput = bikeDetails($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }
    public function testfailurebikeDetails()
    {
        $input = []; //empty array
        $expectedOutput = 'No info, yo!';
        $actualOutput = bikeDetails($input);
        $this->assertEquals($expectedOutput, $actualOutput);
    }

    public function testMalformedbikeDetails()
    {
        $input = 'banana\'s can\'t ride bikes';

        $this->expectException(TypeError::class);

        $output = bikeDetails($input);
    }

}