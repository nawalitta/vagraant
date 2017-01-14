-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Jeu 15 Décembre 2016 à 17:01
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gpac`
--

-- --------------------------------------------------------

--
-- Contenu de la table `fenetre_horaire`
--

INSERT INTO `fenetre_horaire` (`id`, `lundiDebut`, `lundiFin`, `mardiDebut`, `mardiFin`, `mercrediDebut`, `mercrediFin`, `jeudiDebut`, `jeudiFin`, `vendrediDebut`, `vendrediFin`) VALUES
  (1, '08:30:00', '18:00:00', '09:00:00', '18:00:00', '09:00:00', '17:00:00', '08:00:00', '17:00:00', '08:00:00', '16:30:00'),
  (2, '08:30:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00', '17:30:00'),
  (3, '09:00:00', '18:00:00', '09:00:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00', '18:00:00', '09:30:00', '17:30:00'),
  (4, '09:00:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00', '18:00:00', '10:30:00', '18:00:00', '08:30:00', '17:00:00'),
  (5, '08:00:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00', '18:00:00', '09:30:00', '18:00:00', '08:30:00', '17:00:00'),
  (6, '08:15:00', '18:00:00', '08:30:00', '17:00:00', '10:30:00', '18:15:00', '08:45:00', '18:30:00', '08:15:00', '16:30:00'),
  (7, '09:00:00', '17:00:00', '08:30:00', '18:15:00', '08:30:00', '18:30:00', '08:30:00', '18:00:00', '08:00:00', '16:30:00');

-- --------------------------------------------------------

--
-- Contenu de la table `type_activite`
--

INSERT INTO `type_activite` (`id`, `designation`) VALUES
  (3, 'Educative'),
  (1, 'Extérieure'),
  (4, 'Médicale'),
  (2, 'Scolaire');

-- --------------------------------------------------------

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id`, `type_activite_id`, `fenetre_horaire_id`, `designation`, `duree_min`, `duree_max`, `nb_enfants_min`, `nb_enfants_max`, `duree_transport`) VALUES
(1, 1, 1, 'Jardinage', 30, 90, 4, 10, 20),
(2, 1, 3, 'Football', 30, 90, 14, 22, 25),
(3, 2, 2, 'Français', 30, 105, 4, 10, 0),
(4, 2, 7, 'Mathématiques', 30, 105, 4, 10, 0),
(7, 3, 5, 'Théatre', 45, 120, 12, 24, 25),
(8, 3, 4, 'Peinture', 45, 120, 5, 10, 0);

-- --------------------------------------------------------

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`id`, `designation`) VALUES
  (1, 'Groupe 1 '),
  (2, 'Groupe 2');

-- --------------------------------------------------------

--
-- Contenu de la table `enfant`
--

INSERT INTO `enfant` (`id`, `fenetre_horaire_id`, `groupe_id`, `prenom`, `nom`, `estArchive`, `dateArrive`, `regime`, `identifiant`) VALUES
  (1, 1, 2, 'Pierre', 'Moreau', '', '2015-09-01', 0, 'enfant00125'),
  (2, 1, 1, 'Kevin', 'Gauthier', '', '2016-09-14', 1, 'etu00123'),
  (3, 2, 1, 'Guillaume', 'Leblanc', '0', '2016-04-20', 3, 'etu0013'),
  (4, 3, 2, 'Sébastien', 'Bouvier', '0', '2016-04-20', 1, 'etu0014'),
  (5, 4, 1, 'Kevin', 'Masson', '0', '2016-04-20', 2, 'etu0055'),
  (6, 5, 2, 'Alexis', 'Robin', '0', '2016-04-20', 3, 'etu0016'),
  (7, 2, 1, 'Edouard', 'Denis', '0', '2016-04-20', 1, 'etu0027'),
  (8, 6, 2, 'Arthur', 'Michell', '0', '2016-04-20', 2, 'etu0028'),
  (9, 7, 1, 'Quentin', 'Morel', '0', '2016-04-20', 3, 'etu0029'),
  (10, 4, 2, 'Nicolas', 'Perrot', '1', '2016-04-20', 1, 'etu0010'),
  (11, 2, 1, 'Pascal', 'Albert', '0', '2016-04-20', 2, 'etu0011'),
  (12, 5, 2, 'Bernard', 'Remy', '0', '2016-04-20', 3, 'etu0012');

-- --------------------------------------------------------

--
-- Contenu de la table `jour`
--

INSERT INTO `jour` (`id`, `designation`, `parite`) VALUES
  (1, 'Lundi', 0),
  (2, 'Mardi', 0),
  (3, 'Mercredi', 0),
  (4, 'Jeudi', 0),
  (5, 'Vendredi', 0),
  (6, 'Lundi', 1),
  (7, 'Mardi', 1),
  (8, 'Mercredi', 1),
  (9, 'Jeudi', 1),
  (10, 'Vendredi', 1);

-- --------------------------------------------------------

-- Contenu de la table `activite_fixee`
--

--
INSERT INTO `activite_fixee` (`id`, `jour_id`, `enfant_id`, `activite_id`, `heureDebut`, `heureFin`) VALUES
  (1, 1, 7, 1, '08:30:00', '10:00:00'),
  (2, 1, 7, 2, '08:30:00', '10:00:00'),
  (3, 1, 7, 3, '08:30:00', '10:00:00'),
  (4, 2, 12, 2, '14:00:00', '15:00:00'),
  (5, 2, 12, 3, '14:00:00', '15:00:00'),
  (6, 2, 12, 4, '14:00:00', '15:00:00'),
  (7, 3, 1, 3, '09:15:00', '10:30:00'),
  (8, 3, 1, 4, '09:15:00', '10:30:00'),
  (9, 3, 1, 1, '09:15:00', '10:30:00'),
  (10, 4, 11, 4, '11:00:00', '11:45:00'),
  (11, 4, 11, 1, '11:00:00', '11:45:00'),
  (12, 4, 11, 2, '11:00:00', '11:45:00');


-- --------------------------------------------------------

--
-- Contenu de la table `activite_obligatoire`
--

INSERT INTO `activite_obligatoire` (`id`, `activite_id`, `enfant_id`, `quotas`, `ecart`) VALUES
(2, 1, 1, 1, 2),
(3, 2, 3, 1, 2);

-- --------------------------------------------------------

--
-- Contenu de la table `activite_optionnelle`
--

INSERT INTO `activite_optionnelle` (`enfant_id`, `activite_id`) VALUES
(1, 1),
(1, 2),
(2, 1),
(2, 2),
(3, 1),
(3, 2),
(4, 1),
(4, 2),
(5, 1),
(5, 2),
(6, 1),
(6, 2),
(7, 1),
(7, 2),
(8, 1),
(8, 2),
(9, 1),
(9, 2),
(10, 1),
(10, 2),
(11, 1),
(11, 2),
(12, 1);

-- --------------------------------------------------------


-- --------------------------------------------------------

--
-- Contenu de la table `activite_realisee`
--

INSERT INTO `activite_realisee` (`id`, `activite_id`, `enfant_id`, `jour_id`, `heureDebut`, `heureFin`) VALUES
(1, 7, 2, 1, '09:00:00', '11:00:00'),
(15, 4, 1, 4, '10:30:00', '11:45:00'),
(16, 4, 1, 4, '14:00:00', '15:00:00'),
(17, 4, 1, 4, '08:00:00', '09:00:00'),
(18, 4, 1, 4, '15:00:00', '15:30:00'),
(19, 4, 1, 4, '16:00:00', '18:00:00'),
(20, 4, 1, 4, '11:00:00', '12:15:00'),
(21, 4, 2, 4, '10:15:00', '11:30:00'),
(22, 4, 2, 4, '14:30:00', '15:30:00'),
(23, 4, 2, 4, '16:30:00', '17:15:00'),
(24, 8, 1, 8, '15:30:00', '16:30:00'),
(25, 7, 1, 8, '11:30:00', '12:45:00'),
(28, 3, 1, 8, '00:00:12', '00:00:07');

-- --------------------------------------------------------

--
-- Contenu de la table `type_ressource`
--

INSERT INTO `type_ressource` (`id`, `designation`) VALUES
  (1, 'Salle');


-- --------------------------------------------------------

--
-- Contenu de la table `besoin_type_ressource`
--

INSERT INTO `besoin_type_ressource` (`id`, `activite_id`, `type_ressource_id`, `quantiteRessource`, `ratio`, `preference`) VALUES
(1, 1, 1, 1, 15, 0),
(2, 1, 1, 2, 8, 0),
(3, 2, 1, 1, 15, 1),
(4, 2, 1, 1, 4, 0),
(5, 3, 1, 3, 12, 0),
(6, 4, 1, 1, 15, 0),
(7, 4, 1, 1, 4, 0);


-- --------------------------------------------------------

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id`, `titre`, `dateDebut`, `dateFin`) VALUES
(1, 'Fete du nouvel an', '2017-01-03 08:00:00', '2017-01-03 17:00:00'),
(2, 'Theatre', '2016-12-06 12:00:00', '2016-12-12 17:00:00');

-- --------------------------------------------------------

--
-- Contenu de la table `ressource`
--

INSERT INTO `ressource` (`id`, `fenetre_horaire_id`, `type_ressource_id`, `designation`) VALUES
  (1, 1, 1, 'Salle A'),
  (2, 1, 1, 'Salle B'),
  (3, 1, 1, 'Cuisine');

-- --------------------------------------------------------

--
-- Contenu de la table `preaffection`
--

INSERT INTO `preaffection` (`id`, `enfant_id`, `activite_id`, `ressource_id`) VALUES
(1, 1, 3, 1),
(2, 9, 4, 2),
(3, 12, 7, 1);


-- --------------------------------------------------------

--
-- Contenu de la table `ressource_affectee`
--

INSERT INTO `ressource_affectee` (`ressource_id`, `activite_realisee_id`) VALUES
(1, 15),
(1, 28);


-- --------------------------------------------------------

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`) VALUES
(1, 'admin', 'password'),
(2, 'user', 'password');

-- --------------------------------------------------------

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `nbPlaceAssise`, `designation`) VALUES
(1, 5, 'Petite Voiture'),
(2, 12, 'Grande voiture');

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
