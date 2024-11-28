<?php

use Illuminate\Translation\ArrayLoader;
use Illuminate\Translation\Translator;
use Illuminate\Validation\Factory;

function getValidationFactory()
{
    // Set up the Translator with an empty loader
    $loader = new ArrayLoader();
    $translator = new Translator($loader, 'en');

    // Return the validation factory
    return new Factory($translator);
}
