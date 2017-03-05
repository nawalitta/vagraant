<?php

use Symfony\Component\Routing\Exception\MethodNotAllowedException;
use Symfony\Component\Routing\Exception\ResourceNotFoundException;
use Symfony\Component\Routing\RequestContext;

/**
 * appProdDebugProjectContainerUrlMatcher.
 *
 * This class has been auto-generated
 * by the Symfony Routing Component.
 */
class appProdDebugProjectContainerUrlMatcher extends Symfony\Bundle\FrameworkBundle\Routing\RedirectableUrlMatcher
{
    /**
     * Constructor.
     */
    public function __construct(RequestContext $context)
    {
        $this->context = $context;
    }

    public function match($pathinfo)
    {
        $allow = array();
        $pathinfo = rawurldecode($pathinfo);
        $context = $this->context;
        $request = $this->request;

        // stats_homepage
        if ($pathinfo === '/stats/index') {
            return array (  '_controller' => 'StatsBundle\\Controller\\DefaultController::indexAction',  '_route' => 'stats_homepage',);
        }

        if (0 === strpos($pathinfo, '/utilisateur')) {
            // UtilisateurBundle_Utilisateur_edit
            if ($pathinfo === '/utilisateur/edit') {
                return array (  '_controller' => 'UtilisateurBundle\\Controller\\UtilisateurController::editAction',  '_route' => 'UtilisateurBundle_Utilisateur_edit',);
            }

            // UtilisateurBundle_Utilisateur_show
            if ($pathinfo === '/utilisateur/show') {
                return array (  '_controller' => 'UtilisateurBundle\\Controller\\UtilisateurController::showAction',  '_route' => 'UtilisateurBundle_Utilisateur_show',);
            }

            // UtilisateurBundle_Utilisateur_delete
            if ($pathinfo === '/utilisateur/delete') {
                return array (  '_controller' => 'UtilisateurBundle\\Controller\\UtilisateurController::deleteAction',  '_route' => 'UtilisateurBundle_Utilisateur_delete',);
            }

            // UtilisateurBundle_Utilisateur_index
            if ($pathinfo === '/utilisateur/index') {
                return array (  '_controller' => 'UtilisateurBundle\\Controller\\UtilisateurController::indexAction',  '_route' => 'UtilisateurBundle_Utilisateur_index',);
            }

        }

        // CoreBundle_core_homepage
        if (rtrim($pathinfo, '/') === '') {
            if (substr($pathinfo, -1) !== '/') {
                return $this->redirect($pathinfo.'/', 'CoreBundle_core_homepage');
            }

            return array (  '_controller' => 'CoreBundle\\Controller\\DefaultController::indexAction',  '_route' => 'CoreBundle_core_homepage',);
        }

        if (0 === strpos($pathinfo, '/affectation/enfantActiv')) {
            // CoreBundle_affecter_enfant_activite_optionnelle
            if ($pathinfo === '/affectation/enfantActiviteOptionnelle') {
                return array (  '_controller' => 'CoreBundle\\Controller\\AffectationController::affecterEnfantActiviteOptionAction',  '_route' => 'CoreBundle_affecter_enfant_activite_optionnelle',);
            }

            // CoreBundle_affecter_enfant_activite_obligatoire
            if ($pathinfo === '/affectation/enfantActivteObligatoire') {
                return array (  '_controller' => 'CoreBundle\\Controller\\AffectationController::affecterEnfantActiviteObligatoireAction',  '_route' => 'CoreBundle_affecter_enfant_activite_obligatoire',);
            }

        }

        if (0 === strpos($pathinfo, '/typeActivite')) {
            // ActiviteBundle_TypeActivite_index
            if (rtrim($pathinfo, '/') === '/typeActivite') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ActiviteBundle_TypeActivite_index');
                }

                return array (  '_controller' => 'ActiviteBundle\\Controller\\TypeActiviteController::indexAction',  '_route' => 'ActiviteBundle_TypeActivite_index',);
            }

            // ActiviteBundle_TypeActivite_edit
            if (0 === strpos($pathinfo, '/typeActivite/edit') && preg_match('#^/typeActivite/edit(?:/(?P<id>[^/]++)(?:/(?P<nomTypeActivite>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_TypeActivite_edit')), array (  '_controller' => 'ActiviteBundle\\Controller\\TypeActiviteController::editAction',  'id' => NULL,  'nomTypeActivite' => NULL,));
            }

            // ActiviteBundle_TypeActivite_delete
            if (0 === strpos($pathinfo, '/typeActivite/delete') && preg_match('#^/typeActivite/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_TypeActivite_delete')), array (  '_controller' => 'ActiviteBundle\\Controller\\TypeActiviteController::deleteAction',));
            }

            // ActiviteBundle_TypeActivite_show
            if (0 === strpos($pathinfo, '/typeActivite/show') && preg_match('#^/typeActivite/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_TypeActivite_show')), array (  '_controller' => 'ActiviteBundle\\Controller\\TypeActiviteController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/activite')) {
            // ActiviteBundle_Activite_index
            if (rtrim($pathinfo, '/') === '/activite') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ActiviteBundle_Activite_index');
                }

                return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::indexAction',  '_route' => 'ActiviteBundle_Activite_index',);
            }

            // ActiviteBundle_Activite_edit
            if (0 === strpos($pathinfo, '/activite/edit') && preg_match('#^/activite/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_Activite_edit')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::editAction',  'id' => NULL,));
            }

            // ActiviteBundle_Activite_show
            if (0 === strpos($pathinfo, '/activite/show') && preg_match('#^/activite/show(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_Activite_show')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::showAction',  'id' => NULL,));
            }

            // ActiviteBundle_Activite_delete
            if (0 === strpos($pathinfo, '/activite/delete') && preg_match('#^/activite/delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_Activite_delete')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteController::deleteAction',  'id' => NULL,));
            }

            if (0 === strpos($pathinfo, '/activiteObligatoire')) {
                // ActiviteBundle_ActiviteObligatoire_index
                if (rtrim($pathinfo, '/') === '/activiteObligatoire') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ActiviteBundle_ActiviteObligatoire_index');
                    }

                    return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteObligatoireController::indexAction',  '_route' => 'ActiviteBundle_ActiviteObligatoire_index',);
                }

                // ActiviteBundle_ActiviteObligatoire_edit
                if (0 === strpos($pathinfo, '/activiteObligatoire/edit') && preg_match('#^/activiteObligatoire/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_ActiviteObligatoire_edit')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteObligatoireController::editAction',  'id' => NULL,));
                }

                // ActiviteBundle_ActiviteObligatoire_show
                if ($pathinfo === '/activiteObligatoire/show') {
                    return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteObligatoireController::showAction',  '_route' => 'ActiviteBundle_ActiviteObligatoire_show',);
                }

                // ActiviteBundle_ActiviteObligatoire_delete
                if (0 === strpos($pathinfo, '/activiteObligatoire/delete') && preg_match('#^/activiteObligatoire/delete(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_ActiviteObligatoire_delete')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteObligatoireController::deleteAction',  'id' => NULL,));
                }

            }

        }

        if (0 === strpos($pathinfo, '/Activite')) {
            if (0 === strpos($pathinfo, '/ActiviteFixee')) {
                // ActiviteBundle_ActiviteFixee_index
                if (rtrim($pathinfo, '/') === '/ActiviteFixee') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ActiviteBundle_ActiviteFixee_index');
                    }

                    return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteFixeeController::indexAction',  '_route' => 'ActiviteBundle_ActiviteFixee_index',);
                }

                // ActiviteBundle_ActiviteFixee_show
                if (0 === strpos($pathinfo, '/ActiviteFixee/show') && preg_match('#^/ActiviteFixee/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_ActiviteFixee_show')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteFixeeController::showAction',));
                }

                // ActiviteBundle_ActiviteFixee_delete
                if (0 === strpos($pathinfo, '/ActiviteFixee/delete') && preg_match('#^/ActiviteFixee/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_ActiviteFixee_delete')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteFixeeController::deleteAction',));
                }

                // ActiviteBundle_ActiviteFixee_edit
                if (0 === strpos($pathinfo, '/ActiviteFixee/edit') && preg_match('#^/ActiviteFixee/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_ActiviteFixee_edit')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteFixeeController::editAction',  'id' => NULL,));
                }

            }

            if (0 === strpos($pathinfo, '/ActiviteRealisee')) {
                // ActiviteBundle_ActiviteRealisee_index
                if (rtrim($pathinfo, '/') === '/ActiviteRealisee') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'ActiviteBundle_ActiviteRealisee_index');
                    }

                    return array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteRealiseeController::indexAction',  '_route' => 'ActiviteBundle_ActiviteRealisee_index',);
                }

                // ActiviteBundle_ActiviteRealisee_show
                if (0 === strpos($pathinfo, '/ActiviteRealisee/show') && preg_match('#^/ActiviteRealisee/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_ActiviteRealisee_show')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteRealiseeController::showAction',));
                }

                // ActiviteBundle_ActiviteRealisee_delete
                if (0 === strpos($pathinfo, '/ActiviteRealisee/delete') && preg_match('#^/ActiviteRealisee/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_ActiviteRealisee_delete')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteRealiseeController::deleteAction',));
                }

                // ActiviteBundle_ActiviteRealisee_edit
                if (0 === strpos($pathinfo, '/ActiviteRealisee/edit') && preg_match('#^/ActiviteRealisee/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_ActiviteRealisee_edit')), array (  '_controller' => 'ActiviteBundle\\Controller\\ActiviteRealiseeController::editAction',  'id' => NULL,));
                }

            }

        }

        if (0 === strpos($pathinfo, '/Jour')) {
            // ActiviteBundle_Jour_index
            if (rtrim($pathinfo, '/') === '/Jour') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'ActiviteBundle_Jour_index');
                }

                return array (  '_controller' => 'ActiviteBundle\\Controller\\JourController::indexAction',  '_route' => 'ActiviteBundle_Jour_index',);
            }

            // ActiviteBundle_Jour_show
            if (0 === strpos($pathinfo, '/Jour/show') && preg_match('#^/Jour/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'ActiviteBundle_Jour_show')), array (  '_controller' => 'ActiviteBundle\\Controller\\JourController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/fenetreHoraire')) {
            // RessourceBundle_FenetreHoraire_index
            if ($pathinfo === '/fenetreHoraire/index') {
                return array (  '_controller' => 'RessourceBundle\\Controller\\FenetreHoraireController::indexAction',  '_route' => 'RessourceBundle_FenetreHoraire_index',);
            }

            // RessourceBundle_FenetreHoraire_edit
            if (0 === strpos($pathinfo, '/fenetreHoraire/edit') && preg_match('#^/fenetreHoraire/edit(?:/(?P<id>[^/\\.]++)(?:\\.(?P<pageRequete>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_FenetreHoraire_edit')), array (  '_controller' => 'RessourceBundle\\Controller\\FenetreHoraireController::editAction',  'id' => NULL,  'pageRequete' => NULL,));
            }

            // RessourceBundle_FenetreHoraire_delete
            if (0 === strpos($pathinfo, '/fenetreHoraire/delete') && preg_match('#^/fenetreHoraire/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_FenetreHoraire_delete')), array (  '_controller' => 'RessourceBundle\\Controller\\FenetreHoraireController::deleteAction',));
            }

            // RessourceBundle_FenetreHoraire_show
            if (0 === strpos($pathinfo, '/fenetreHoraire/show') && preg_match('#^/fenetreHoraire/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_FenetreHoraire_show')), array (  '_controller' => 'RessourceBundle\\Controller\\FenetreHoraireController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/ressource')) {
            // RessourceBundle_Ressource_index
            if ($pathinfo === '/ressource/index') {
                return array (  '_controller' => 'RessourceBundle\\Controller\\RessourceController::indexAction',  '_route' => 'RessourceBundle_Ressource_index',);
            }

            // RessourceBundle_Ressource_edit
            if (0 === strpos($pathinfo, '/ressource/edit') && preg_match('#^/ressource/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_Ressource_edit')), array (  '_controller' => 'RessourceBundle\\Controller\\RessourceController::editAction',  'id' => NULL,));
            }

            // RessourceBundle_Ressource_delete
            if (0 === strpos($pathinfo, '/ressource/delete') && preg_match('#^/ressource/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_Ressource_delete')), array (  '_controller' => 'RessourceBundle\\Controller\\RessourceController::deleteAction',));
            }

            // RessourceBundle_Ressource_show
            if (0 === strpos($pathinfo, '/ressource/show') && preg_match('#^/ressource/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_Ressource_show')), array (  '_controller' => 'RessourceBundle\\Controller\\RessourceController::showAction',));
            }

        }

        if (0 === strpos($pathinfo, '/besoinTypeRessource')) {
            // RessourceBundle_BesoinTypeRessource_edit
            if (0 === strpos($pathinfo, '/besoinTypeRessource/edit') && preg_match('#^/besoinTypeRessource/edit/(?P<id>[^/\\.]++)\\.(?P<idActivite>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_BesoinTypeRessource_edit')), array (  '_controller' => 'RessourceBundle\\Controller\\BesoinTypeRessourceController::editAction',  'id' => NULL,));
            }

            // RessourceBundle_BesoinTypeRessource_index
            if ($pathinfo === '/besoinTypeRessource') {
                return array (  '_controller' => 'RessourceBundle\\Controller\\BesoinTypeRessourceController::indexAction',  '_route' => 'RessourceBundle_BesoinTypeRessource_index',);
            }

            // RessourceBundle_BesoinTypeRessource_show
            if (0 === strpos($pathinfo, '/besoinTypeRessource/show') && preg_match('#^/besoinTypeRessource/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_BesoinTypeRessource_show')), array (  '_controller' => 'RessourceBundle\\Controller\\BesoinTypeRessourceController::showAction',));
            }

            // RessourceBundle_BesoinTypeRessource_delete
            if (0 === strpos($pathinfo, '/besoinTypeRessource/delete') && preg_match('#^/besoinTypeRessource/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_BesoinTypeRessource_delete')), array (  '_controller' => 'RessourceBundle\\Controller\\BesoinTypeRessourceController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/typeRessource')) {
            // RessourceBundle_TypeRessource_edit
            if (0 === strpos($pathinfo, '/typeRessource/edit') && preg_match('#^/typeRessource/edit(?:/(?P<id>[^/]++)(?:/(?P<nomTypeRessource>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_TypeRessource_edit')), array (  '_controller' => 'RessourceBundle\\Controller\\TypeRessourceController::editAction',  'id' => NULL,  'nomTypeRessource' => NULL,));
            }

            // RessourceBundle_TypeRessource_delete
            if (0 === strpos($pathinfo, '/typeRessource/delete') && preg_match('#^/typeRessource/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_TypeRessource_delete')), array (  '_controller' => 'RessourceBundle\\Controller\\TypeRessourceController::deleteAction',));
            }

            // RessourceBundle_TypeRessource_index
            if ($pathinfo === '/typeRessource') {
                return array (  '_controller' => 'RessourceBundle\\Controller\\TypeRessourceController::indexAction',  '_route' => 'RessourceBundle_TypeRessource_index',);
            }

            // RessourceBundle_TypeRessource_show
            if (0 === strpos($pathinfo, '/typeRessource/show') && preg_match('#^/typeRessource/show(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_TypeRessource_show')), array (  '_controller' => 'RessourceBundle\\Controller\\TypeRessourceController::showAction',  'id' => NULL,));
            }

        }

        if (0 === strpos($pathinfo, '/enfant')) {
            // RessourceBundle_Enfant_edit
            if (0 === strpos($pathinfo, '/enfant/edit') && preg_match('#^/enfant/edit(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_Enfant_edit')), array (  '_controller' => 'RessourceBundle\\Controller\\EnfantController::editAction',  'id' => NULL,));
            }

            // RessourceBundle_Enfant_show
            if (0 === strpos($pathinfo, '/enfant/show') && preg_match('#^/enfant/show/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_Enfant_show')), array (  '_controller' => 'RessourceBundle\\Controller\\EnfantController::showAction',));
            }

            // RessourceBundle_Enfant_delete
            if (0 === strpos($pathinfo, '/enfant/delete') && preg_match('#^/enfant/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_Enfant_delete')), array (  '_controller' => 'RessourceBundle\\Controller\\EnfantController::deleteAction',));
            }

            // RessourceBundle_Enfant_index
            if ($pathinfo === '/enfant') {
                return array (  '_controller' => 'RessourceBundle\\Controller\\EnfantController::indexAction',  '_route' => 'RessourceBundle_Enfant_index',);
            }

        }

        if (0 === strpos($pathinfo, '/groupe')) {
            // RessourceBundle_Groupe_index
            if ($pathinfo === '/groupe') {
                return array (  '_controller' => 'RessourceBundle\\Controller\\GroupeController::indexAction',  '_route' => 'RessourceBundle_Groupe_index',);
            }

            // RessourceBundle_Groupe_edit
            if (0 === strpos($pathinfo, '/groupe/edit') && preg_match('#^/groupe/edit(?:/(?P<id>[^/]++)(?:/(?P<nomGroupe>[^/]++))?)?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_Groupe_edit')), array (  '_controller' => 'RessourceBundle\\Controller\\GroupeController::editAction',  'id' => NULL,  'nomGroupe' => NULL,));
            }

            // RessourceBundle_Groupe_show
            if (0 === strpos($pathinfo, '/groupe/show') && preg_match('#^/groupe/show(?:/(?P<id>[^/]++))?$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_Groupe_show')), array (  '_controller' => 'RessourceBundle\\Controller\\GroupeController::showAction',  'id' => NULL,));
            }

            // RessourceBundle_Groupe_delete
            if (0 === strpos($pathinfo, '/groupe/delete') && preg_match('#^/groupe/delete/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourceBundle_Groupe_delete')), array (  '_controller' => 'RessourceBundle\\Controller\\GroupeController::deleteAction',));
            }

        }

        if (0 === strpos($pathinfo, '/Calendar')) {
            // Calendar
            if ($pathinfo === '/Calendar') {
                return array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::indexAction',  '_route' => 'Calendar',);
            }

            // Calendar_enfant
            if (preg_match('#^/Calendar/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                return $this->mergeDefaults(array_replace($matches, array('_route' => 'Calendar_enfant')), array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::showAction',));
            }

            // Calendar_event_add
            if (rtrim($pathinfo, '/') === '/Calendar/AddEvent') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Calendar_event_add');
                }

                return array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::editEventAction',  '_route' => 'Calendar_event_add',);
            }

            // Calendar_event_delete
            if (rtrim($pathinfo, '/') === '/Calendar/DeleteEvent') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Calendar_event_delete');
                }

                return array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::deleteEventAction',  '_route' => 'Calendar_event_delete',);
            }

            // Calendar_event_save
            if (rtrim($pathinfo, '/') === '/Calendar/Save') {
                if (substr($pathinfo, -1) !== '/') {
                    return $this->redirect($pathinfo.'/', 'Calendar_event_save');
                }

                return array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::saveActivityAction',  '_route' => 'Calendar_event_save',);
            }

            if (0 === strpos($pathinfo, '/Calendar/Res')) {
                // Calendar_event_restore
                if (rtrim($pathinfo, '/') === '/Calendar/Restore') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'Calendar_event_restore');
                    }

                    return array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::restoreActivityAction',  '_route' => 'Calendar_event_restore',);
                }

                if (0 === strpos($pathinfo, '/Calendar/Ressources')) {
                    // Ressources_loader_
                    if (rtrim($pathinfo, '/') === '/Calendar/Ressources') {
                        if (substr($pathinfo, -1) !== '/') {
                            return $this->redirect($pathinfo.'/', 'Ressources_loader_');
                        }

                        return array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadAllRessourceAction',  '_route' => 'Ressources_loader_',);
                    }

                    // RessourcesById_loader
                    if (preg_match('#^/Calendar/Ressources/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                        return $this->mergeDefaults(array_replace($matches, array('_route' => 'RessourcesById_loader')), array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadRessourceByIdAction',));
                    }

                }

            }

            if (0 === strpos($pathinfo, '/Calendar/Events')) {
                // Events_loader
                if (rtrim($pathinfo, '/') === '/Calendar/Events') {
                    if (substr($pathinfo, -1) !== '/') {
                        return $this->redirect($pathinfo.'/', 'Events_loader');
                    }

                    return array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadCalendarAction',  '_route' => 'Events_loader',);
                }

                // EventsById_loader
                if (preg_match('#^/Calendar/Events/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'EventsById_loader')), array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadCalendarByIdAction',));
                }

                // EventsByIdStatic_loader
                if (0 === strpos($pathinfo, '/Calendar/EventsStatic') && preg_match('#^/Calendar/EventsStatic/(?P<id>[^/]++)$#s', $pathinfo, $matches)) {
                    return $this->mergeDefaults(array_replace($matches, array('_route' => 'EventsByIdStatic_loader')), array (  '_controller' => 'CalendarBundle\\Controller\\CalendarController::loadCalendarStaticByIdAction',));
                }

            }

        }

        throw 0 < count($allow) ? new MethodNotAllowedException(array_unique($allow)) : new ResourceNotFoundException();
    }
}
