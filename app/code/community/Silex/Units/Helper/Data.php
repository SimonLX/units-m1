<?php

/**
 * Class Silex_Units_Helper_Data
 *
 * Default helper and translator
 */
class Silex_Units_Helper_Data extends Mage_Core_Helper_Abstract
{
    const XML_PATH_UNITS_SYSTEM = 'general/locale/units_system';

    const METRIC_UNITS_SYSTEM = 0;
    const IMPERIAL_UNITS_SYSTEM = 1;
    const US_UNITS_SYSTEM = 2;
}