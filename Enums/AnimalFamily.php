<?php

require_once 'Enum.php';

/**
 * @extends Enum <string>
 */
final class AnimalFamily extends Enum
{
    private const FELIDAE = 'Felidae';

    public static function FELIDAE(): self
    {
        return new self(self::FELIDAE);
    }
}
