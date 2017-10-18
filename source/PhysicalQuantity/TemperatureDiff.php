<?php
namespace PhpUnitsOfMeasure\PhysicalQuantity;

use PhpUnitsOfMeasure\AbstractPhysicalQuantity;
use PhpUnitsOfMeasure\UnitOfMeasure;
use PhpUnitsOfMeasure\HasSIUnitsTrait;

class TemperatureDiff extends AbstractPhysicalQuantity
{
    use HasSIUnitsTrait;

    protected static $unitDefinitions;

    protected static function initialize()
    {
        // Kelvin
        $kelvin = UnitOfMeasure::nativeUnitFactory('K-diff');
        $kelvin->addAlias('°K-diff');
        $kelvin->addAlias('kelvin-diff');
        static::addUnit($kelvin);

        // Degree Celsius
        $newUnit = UnitOfMeasure::linearUnitFactory('°C-diff', 1);
        $newUnit->addAlias('C-diff');
        $newUnit->addAlias('celsius-diff');
        static::addUnit($newUnit);

        // Degree Fahrenheit
        $newUnit = UnitOfMeasure::linearUnitFactory('°F-diff', 5/9);
        $newUnit->addAlias('F-diff');
        $newUnit->addAlias('fahrenheit-diff');
        static::addUnit($newUnit);
    }
}
