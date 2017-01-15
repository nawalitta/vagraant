-- phpMyAdmin SQL Dump
-- version 4.6.4
-- https://www.phpmyadmin.net/
--
-- Client :  127.0.0.1
-- Généré le :  Dim 15 Janvier 2017 à 13:09
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
-- Structure de la table `activite`
--

CREATE TABLE `activite` (
  `id` int(11) NOT NULL,
  `type_activite_id` int(11) NOT NULL,
  `fenetre_horaire_id` int(11) DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `duree_min` int(11) NOT NULL,
  `duree_max` int(11) NOT NULL,
  `nb_enfants_min` int(11) NOT NULL,
  `nb_enfants_max` int(11) NOT NULL,
  `duree_transport` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `activite_fixee`
--

CREATE TABLE `activite_fixee` (
  `id` int(11) NOT NULL,
  `jour_id` int(11) DEFAULT NULL,
  `enfant_id` int(11) DEFAULT NULL,
  `activite_id` int(11) NOT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `activite_obligatoire`
--

CREATE TABLE `activite_obligatoire` (
  `id` int(11) NOT NULL,
  `activite_id` int(11) DEFAULT NULL,
  `enfant_id` int(11) DEFAULT NULL,
  `quotas` int(11) NOT NULL,
  `ecart` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `activite_optionnelle`
--

CREATE TABLE `activite_optionnelle` (
  `enfant_id` int(11) NOT NULL,
  `activite_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `activite_realisee`
--

CREATE TABLE `activite_realisee` (
  `id` int(11) NOT NULL,
  `activite_id` int(11) DEFAULT NULL,
  `enfant_id` int(11) DEFAULT NULL,
  `jour_id` int(11) DEFAULT NULL,
  `heureDebut` time NOT NULL,
  `heureFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `besoin_type_ressource`
--

CREATE TABLE `besoin_type_ressource` (
  `id` int(11) NOT NULL,
  `activite_id` int(11) DEFAULT NULL,
  `type_ressource_id` int(11) DEFAULT NULL,
  `quantiteRessource` int(11) NOT NULL,
  `ratio` int(11) NOT NULL,
  `preference` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `enfant`
--

CREATE TABLE `enfant` (
  `id` int(11) NOT NULL,
  `fenetre_horaire_id` int(11) DEFAULT NULL,
  `groupe_id` int(11) DEFAULT NULL,
  `prenom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `nom` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `estArchive` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `dateArrive` date NOT NULL,
  `regime` int(11) NOT NULL,
  `identifiant` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `evenement`
--

CREATE TABLE `evenement` (
  `id` int(11) NOT NULL,
  `enfant_id` int(11) NOT NULL,
  `activite_id` int(11) NOT NULL,
  `jour_id` int(11) NOT NULL,
  `titre` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `url` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `couleur` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `cssClass` varchar(255) COLLATE utf8_unicode_ci DEFAULT NULL,
  `dateDebut` time NOT NULL,
  `dateFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `fenetre_horaire`
--

CREATE TABLE `fenetre_horaire` (
  `id` int(11) NOT NULL,
  `lundiDebut` time NOT NULL,
  `lundiFin` time NOT NULL,
  `mardiDebut` time NOT NULL,
  `mardiFin` time NOT NULL,
  `mercrediDebut` time NOT NULL,
  `mercrediFin` time NOT NULL,
  `jeudiDebut` time NOT NULL,
  `jeudiFin` time NOT NULL,
  `vendrediDebut` time NOT NULL,
  `vendrediFin` time NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `groupe`
--

CREATE TABLE `groupe` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `jour`
--

CREATE TABLE `jour` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `parite` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `preaffection`
--

CREATE TABLE `preaffection` (
  `id` int(11) NOT NULL,
  `enfant_id` int(11) DEFAULT NULL,
  `activite_id` int(11) DEFAULT NULL,
  `ressource_id` int(11) DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ressource`
--

CREATE TABLE `ressource` (
  `id` int(11) NOT NULL,
  `fenetre_horaire_id` int(11) DEFAULT NULL,
  `type_ressource_id` int(11) DEFAULT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `ressource_affectee`
--

CREATE TABLE `ressource_affectee` (
  `ressource_id` int(11) NOT NULL,
  `activite_realisee_id` int(11) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_activite`
--

CREATE TABLE `type_activite` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `type_ressource`
--

CREATE TABLE `type_ressource` (
  `id` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `utilisateur`
--

CREATE TABLE `utilisateur` (
  `id` int(11) NOT NULL,
  `login` varchar(30) COLLATE utf8_unicode_ci NOT NULL,
  `password` varchar(128) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

-- --------------------------------------------------------

--
-- Structure de la table `vehicule`
--

CREATE TABLE `vehicule` (
  `id` int(11) NOT NULL,
  `nbPlaceAssise` int(11) NOT NULL,
  `designation` varchar(255) COLLATE utf8_unicode_ci NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8 COLLATE=utf8_unicode_ci;

--
-- Index pour les tables exportées
--

--
-- Index pour la table `activite`
--
ALTER TABLE `activite`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_41033743D0165F20` (`type_activite_id`),
  ADD KEY `IDX_41033743A80E6A56` (`fenetre_horaire_id`);

--
-- Index pour la table `activite_fixee`
--
ALTER TABLE `activite_fixee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_57B23EAD220C6AD0` (`jour_id`),
  ADD KEY `IDX_57B23EAD450D2529` (`enfant_id`),
  ADD KEY `IDX_57B23EAD9B0F88B1` (`activite_id`);

--
-- Index pour la table `activite_obligatoire`
--
ALTER TABLE `activite_obligatoire`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_AD00CA909B0F88B1` (`activite_id`),
  ADD KEY `IDX_AD00CA90450D2529` (`enfant_id`);

--
-- Index pour la table `activite_optionnelle`
--
ALTER TABLE `activite_optionnelle`
  ADD PRIMARY KEY (`enfant_id`,`activite_id`),
  ADD KEY `IDX_CC9D15ED450D2529` (`enfant_id`),
  ADD KEY `IDX_CC9D15ED9B0F88B1` (`activite_id`);

--
-- Index pour la table `activite_realisee`
--
ALTER TABLE `activite_realisee`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_65E0D9A89B0F88B1` (`activite_id`),
  ADD KEY `IDX_65E0D9A8450D2529` (`enfant_id`),
  ADD KEY `IDX_65E0D9A8220C6AD0` (`jour_id`);

--
-- Index pour la table `besoin_type_ressource`
--
ALTER TABLE `besoin_type_ressource`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_2F2835B99B0F88B1` (`activite_id`),
  ADD KEY `IDX_2F2835B97B2F6F2F` (`type_ressource_id`);

--
-- Index pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_34B70CA2A80E6A56` (`fenetre_horaire_id`),
  ADD KEY `IDX_34B70CA27A45358C` (`groupe_id`);

--
-- Index pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_89D7EABD450D2529` (`enfant_id`),
  ADD KEY `IDX_89D7EABD9B0F88B1` (`activite_id`),
  ADD KEY `IDX_89D7EABD220C6AD0` (`jour_id`);

--
-- Index pour la table `fenetre_horaire`
--
ALTER TABLE `fenetre_horaire`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `groupe`
--
ALTER TABLE `groupe`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `jour`
--
ALTER TABLE `jour`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `preaffection`
--
ALTER TABLE `preaffection`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_167A49BE450D2529` (`enfant_id`),
  ADD KEY `IDX_167A49BE9B0F88B1` (`activite_id`),
  ADD KEY `IDX_167A49BEFC6CD52A` (`ressource_id`);

--
-- Index pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD PRIMARY KEY (`id`),
  ADD KEY `IDX_939F4544A80E6A56` (`fenetre_horaire_id`),
  ADD KEY `IDX_939F45447B2F6F2F` (`type_ressource_id`);

--
-- Index pour la table `ressource_affectee`
--
ALTER TABLE `ressource_affectee`
  ADD PRIMARY KEY (`ressource_id`,`activite_realisee_id`),
  ADD KEY `IDX_FF23967FC6CD52A` (`ressource_id`),
  ADD KEY `IDX_FF2396741DA55A3` (`activite_realisee_id`);

--
-- Index pour la table `type_activite`
--
ALTER TABLE `type_activite`
  ADD PRIMARY KEY (`id`),
  ADD UNIQUE KEY `UNIQ_758A72E98947610D` (`designation`);

--
-- Index pour la table `type_ressource`
--
ALTER TABLE `type_ressource`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  ADD PRIMARY KEY (`id`);

--
-- Index pour la table `vehicule`
--
ALTER TABLE `vehicule`
  ADD PRIMARY KEY (`id`);

--
-- AUTO_INCREMENT pour les tables exportées
--

--
-- AUTO_INCREMENT pour la table `activite`
--
ALTER TABLE `activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `activite_fixee`
--
ALTER TABLE `activite_fixee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `activite_obligatoire`
--
ALTER TABLE `activite_obligatoire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `activite_realisee`
--
ALTER TABLE `activite_realisee`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=127;
--
-- AUTO_INCREMENT pour la table `besoin_type_ressource`
--
ALTER TABLE `besoin_type_ressource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=8;
--
-- AUTO_INCREMENT pour la table `enfant`
--
ALTER TABLE `enfant`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=5;
--
-- AUTO_INCREMENT pour la table `evenement`
--
ALTER TABLE `evenement`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=22;
--
-- AUTO_INCREMENT pour la table `fenetre_horaire`
--
ALTER TABLE `fenetre_horaire`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=9;
--
-- AUTO_INCREMENT pour la table `groupe`
--
ALTER TABLE `groupe`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `jour`
--
ALTER TABLE `jour`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=11;
--
-- AUTO_INCREMENT pour la table `preaffection`
--
ALTER TABLE `preaffection`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT;
--
-- AUTO_INCREMENT pour la table `ressource`
--
ALTER TABLE `ressource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=4;
--
-- AUTO_INCREMENT pour la table `type_activite`
--
ALTER TABLE `type_activite`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=10;
--
-- AUTO_INCREMENT pour la table `type_ressource`
--
ALTER TABLE `type_ressource`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=2;
--
-- AUTO_INCREMENT pour la table `utilisateur`
--
ALTER TABLE `utilisateur`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- AUTO_INCREMENT pour la table `vehicule`
--
ALTER TABLE `vehicule`
  MODIFY `id` int(11) NOT NULL AUTO_INCREMENT, AUTO_INCREMENT=3;
--
-- Contraintes pour les tables exportées
--

--
-- Contraintes pour la table `activite`
--
ALTER TABLE `activite`
  ADD CONSTRAINT `FK_41033743A80E6A56` FOREIGN KEY (`fenetre_horaire_id`) REFERENCES `fenetre_horaire` (`id`),
  ADD CONSTRAINT `FK_41033743D0165F20` FOREIGN KEY (`type_activite_id`) REFERENCES `type_activite` (`id`);

--
-- Contraintes pour la table `activite_fixee`
--
ALTER TABLE `activite_fixee`
  ADD CONSTRAINT `FK_57B23EAD220C6AD0` FOREIGN KEY (`jour_id`) REFERENCES `jour` (`id`),
  ADD CONSTRAINT `FK_57B23EAD450D2529` FOREIGN KEY (`enfant_id`) REFERENCES `enfant` (`id`),
  ADD CONSTRAINT `FK_57B23EAD9B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`);

--
-- Contraintes pour la table `activite_obligatoire`
--
ALTER TABLE `activite_obligatoire`
  ADD CONSTRAINT `FK_AD00CA90450D2529` FOREIGN KEY (`enfant_id`) REFERENCES `enfant` (`id`),
  ADD CONSTRAINT `FK_AD00CA909B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`);

--
-- Contraintes pour la table `activite_optionnelle`
--
ALTER TABLE `activite_optionnelle`
  ADD CONSTRAINT `FK_CC9D15ED450D2529` FOREIGN KEY (`enfant_id`) REFERENCES `enfant` (`id`),
  ADD CONSTRAINT `FK_CC9D15ED9B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`);

--
-- Contraintes pour la table `activite_realisee`
--
ALTER TABLE `activite_realisee`
  ADD CONSTRAINT `FK_65E0D9A8220C6AD0` FOREIGN KEY (`jour_id`) REFERENCES `jour` (`id`),
  ADD CONSTRAINT `FK_65E0D9A8450D2529` FOREIGN KEY (`enfant_id`) REFERENCES `enfant` (`id`),
  ADD CONSTRAINT `FK_65E0D9A89B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`);

--
-- Contraintes pour la table `besoin_type_ressource`
--
ALTER TABLE `besoin_type_ressource`
  ADD CONSTRAINT `FK_2F2835B97B2F6F2F` FOREIGN KEY (`type_ressource_id`) REFERENCES `type_ressource` (`id`),
  ADD CONSTRAINT `FK_2F2835B99B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`);

--
-- Contraintes pour la table `enfant`
--
ALTER TABLE `enfant`
  ADD CONSTRAINT `FK_34B70CA27A45358C` FOREIGN KEY (`groupe_id`) REFERENCES `groupe` (`id`),
  ADD CONSTRAINT `FK_34B70CA2A80E6A56` FOREIGN KEY (`fenetre_horaire_id`) REFERENCES `fenetre_horaire` (`id`);

--
-- Contraintes pour la table `evenement`
--
ALTER TABLE `evenement`
  ADD CONSTRAINT `FK_89D7EABD220C6AD0` FOREIGN KEY (`jour_id`) REFERENCES `jour` (`id`),
  ADD CONSTRAINT `FK_89D7EABD450D2529` FOREIGN KEY (`enfant_id`) REFERENCES `enfant` (`id`),
  ADD CONSTRAINT `FK_89D7EABD9B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`);

--
-- Contraintes pour la table `preaffection`
--
ALTER TABLE `preaffection`
  ADD CONSTRAINT `FK_167A49BE450D2529` FOREIGN KEY (`enfant_id`) REFERENCES `enfant` (`id`),
  ADD CONSTRAINT `FK_167A49BE9B0F88B1` FOREIGN KEY (`activite_id`) REFERENCES `activite` (`id`),
  ADD CONSTRAINT `FK_167A49BEFC6CD52A` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id`);

--
-- Contraintes pour la table `ressource`
--
ALTER TABLE `ressource`
  ADD CONSTRAINT `FK_939F45447B2F6F2F` FOREIGN KEY (`type_ressource_id`) REFERENCES `type_ressource` (`id`),
  ADD CONSTRAINT `FK_939F4544A80E6A56` FOREIGN KEY (`fenetre_horaire_id`) REFERENCES `fenetre_horaire` (`id`);

--
-- Contraintes pour la table `ressource_affectee`
--
ALTER TABLE `ressource_affectee`
  ADD CONSTRAINT `FK_FF2396741DA55A3` FOREIGN KEY (`activite_realisee_id`) REFERENCES `activite_realisee` (`id`),
  ADD CONSTRAINT `FK_FF23967FC6CD52A` FOREIGN KEY (`ressource_id`) REFERENCES `ressource` (`id`);

/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40101 SET CHARACTER_SET_RESULTS=@OLD_CHARACTER_SET_RESULTS */;
/*!40101 SET COLLATION_CONNECTION=@OLD_COLLATION_CONNECTION */;
