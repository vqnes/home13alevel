<?php

require_once 'Enum.php';

/**
 * @extends Enum <string>
 */
final class AnimalOrder extends Enum
{
    private const CARNIVORES = 'Carnivores';

    public static function CARNIVORES(): self
    {
        return new self(self::CARNIVORES);
    }
}
