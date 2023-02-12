<?php

    class LIFO implements Pushable {
        private $stack;
    
        public function __construct() {
            $this->stack = [];
        }
    
        public function push(mixed $value) {
            array_push($this->stack, $value);
        }
    
        public function pop(): mixed {
            return array_pop($this->stack);
        }
    }
    
    class FIFO implements Pushable {
        private $queue;
    
        public function __construct() {
            $this->queue = [];
        }
    
        public function push(mixed $value) {
            array_push($this->queue, $value);
        }
    
        public function pop(): mixed {
            return array_shift($this->queue);
        }
    }
    
    class LIFOandFIFO implements Pushable {
        private $data;
        private $type;
    
        public function __construct(string $type) {
            $this->type = $type;
        }
    
        public function push(mixed $value) {
            $this->data->push($value);
        }
    
        public function pop(): mixed {
            return $this->data->pop();
        }
    }

?>