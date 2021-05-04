<?php


class PropertyContainer implements PropertyContainerInterface
{
    private array $propertyContainer = [];

    function addProperty($propertyName, $value)
    {
        $this->propertyContainer[$propertyName] = $value;
    }

    function deleteProperty($propertyName)
    {
        unset($this->propertyContainer[$propertyName]);
    }

    function getProperty($propertyName)
    {
        return $this->propertyContainer[$propertyName];
    }

    /**
     * @throws Exception
     */
    function updateProperty($propertyName, $value)
    {
        if(!isset($this->propertyContainer[$propertyName])){
            throw new Exception("Property [{$propertyName}] wasn't found");
        }
        $this->propertyContainer[$propertyName] = $value;
    }
}