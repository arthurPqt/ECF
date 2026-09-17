
# ECF — Site de gestion de véhicules

Site web dynamique réalisé dans le cadre de l'**Examen de Certification de Formation** (ECF) chez **Studi**, formation Développeur Web et Web Mobile.

> ⚠️ **Note** : Ce projet a été réalisé il y a 3 ans, avant mon stage chez IFWECODE.  
> Il témoigne de ma progression technique — mon niveau actuel est visible dans le repo [Site-stage-IFWECODE](https://github.com/arthurPqt/Site-stage-IFWECODE).

---

## Stack technique

| Technologie | Rôle |
|---|---|
| **HTML / CSS** | Structure et mise en page |
| **PHP** | Logique serveur et rendu dynamique |
| **MySQL** | Base de données relationnelle |

> PHP vanilla sans framework — approche bas niveau pour maîtriser les fondamentaux.

---

## Fonctionnalités

-  **Système d'inscription et de connexion** — gestion des sessions utilisateur
-  **Catalogue de véhicules** — affichage dynamique depuis la base de données
-  **Système d'avis** — dépôt et affichage de commentaires
-  **Configuration centralisée** via `config.php` (connexion BDD)
-  **Formulaires sécurisés** — traitement des données avec validation

---

##  Structure du projet

```
├── config.php              # Configuration de la base de données
├── connexion.php           # Logique de connexion utilisateur
├── inscription.php         # Formulaire d'inscription
├── inscription_traitement.php # Traitement du formulaire
├── accueil.html/php        # Page d'accueil
├── vehicule.html/php       # Page des véhicules
├── avis.html/php           # Page des avis
├── stylesheet.css          # Styles globaux
└── insert.php              # Insertion en base de données
```

---

##  Lancer le projet en local

### Prérequis

- **PHP** `>= 7.4`
- **MySQL** ou **MariaDB**
- Serveur local : **XAMPP**, **WAMP** ou **Laragon**

### Installation

```bash
# Cloner le repo
git clone https://github.com/arthurPqt/ECF.git

# Placer le projet dans le dossier htdocs (XAMPP) ou www (WAMP)
```

### Base de données

1. Ouvrir **phpMyAdmin**
2. Créer une base de données `ecf`
3. Importer le fichier SQL du dossier `/ecf`
4. Renseigner les identifiants dans `config.php` :

```php
$host = 'localhost';
$dbname = 'ecf';
$user = 'root';
$password = '';
```

### Démarrage

Démarrer Apache et MySQL depuis XAMPP/WAMP puis accéder à :  
`http://localhost/ECF/accueil.html`

---

##  Contexte

Projet d'examen réalisé en conditions de certification dans le cadre de la formation **Développeur Web et Web Mobile** chez [Studi](https://www.studi.com).  
Objectif : démontrer la maîtrise des fondamentaux du développement web back-end sans framework.

---

##  Auteur

**Arthur Picquot**  
[GitHub](https://github.com/arthurPqt) · [LinkedIn](www.linkedin.com/in/arthur-picquot)
