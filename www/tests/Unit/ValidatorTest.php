<?php
use Core\Validator;

test('it validates different usernames', function () {

    expect(Validator::validateUsername('gdias4'))->toBeTrue();

    expect(Validator::validateUsername('gdiasbm'))->toBeTrue();

    expect(Validator::validateUsername('gd!as'))->toBeFalse();

    expect(Validator::validateUsername('gabriela dias'))->toBeFalse();
});

test('it validates different names', function() {
    expect(Validator::validateName('Gabriela'))->toBeTrue();

    expect(Validator::validateName('Daniel Reis'))->toBeTrue();

    expect(Validator::validateName('Gabriel Dias'))->toBeTrue();

    expect(Validator::validateName('G4briel'))->toBeFalse();

    expect(Validator::validateName('Gabr!el'))->toBeFalse();

});
