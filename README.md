# stage

Ce dépot contient le code source d'une application que j'avais créé en 2018 afin de permettre aux élèves de s'inscrire à des stages de révisions pour le bac.
Les élèves avaient alors accès à leur emploi du temps / EDT.

![image](https://user-images.githubusercontent.com/53106394/87212824-ebc2bf80-c320-11ea-926b-cc4fc1ef2a14.png)

Cette application est difficilement utilisable en tant que telle. Les stages de révisions sont inscrit en dur dans le fichier `index.php` et les élèves doivent être ajouté manuellement dans la base de donnée.
Il n'y a pas de protection des comptes élèves par un mot de passe (donc un élève peut théoriquement modifier les inscriptions d'un autre élève). De manière surprenante il n'y a pas eu de d'abus (mais les actions étaient loggés au cas où).
Une vision prof est disponible via un lien secret.

L'application était faite pour être intégré dans l'ENT via une iframe avec passage d'un mot de passe en paramètre GET.

Je n'ai pas retesté l'application et cela fait 2 ans que je ne l'ai pas utilisé donc j'ai peut être oublié des étapes importantes.

Bref, peu de chance que cette application serve à quelqu'un un jour mais je partage au cas où.
