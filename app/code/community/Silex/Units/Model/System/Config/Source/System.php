<?php

/**
 * Class Silex_Units_Model_System_Config_Source_System
 *
 * Model listing all units systems available
 */
class Silex_Units_Model_System_Config_Source_System
{
    /**
     * Get all units system as data array
     *
     * @return array
     */
    public function toOptionArray()
    {
        return array(
            array(
                'value' => Silex_Units_Helper_Data::METRIC_UNITS_SYSTEM,
                'label' => Mage::helper('silex_units')->__('Metric')
            ),
            array(
                'value' => Silex_Units_Helper_Data::IMPERIAL_UNITS_SYSTEM,
                'label' => Mage::helper('silex_units')->__('Imperial')
            ),
            array(
                'value' => Silex_Units_Helper_Data::US_UNITS_SYSTEM,
                'label' => Mage::helper('silex_units')->__('US customary')
            ),
        );
    }

    /**
     * Get all units system as key-value array
     *
     * @return array
     */
    public function toArray()
    {
        return array(
            Silex_Units_Helper_Data::METRIC_UNITS_SYSTEM   => Mage::helper('silex_units')->__('Metric'),
            Silex_Units_Helper_Data::IMPERIAL_UNITS_SYSTEM => Mage::helper('silex_units')->__('Imperial'),
            Silex_Units_Helper_Data::US_UNITS_SYSTEM       => Mage::helper('silex_units')->__('US customary')
        );
    }
}