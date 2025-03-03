<?php

declare(strict_types=1);

/**
 * Demo PHP file to demonstrate code standards compliance.
 * 
 * This file includes basic PHP syntax and structure, following PSR-12 standards.
 */

namespace Demo;

/**
 * Class Greeter
 * 
 * A simple class to demonstrate code standards.
 */
class Greeter
{
    /**
     * Greet a user by their name.
     * 
     * @param string $name Name of the person to greet.
     * @return string Greeting message.
     */
    public function greet(string $name): string
    {
        return "Hello, {$name}!";
    }
}

// Example usage
$greeter = new Greeter();
echo $greeter->greet('World');
