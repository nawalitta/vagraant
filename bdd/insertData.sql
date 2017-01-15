-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 15 Janvier 2017 à 13:10
-- Version du serveur :  5.7.14
-- Version de PHP :  5.6.25

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
SET time_zone = "+00:00";


/*!40101 SET @OLD_CHARACTER_SET_CLIENT = @@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS = @@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION = @@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Base de données :  `gpac`
--

--
-- Contenu de la table `fenetre_horaire`
--

INSERT INTO `fenetre_horaire` (`id`, `lundiDebut`, `lundiFin`, `mardiDebut`, `mardiFin`, `mercrediDebut`, `mercrediFin`, `jeudiDebut`, `jeudiFin`, `vendrediDebut`, `vendrediFin`)
VALUES
  (1, '08:30:00', '18:00:00', '09:00:00', '18:00:00', '09:00:00', '17:00:00', '08:00:00', '17:00:00', '08:00:00',
      '16:30:00'),
  (2, '08:30:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00',
      '17:30:00'),
  (3, '09:00:00', '18:00:00', '09:00:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00', '18:00:00', '09:30:00',
      '17:30:00'),
  (4, '09:00:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00', '18:00:00', '10:30:00', '18:00:00', '08:30:00',
      '17:00:00'),
  (5, '08:00:00', '18:00:00', '08:30:00', '18:00:00', '09:30:00', '18:00:00', '09:30:00', '18:00:00', '08:30:00',
      '17:00:00'),
  (6, '08:15:00', '18:00:00', '08:30:00', '17:00:00', '10:30:00', '18:15:00', '08:45:00', '18:30:00', '08:15:00',
      '16:30:00'),
  (7, '09:00:00', '17:00:00', '08:30:00', '18:15:00', '08:30:00', '18:30:00', '08:30:00', '18:00:00', '08:00:00',
      '16:30:00'),
  (8, '00:00:00', '00:01:00', '00:00:00', '00:01:00', '00:00:00', '00:01:00', '00:00:00', '00:02:00', '00:00:00',
      '00:02:00');

--
-- Contenu de la table `type_activite`
--

INSERT INTO `type_activite` (`id`, `designation`) VALUES
  (3, 'Educative'),
  (1, 'Extérieure'),
  (4, 'Médicale'),
  (2, 'Scolaire'),
  (9, 'Tota'),
  (8, 'Toto');

--
-- Contenu de la table `activite`
--

INSERT INTO `activite` (`id`, `type_activite_id`, `fenetre_horaire_id`, `designation`, `duree_min`, `duree_max`, `nb_enfants_min`, `nb_enfants_max`, `duree_transport`)
VALUES
  (1, 1, 1, 'Jardinage', 30, 90, 4, 10, 20),
  (2, 1, 3, 'Football', 30, 90, 14, 22, 25),
  (3, 2, 2, 'Français', 30, 105, 4, 10, 0),
  (4, 2, 7, 'Mathématiques', 30, 105, 4, 10, 0),
  (5, 3, 5, 'Théatre', 45, 120, 12, 24, 25),
  (6, 3, 4, 'Peinture', 45, 120, 5, 10, 0);

--
-- Contenu de la table `groupe`
--

INSERT INTO `groupe` (`id`, `designation`) VALUES
  (1, 'Groupe 1 '),
  (2, 'Groupe 2');

--
-- Contenu de la table `enfant`
--

INSERT INTO `enfant` (`id`, `fenetre_horaire_id`, `groupe_id`, `prenom`, `nom`, `estArchive`, `dateArrive`, `regime`, `identifiant`)
VALUES
  (1, 1, 2, 'Pierre', 'Moreau', '', '2015-09-01', 0, 'enfant00125'),
  (2, 1, 1, 'Kevin', 'Gauthier', '', '2016-09-14', 1, 'etu00123'),
  (3, 2, 1, 'Guillaume', 'Leblanc', '0', '2016-04-20', 3, 'etu0013'),
  (4, 3, 2, 'Sébastien', 'Bouvier', '0', '2016-04-20', 1, 'etu0014');

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

-- Contenu de la table `activite_fixee`
--

--
INSERT INTO `activite_fixee` (`id`, `jour_id`, `enfant_id`, `activite_id`, `heureDebut`, `heureFin`) VALUES
  (1, 1, 1, 1, '08:30:00', '10:00:00'),
  (2, 1, 1, 2, '08:30:00', '10:00:00'),
  (3, 1, 1, 3, '08:30:00', '10:00:00'),
  (4, 2, 2, 2, '14:00:00', '15:00:00'),
  (5, 2, 2, 3, '14:00:00', '15:00:00'),
  (6, 2, 2, 4, '14:00:00', '15:00:00'),
  (7, 3, 3, 3, '09:15:00', '10:30:00'),
  (8, 3, 3, 4, '09:15:00', '10:30:00'),
  (9, 3, 3, 1, '09:15:00', '10:30:00'),
  (10, 4, 4, 4, '11:00:00', '11:45:00'),
  (11, 4, 4, 1, '11:00:00', '11:45:00'),
  (12, 4, 4, 2, '11:00:00', '11:45:00');

--
-- Contenu de la table `activite_obligatoire`
--

INSERT INTO `activite_obligatoire` (`id`, `activite_id`, `enfant_id`, `quotas`, `ecart`) VALUES
  (1, 1, 1, 1, 2),
  (2, 2, 1, 1, 2),
  (3, 3, 1, 1, 2),
  (4, 2, 2, 1, 2),
  (5, 3, 2, 1, 2),
  (6, 4, 2, 1, 2),
  (7, 4, 3, 1, 2),
  (8, 5, 3, 1, 2),
  (9, 6, 3, 1, 2),
  (10, 3, 4, 1, 2),
  (11, 6, 4, 1, 2),
  (12, 2, 4, 1, 2),
  (13, 5, 4, 1, 2);

--
-- Contenu de la table `activite_optionnelle`
--

INSERT INTO `activite_optionnelle` (`enfant_id`, `activite_id`) VALUES
  (1, 1),
  (1, 2),
  (1, 3),
  (1, 4),
  (1, 5),
  (1, 6),
  (2, 1),
  (2, 2),
  (2, 3),
  (2, 4),
  (2, 5),
  (2, 6),
  (3, 1),
  (3, 2),
  (3, 3),
  (3, 4),
  (3, 5),
  (3, 6),
  (4, 1),
  (4, 2),
  (4, 3),
  (4, 4),
  (4, 5),
  (4, 6);

--
-- Contenu de la table `activite_realisee`
--

INSERT INTO `activite_realisee` (`id`, `activite_id`, `enfant_id`, `jour_id`, `heureDebut`, `heureFin`) VALUES
  (1, 1, 1, 1, '10:00:00', '12:00:00'),
  (2, 2, 1, 3, '12:00:00', '14:00:00'),
  (3, 1, 2, 1, '13:00:00', '15:00:00'),
  (4, 3, 1, 1, '14:30:00', '16:30:00'),
  (5, 5, 1, 5, '08:15:00', '10:15:00'),
  (6, 6, 1, 5, '15:15:00', '17:15:00'),
  (7, 4, 3, 1, '08:15:00', '10:15:00'),
  (8, 5, 3, 5, '14:30:00', '16:30:00'),
  (9, 6, 3, 5, '10:15:00', '12:15:00'),
  (10, 6, 3, 1, '15:45:00', '17:45:00'),
  (11, 2, 4, 1, '08:45:00', '10:45:00'),
  (12, 4, 4, 1, '15:30:00', '17:30:00'),
  (13, 3, 4, 5, '09:30:00', '11:30:00'),
  (14, 2, 4, 5, '15:00:00', '17:00:00'),
  (15, 5, 2, 5, '09:30:00', '11:30:00'),
  (16, 4, 2, 5, '13:00:00', '15:00:00');

--
-- Contenu de la table `type_ressource`
--

INSERT INTO `type_ressource` (`id`, `designation`) VALUES
  (1, 'Salle');

--
-- Contenu de la table `besoin_type_ressource`
--

INSERT INTO `besoin_type_ressource` (`id`, `activite_id`, `type_ressource_id`, `quantiteRessource`, `ratio`, `preference`)
VALUES
  (1, 1, 1, 1, 15, 0),
  (2, 1, 1, 2, 8, 0),
  (3, 2, 1, 1, 15, 1),
  (4, 2, 1, 1, 4, 0),
  (5, 3, 1, 3, 12, 0),
  (6, 4, 1, 1, 15, 0),
  (7, 4, 1, 1, 4, 0);

--
-- Contenu de la table `ressource`
--

INSERT INTO `ressource` (`id`, `fenetre_horaire_id`, `type_ressource_id`, `designation`) VALUES
  (1, 1, 1, 'Salle A'),
  (2, 1, 1, 'Salle B'),
  (3, 1, 1, 'Cuisine');

--
-- Contenu de la table `preaffection`
--

INSERT INTO `preaffection` (`id`, `enfant_id`, `activite_id`, `ressource_id`) VALUES
  (1, 1, 3, 1),
  (2, 2, 4, 2),
  (3, 3, 5, 1);

--
-- Contenu de la table `ressource_affectee`
--

INSERT INTO `ressource_affectee` (`ressource_id`, `activite_realisee_id`) VALUES
  (1, 1),
  (2, 2);

--
-- Contenu de la table `evenement`
--

INSERT INTO `evenement` (`id`, `enfant_id`, `activite_id`, `jour_id`, `titre`, `url`, `couleur`, `cssClass`, `dateDebut`, `dateFin`)
VALUES
  (1, 1, 1, 1, 'Jardinage', NULL, NULL, NULL, '10:00:00', '12:00:00'),
  (2, 1, 2, 3, 'Football', NULL, NULL, NULL, '12:00:00', '14:00:00'),
  (3, 2, 2, 1, 'Football', NULL, NULL, NULL, '08:15:00', '10:15:00'),
  (4, 2, 1, 1, 'Jardinage', NULL, NULL, NULL, '13:00:00', '15:00:00'),
  (5, 1, 3, 1, 'Français', NULL, NULL, NULL, '14:30:00', '16:30:00'),
  (6, 1, 5, 5, 'Théatre', NULL, NULL, NULL, '08:15:00', '10:15:00'),
  (7, 1, 6, 5, 'Peinture', NULL, NULL, NULL, '15:15:00', '17:15:00'),
  (8, 3, 4, 1, 'Mathématiques', NULL, NULL, NULL, '08:15:00', '10:15:00'),
  (9, 3, 5, 5, 'Théatre', NULL, NULL, NULL, '14:30:00', '16:30:00'),
  (10, 3, 6, 5, 'Peinture', NULL, NULL, NULL, '10:15:00', '12:15:00'),
  (11, 3, 6, 1, 'Peinture', NULL, NULL, NULL, '15:45:00', '17:45:00'),
  (12, 4, 2, 1, 'Football', NULL, NULL, NULL, '08:45:00', '10:45:00'),
  (13, 4, 4, 1, 'Mathématiques', NULL, NULL, NULL, '15:30:00', '17:30:00'),
  (14, 4, 3, 5, 'Français', NULL, NULL, NULL, '09:30:00', '11:30:00'),
  (15, 4, 2, 5, 'Football', NULL, NULL, NULL, '15:00:00', '17:00:00'),
  (16, 2, 5, 5, 'Théatre', NULL, NULL, NULL, '09:30:00', '11:30:00'),
  (17, 2, 4, 5, 'Mathématiques', NULL, NULL, NULL, '13:00:00', '15:00:00'),
  (18, 1, 5, 3, 'Théatre', NULL, NULL, NULL, '09:45:00', '11:45:00'),
  (19, 1, 3, 2, 'Français', NULL, NULL, NULL, '09:00:00', '11:00:00'),
  (20, 1, 3, 5, 'Français', NULL, NULL, NULL, '12:45:00', '14:45:00'),
  (21, 1, 2, 2, 'Football', NULL, NULL, NULL, '14:45:00', '16:45:00');

--
-- Contenu de la table `utilisateur`
--

INSERT INTO `utilisateur` (`id`, `login`, `password`) VALUES
  (1, 'admin', 'password'),
  (2, 'user', 'password');

--
-- Contenu de la table `vehicule`
--

INSERT INTO `vehicule` (`id`, `nbPlaceAssise`, `designation`) VALUES
  (1, 5, 'Petite Voiture'),
  (2, 12, 'Grande voiture');

/*!40101 SET CHARACTER_SET_CLIENT = @OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS = @OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION = @OLD_COLLATION_CONNECTION */;
