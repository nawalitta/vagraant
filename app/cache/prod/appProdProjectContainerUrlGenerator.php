<?php

use Symfony\Component\Routing\RequestContext;
use Symfony\Component\Routing\Exception\RouteNotFoundException;
use Psr\Log\LoggerInterface;

/**
 * appProdProjectContainerUrlGenerator
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdProjectContainerUrlGenerator extends Symfony\Component\Routing\Generator\UrlGenerator
{
    private static $declaredRoutes;

    /**
     * Constructor.
     */
    public function __construct(RequestContext $context, LoggerInterface $logger = null)
    {
        $this->context = $context;
        $this->logger = $logger;
        if (null === self::$declaredRoutes) {
            self::$declaredRoutes = array(
        'stats_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'StatsBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/stats/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UtilisateurBundle_Utilisateur_edit' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateurBundle\\Controller\\UtilisateurController::editAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UtilisateurBundle_Utilisateur_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateurBundle\\Controller\\UtilisateurController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UtilisateurBundle_Utilisateur_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateurBundle\\Controller\\UtilisateurController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'UtilisateurBundle_Utilisateur_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'UtilisateurBundle\\Controller\\UtilisateurController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/utilisateur/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'CoreBundle_core_homepage' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\DefaultController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'CoreBundle_affecter_enfant_activite_optionnelle' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\AffectationController::affecterEnfantActiviteOptionAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affectation/enfantActiviteOptionnelle',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'CoreBundle_affecter_enfant_activite_obligatoire' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CoreBundle\\Controller\\AffectationController::affecterEnfantActiviteObligatoireAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/affectation/enfantActivteObligatoire',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_TypeActivite_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\TypeActiviteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/typeActivite/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_TypeActivite_edit' => array (  0 =>   array (    0 => 'id',    1 => 'nomTypeActivite',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\TypeActiviteController::editAction',    'id' => NULL,    'nomTypeActivite' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nomTypeActivite',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/typeActivite/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_TypeActivite_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\TypeActiviteController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/typeActivite/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_TypeActivite_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\TypeActiviteController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/typeActivite/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_Activite_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/activite/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_Activite_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/activite/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_Activite_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::showAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/activite/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_Activite_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/activite/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteObligatoire_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteObligatoireController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/activiteObligatoire/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteObligatoire_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteObligatoireController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/activiteObligatoire/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteObligatoire_show' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteObligatoireController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/activiteObligatoire/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteObligatoire_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteObligatoireController::deleteAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/activiteObligatoire/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteFixee_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteFixeeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ActiviteFixee/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteFixee_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteFixeeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ActiviteFixee/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteFixee_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteFixeeController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ActiviteFixee/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteFixee_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteFixeeController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ActiviteFixee/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteRealisee_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteRealiseeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ActiviteRealisee/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteRealisee_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteRealiseeController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ActiviteRealisee/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteRealisee_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteRealiseeController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ActiviteRealisee/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_ActiviteRealisee_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\ActiviteRealiseeController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ActiviteRealisee/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_Jour_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\JourController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Jour/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'ActiviteBundle_Jour_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'ActiviteBundle\\Controller\\JourController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Jour/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_FenetreHoraire_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\FenetreHoraireController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/fenetreHoraire/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_FenetreHoraire_edit' => array (  0 =>   array (    0 => 'id',    1 => 'pageRequete',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\FenetreHoraireController::editAction',    'id' => NULL,    'pageRequete' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => 'pageRequete',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/fenetreHoraire/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_FenetreHoraire_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\FenetreHoraireController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/fenetreHoraire/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_FenetreHoraire_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\FenetreHoraireController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/fenetreHoraire/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Ressource_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\RessourceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/ressource/index',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Ressource_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\RessourceController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ressource/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Ressource_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\RessourceController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ressource/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Ressource_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\RessourceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/ressource/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_BesoinTypeRessource_edit' => array (  0 =>   array (    0 => 'id',    1 => 'idActivite',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\BesoinTypeRessourceController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '.',      2 => '[^/]++',      3 => 'idActivite',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/\\.]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/besoinTypeRessource/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_BesoinTypeRessource_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\BesoinTypeRessourceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/besoinTypeRessource',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_BesoinTypeRessource_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\BesoinTypeRessourceController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/besoinTypeRessource/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_BesoinTypeRessource_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\BesoinTypeRessourceController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/besoinTypeRessource/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_TypeRessource_edit' => array (  0 =>   array (    0 => 'id',    1 => 'nomTypeRessource',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\TypeRessourceController::editAction',    'id' => NULL,    'nomTypeRessource' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nomTypeRessource',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/typeRessource/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_TypeRessource_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\TypeRessourceController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/typeRessource/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_TypeRessource_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\TypeRessourceController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/typeRessource',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_TypeRessource_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\TypeRessourceController::showAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/typeRessource/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Enfant_edit' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\EnfantController::editAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enfant/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Enfant_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\EnfantController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enfant/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Enfant_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\EnfantController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/enfant/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Enfant_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\EnfantController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/enfant',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Groupe_index' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\GroupeController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/groupe',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Groupe_edit' => array (  0 =>   array (    0 => 'id',    1 => 'nomGroupe',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\GroupeController::editAction',    'id' => NULL,    'nomGroupe' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'nomGroupe',    ),    1 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    2 =>     array (      0 => 'text',      1 => '/groupe/edit',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Groupe_show' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\GroupeController::showAction',    'id' => NULL,  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/groupe/show',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourceBundle_Groupe_delete' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'RessourceBundle\\Controller\\GroupeController::deleteAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/groupe/delete',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Calendar' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::indexAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Calendar_enfant' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::showAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Calendar',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Calendar_event_add' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::editEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Calendar/AddEvent/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Calendar_event_delete' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::deleteEventAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Calendar/DeleteEvent/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Calendar_event_save' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::saveActivityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Calendar/Save/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Calendar_event_restore' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::restoreActivityAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Calendar/Restore/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Ressources_loader_' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAllRessourceAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Calendar/Ressources/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'RessourcesById_loader' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadRessourceByIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Calendar/Ressources',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'Events_loader' => array (  0 =>   array (  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadCalendarAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'text',      1 => '/Calendar/Events/',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'EventsById_loader' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadCalendarByIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Calendar/Events',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
        'EventsByIdStatic_loader' => array (  0 =>   array (    0 => 'id',  ),  1 =>   array (    '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadCalendarStaticByIdAction',  ),  2 =>   array (  ),  3 =>   array (    0 =>     array (      0 => 'variable',      1 => '/',      2 => '[^/]++',      3 => 'id',    ),    1 =>     array (      0 => 'text',      1 => '/Calendar/EventsStatic',    ),  ),  4 =>   array (  ),  5 =>   array (  ),),
    );
        }
    }

    public function generate($name, $parameters = array(), $referenceType = self::ABSOLUTE_PATH)
    {
        if (!isset(self::$declaredRoutes[$name])) {
            throw new RouteNotFoundException(sprintf('Unable to generate a URL for the named route "%s" as such route does not exist.', $name));
        }

        list($variables, $defaults, $requirements, $tokens, $hostTokens, $requiredSchemes) = self::$declaredRoutes[$name];

        return $this->doGenerate($variables, $defaults, $requirements, $tokens, $parameters, $name, $referenceType, $hostTokens, $requiredSchemes);
    }
}
