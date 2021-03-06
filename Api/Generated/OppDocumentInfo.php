<?php

namespace Spinen\ConnectWise\Library\Api\Generated;

class OppDocumentInfo
{

    /**
     * @var string $FileName
     */
    protected $FileName = null;

    /**
     * @var boolean $isLink
     */
    protected $isLink = null;

    /**
     * @var base64Binary $Content
     */
    protected $Content = null;

    /**
     * @param string $FileName
     * @param boolean $isLink
     * @param base64Binary $Content
     */
    public function __construct($FileName = null, $isLink = null, base64Binary $Content = null)
    {
        $this->FileName = $FileName;
        $this->isLink   = $isLink;
        $this->Content  = $Content;
    }

    /**
     * @return string
     */
    public function getFileName()
    {
        return $this->FileName;
    }

    /**
     * @param string $FileName
     * @return \Spinen\ConnectWise\Library\Api\Generated\OppDocumentInfo
     */
    public function setFileName($FileName)
    {
        $this->FileName = $FileName;
        return $this;
    }

    /**
     * @return boolean
     */
    public function getIsLink()
    {
        return $this->isLink;
    }

    /**
     * @param boolean $isLink
     * @return \Spinen\ConnectWise\Library\Api\Generated\OppDocumentInfo
     */
    public function setIsLink($isLink)
    {
        $this->isLink = $isLink;
        return $this;
    }

    /**
     * @return base64Binary
     */
    public function getContent()
    {
        return $this->Content;
    }

    /**
     * @param base64Binary $Content
     * @return \Spinen\ConnectWise\Library\Api\Generated\OppDocumentInfo
     */
    public function setContent(base64Binary $Content)
    {
        $this->Content = $Content;
        return $this;
    }

}
