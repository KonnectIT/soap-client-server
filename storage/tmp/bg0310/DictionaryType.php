<?php

class DictionaryType extends DefinitionType
{

    /**
     * @var DictionaryEntryType $dictionaryEntry
     */
    protected $dictionaryEntry = null;

    /**
     * @var IndirectEntryType $indirectEntry
     */
    protected $indirectEntry = null;

    /**
     * @param MetaDataPropertyType $metaDataProperty
     * @param StringOrRefType $description
     * @param CodeType $name
     * @param ID $id
     * @param DictionaryEntryType $dictionaryEntry
     * @param IndirectEntryType $indirectEntry
     */
    public function __construct($metaDataProperty, $description, $name, $id, $dictionaryEntry, $indirectEntry)
    {
      parent::__construct($metaDataProperty, $description, $name, $id);
      $this->dictionaryEntry = $dictionaryEntry;
      $this->indirectEntry = $indirectEntry;
    }

    /**
     * @return DictionaryEntryType
     */
    public function getDictionaryEntry()
    {
      return $this->dictionaryEntry;
    }

    /**
     * @param DictionaryEntryType $dictionaryEntry
     * @return DictionaryType
     */
    public function setDictionaryEntry($dictionaryEntry)
    {
      $this->dictionaryEntry = $dictionaryEntry;
      return $this;
    }

    /**
     * @return IndirectEntryType
     */
    public function getIndirectEntry()
    {
      return $this->indirectEntry;
    }

    /**
     * @param IndirectEntryType $indirectEntry
     * @return DictionaryType
     */
    public function setIndirectEntry($indirectEntry)
    {
      $this->indirectEntry = $indirectEntry;
      return $this;
    }

}
