<?php

namespace Http\Forms;

interface Form {

 public static function validate(array $attibutes);

 public function errors(): array;

 public function add(string $field, string $message);
}