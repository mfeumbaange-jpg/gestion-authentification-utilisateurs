# Instructions pour générer un Personal Access Token (PAT)

## Procédure
1. Connectez-vous à GitHub et allez dans **Settings → Developer settings → Personal access tokens → Tokens (classic)**.
2. Cliquez sur **Generate new token (classic)**.
3. Donnez un nom descriptif au token, par exemple "Test Token Exercice".
4. Choisissez la durée d'expiration souhaitée (ex. 30 jours).
5. Sélectionnez uniquement les scopes nécessaires pour l'exercice.
6. Cliquez sur **Generate token**.
7. Copiez le token pour usage temporaire (ne jamais le committer).

## Scopes choisis
- `repo` : accès complet aux dépôts pour lecture et écriture.
- `workflow` : pour exécuter et gérer les actions GitHub.
- `read:user` : accès en lecture aux informations de l'utilisateur.

> Note : Ce PAT est uniquement pour un test et ne doit jamais être publié.
