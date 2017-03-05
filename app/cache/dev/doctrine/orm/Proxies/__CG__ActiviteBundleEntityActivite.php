<?php

namespace Proxies\__CG__\ActiviteBundle\Entity;

/**
 * DO NOT EDIT THIS FILE - IT WAS CREATED BY DOCTRINE'S PROXY GENERATOR
 */
class Activite extends \ActiviteBundle\Entity\Activite implements \Doctrine\ORM\Proxy\Proxy
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
            return ['__isInitialized__', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'id', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'designation', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'dureeMin', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'dureeMax', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'nbEnfantsMin', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'nbEnfantsMax', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'dureeTransport', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'typeActivite', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'fenetreHoraire', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'enfantsOptionnels', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'activitesRealisees', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'preAffections', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'enfantsObligatoires', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'activitesFixees', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'besoinsTypeRessources', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'evenements'];
        }

        return ['__isInitialized__', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'id', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'designation', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'dureeMin', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'dureeMax', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'nbEnfantsMin', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'nbEnfantsMax', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'dureeTransport', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'typeActivite', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'fenetreHoraire', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'enfantsOptionnels', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'activitesRealisees', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'preAffections', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'enfantsObligatoires', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'activitesFixees', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'besoinsTypeRessources', '' . "\0" . 'ActiviteBundle\\Entity\\Activite' . "\0" . 'evenements'];
    }

    /**
     * 
     */
    public function __wakeup()
    {
        if ( ! $this->__isInitialized__) {
            $this->__initializer__ = function (Activite $proxy) {
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
    public function setDureeMax($dureeMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDureeMax', [$dureeMax]);

        return parent::setDureeMax($dureeMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getDureeMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDureeMax', []);

        return parent::getDureeMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setDureeMin($dureeMin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDureeMin', [$dureeMin]);

        return parent::setDureeMin($dureeMin);
    }

    /**
     * {@inheritDoc}
     */
    public function getDureeMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDureeMin', []);

        return parent::getDureeMin();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbEnfantsMax($nbEnfantsMax)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbEnfantsMax', [$nbEnfantsMax]);

        return parent::setNbEnfantsMax($nbEnfantsMax);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbEnfantsMax()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbEnfantsMax', []);

        return parent::getNbEnfantsMax();
    }

    /**
     * {@inheritDoc}
     */
    public function setNbEnfantsMin($nbEnfantsMin)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setNbEnfantsMin', [$nbEnfantsMin]);

        return parent::setNbEnfantsMin($nbEnfantsMin);
    }

    /**
     * {@inheritDoc}
     */
    public function getNbEnfantsMin()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getNbEnfantsMin', []);

        return parent::getNbEnfantsMin();
    }

    /**
     * {@inheritDoc}
     */
    public function setDureeTransport($dureeTransport)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDureeTransport', [$dureeTransport]);

        return parent::setDureeTransport($dureeTransport);
    }

    /**
     * {@inheritDoc}
     */
    public function getDureeTransport()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDureeTransport', []);

        return parent::getDureeTransport();
    }

    /**
     * {@inheritDoc}
     */
    public function setDesignation($designation)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setDesignation', [$designation]);

        return parent::setDesignation($designation);
    }

    /**
     * {@inheritDoc}
     */
    public function getDesignation()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getDesignation', []);

        return parent::getDesignation();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypesActivite(\ActiviteBundle\Entity\TypeActivite $typesActivite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypesActivite', [$typesActivite]);

        return parent::setTypesActivite($typesActivite);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypesActivite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypesActivite', []);

        return parent::getTypesActivite();
    }

    /**
     * {@inheritDoc}
     */
    public function isDureeValid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isDureeValid', []);

        return parent::isDureeValid();
    }

    /**
     * {@inheritDoc}
     */
    public function isNbEnfantValid()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'isNbEnfantValid', []);

        return parent::isNbEnfantValid();
    }

    /**
     * {@inheritDoc}
     */
    public function __toString()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, '__toString', []);

        return parent::__toString();
    }

    /**
     * {@inheritDoc}
     */
    public function setActiviteRealisee(\ActiviteBundle\Entity\ActiviteRealisee $activiteRealisee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setActiviteRealisee', [$activiteRealisee]);

        return parent::setActiviteRealisee($activiteRealisee);
    }

    /**
     * {@inheritDoc}
     */
    public function getActiviteRealisee()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActiviteRealisee', []);

        return parent::getActiviteRealisee();
    }

    /**
     * {@inheritDoc}
     */
    public function setFenetreHoraire(\RessourceBundle\Entity\FenetreHoraire $fenetreHoraire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setFenetreHoraire', [$fenetreHoraire]);

        return parent::setFenetreHoraire($fenetreHoraire);
    }

    /**
     * {@inheritDoc}
     */
    public function getFenetreHoraire()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getFenetreHoraire', []);

        return parent::getFenetreHoraire();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnfantsOptionnel(\RessourceBundle\Entity\Enfant $enfantsOptionnel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnfantsOptionnel', [$enfantsOptionnel]);

        return parent::addEnfantsOptionnel($enfantsOptionnel);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnfantsOptionnel(\RessourceBundle\Entity\Enfant $enfantsOptionnel)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnfantsOptionnel', [$enfantsOptionnel]);

        return parent::removeEnfantsOptionnel($enfantsOptionnel);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnfantsOptionnels()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnfantsOptionnels', []);

        return parent::getEnfantsOptionnels();
    }

    /**
     * {@inheritDoc}
     */
    public function addPreaffection(\RessourceBundle\Entity\Preaffection $preaffection)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addPreaffection', [$preaffection]);

        return parent::addPreaffection($preaffection);
    }

    /**
     * {@inheritDoc}
     */
    public function removePreaffection(\RessourceBundle\Entity\Preaffection $preaffection)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removePreaffection', [$preaffection]);

        return parent::removePreaffection($preaffection);
    }

    /**
     * {@inheritDoc}
     */
    public function getPreaffection()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreaffection', []);

        return parent::getPreaffection();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnfantObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $enfantObligatoire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnfantObligatoire', [$enfantObligatoire]);

        return parent::addEnfantObligatoire($enfantObligatoire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnfantObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $enfantObligatoire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnfantObligatoire', [$enfantObligatoire]);

        return parent::removeEnfantObligatoire($enfantObligatoire);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnfantObligatoires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnfantObligatoires', []);

        return parent::getEnfantObligatoires();
    }

    /**
     * {@inheritDoc}
     */
    public function addHorairefixe(\ActiviteBundle\Entity\ActiviteFixee $horairefixe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHorairefixe', [$horairefixe]);

        return parent::addHorairefixe($horairefixe);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHorairefixe(\ActiviteBundle\Entity\ActiviteFixee $horairefixe)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHorairefixe', [$horairefixe]);

        return parent::removeHorairefixe($horairefixe);
    }

    /**
     * {@inheritDoc}
     */
    public function getHorairefixe()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getHorairefixe', []);

        return parent::getHorairefixe();
    }

    /**
     * {@inheritDoc}
     */
    public function addBesoinsTypeRessource(\RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addBesoinsTypeRessource', [$besoinsTypeRessource]);

        return parent::addBesoinsTypeRessource($besoinsTypeRessource);
    }

    /**
     * {@inheritDoc}
     */
    public function removeBesoinsTypeRessource(\RessourceBundle\Entity\BesoinTypeRessource $besoinsTypeRessource)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeBesoinsTypeRessource', [$besoinsTypeRessource]);

        return parent::removeBesoinsTypeRessource($besoinsTypeRessource);
    }

    /**
     * {@inheritDoc}
     */
    public function getBesoinsTypeRessource()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBesoinsTypeRessource', []);

        return parent::getBesoinsTypeRessource();
    }

    /**
     * {@inheritDoc}
     */
    public function setTypeActivite(\ActiviteBundle\Entity\TypeActivite $typeActivite)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'setTypeActivite', [$typeActivite]);

        return parent::setTypeActivite($typeActivite);
    }

    /**
     * {@inheritDoc}
     */
    public function getTypeActivite()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getTypeActivite', []);

        return parent::getTypeActivite();
    }

    /**
     * {@inheritDoc}
     */
    public function addActivitesRealisee(\ActiviteBundle\Entity\ActiviteRealisee $activitesRealisee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActivitesRealisee', [$activitesRealisee]);

        return parent::addActivitesRealisee($activitesRealisee);
    }

    /**
     * {@inheritDoc}
     */
    public function removeActivitesRealisee(\ActiviteBundle\Entity\ActiviteRealisee $activitesRealisee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActivitesRealisee', [$activitesRealisee]);

        return parent::removeActivitesRealisee($activitesRealisee);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivitesRealisees()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivitesRealisees', []);

        return parent::getActivitesRealisees();
    }

    /**
     * {@inheritDoc}
     */
    public function getPreAffections()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getPreAffections', []);

        return parent::getPreAffections();
    }

    /**
     * {@inheritDoc}
     */
    public function addEnfantsObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $enfantsObligatoire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEnfantsObligatoire', [$enfantsObligatoire]);

        return parent::addEnfantsObligatoire($enfantsObligatoire);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEnfantsObligatoire(\ActiviteBundle\Entity\ActiviteObligatoire $enfantsObligatoire)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEnfantsObligatoire', [$enfantsObligatoire]);

        return parent::removeEnfantsObligatoire($enfantsObligatoire);
    }

    /**
     * {@inheritDoc}
     */
    public function getEnfantsObligatoires()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEnfantsObligatoires', []);

        return parent::getEnfantsObligatoires();
    }

    /**
     * {@inheritDoc}
     */
    public function addHorairesfix(\ActiviteBundle\Entity\ActiviteFixee $horairesfix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addHorairesfix', [$horairesfix]);

        return parent::addHorairesfix($horairesfix);
    }

    /**
     * {@inheritDoc}
     */
    public function removeHorairesfix(\ActiviteBundle\Entity\ActiviteFixee $horairesfix)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeHorairesfix', [$horairesfix]);

        return parent::removeHorairesfix($horairesfix);
    }

    /**
     * {@inheritDoc}
     */
    public function getActivitesFixees()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getActivitesFixees', []);

        return parent::getActivitesFixees();
    }

    /**
     * {@inheritDoc}
     */
    public function getBesoinsTypeRessources()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getBesoinsTypeRessources', []);

        return parent::getBesoinsTypeRessources();
    }

    /**
     * {@inheritDoc}
     */
    public function addActivitesFixee(\ActiviteBundle\Entity\ActiviteFixee $activitesFixee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addActivitesFixee', [$activitesFixee]);

        return parent::addActivitesFixee($activitesFixee);
    }

    /**
     * {@inheritDoc}
     */
    public function removeActivitesFixee(\ActiviteBundle\Entity\ActiviteFixee $activitesFixee)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeActivitesFixee', [$activitesFixee]);

        return parent::removeActivitesFixee($activitesFixee);
    }

    /**
     * {@inheritDoc}
     */
    public function addEvenement(\CalendarBundle\Entity\EventEntity $evenement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'addEvenement', [$evenement]);

        return parent::addEvenement($evenement);
    }

    /**
     * {@inheritDoc}
     */
    public function removeEvenement(\CalendarBundle\Entity\EventEntity $evenement)
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'removeEvenement', [$evenement]);

        return parent::removeEvenement($evenement);
    }

    /**
     * {@inheritDoc}
     */
    public function getEvenements()
    {

        $this->__initializer__ && $this->__initializer__->__invoke($this, 'getEvenements', []);

        return parent::getEvenements();
    }

}
