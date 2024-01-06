# MyDigitalSchool - Évaluation 1/1 - Design Patterns

## Table des matières
***
 - [Réponses aux questions](#rponses-aux-questions)
 - [Design pattern](#design-pattern)
   - [Contexte](#contexte) 
   - [Avantages/Inconvénients](#avantagesinconvnients)
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

class templateRenderingHtml extends templateRendering {
    public function render($content){
        // implémentation
    }
}

class templateRenderingTwig extends templateRendering {
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

## Design pattern
***
> {Nom du design pattern}

<br>

### Contexte
> décrivez une situation de départ dans laquelle le pattern vous serait utile

<br>

### Avantages/Inconvénients
> décrivez les avantages et les inconvénients éventuels que vous procure l’usage du pattern

<br>

### Diagramme de classes UML du pattern
> un diagramme de classes UML qui représente l’implémentation de votre pattern. Attention, indiquer le nom des classes réelles de votre projet (ne pas fournir le diagramme générique).

<br>

##  Lancer le projet
***
> instructions pour lancer votre démo
