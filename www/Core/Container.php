<?php

namespace Core;

class Container {

    protected array $bindings = [];

    public function bind(string $key, $function): void {
        $this->bindings[$key] = $function; 
    }


    public function resolve(string $key) {
        if (! array_key_exists($key, $this->bindings)) {
            throw new \Exception("Key not found");
        }

        $function = $this->bindings[$key];

        return call_user_func($function);
    }

}