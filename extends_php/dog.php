<?php
    class Dog extends Animal{
        public $certBlind;

        public function _contruct(string $name = "Hafan") {
            parent::__constrict($name);
        }

        public function _toString() {
            return "cat: ".$this->name."(".implode(",",[$this->hp, $this->$certBlind]).")\n";
        }
    }
?>