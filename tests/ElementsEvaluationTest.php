<?php
declare(strict_types=1);

use PHPUnit\Framework\TestCase;

final class ElementsEvaluationTestCase extends TestCase
{
    public function testGetMultiplesLabelNoMultiples(): void
    {
        $element    = 0;        // multiple of 0?! Is null!
        $conditions = array( "Linio" => array(3), "IT" => array(5), "Linianos" => array(3,5) );

        (new ElementsEvaluation\Number(array()))->getMultiplesLabel($element, $conditions, $result);

        $this->assertEquals(null, $result[$element]);
    }

    public function testGetMultiplesLabelOneMultiples(): void
    {
        $element    = 39;           // Linio only; multiple of 3
        $conditions = array( "Linio" => array(3), "IT" => array(5), "Linianos" => array(3,5) );

        (new ElementsEvaluation\Number(array()))->getMultiplesLabel($element, $conditions, $result);

        $this->assertEquals('Linio', $result[$element]);
    }

    public function testGetMultiplesLabelAnotherMultiples(): void
    {
        $element    = 85;           // IT only; multiple of 5
        $conditions = array( "Linio" => array(3), "IT" => array(5), "Linianos" => array(3,5) );

        (new ElementsEvaluation\Number(array()))->getMultiplesLabel($element, $conditions, $result);

        $this->assertEquals('IT', $result[$element]);
    }

    public function testGetMultiplesLabelTwoMultiples(): void
    {
        $element    = 15;           // Linianos only; multiple of 3 and 5
        $conditions = array( "Linio" => array(3), "IT" => array(5), "Linianos" => array(3,5) );

        (new ElementsEvaluation\Number(array()))->getMultiplesLabel($element, $conditions, $result);

        $this->assertEquals('Linianos', $result[$element]);
    }

    public function testGetElementsRangeWithoutData(): void
    {
        $rangeToEvaluate = (new ElementsEvaluation\Number(array()))->getElementsRange();
        $this->assertEquals(1, count($rangeToEvaluate));
    }

    public function testGetElementsRangeOneItem(): void
    {
        $rangeToEvaluate = (new ElementsEvaluation\Number(array(10)))->getElementsRange();
        $this->assertEquals(1, count($rangeToEvaluate));
    }

    public function testGetElementsRangeWithData(): void
    {
        $rangeToEvaluate = (new ElementsEvaluation\Number(array(1, 10)))->getElementsRange();
        $this->assertEquals(10, count($rangeToEvaluate));
    }
}