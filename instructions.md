Tech: LARAVEL / BOOTSTRAP - TAILWIND / MIGRATIONS / MODEL / VUE / CONTROLLER / CREATE / DELETE
Contraintes: 2 LAYOUTS (back & front) 
Deadline: Jeudi 14/08 - 9:00
Responsive ? NO
Les tables
LES TABLES (3 tables en tout):
-> table employés avec: Nom | Prénom | Tel | Mail unique | Post(choix limité entre 5 départements) | Rôle (choix limité entre 5 rôles) | salaire (nombre a virgule).
-> table produits: Nom (max 70car) | Type (max 30car) | Descriptif (max 50car) | img(url)  | Prix (nombre a virgule)
-> table messages: Nom | Prénom | Tel | Mail | Sujet(max 50car) | Message (textelong)
(choix optionnel dans votre formulaire de remplissage créate, c'est a dire qu'on peut choisir entre ces 5 options...)
Les départements: Logistique, Réception, Comptabilité, Vente, Direction.
Les rôles: Ouvrier polyvalent, employé polyvalent, comptable, assistant du régional manager, régional manager.
Gary 🧭🪶👺🦥 — 07:23
Les pages (10 en tout)
// FRONT
-> Home: présentation de l'entreprise avec un carrousel, les service et produits, faite 3 sections en plus du carrousel.
-> Contactez nous, une image de la boite avec un formulaire pour remplir la table message. (a l'envois stock dans messages)
-> Notre équipe, une page avec des cards qui présente l'équipe (nom, prénom, poste, img)
-> 

// BACK
-> Un lien ou bouton discret vers une page backend (dans la nav ou ailleurs).
   le layout du backend est légérement différent du layout front, il faut qu'on capte qu'on est dans le backend. 
Pages Backend:
-> Employé: liste de tous les employé avec toutes leur donnée et un bouton virer. (au clique l'employé est supprimé)
      -> un bouton au dessus de la liste 'ajouter un employé', vers un form create employé.
-> Mail: une liste des messages envoyé via le formulaire de contact avec: expediteur, sujet, date, mail.
      -> un bouton delete sur chaque entrée de la liste pour supprimé les messages.
-> Produit: un liste des produit déjà présent
      -> un bouton au dessus de la liste 'ajouter produit' vers un form pour ajouter de nouveau produit au shop.
      -> dans la liste des produit existant sur notre site, un bouton supprimer.