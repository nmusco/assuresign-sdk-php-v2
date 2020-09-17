<?php

namespace Nmusco\AssureSign\v2\StructType;

use \WsdlToPhp\PackageBase\AbstractStructBase;

/**
 * This class stands for FieldRegion StructType
 * @subpackage Structs
 */
class FieldRegion extends AbstractStructBase
{
    /**
     * The Page
     * Meta information extracted from the WSDL
     * - use: required
     * @var int
     */
    public $Page;
    /**
     * The PositionX
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public $PositionX;
    /**
     * The PositionY
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public $PositionY;
    /**
     * The Height
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Height;
    /**
     * The Width
     * Meta information extracted from the WSDL
     * - use: required
     * @var float
     */
    public $Width;
    /**
     * Constructor method for FieldRegion
     * @uses FieldRegion::setPage()
     * @uses FieldRegion::setPositionX()
     * @uses FieldRegion::setPositionY()
     * @uses FieldRegion::setHeight()
     * @uses FieldRegion::setWidth()
     * @param int $page
     * @param float $positionX
     * @param float $positionY
     * @param float $height
     * @param float $width
     */
    public function __construct($page = null, $positionX = null, $positionY = null, $height = null, $width = null)
    {
        $this
            ->setPage($page)
            ->setPositionX($positionX)
            ->setPositionY($positionY)
            ->setHeight($height)
            ->setWidth($width);
    }
    /**
     * Get Page value
     * @return int
     */
    public function getPage()
    {
        return $this->Page;
    }
    /**
     * Set Page value
     * @param int $page
     * @return \Nmusco\AssureSign\v2\StructType\FieldRegion
     */
    public function setPage($page = null)
    {
        // validation for constraint: int
        if (!is_null($page) && !(is_int($page) || ctype_digit($page))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide an integer value, %s given', var_export($page, true), gettype($page)), __LINE__);
        }
        $this->Page = $page;
        return $this;
    }
    /**
     * Get PositionX value
     * @return float
     */
    public function getPositionX()
    {
        return $this->PositionX;
    }
    /**
     * Set PositionX value
     * @param float $positionX
     * @return \Nmusco\AssureSign\v2\StructType\FieldRegion
     */
    public function setPositionX($positionX = null)
    {
        // validation for constraint: float
        if (!is_null($positionX) && !(is_float($positionX) || is_numeric($positionX))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($positionX, true), gettype($positionX)), __LINE__);
        }
        $this->PositionX = $positionX;
        return $this;
    }
    /**
     * Get PositionY value
     * @return float
     */
    public function getPositionY()
    {
        return $this->PositionY;
    }
    /**
     * Set PositionY value
     * @param float $positionY
     * @return \Nmusco\AssureSign\v2\StructType\FieldRegion
     */
    public function setPositionY($positionY = null)
    {
        // validation for constraint: float
        if (!is_null($positionY) && !(is_float($positionY) || is_numeric($positionY))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($positionY, true), gettype($positionY)), __LINE__);
        }
        $this->PositionY = $positionY;
        return $this;
    }
    /**
     * Get Height value
     * @return float
     */
    public function getHeight()
    {
        return $this->Height;
    }
    /**
     * Set Height value
     * @param float $height
     * @return \Nmusco\AssureSign\v2\StructType\FieldRegion
     */
    public function setHeight($height = null)
    {
        // validation for constraint: float
        if (!is_null($height) && !(is_float($height) || is_numeric($height))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($height, true), gettype($height)), __LINE__);
        }
        $this->Height = $height;
        return $this;
    }
    /**
     * Get Width value
     * @return float
     */
    public function getWidth()
    {
        return $this->Width;
    }
    /**
     * Set Width value
     * @param float $width
     * @return \Nmusco\AssureSign\v2\StructType\FieldRegion
     */
    public function setWidth($width = null)
    {
        // validation for constraint: float
        if (!is_null($width) && !(is_float($width) || is_numeric($width))) {
            throw new \InvalidArgumentException(sprintf('Invalid value %s, please provide a float value, %s given', var_export($width, true), gettype($width)), __LINE__);
        }
        $this->Width = $width;
        return $this;
    }
}
