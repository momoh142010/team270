# Team 270
Nuit de l'info #Team270<br>
Codez vite, codez bien, never baguette.<br><br>

<h2>Lier Code::blocks avec Git pour build en local</h2>
<p>Pour le download de Code::blocks, c'est ici : <a href="http://downloads.sourceforge.net/project/codeblocks/Binaries/16.01/Windows/codeblocks-16.01mingw-setup.exe?r=http%3A%2F%2Fwww.codeblocks.org%2Fdownloads%2F26&ts=1480359220&use_mirror=kent">Clique ici !</a> <br>
<ul>
<li>Créer un nouveau projet C++ dans le dossier de votre choix (Pas dans le repo Git !!)</li>
<li>Cliquer droit sur le nom du projet, sous Workspace, dans le panneau latéral gauche</li>
<li>Cliquer sur "Add files recursively..." et choisir le repertoir "src" du repo Git</li>
<li>Supprimer l'ancien .cpp que Code::blocks a généré</li>
</ul>
DONE !<br>
</p>

<h2>Le guide de survie de Git</h2>
<p>Pour le download, c'est ici : <a href="https://github.com/git-for-windows/git/releases/download/v2.10.2.windows.1/Git-2.10.2-64-bit.exe">Clique ici !</a> <br>
Pour la version GUI (Graphique) c'est ici : <a href="https://github-windows.s3.amazonaws.com/GitHubSetup.exe">Clique ici !</a> <br>
Pour utiliser Git, on lance un invité de commande (Windows + R : cmd) </p>

<h3>Pour installer le repo sur son PC</h3>
<p>
  <ul>
  <li>On créer un dossier Git sur son dossier personnel : <code><b>mkdir</b> Git</code></li>
  <li>On va dans le dossier : <code><b>cd</b> Git</code></li>
  <li>On clone le repo : <code><b>git</b> clone https://github.com/Olivier-Delierre/team270.git</code></li>
  <li>On va dans le dossier du repo : <code><b>cd</b> team270</code></li>
  </ul>
  DONE !<br>
</p>

<h3>Commandes usuelles</h3>
<p><em>Les modifications</em><br>
<code><b>git</b> pull origin '<b>branche</b>'</code> Pour avoir les dernières versions des fichiers.<br>
<code><b>git</b> add fichier1 fichier2 ...</code> Pour ajouter ses modifications, ou des fichiers au repository <b>LOCAL</b>.<br>
<code><b>git</b> rm fichier1 fichier2 ...</code> Pour supprimer des fichiers au repository <b>LOCAL</b>.<br>
<code><b>git</b> status</code> Pour voir où l'on en est au niveau des ajouts / suppressions / modifications.<br>
<code><b>git</b> commit</code> Pour commit ses modifications. (Entendre par là, expliquer nos différentes modifications)<br>
<code><b>git</b> commit --ammend</code> Pour modifier son dernier commit avant le push, quand on a oublier des choses.<br>
<code><b>git</b> push</code> Envoyer les modifications sur le repo <b>EN LIGNE</b>, donc ON EST SUR DE CE QU'ON FAIT A CE MOMENT.</p>

<p><em>Les branches</em><br>
<code><b>git</b> branch</code> Pour avoir la liste des branches.<br>
<code><b>git</b> branch '<b>nom branche</b>'</code> Pour créer la branche 'nom branche'<br>
<code><b>git</b> branch -d '<b>nom branche</b>'</code> Pour supprimer la branche 'nom branche'<br>
<code><b>git</b> checkout '<b>nom branche</b>'</code> Pour travailler sur la branche 'nom branche'. Permet aussi d'annuler ses modifications avant le <code>push</code><br>
</p>
