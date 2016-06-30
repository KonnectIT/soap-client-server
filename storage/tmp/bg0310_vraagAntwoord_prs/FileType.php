<?php

namespace RRSVP\Stuf;

class FileType
{

    /**
     * @var RangeParametersType $rangeParameters
     */
    protected $rangeParameters = null;

    /**
     * @var anyURI $fileName
     */
    protected $fileName = null;

    /**
     * @var FileValueModelType $fileStructure
     */
    protected $fileStructure = null;

    /**
     * @var anyURI $mimeType
     */
    protected $mimeType = null;

    /**
     * @var anyURI $compression
     */
    protected $compression = null;

    /**
     * @param RangeParametersType $rangeParameters
     * @param anyURI $fileName
     * @param FileValueModelType $fileStructure
     */
    public function __construct($rangeParameters, $fileName, $fileStructure)
    {
      $this->rangeParameters = $rangeParameters;
      $this->fileName = $fileName;
      $this->fileStructure = $fileStructure;
    }

    /**
     * @return RangeParametersType
     */
    public function getRangeParameters()
    {
      return $this->rangeParameters;
    }

    /**
     * @param RangeParametersType $rangeParameters
     * @return \RRSVP\Stuf\FileType
     */
    public function setRangeParameters($rangeParameters)
    {
      $this->rangeParameters = $rangeParameters;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getFileName()
    {
      return $this->fileName;
    }

    /**
     * @param anyURI $fileName
     * @return \RRSVP\Stuf\FileType
     */
    public function setFileName($fileName)
    {
      $this->fileName = $fileName;
      return $this;
    }

    /**
     * @return FileValueModelType
     */
    public function getFileStructure()
    {
      return $this->fileStructure;
    }

    /**
     * @param FileValueModelType $fileStructure
     * @return \RRSVP\Stuf\FileType
     */
    public function setFileStructure($fileStructure)
    {
      $this->fileStructure = $fileStructure;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getMimeType()
    {
      return $this->mimeType;
    }

    /**
     * @param anyURI $mimeType
     * @return \RRSVP\Stuf\FileType
     */
    public function setMimeType($mimeType)
    {
      $this->mimeType = $mimeType;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getCompression()
    {
      return $this->compression;
    }

    /**
     * @param anyURI $compression
     * @return \RRSVP\Stuf\FileType
     */
    public function setCompression($compression)
    {
      $this->compression = $compression;
      return $this;
    }

}
