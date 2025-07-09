# 📋 Guide de Publication GitHub - Portfolio Michael Tabet

## 🚀 Étapes pour créer et publier votre dépôt

### 1️⃣ Créer le dépôt GitHub
1. Allez sur https://github.com
2. Connectez-vous à votre compte (créez-en un si nécessaire)
3. Cliquez sur le bouton vert "New" ou "+"
4. Remplissez les informations :
   - **Repository name** : `portfolio-tuyauteur`
   - **Description** : `Portfolio professionnel - Michael Tabet - Tuyauteur Industriel`
   - **Public** ✅ (pour que les employeurs puissent voir)
   - **Add a README file** ✅
5. Cliquez "Create repository"

### 2️⃣ Activer GitHub Pages
1. Dans votre nouveau dépôt, allez dans **Settings**
2. Scrollez jusqu'à **Pages** dans le menu de gauche
3. Dans **Source**, sélectionnez **Deploy from a branch**
4. Choisissez **main** branch et **/ (root)**
5. Cliquez **Save**
6. Votre site sera disponible à : `https://VOTRE-USERNAME.github.io/portfolio-tuyauteur`

### 3️⃣ Uploader vos fichiers
**Option A - Interface Web GitHub :**
1. Dans votre dépôt, cliquez "uploading an existing file"
2. Glissez-déposez tous vos fichiers du dossier `portfolio-tuyauteur`
3. Ajoutez un message : "Premier upload du portfolio"
4. Cliquez "Commit changes"

**Option B - Git en ligne de commande :**
```bash
cd g:\xampp\htdocs\html\portfolio-tuyauteur
git init
git add .
git commit -m "Premier upload du portfolio"
git branch -M main
git remote add origin https://github.com/VOTRE-USERNAME/portfolio-tuyauteur.git
git push -u origin main
```

### 4️⃣ Mettre à jour les liens dans le code
Une fois votre dépôt créé, remplacez `michael-tabet` par votre vrai nom d'utilisateur GitHub dans :
- `index.html` (lignes du footer et bouton GitHub)
- `contact.html` (section GitHub)
- `README.md` (tous les liens)

### 5️⃣ URL finale de votre portfolio
Votre portfolio sera accessible à :
`https://miicha333l.github.io/tuyauteur`

## 📝 Fichiers créés pour GitHub
- ✅ `README.md` - Description détaillée de votre profil
- ✅ `.gitignore` - Fichiers à ignorer par Git
- ✅ Liens GitHub ajoutés sur le site

## 🔄 Pour les mises à jour futures
1. Modifiez vos fichiers localement
2. Dans GitHub, cliquez "Upload files" ou utilisez Git
3. Le site se met à jour automatiquement

## 💡 Conseils
- Utilisez un nom d'utilisateur GitHub professionnel
- Ajoutez une photo de profil professionnelle
- Mettez à jour régulièrement vos projets
- Partagez le lien dans vos candidatures

## 📞 Aide
Si vous avez besoin d'aide, contactez-moi !
