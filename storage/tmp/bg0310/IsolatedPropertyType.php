<?php

class IsolatedPropertyType
{

    /**
     * @var NodeType $Node
     */
    protected $Node = null;

    /**
     * @var EdgeType $Edge
     */
    protected $Edge = null;

    /**
     * @var anyURI $remoteSchema
     */
    protected $remoteSchema = null;

    /**
     * @var typeType $type
     */
    protected $type = null;

    /**
     * @var hrefType $href
     */
    protected $href = null;

    /**
     * @var roleType $role
     */
    protected $role = null;

    /**
     * @var arcroleType $arcrole
     */
    protected $arcrole = null;

    /**
     * @var titleAttrType $title
     */
    protected $title = null;

    /**
     * @var showType $show
     */
    protected $show = null;

    /**
     * @var actuateType $actuate
     */
    protected $actuate = null;

    /**
     * @param NodeType $Node
     * @param EdgeType $Edge
     * @param anyURI $remoteSchema
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param arcroleType $arcrole
     * @param titleAttrType $title
     * @param showType $show
     * @param actuateType $actuate
     */
    public function __construct($Node, $Edge, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate)
    {
      $this->Node = $Node;
      $this->Edge = $Edge;
      $this->remoteSchema = $remoteSchema;
      $this->type = $type;
      $this->href = $href;
      $this->role = $role;
      $this->arcrole = $arcrole;
      $this->title = $title;
      $this->show = $show;
      $this->actuate = $actuate;
    }

    /**
     * @return NodeType
     */
    public function getNode()
    {
      return $this->Node;
    }

    /**
     * @param NodeType $Node
     * @return IsolatedPropertyType
     */
    public function setNode($Node)
    {
      $this->Node = $Node;
      return $this;
    }

    /**
     * @return EdgeType
     */
    public function getEdge()
    {
      return $this->Edge;
    }

    /**
     * @param EdgeType $Edge
     * @return IsolatedPropertyType
     */
    public function setEdge($Edge)
    {
      $this->Edge = $Edge;
      return $this;
    }

    /**
     * @return anyURI
     */
    public function getRemoteSchema()
    {
      return $this->remoteSchema;
    }

    /**
     * @param anyURI $remoteSchema
     * @return IsolatedPropertyType
     */
    public function setRemoteSchema($remoteSchema)
    {
      $this->remoteSchema = $remoteSchema;
      return $this;
    }

    /**
     * @return typeType
     */
    public function getType()
    {
      return $this->type;
    }

    /**
     * @param typeType $type
     * @return IsolatedPropertyType
     */
    public function setType($type)
    {
      $this->type = $type;
      return $this;
    }

    /**
     * @return hrefType
     */
    public function getHref()
    {
      return $this->href;
    }

    /**
     * @param hrefType $href
     * @return IsolatedPropertyType
     */
    public function setHref($href)
    {
      $this->href = $href;
      return $this;
    }

    /**
     * @return roleType
     */
    public function getRole()
    {
      return $this->role;
    }

    /**
     * @param roleType $role
     * @return IsolatedPropertyType
     */
    public function setRole($role)
    {
      $this->role = $role;
      return $this;
    }

    /**
     * @return arcroleType
     */
    public function getArcrole()
    {
      return $this->arcrole;
    }

    /**
     * @param arcroleType $arcrole
     * @return IsolatedPropertyType
     */
    public function setArcrole($arcrole)
    {
      $this->arcrole = $arcrole;
      return $this;
    }

    /**
     * @return titleAttrType
     */
    public function getTitle()
    {
      return $this->title;
    }

    /**
     * @param titleAttrType $title
     * @return IsolatedPropertyType
     */
    public function setTitle($title)
    {
      $this->title = $title;
      return $this;
    }

    /**
     * @return showType
     */
    public function getShow()
    {
      return $this->show;
    }

    /**
     * @param showType $show
     * @return IsolatedPropertyType
     */
    public function setShow($show)
    {
      $this->show = $show;
      return $this;
    }

    /**
     * @return actuateType
     */
    public function getActuate()
    {
      return $this->actuate;
    }

    /**
     * @param actuateType $actuate
     * @return IsolatedPropertyType
     */
    public function setActuate($actuate)
    {
      $this->actuate = $actuate;
      return $this;
    }

}
