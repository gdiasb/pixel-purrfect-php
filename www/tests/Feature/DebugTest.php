<?php

it('finds missing debugs statements', function() {
    expect(['dd', 'dump', 'var_dump'])->not->toBeUsed();
});