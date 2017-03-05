<?php

namespace Proxies\__CG__\RessourceBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class BesoinTypeRessource extends \RessourceBundle\Entity\BesoinTypeRessource implements \Doctrine\ORM\Proxy\Proxy
{
    /**
     * @var \Closure the callback responsible for loading properties in the proxy object. This callback is called with
     *      three parameters, being respectively the proxy object to be initialized, the method that triggered the
     *      initialization process and an array of ordered parameters that were passed to that method.
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setInitializer
     */
    public $__initializer__;

    /**
     * @var \Closure the callback responsible of loading properties that need to be copied in the cloned object
     *
     * @see \Doctrine\Common\Persistence\Proxy::__setCloner
     */
    public $__cloner__;

    /**
     * @var boolean flag indicating if this object was already initialized
     *
     * @see \Doctrine\Common\Persistence\Proxy::__isInitialized
     */
    public $__isInitialized__ = false;

    /**
     * @var array properties to be lazy loaded, with keys being the property
     *            names and values being their default values
     *
     * @see \Doctrine\Common\Persistence\Proxy::__getLazyProperties
     */
    public static $lazyPropertiesDefaults = [];



    /**
     * @param \Closure $initializer
     * @param \Closure $cloner
     */
    public function __construct($initializer = null, $cloner = null)
    {

        $this->__initializer__ = $initializer;
        $this->__cloner__      = $cloner;
    }







    /**
     * 
     * @return array
     */
    public function __sleep()
    {
        if ($this->__isInitialized__) {
            return ['__isInitialized__', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'id', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'quantiteRessource', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'ratio', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'preference', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'activite', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'typeRessource'];
        }

        return ['__isInitialized__', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'id', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'quantiteRessource', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'ratio', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'preference', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'activite', '' . "\0" . 'RessourceBundle\\Entity\\BesoinTypeRessource' . "\0" . 'typeRessource'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (BesoinTypeRessource $proxy) {
                $proxy->__setInitializer(null);
                $proxy->__setCloner(null);

                $existingProperties = get_object_vars($proxy);

                foreach ($proxy->__getLazyProperties() as $property => $defaultValue) {
                    if ( ! array_key_exists($property, $existingProperties)) {
                        $proxy->$property = $defaultValue;
                    }
                }
            };

        }
    }

    /**
     * 
     */
    public function __clone()
    {
        $this->__cloner__ && $this->__cloner__->__invoke($this, '__clone', []);
    }

    /**
     * Forces initialization of the proxy
     */
    public function __load()
    {
        $this->__initializer__ && $this->__initializer__->__invoke($this, '__load', []);
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __isInitialized()
    {
        return $this->__isInitialized__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitialized($initialized)
    {
        $this->__isInitialized__ = $initialized;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setInitializer(\Closure $initializer = null)
    {
        $this->__initializer__ = $initializer;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __getInitializer()
    {
        return $this->__initializer__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     */
    public function __setCloner(\Closure $cloner = null)
    {
        $this->__cloner__ = $cloner;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific cloning logic
     */
    public function __getCloner()
    {
        return $this->__cloner__;
    }

    /**
     * {@inheritDoc}
     * @internal generated method: use only when explicitly handling proxy specific loading logic
     * @static
     */
    public function __getLazyProperties()
    {
        return self::$lazyPropertiesDefaults;
    }

    
    /**
     * {@inheritDoc}
     */
    public function getId()
    {
        if ($this->__isInitialized__ === false) {
            return (int)  parent::getId();
        }


        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getId', []);

        return parent::getId();
    }

    /**
     * {@inheritDoc}
     */
    public function setQuantiteRessource($quantiteRessource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setQuantiteRessource', [$quantiteRessource]);

        return parent::setQuantiteRessource($quantiteRessource);
    }

    /**
     * {@inheritDoc}
     */
    public function getQuantiteRessource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getQuantiteRessource', []);

        return parent::getQuantiteRessource();
    }

    /**
     * {@inheritDoc}
     */
    public function setRatio($ratio)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setRatio', [$ratio]);

        return parent::setRatio($ratio);
    }

    /**
     * {@inheritDoc}
     */
    public function getRatio()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getRatio', []);

        return parent::getRatio();
    }

    /**
     * {@inheritDoc}
     */
    public function setPreference($preference)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setPreference', [$preference]);

        return parent::setPreference($preference);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreference()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreference', []);

        return parent::getPreference();
    }

    /**
     * {@inheritDoc}
     */
    public function setActivite(\ActiviteBundle\Entity\Activite $activite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActivite', [$activite]);

        return parent::setActivite($activite);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivite', []);

        return parent::getActivite();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeRessource(\RessourceBundle\Entity\TypeRessource $typeRessource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeRessource', [$typeRessource]);

        return parent::setTypeRessource($typeRessource);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeRessource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeRessource', []);

        return parent::getTypeRessource();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

}