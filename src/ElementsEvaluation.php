<?php
/**
 * Class main that make the elements evaluation (like get multiples number)
 * for your object type like the numbers (or others).
 * Review: PHP 7.2.2
 */

namespace ElementsEvaluation;

interface ElementsInterface {
    public function getElementsRange();
    public function getMultiplesLabel($number, $conditionals = array(), &$result = array());
}

class Number implements ElementsInterface {
    public $range;

    /**
     * Number constructor.
     */
    public function __construct($range)
    {
        $this->range = $range;
    }

    /**
     * @return array
     */
    public function getElementsRange() {
        $first_element  = reset($this->range);
        $last_element   = end($this->range);

        return range($first_element, $last_element);
    }

    /**
     * @param int $number
     * @param array $conditionals
     * @param array $result
     */
    public function getMultiplesLabel($number = 0, $conditionals = array(), &$result = array()) {
        try {
            foreach ($conditionals as $label => $multiples) {
                $remains = array_filter($multiples, function($multiple) use ($number) {
                    return $number % $multiple;
                });
                if (count($remains) === 0 && $number !== 0) {
                    $result[$number] = sprintf("%s", $label);
                }
            }
        } catch (DivisionByZeroError $exception) {
            echo "Uncaught DivisionByZeroError (1): ", $exception->getMessage(), "\n";
        } catch (DivideByNegativeException $exception) {
            echo "Uncaught DivideByNegativeException (2): ", $exception->getMessage(), "\n";
        } catch(Exception $exception) {
            echo "Uncaught Exception (3): ", $exception->getMessage(), "\n";
        }
    }
}

final class ElementsEvaluation {
    protected $elements;
    protected $conditionals;

    /**
     * ElementsEvaluation constructor.
     * @param array $elements
     * @param array $conditions
     */
    public function __construct($elements = array(), $conditions = array()) {
        $this->elements     = $elements;
        $this->conditions   = $conditions;
    }

    /**
     * @return mixed
     */
    public function evaluate() {
        foreach($this->elements as $element) {
            $elementsEvaluate = $element->getElementsRange();

            /* Getting labels per each conditional, numbers only. Can implement another elements type. */
            foreach ($elementsEvaluate as $number) {
                @$result[$number] .= '';
                $element->getMultiplesLabel($number, $this->conditions, $result);
            }
        }

        return $result;
    }
}

class ElementsOutput {
    protected $elements;

    /**
     * ElementsOutput constructor.
     */
    public function __construct(ElementsEvaluation $elements) {
        $this->elements = $elements;
    }

    /**
     * @return string
     */
    public function toJson() {
        $data = array (
            'result' => $this->elements->evaluate()
        );

        return json_encode($data, JSON_PRETTY_PRINT);
    }
}