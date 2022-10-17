<?php
    class Cat extends Animal {
        public $lives;

        public function _contruct(string $name = "Mojmír") {
            parent::__constrict($name);
            $this->lives = 9;
        }

        public function _toString() {
            return "cat: ".$this->name."(".implode(",",[$this->hp, $this->lives]).")\n";
        }
    }
?>