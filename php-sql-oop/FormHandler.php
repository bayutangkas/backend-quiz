<?php
class FormHandler {
    private $inputValue;

    public function __construct($input) {
        $this->inputValue = htmlspecialchars($input);
    }

    public function getInputValue() {
        return $this->inputValue;
    }
}