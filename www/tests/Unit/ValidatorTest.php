<?php
use Core\Validator;

test('it validates differents usernames', function () {

    expect(Validator::validateUsername('gdias4'))->toBeTrue();

    expect(Validator::validateUsername('gdiasbm'))->toBeTrue();

    expect(Validator::validateUsername('gd!as'))->toBeFalse();
});

