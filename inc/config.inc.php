<?php

return array(
    'cssFiles' => array(
        'raw' => array('../../css/raw.css'),
        'web' => array('../../css/style.css', 'http://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css')
    ),
    'bio' => array(
        'firstname' => 'Franck',
        'jobTitle' => 'Lead Developer / Architecte PHP',
        'lastname' => 'Magnan',
        'place' => 'Lyon',
        'summary' => ''
    ),
    'info' => array(
        'cellular' => '06 XX XX XX XX',
        'email' => 'fmagnan@gamelab.fr',
        'github' => 'https://github.com/fmagnan',
        'linkedin' => 'http://fr.linkedin.com/pub/franck-magnan/53/b43/38a',
        'phone' => '09 80 78 78 80',
        'website' => 'http://fmagnan.gamelab.fr'
    ),
    'experiences' => array(
        'mediastay' => array(
            'company' => 'Mediastay',
            'companyWebsite' => 'http://www.mediastay.com',
            'date' => array(
                'begin' => 'Depuis novembre 2011',
                'duration' => '',
                'end' => ''
            ),
            'place' => 'Lyon',
            'tasks' => array(
                'publishing' => array(
                    'description' => 'Lead developer du pôle publishing',
                    'subtasks' => array(
                        'Récupération du code existant des loteries en ligne Kingoloto, Bananalotto et Luckysurf.',
                        'Mise en place de composer, migration de php 5.2 en php 5.4.',
                        'Optimisation des performances (frontend et backend).',
                        'Animation de l\'équipe (3 personnes).',
                        'Réalisation d\'un moteur de génération de sites de concours.'
                    )
                ),
                'gamespassport' => array(
                    'description' => 'Optimisation de la partie cliente du site gamespassport',
                    'subtasks' => array(
                        'audit du code, optimisation et remaniement du code.',
                        'diminution du temps de chargement d\'une page de l\'ordre de 60%.',
                    )
                ),
                'monetisation' => array(
                    'description' => 'Développeur backend sur MdsMatch, AdServer propriétaire de Mediastay',
                    'subtasks' => array(
                        'Découverte et appropriation du code en complète autonomie.',
                        'Conception et développement de nouvelles fonctionnalités.',
                        'Correction de bugs, d\'anomalies et optimisation du code.',
                        'Mise en place de tests unitaires et de l\'intégration continue (Jenkins).'
                    )
                )
            ),
            'title' => 'Lead PHP Developer',
        ),
        'openwide' => array(
            'company' => 'Open Wide',
            'companyWebsite' => 'http://www.openwide.fr',
            'date' => array(
                'begin' => 'avril 2003',
                'duration' => '8 ans',
                'end' => 'octobre 2011'
            ),
            'place' => 'Villeurbanne',
            'tasks' => array(
                'php' => array(
                    'description' => 'Travail au forfait au sein du pôle PHP / Tierce Maintenance Applicative',
                    'subtasks' => array(
                        'Audit de code.',
                        'Soutien auprès des développeurs juniors.'
                    )
                ),
                'drupal' => array(
                    'description' => 'Réalisation du site de La Provence',
                    'subtasks' => array(
                        'Migration iso-fonctionnalités du site basé sur la solution propriétaire
                        NStein vers une solution open source basée sur Drupal 6.',
                        'Développement de modules Drupal (backoffice et frontoffice).',
                        'Responsable de la reprise des données du site existant.'
                    )
                ),
                'ezpublish' => array(
                    'description' => 'Travaux autour de la solution logicielle eZ Publish',
                    'subtasks' => array(
                        'Migration du code et des données du site intranet de Laforêt Immobilier (eZ Publish3.9.1 vers 4.3.0).',
                        'Développement d\'un module de synchronisation entre le système d\'information de PremiereVision et le site.',
                        'Interfaçage entre l\'application iphone Fly\'on dédiée à l\'affichage du tableau des vols et le site des
                        aéroports de Lyon.',
                        'Reprise du site existant Madmagz et amélioration de l\'interface utilisateur (javascript).',
                        'Implémentation d\'une recherche à facettes pour le site Banque du fleuve Rhône patrimoine.',
                        'Enrichissement du modèle de données du site Mémoire des Célestins.',
                    )
                ),
                'typo3' => array(
                    'description' => 'Travaux autour de la solution logicielle Typo3',
                    'subtasks' => array(
                        'Reprise du site éditorial de FlashInfos. Amélioration du système de création et d\'envoi
                        de newsletters (Typo3 + PHPLIST).',
                        'Réalisation de 3 sites extranet destinés à des clientèles différentes d\'une mutuelle
                        et disposant d\'une interface d\'administration commune.',
                        'Création de modules Typo3 variés : thèmes graphiques, import et export des données,
                        interface administrateur, interface utilisateur.',
                        'Formation auprès des utilisateurs (éditeurs et administrateurs).',
                        'Prise en charge de la tierce maintenance applicative (correction des anomalies, chiffrage et
                        développement de nouvelles fonctionnalités).'
                    )
                ),
                'ruby' => array(
                    'description' => 'Dans le cadre de la refonte de l\'outil de gestion de tickets Xguard,
                    adaptation de la solution logicielle Redmine',
                    'subtasks' => array(
                        'Autoformation sur le langage Ruby, le framework Ruby on Rails et le logiciel Redmine.',
                        'Développement d\'extensions visant à gérer des objets génériques (création, modification,
                        suppression) et les liens qui les unissent ("appartient", "contient", "hérite" ...).'
                    )
                ),
                'java' => array(
                    'description' => 'Travaux en java',
                    'subtasks' => array(
                        'Réalisation d\'un module de manipulation d\'image (redimensionnement et rognage)
                     en Java, Jsp et Javascript.',
                        'Migration d\'une application web de suivi de projets commerciaux depuis un framework
                        propriétaire Java vers Struts.',
                        'Portage d\'une application équivalente à 15 années/homme (300 000 lignes).',
                        'Mise en place d\'une démarche agile (eXtreme Programming) incluant travail en binôme, métrique
                        quotidienne, feedback rapide, développement incrémental, hiérarchisation des tâches.'
                    )
                ),
            ),
            'title' => 'Ingénieur d\'études open source',
        ),
        'cirad' => array(
            'company' => 'CIRAD',
            'companyWebsite' => 'http://www.cirad.fr',
            'date' => array(
                'begin' => 'octobre 2000',
                'duration' => '16 mois',
                'end' => 'janvier 2002'
            ),
            'place' => 'Guadeloupe',
            'tasks' => array(
                'vat' => array(
                    'description' => 'Service national en tant que volontaire à l\'aide technique',
                    'subtasks' => array(
                        'Administration du réseau, des serveurs, de la messagerie, des sauvegardes (Linux, HP-UX, Novell).',
                        'Assistance à 80 utilisateurs (sur site et par téléphone) : tout niveau de gravité.',
                        'Maintenance matérielle sur les postes de travail (Windows 95, 98 et 2000).'
                    )
                )
            ),
            'title' => 'Responsable du parc informatique',
        )
    ),
    'education' => array(
        'dess' => array(
            'title' => 'DESS TNI (Technologies Nouvelles de l\'Informatique)',
            'place' => 'Université Montpellier II',
            'date' => '2000'
        ),
        'maitrise' => array(
            'title' => 'Maîtrise Informatique',
            'place' => 'Université Montpellier II',
            'date' => '1999'
        ),
        'licence' => array(
            'title' => 'Licence Informatique',
            'place' => 'Université Montpellier II',
            'date' => '1998'
        ),
    ),
    'skills' => array(
        'languages' => array(
            'title' => 'Langages',
            'items' => array(
                'PHP'
            )
        ),
        'systems' => array(
            'title' => 'Systèmes',
            'items' => array(
                'Linux'
            )
        ),
        'tools' => array(
            'title' => 'Outils',
            'items' => array(
                'jQuery'
            )
        ),
        'personal' => array(
            'title' => 'Personnelles',
            'items' => array(
                'autonomie'
            )
        )
    )
);

