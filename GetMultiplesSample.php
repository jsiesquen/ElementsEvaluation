<?php
/*
 * Sample that get labels from an elements range according some conditions.
 *
 * Configuration:
 *      $elements  : Array of objects like a Number class that contain the range of elements to evaluate.
 *      $conditions: Array that contain the the label (index) and the numbers for obtain all multiples.
 */
require_once('src/ElementsEvaluation.php');

$elements = array (
    new ElementsEvaluation\Number(array(1, 100))
);
$conditions = array(
    "Linio" => array(3),
    "IT" => array(5),
    "Linianos" => array(3,5)
);

$elementsEvaluation = new ElementsEvaluation\ElementsEvaluation($elements, $conditions);
$elementsOutput     = new ElementsEvaluation\ElementsOutput($elementsEvaluation);
echo $elementsOutput->toJson();