<h1> 1- Methode Get et Post : </h1>
<h2>GET :</h2/>
<p>La méthode GET est utilisée par le navigateur pour demander au serveur de renvoyer une certaine ressource. La méthode GET passe les réponses saisies via l'URL.
</p>

<p> exemple : 
 GET /?say=Hi&to=Mom HTTP/1.1 </p>
<h2>POST</h2>
<p>La méthode POST est un peu différente.C'est la méthode que le navigateur utilise pour demander au serveur une réponse prenant en compte les données contenues dans le corps de la requête HTTP.  la méthode POST passe les paramètres dans le corps de la requête.</p>
<p>exemple : POST / HTTP/1.1</p>

<h1> 2- Tableau comparatif : </h1>
<table>
  <thead>
    <tr>
      <th scope="col"></th>
      <th scope="col">Get</th>
      <th scope="col">Post</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">Visibilité</th>
      <td>Visible pour l’utilisateur dans le champ d’adresse	</td>
      <td>Invisible pour l’utilisateur
</td>
    </tr>
    <tr>
      <th scope="row">Marque-page et historique de navigation</th>
      <td>Les paramètres de l’URL sont stockés en même temps que l’URL.</td>
      <td>L’URL est enregistrée sans paramètres URL.</td>
    </tr>
    <tr>
      <th scope="row">Cache et fichier log du serveur</th>
      <td>Les paramètres de l’URL sont stockés sans chiffrement</td>
      <td>Les paramètres de l’URL ne sont pas enregistrés automatiquement.</td>
    </tr>
    <tr>
      <th scope="row">Comportement lors de l’actualisation du navigateur / Bouton « précédent »</th>
      <td>Les paramètres de l’URL ne sont pas envoyés à nouveau.</td>
      <td>Le navigateur avertit que les données du formulaire doivent être renvoyées.</td>
    </tr>
  </tbody>
  <tfoot>
    <tr>  
  </tfoot>
</table>

<h1>3- Extensible</h1>

<p>À partir de HTTP/1.0, les en-têtes HTTP permettent d'étendre facilement le protocole et de mener des expérimentations avec celui-ci. De nouvelles fonctionnalités peuvent même être introduites par un simple accord entre le client et le serveur à propos de la sémantique des nouveaux en-têtes.</p>



<h1>4- Sans états</h1>

<p>HTTP est sans état : il n'y a pas de lien entre deux requêtes qui sont effectuées successivement sur la même connexion. Cela devient très rapidement problématique lorsque les utilisateurs veulent interagir avec une page de façon cohérente, par exemple avec un panier d'achat sur un site de commerce en ligne</p>

<h1>5- Décomposition d'un URL </h1>

<p> La structure de l'URL se compose de 3 éléments que nous allons voir avec l'exemple https://www.monsite.com : Le protocole et le sous domaine : https://www. Le nom de domaine : monsite. L'extension du nom de domaine : .com  </p>

<img src= https://cdn.prod.website-files.com/5eeb8b290ae25bce2125fc54/642fca11a8fb4d068243263a_url-definition.webp>


<p> les informations proviennent de : https://developer.mozilla.org/fr/docs/Learn/Forms/Sending_and_retrieving_form_data </p>
<p> ou encore : https://www.ionos.fr/digitalguide/sites-internet/developpement-web/get-vs-post/</p>


https://developer.mozilla.org/fr/docs/Web/HTTP/Overview






