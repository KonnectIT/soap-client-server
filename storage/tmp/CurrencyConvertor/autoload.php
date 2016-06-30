<?php


 function autoload_667946c66f755b6932df7d850ec49958($class)
{
    $classes = array(
        'CurrencyConvertor' => __DIR__ .'/CurrencyConvertor.php',
        'ConversionRate' => __DIR__ .'/ConversionRate.php',
        'Currency' => __DIR__ .'/Currency.php',
        'ConversionRateResponse' => __DIR__ .'/ConversionRateResponse.php'
    );
    if (!empty($classes[$class])) {
        include $classes[$class];
    };
}

spl_autoload_register('autoload_667946c66f755b6932df7d850ec49958');

// Do nothing. The rest is just leftovers from the code generation.
{
}
