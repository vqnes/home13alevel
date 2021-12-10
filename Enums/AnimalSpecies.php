<?php

require_once 'Enum.php';

/**
 * @extends Enum <string>
 */
final class AnimalSpecies extends Enum
{
    private const FELIS_CATUS = 'Felis catus';

    public static function FELIS_CATUS(): self
    {
        return new self(self::FELIS_CATUS);
    }
}
