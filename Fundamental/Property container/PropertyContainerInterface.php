<?php


interface PropertyContainerInterface
{
    /**
     * @param $propertyName
     * @param $value
     * @return mixed
     */
    function addProperty($propertyName, $value);

    /**
     * @param $propertyName
     * @return mixed
     */
    function deleteProperty($propertyName);

    /**
     * @param $propertyName
     * @return mixed
     */
    function getProperty($propertyName);

    /**
     * @param $propertyName
     * @param $value
     * @return mixed
     */
    function updateProperty($propertyName, $value);
}