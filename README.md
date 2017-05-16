# phpmatch
## Description du projet
- Gestion des scores des matches en PHP
- Projet expérimental pour tester phpunit

## Installation PHP7 et PHPUnit
### Vérfier que l'utilisateur est bien sudo
```
id <nomutilisateur>
```

### Vérifier quelle version de PHP est installée sur la machine
```
sudo dpkg -l | grep php
```

### Supprimer PHP5 si installé sur la machine
```
sudo apt-get purge php*
```

### Supprimer les dépendants orphelins
```
sudo apt-get autoremove
```

### Démarrer l'installation PHP7
Pb : PHP7 n'est pas dans les dépôts officiels de Debian => il faut donc ajouter un dépôt externe qui contiennent PHP7

```
cd /etc
ls | grep apt
cd apt
cat sources.list
```

Page pour installer PHP7 dans debian : https://angristan.fr/installer-php-7-debian-8-jessie-depot-dotdeb/

### Modifier la liste des paquets en ajoutant le dépôt dotdeb
```
sudo su
cd /etc/apt/sources.list.d
touch dotdeb.list
atom dotdeb.list
```

Ajouter la ligne suivante :

deb http://packages.dotdeb.org jessie all

- Sauvegarder la modification et quitter

Installer PHP7

```
exit
sudo apt update
sudo apt install php7.0 libapache2-mod-php7.0 php7.0-mysql php7.0-curl php7.0-json php7.0-gd php7.0-mcrypt php7.0-msgpack php7.0-memcached php7.0-intl php7.0-sqlite3 php7.0-gmp php7.0-geoip php7.0-mbstring php7.0-xml php7.0-zip
```
### Vérification
```
php --version
```

### Installation de PHPUnit
https://phpunit.de/getting-started.html
```
cd
wget https://phar.phpunit.de/phpunit.phar
chmod +x phpunit.phar
sudo mv phpunit.phar /usr/local/bin/phpunit
```

### Vérification PHPUnit OK
```
phpunit --version
```

### Faire le test PHPUnit sur l'exemple fourni par les développeurs
```
cd
mkdir phptest
cd phptest
atom Email.php
```
Copier coller du fichier Email.php fourni par phpunit.de en version 7.0

Sauvegarder/quitter

```
atom EmailTest.php
```
Copier coller du fichier EmailTest.php


### Lancer le test unitaire
```
phpunit --bootstrap Email.php EmailTest.php
```

## Mise en place de l'environnement de développement
### Installer git sur la machine
```
sudo apt-get install git
```

### Clone du répertoire du projet
```
whoami
cd
git clone https://github.com/mdautrey/phpmatch.git
cd phpmatch
git remote show
git remote show origin
```
- Faire un fork dans github
- Récupérer l'URL du fork <URLFORK>

```
git remote add fork <URLFORK>
git remote show
git remote show fork
```

si erreur dans la manipulation, possibilité de repartir de zéro :
```
cd
rm -fr phpmatch
```

Synchronisation des repositories
```
# depuis le repertoire phpmatch
git pull origin master
touch mdautrey.txt
git add mdautrey.txt
git commit -m "message pour expliquer ce que l'on a modifié"
git push fork master
```
## Rédiger les tests du projet
### Compléter les tickets Waffle pour rendre les spécifications testables
https://waffle.io/mdautrey/phpmatch/join

### Créer le fichier de test
- Aller dans le répertoire du projet
- Créer un sous-répertoire src (sources)
- Créer un sous-répertoire test (test)
- Convention de nommage des fichiers de test => reprise de la convention phpunit.de (Test à la fin du fichier)
- Initialiser le premier fichier de test MatchTest.php

