# MyDigitalSchool - Évaluation 1/1 - Design Patterns

## Table des matières
***
 - [Réponses aux questions](#réponses-aux-questions)
 - [Design pattern](#design-pattern)
   - [Contexte](#contexte) 
   - [Avantages/Inconvénients](#avantagesinconvénients)
   - [Diagramme de classes UML du pattern](#diagramme-de-classes-uml-du-pattern)
 - [Lancer le projet](#lancer-le-projet)

<br>

## Réponses aux questions
***
> les réponses aux questions posées

`1.` Quel(s) avantage(s) procure le fait de programmer vers une interface et non vers une implémentation ? Vous pouvez illustrer votre réponse avec un code source minimal et/ou avec un diagramme.

- **Réponse :** Le fait de programmer vers une interface plutôt que de se focaliser sur une implémentation spécifique permet d'utiliser la même méthode pour obtenir des comportements différents. Cela peut être illustré avec un exemple de code minimal : Supposons que nous ayons une interface pour un système de rendu de page web.

```php
interface templateRendering {
    public function render($content);
}

class templateRenderingHtml implements templateRendering {
    public function render($content){
        // implémentation
    }
}

class templateRenderingTwig implements templateRendering {
    public function render($content){
        // implémentation
    }
}

function render_my_content( templateRendering $renderObject ) {
    echo $renderObject->render('Mon contenu');
}

render_my_content(new templateRenderingHtml());
render_my_content(new templateRenderingTwig());
```

***

`2.` Pourquoi, de manière générale, vaut-il mieux préférer la composition à l’héritage ? Vous pouvez illustrer votre réponse avec un code source minimal et/ou avec un diagramme.

- **Réponse :** En général, il est recommandé de préférer la composition à l'héritage, car la composition offre une plus grande flexibilité et évite certains des problèmes associés à l'héritage. Voici quelques raisons courantes :

   - **Moins de couplage :** La composition permet de réduire le couplage entre les classes, Cela rend le code plus modulaire et plus facile à maintenir.

   - **Réutilisabilité :** Avec la composition, les objets peuvent être composés de plusieurs autres objets réutilisables, ce qui favorise la réutilisabilité du code.

***
`3.` En programmation orienté objet, qu’est ce qu’une interface ? Remarque : on ne parle pas ici du construct PHP interface.

- **Réponse :** En programmation orientée objet, une interface est un concept représentant un ensemble de méthodes sans qu'elles soient implémentées. On y retrouve uniquement la signature (nom, paramètres, retour). On peut le voir comme un squelette de l'implémentation.
<br>

## Design pattern : Bridge
***
### Bridge
C'est un patron de structurels qui permet de séparer différente classe en abstraction, implémentation pour obtenir des meilleures hiérarchies.

Cela permet donc d'avoir une classe abstraite qui aura des comportements différents. 
Cette classe abstraite contient une implémentation qui permet elle de faire varier aussi les comportements.


<br>

### Contexte

Imaginons le contexte d'une connexion à une base de données comprenant plusieurs tables. Nous disposons de modèles (classes permettant la liaison avec la BDD) partageant les mêmes fonctionnalités, mais agissant sur différentes tables de notre base de données. Pour cela, nous créons des classes de modèles abstraites avec des méthodes communes telles que findAll() et findByPk(), ayant la même implémentation pour tous les modèles.

Cependant, nous souhaitons la possibilité de connecter nos modèles à différentes bases de données, telles que MySQL, MongoDB, etc. Pour ce faire, nous établissons un "pont" à travers une nouvelle interface nommée "Connect", qui servira de structure pour nos divers moyens de connexion à la base de données.

Notre classe abstraite de modèle inclura alors un objet provenant de l'interface "Connect" en tant qu'élément, permettant ainsi d'effectuer les opérations sur les différents types de bases de données.

<br>

### Avantages/Inconvénients

#### Inconvénients : 
- Complexité accrue : cette méthode créer de nombreuse classe ce qui peut être plus difficile a appréhender dans certains cas.


#### Avantages :
- Séparation : la séparation entre les différentes composantes de notre code est plus claire
- Flexibilité : Le changement d'implémentation est souple. Facilite l'ajout de fonctionnalité
- Moins de duplication de code
- Maintenance plus facile à gérer

<br>

### Diagramme de classes UML du pattern

![Diagram](https://www.planttext.com/api/plantuml/png/n591JiCm4Bpx5Skf2Me-48cgBJss4WZn0CVUjbOSszYRYWXu6GUUn1TmKm8XhH3gXOijp-oETiVp_les3SGzrPLc5xJ52c6d2iyDCIOq3m5cHI3F1QsiH0rF3203ueN672AXpAP5X3K61LcVmu97cWUyFa3AcbW1i5P6phHEqXnsLialRDxSb8ah-x3mo0aJ6ONwSEta7dRb68PK70rRgWDV65E6qA-vm1CJjNj0DtMIjg-76dsJj6UtMxeNElYmQkvkbvyAvxHRix6B-Va2zm7zqH_05OpgI8p-n-AVsRZCQfTDJhcTmvO7Dh3Wjt9LEHspQ2XszNt_Oy-tLrdsF1b4E0Ty93GoC3QDLqp-1m000F__0m00)

<br>

## Lancer le projet
***

Pour lancer le projet, vous avez deux possibilités :

Requis : **PHP 8.2**

### 1. Serveur
Vous pouvez ajouter le dossier "design-pattern-exemple" sur un serveur local ou en ligne (WAMP, XAMP, etc...) en version PHP 8.2. Et ensuite ouvrir le fichier "client.php" contenu dans le dossier "design-pattern-exemple".

### 2. Ligne de commande
Vous pouvez vous rendre à la racine du dossier "design-pattern-exemple".
```cmd
cd ./design-pattern-exemple
```

Et ensuite exécuter via PHP le document "client.php".
```
php .\client.php
```

### Résultat attendu : 
```
action on table user
Executing MySQL query: Find all
action on table user
Executing MySQL query: Create : donnée de test
action on table session
Executing MongoDB query: Find PK : 1
action on table session
Executing MongoDB query: Update PK : 1 data : donnée de test
action on table session
Executing MongoDB query: Delete PK : 1
```


> Réalisé par Prévost Clément B3
