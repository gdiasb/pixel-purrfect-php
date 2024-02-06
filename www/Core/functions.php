<?php

use Core\Response;
use Core\Session;

function urlIs(string $value): bool {
    return $_SERVER['REQUEST_URI'] === $value;
}

function authorize(bool $condition, int $status = Response::FORBIDDEN) {
    if (! $condition) {
        return abort($status);
    }
}

function abort(int $code = 404): void {
    http_response_code($code);
    require base_path("views/errors/{$code}.view.php");
    die();
}

function base_path(string $path): string {
    return BASE_PATH . $path;
}

function view(string $path, array $attributes = []): void {
    extract($attributes); 
    require base_path("views/{$path}");
}

function redirect(string $path): void {
    header("location: {$path}");
    exit();
}

function old(string $key, string $default = ''): mixed {
    return Session::get('old')[$key] ?? $default;
}