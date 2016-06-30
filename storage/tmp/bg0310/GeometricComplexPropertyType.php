<?php

class GeometricComplexPropertyType
{

    /**
     * @var GeometricComplexType $GeometricComplex
     */
    protected $GeometricComplex = null;

    /**
     * @var CompositeCurveType $CompositeCurve
     */
    protected $CompositeCurve = null;

    /**
     * @var CompositeSurfaceType $CompositeSurface
     */
    protected $CompositeSurface = null;

    /**
     * @var CompositeSolidType $CompositeSolid
     */
    protected $CompositeSolid = null;

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
     * @param GeometricComplexType $GeometricComplex
     * @param CompositeCurveType $CompositeCurve
     * @param CompositeSurfaceType $CompositeSurface
     * @param CompositeSolidType $CompositeSolid
     * @param anyURI $remoteSchema
     * @param typeType $type
     * @param hrefType $href
     * @param roleType $role
     * @param arcroleType $arcrole
     * @param titleAttrType $title
     * @param showType $show
     * @param actuateType $actuate
     */
    public function __construct($GeometricComplex, $CompositeCurve, $CompositeSurface, $CompositeSolid, $remoteSchema, $type, $href, $role, $arcrole, $title, $show, $actuate)
    {
      $this->GeometricComplex = $GeometricComplex;
      $this->CompositeCurve = $CompositeCurve;
      $this->CompositeSurface = $CompositeSurface;
      $this->CompositeSolid = $CompositeSolid;
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
     * @return GeometricComplexType
     */
    public function getGeometricComplex()
    {
      return $this->GeometricComplex;
    }

    /**
     * @param GeometricComplexType $GeometricComplex
     * @return GeometricComplexPropertyType
     */
    public function setGeometricComplex($GeometricComplex)
    {
      $this->GeometricComplex = $GeometricComplex;
      return $this;
    }

    /**
     * @return CompositeCurveType
     */
    public function getCompositeCurve()
    {
      return $this->CompositeCurve;
    }

    /**
     * @param CompositeCurveType $CompositeCurve
     * @return GeometricComplexPropertyType
     */
    public function setCompositeCurve($CompositeCurve)
    {
      $this->CompositeCurve = $CompositeCurve;
      return $this;
    }

    /**
     * @return CompositeSurfaceType
     */
    public function getCompositeSurface()
    {
      return $this->CompositeSurface;
    }

    /**
     * @param CompositeSurfaceType $CompositeSurface
     * @return GeometricComplexPropertyType
     */
    public function setCompositeSurface($CompositeSurface)
    {
      $this->CompositeSurface = $CompositeSurface;
      return $this;
    }

    /**
     * @return CompositeSolidType
     */
    public function getCompositeSolid()
    {
      return $this->CompositeSolid;
    }

    /**
     * @param CompositeSolidType $CompositeSolid
     * @return GeometricComplexPropertyType
     */
    public function setCompositeSolid($CompositeSolid)
    {
      $this->CompositeSolid = $CompositeSolid;
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
     * @return GeometricComplexPropertyType
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
     * @return GeometricComplexPropertyType
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
     * @return GeometricComplexPropertyType
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
     * @return GeometricComplexPropertyType
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
     * @return GeometricComplexPropertyType
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
     * @return GeometricComplexPropertyType
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
     * @return GeometricComplexPropertyType
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
     * @return GeometricComplexPropertyType
     */
    public function setActuate($actuate)
    {
      $this->actuate = $actuate;
      return $this;
    }

}
