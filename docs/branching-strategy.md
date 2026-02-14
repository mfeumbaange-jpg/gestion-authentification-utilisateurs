# Branching Strategy

## Stratégie choisie

Pour ce projet, nous utilisons la **GitHub Flow** :  

- Une branche principale `main` toujours stable et protégée.  
- Toutes les modifications passent par des **branches de fonctionnalités** (feature branches).  
- Les tests et revues sont obligatoires avant toute fusion dans `main`.  

> GitHub Flow est simple, léger, et adapté pour des projets où on déploie régulièrement.

## Conventions de nommage

Les branches doivent suivre ces conventions :  

| Type de branche | Préfixe | Exemple |
|-----------------|---------|---------|
| Feature         | `feature/` | `feature/login-system` |
| Bugfix          | `bugfix/`  | `bugfix/fix-navbar` |
| Hotfix          | `hotfix/`  | `hotfix/security-patch` |

> Chaque branche doit être créée à partir de `main` et supprimée après fusion.

## Processus de Pull Request (PR)

1. Créer une branche depuis `main` avec le nom approprié.  
2. Développer la fonctionnalité ou corriger le bug sur cette branche.  
3. Ouvrir une **Pull Request (PR)** vers `main`.  
4. Demander au moins **1 approbation** d’un autre collaborateur.  
5. Vérifier que les **status checks** (tests automatisés) passent avant la fusion.  

## Politique de fusion

- Les **commits directs sur `main` sont interdits**.  
- La fusion se fait uniquement via **PR approuvée et validée**.  
- Les branches sont **fusionnées en “squash merge”** pour garder un historique propre.  
- Après fusion, la branche feature/bugfix/hotfix est **supprimée**.  
