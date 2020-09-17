<?php

namespace Nmusco\AssureSign\v2\ArrayType;

use \WsdlToPhp\PackageBase\AbstractStructArrayBase;

/**
 * This class stands for ArrayOfDocumentHistoryView ArrayType
 * @subpackage Arrays
 */
class ArrayOfDocumentHistoryView extends AbstractStructArrayBase
{
    /**
     * The DocumentHistoryView
     * Meta information extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * - nillable: true
     * @var \Nmusco\AssureSign\v2\StructType\DocumentHistoryView[]
     */
    public $DocumentHistoryView;
    /**
     * Constructor method for ArrayOfDocumentHistoryView
     * @uses ArrayOfDocumentHistoryView::setDocumentHistoryView()
     * @param \Nmusco\AssureSign\v2\StructType\DocumentHistoryView[] $documentHistoryView
     */
    public function __construct(array $documentHistoryView = array())
    {
        $this
            ->setDocumentHistoryView($documentHistoryView);
    }
    /**
     * Get DocumentHistoryView value
     * An additional test has been added (isset) before returning the property value as
     * this property may have been unset before, due to the fact that this property is
     * removable from the request (nillable=true+minOccurs=0)
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryView[]|null
     */
    public function getDocumentHistoryView()
    {
        return isset($this->DocumentHistoryView) ? $this->DocumentHistoryView : null;
    }
    /**
     * This method is responsible for validating the values passed to the setDocumentHistoryView method
     * This method is willingly generated in order to preserve the one-line inline validation within the setDocumentHistoryView method
     * @param array $values
     * @return string A non-empty message if the values does not match the validation rules
     */
    public static function validateDocumentHistoryViewForArrayConstraintsFromSetDocumentHistoryView(array $values = array())
    {
        $message = '';
        $invalidValues = [];
        foreach ($values as $arrayOfDocumentHistoryViewDocumentHistoryViewItem) {
            // validation for constraint: itemType
            if (!$arrayOfDocumentHistoryViewDocumentHistoryViewItem instanceof \Nmusco\AssureSign\v2\StructType\DocumentHistoryView) {
                $invalidValues[] = is_object($arrayOfDocumentHistoryViewDocumentHistoryViewItem) ? get_class($arrayOfDocumentHistoryViewDocumentHistoryViewItem) : sprintf('%s(%s)', gettype($arrayOfDocumentHistoryViewDocumentHistoryViewItem), var_export($arrayOfDocumentHistoryViewDocumentHistoryViewItem, true));
            }
        }
        if (!empty($invalidValues)) {
            $message = sprintf('The DocumentHistoryView property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentHistoryView, %s given', is_object($invalidValues) ? get_class($invalidValues) : (is_array($invalidValues) ? implode(', ', $invalidValues) : gettype($invalidValues)));
        }
        unset($invalidValues);
        return $message;
    }
    /**
     * Set DocumentHistoryView value
     * This property is removable from request (nillable=true+minOccurs=0), therefore
     * if the value assigned to this property is null, it is removed from this object
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentHistoryView[] $documentHistoryView
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryView
     */
    public function setDocumentHistoryView(array $documentHistoryView = array())
    {
        // validation for constraint: array
        if ('' !== ($documentHistoryViewArrayErrorMessage = self::validateDocumentHistoryViewForArrayConstraintsFromSetDocumentHistoryView($documentHistoryView))) {
            throw new \InvalidArgumentException($documentHistoryViewArrayErrorMessage, __LINE__);
        }
        if (is_null($documentHistoryView) || (is_array($documentHistoryView) && empty($documentHistoryView))) {
            unset($this->DocumentHistoryView);
        } else {
            $this->DocumentHistoryView = $documentHistoryView;
        }
        return $this;
    }
    /**
     * Add item to DocumentHistoryView value
     * @throws \InvalidArgumentException
     * @param \Nmusco\AssureSign\v2\StructType\DocumentHistoryView $item
     * @return \Nmusco\AssureSign\v2\ArrayType\ArrayOfDocumentHistoryView
     */
    public function addToDocumentHistoryView(\Nmusco\AssureSign\v2\StructType\DocumentHistoryView $item)
    {
        // validation for constraint: itemType
        if (!$item instanceof \Nmusco\AssureSign\v2\StructType\DocumentHistoryView) {
            throw new \InvalidArgumentException(sprintf('The DocumentHistoryView property can only contain items of type \Nmusco\AssureSign\v2\StructType\DocumentHistoryView, %s given', is_object($item) ? get_class($item) : (is_array($item) ? implode(', ', $item) : gettype($item))), __LINE__);
        }
        $this->DocumentHistoryView[] = $item;
        return $this;
    }
    /**
     * Returns the current element
     * @see AbstractStructArrayBase::current()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryView|null
     */
    public function current()
    {
        return parent::current();
    }
    /**
     * Returns the indexed element
     * @see AbstractStructArrayBase::item()
     * @param int $index
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryView|null
     */
    public function item($index)
    {
        return parent::item($index);
    }
    /**
     * Returns the first element
     * @see AbstractStructArrayBase::first()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryView|null
     */
    public function first()
    {
        return parent::first();
    }
    /**
     * Returns the last element
     * @see AbstractStructArrayBase::last()
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryView|null
     */
    public function last()
    {
        return parent::last();
    }
    /**
     * Returns the element at the offset
     * @see AbstractStructArrayBase::offsetGet()
     * @param int $offset
     * @return \Nmusco\AssureSign\v2\StructType\DocumentHistoryView|null
     */
    public function offsetGet($offset)
    {
        return parent::offsetGet($offset);
    }
    /**
     * Returns the attribute name
     * @see AbstractStructArrayBase::getAttributeName()
     * @return string DocumentHistoryView
     */
    public function getAttributeName()
    {
        return 'DocumentHistoryView';
    }
}
