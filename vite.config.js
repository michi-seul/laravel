import { defineConfig } from 'vite';
import vue from '@vitejs/plugin-vue';

export default defineConfig({
  root: 'resources',  // Cela définit le dossier racine pour Vite, souvent 'resources' dans Laravel
  plugins: [vue()],
  build: {
    outDir: 'public/build',  // Dossier de sortie des fichiers compilés
    manifest: true,  // Génère le fichier manifest.json
    rollupOptions: {
      input: 'resources/js/app.js',  // Votre fichier d'entrée JS (ou HTML si vous avez besoin d'un fichier d'entrée HTML)
    },
  },
});