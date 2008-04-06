<?php

/**
 * French (France) language pack
 * @package cms
 * @subpackage i18n
 */

i18n::include_locale_file('cms', 'en_US');

global $lang;

if(array_key_exists('fr_FR', $lang) && is_array($lang['fr_FR'])) {
	$lang['fr_FR'] = array_merge($lang['en_US'], $lang['fr_FR']);
} else {
	$lang['fr_FR'] = $lang['en_US'];
}

$lang['fr_FR']['AssetAdmin']['CHOOSEFILE'] = 'Choisir un fichier';
$lang['fr_FR']['AssetAdmin']['CONTENTMODBY'] = 'Contenu modifiable par';
$lang['fr_FR']['AssetAdmin']['CONTENTUSABLEBY'] = 'Contenu utilisable par';
$lang['fr_FR']['AssetAdmin']['CREATED'] = 'Premier Chargement';
$lang['fr_FR']['AssetAdmin']['DELETEDX'] = '%s fichiers supprimés.%s';
$lang['fr_FR']['AssetAdmin']['DELETEUNUSEDTHUMBNAILS'] = 'Supprimer les vignettes non utilisées';
$lang['fr_FR']['AssetAdmin']['DELSELECTED'] = 'Supprimer les fichiers sélectionnés';
$lang['fr_FR']['AssetAdmin']['DETAILSTAB'] = 'Détails';
$lang['fr_FR']['AssetAdmin']['FILENAME'] = 'Nom du fichier';
$lang['fr_FR']['AssetAdmin']['FILESREADY'] = 'Fichiers prêts à être chargé';
$lang['fr_FR']['AssetAdmin']['FILESTAB'] = 'Fichiers';
$lang['fr_FR']['AssetAdmin']['LASTEDITED'] = 'Dernière Modification';
$lang['fr_FR']['AssetAdmin']['MOVEDX'] = '%s fichiers déplacés';
$lang['fr_FR']['AssetAdmin']['NEWFOLDER'] = 'Nouveau Dossier';
$lang['fr_FR']['AssetAdmin']['NOTHINGTOUPLOAD'] = 'Il n\'y avait rien à charger';
$lang['fr_FR']['AssetAdmin']['NOWBROKEN'] = 'Ces pages ont maintenant des liens cassés';
$lang['fr_FR']['AssetAdmin']['ONLYADMINS'] = 'Seuls les administrateurs peuvent charger %s fichiers';
$lang['fr_FR']['AssetAdmin']['OWNER'] = 'Propriétaire';
$lang['fr_FR']['AssetAdmin']['SAVEDFILE'] = 'Fichier %s enregistré';
$lang['fr_FR']['AssetAdmin']['SAVEFOLDERNAME'] = 'Enregistrer le nom du dossier';
$lang['fr_FR']['AssetAdmin']['TITLE'] = 'Titre';
$lang['fr_FR']['AssetAdmin']['TOOLARGE'] = '%s est trop (%s). Les fichiers de ce type ne peuvent pas être plus large que %s';
$lang['fr_FR']['AssetAdmin']['TYPE'] = 'Type';
$lang['fr_FR']['AssetAdmin']['UNUSEDFILESTAB'] = 'Fichiers non utilisés';
$lang['fr_FR']['AssetAdmin']['UNUSEDFILESTITLE'] = 'Fichiers non utilisés';
$lang['fr_FR']['AssetAdmin']['UNUSEDTHUMBNAILSTITLE'] = 'Vignettes non utilisées';
$lang['fr_FR']['AssetAdmin']['UPLOAD'] = 'Charger Les Fichiers Listés Ci-Dessous';
$lang['fr_FR']['AssetAdmin']['UPLOADEDX'] = '%s fichiers chargés';
$lang['fr_FR']['AssetAdmin']['UPLOADTAB'] = 'Charger';
$lang['fr_FR']['AssetAdmin']['VIEWASSET'] = 'Voir fichier';
$lang['fr_FR']['AssetAdmin']['VIEWEDITASSET'] = 'Voir / Modifier fichier';
$lang['fr_FR']['AssetAdmin_left.ss']['CREATE'] = 'Créer';
$lang['fr_FR']['AssetAdmin_left.ss']['DELETE'] = 'Supprimer...';
$lang['fr_FR']['AssetAdmin_left.ss']['DELFOLDERS'] = 'Supprimer les dossiers sélectionnés';
$lang['fr_FR']['AssetAdmin_left.ss']['FOLDERS'] = 'Dossiers';
$lang['fr_FR']['AssetAdmin_left.ss']['GO'] = 'Go';
$lang['fr_FR']['AssetAdmin_left.ss']['SELECTTODEL'] = 'Sélectionner les dossiers que vous voulez supprimer et puis cliquer sur le bouton ci-dessous';
$lang['fr_FR']['AssetAdmin_left.ss']['TOREORG'] = 'Pour réorganiser vos dossiers, déplacer les où vous le souhaitez.';
$lang['fr_FR']['AssetAdmin_right.ss']['CHOOSEPAGE'] = 'Choisir une page sur la gauche s\'il vous plaît';
$lang['fr_FR']['AssetAdmin_right.ss']['WELCOME'] = 'Bienvenue à';
$lang['fr_FR']['AssetAdmin_uploadiframe.ss']['PERMFAILED'] = 'Vous n\'avez pas la permission de charger des fichiers dans ce dossier';
$lang['fr_FR']['AssetTableField']['CREATED'] = 'Premier chargement';
$lang['fr_FR']['AssetTableField']['DIM'] = 'Dimensions';
$lang['fr_FR']['AssetTableField']['FILENAME'] = 'Nom du fichier';
$lang['fr_FR']['AssetTableField']['LASTEDIT'] = 'Dernière modification';
$lang['fr_FR']['AssetTableField']['NOLINKS'] = 'Aucune page ne possède de liens vers ce fichier.';
$lang['fr_FR']['AssetTableField']['OWNER'] = 'Propriétaire';
$lang['fr_FR']['AssetTableField']['PAGESLINKING'] = 'Les pages suivantes ont un lien vers ce fichier :';
$lang['fr_FR']['AssetTableField']['SIZE'] = 'Taille';
$lang['fr_FR']['AssetTableField.ss']['DELFILE'] = 'Supprimer ce fichier';
$lang['fr_FR']['AssetTableField.ss']['DRAGTOFOLDER'] = 'Déplacer vers un dossier sur la gauche pour déplacer le fichier';
$lang['fr_FR']['AssetTableField']['TITLE'] = 'Titre';
$lang['fr_FR']['AssetTableField']['TYPE'] = 'Type';
$lang['fr_FR']['BulkLoaderAdmin']['CONFIRMBULK'] = 'Confirmer le chargement du groupe';
$lang['fr_FR']['BulkLoaderAdmin']['CSVFILE'] = 'Fichier CSV';
$lang['fr_FR']['BulkLoaderAdmin']['DATALOADED'] = 'Ces données ont été chargées dans';
$lang['fr_FR']['BulkLoaderAdmin']['PRESSCNT'] = 'Appuyer sur continuer pour charger ces données';
$lang['fr_FR']['BulkLoaderAdmin']['PREVIEW'] = 'Aperçu';
$lang['fr_FR']['BulkLoaderAdmin_left.ss']['BATCHEF'] = 'Groupe de fonctions';
$lang['fr_FR']['BulkLoaderAdmin_left.ss']['FUNCTIONS'] = 'Fonctions';
$lang['fr_FR']['BulkLoaderAdmin_preview.ss']['RES'] = 'Résultats';
$lang['fr_FR']['CMSLeft.ss']['DELPAGE'] = 'Supprimer Pages...';
$lang['fr_FR']['CMSLeft.ss']['DELPAGES'] = 'Supprimer les pages sélectionnées';
$lang['fr_FR']['CMSLeft.ss']['GO'] = 'Go';
$lang['fr_FR']['CMSLeft.ss']['NEWPAGE'] = 'Nouvelle Page...';
$lang['fr_FR']['CMSLeft.ss']['SELECTPAGESDEL'] = 'Sélectionner les pages que vous voulez supprimer et puis cliquer sur le bouton ci-dessous';
$lang['fr_FR']['CMSLeft.ss']['SITECONT'] = 'Contenu du Site';
$lang['fr_FR']['CMSMain']['CANCEL'] = 'Annuler';
$lang['fr_FR']['CMSMain']['CHOOSEREPORT'] = 'Choisir un rapport...';
$lang['fr_FR']['CMSMain']['COMPARINGV'] = 'Vous comparez actuellement les versions #%d et #%d';
$lang['fr_FR']['CMSMain']['COPYPUBTOSTAGE'] = 'Voulez-vous vraiment copier le contenu public vers le site brouillon ?';
$lang['fr_FR']['CMSMain']['DELETEFP'] = 'Supprimer du site public';
$lang['fr_FR']['CMSMain']['EMAIL'] = 'Email';
$lang['fr_FR']['CMSMain']['GO'] = 'Go';
$lang['fr_FR']['CMSMain']['METADESCOPT'] = 'Description';
$lang['fr_FR']['CMSMain']['METAKEYWORDSOPT'] = 'Mots clés';
$lang['fr_FR']['CMSMain']['NEW'] = 'Nouveau';
$lang['fr_FR']['CMSMain']['NOCONTENT'] = 'aucun contenu';
$lang['fr_FR']['CMSMain']['NOTHINGASSIGNED'] = 'Vous n\'avez rien d\'assigné.';
$lang['fr_FR']['CMSMain']['NOWAITINGON'] = 'Vous n\'attendez personne.';
$lang['fr_FR']['CMSMain']['NOWBROKEN'] = 'Les pages suivantes ont maintenant des liens cassés :';
$lang['fr_FR']['CMSMain']['NOWBROKEN2'] = 'Leurs propriétaires ont été avertis par mail et vont corriger ces pages.';
$lang['fr_FR']['CMSMain']['OK'] = 'OK';
$lang['fr_FR']['CMSMain']['PAGEDEL'] = 'Page %d supprimée';
$lang['fr_FR']['CMSMain']['PAGENOTEXISTS'] = 'Cette page n\'existe pas';
$lang['fr_FR']['CMSMain']['PAGEPUB'] = 'Page %d publiée';
$lang['fr_FR']['CMSMain']['PAGESDEL'] = 'Pages %d supprimées';
$lang['fr_FR']['CMSMain']['PAGESPUB'] = '%d pages publiées';
$lang['fr_FR']['CMSMain']['PAGETYPEOPT'] = 'Type de page';
$lang['fr_FR']['CMSMain']['PRINT'] = 'Imprimer';
$lang['fr_FR']['CMSMain']['PUBALLCONFIRM'] = 'Publier chaque page du site en copiant le contenu à partir du site brouillon s\'il vous plaît';
$lang['fr_FR']['CMSMain']['PUBALLFUN'] = 'Fonctionnalité "Tout Publier"';
$lang['fr_FR']['CMSMain']['PUBALLFUN2'] = 'Presser ce boutton fera la même chose que d\'aller sur chaque page et d\'appuer sur "publier".';
$lang['fr_FR']['CMSMain']['PUBPAGES'] = '%d pages publiées';
$lang['fr_FR']['CMSMain']['REMOVEDFD'] = 'Supprimé du site brouillon';
$lang['fr_FR']['CMSMain']['REMOVEDPAGE'] = '\'%s\' supprimé du site public';
$lang['fr_FR']['CMSMain']['RESTORE'] = 'Restaurer';
$lang['fr_FR']['CMSMain']['RESTORED'] = '\'%s\' correctement restauré';
$lang['fr_FR']['CMSMain']['ROLLBACK'] = 'Retourner à cette version';
$lang['fr_FR']['CMSMain']['ROLLEDBACKPUB'] = 'Retour à la version publique. La nouvelle version est #%d';
$lang['fr_FR']['CMSMain']['ROLLEDBACKVERSION'] = 'Retour à la version #%d. La nouvelle version est #%d';
$lang['fr_FR']['CMSMain']['SAVE'] = 'Enregistrer';
$lang['fr_FR']['CMSMain']['SENTTO'] = 'Envoyé à %s %s pour approbation.';
$lang['fr_FR']['CMSMain']['STATUSOPT'] = 'Statut';
$lang['fr_FR']['CMSMain']['TOTALPAGES'] = 'Nombre total de pages :';
$lang['fr_FR']['CMSMain']['VERSIONSNOPAGE'] = 'Page #%d introuvable';
$lang['fr_FR']['CMSMain']['VIEWING'] = 'Vous êtes entrain de regarder la version #%d, créée le %s';
$lang['fr_FR']['CMSMain']['VISITRESTORE'] = 'Visiter restorepage/(ID)';
$lang['fr_FR']['CMSMain']['WAITINGON'] = 'Vous attendez que d\'autres personnes travaillent sur ces <b>%d</b> pages.';
$lang['fr_FR']['CMSMain']['WORKTODO'] = 'Vous avez du travail a faire sur ces <b>%d</b> pages.';
$lang['fr_FR']['CMSMain_left.ss']['ADDEDNOTPUB'] = 'Ajouté au site brouillon et pas encore publié';
$lang['fr_FR']['CMSMain_left.ss']['ADDSEARCHCRITERIA'] = 'Ajouter un critère...';
$lang['fr_FR']['CMSMain_left.ss']['BATCHACTIONS'] = 'Groupe d\'Actions';
$lang['fr_FR']['CMSMain_left.ss']['CHANGED'] = 'modifié';
$lang['fr_FR']['CMSMain_left.ss']['CLOSEBOX'] = 'cliquer pour fermer la fenêtre';
$lang['fr_FR']['CMSMain_left.ss']['COMMENTS'] = 'Commentaires';
$lang['fr_FR']['CMSMain_left.ss']['COMPAREMODE'] = 'Comparer ( sélectionner 2 versions ci-dessous )';
$lang['fr_FR']['CMSMain_left.ss']['CREATE'] = 'Créer';
$lang['fr_FR']['CMSMain_left.ss']['DEL'] = 'supprimé';
$lang['fr_FR']['CMSMain_left.ss']['DELETECONFIRM'] = 'Supprimer les pages sélectionnées';
$lang['fr_FR']['CMSMain_left.ss']['DELETEDSTILLLIVE'] = 'Supprimé du site brouillon mais toujours sur le site public';
$lang['fr_FR']['CMSMain_left.ss']['EDITEDNOTPUB'] = 'Edité sur le site brouillon et pas encore publié';
$lang['fr_FR']['CMSMain_left.ss']['EDITEDSINCE'] = 'Modifié depuis';
$lang['fr_FR']['CMSMain_left.ss']['ENABLEDRAGGING'] = 'Autoriser le cliquer-déplacer pour la réorganisation';
$lang['fr_FR']['CMSMain_left.ss']['GO'] = 'Go';
$lang['fr_FR']['CMSMain_left.ss']['KEY'] = 'Clé :';
$lang['fr_FR']['CMSMain_left.ss']['NEW'] = 'nouveau';
$lang['fr_FR']['CMSMain_left.ss']['OPENBOX'] = 'cliquer pour ouvrir cette fenêtre';
$lang['fr_FR']['CMSMain_left.ss']['PAGEVERSIONH'] = 'Versions des Pages';
$lang['fr_FR']['CMSMain_left.ss']['PUBLISHCONFIRM'] = 'Publier les pages sélectionnées';
$lang['fr_FR']['CMSMain_left.ss']['SEARCH'] = 'Chercher';
$lang['fr_FR']['CMSMain_left.ss']['SEARCHTITLE'] = 'Chercher par URL, Titre, Titre de Menu &amp; Contenu';
$lang['fr_FR']['CMSMain_left.ss']['SELECTPAGESACTIONS'] = 'Sélectionner les pages que vous voulez changer &amp; puis cliquer sur une action :';
$lang['fr_FR']['CMSMain_left.ss']['SELECTPAGESDUP'] = 'Sélectionner les pages que vous voulez dupliquer, si leurs sous-pages doivent être inclues et où vous souhaitez les placer';
$lang['fr_FR']['CMSMain_left.ss']['SHOWONLYCHANGED'] = 'Afficher seulement les pages modifiées';
$lang['fr_FR']['CMSMain_left.ss']['SHOWUNPUB'] = 'Afficher les versions non publiées';
$lang['fr_FR']['CMSMain_left.ss']['SITECONTENT TITLE'] = 'Contenu du Site et Structure';
$lang['fr_FR']['CMSMain_left.ss']['SITEREPORTS'] = 'Rapports du Site';
$lang['fr_FR']['CMSMain_left.ss']['TASKLIST'] = 'Liste de requêtes';
$lang['fr_FR']['CMSMain_left.ss']['WAITINGON'] = 'En attente de';
$lang['fr_FR']['CMSMain_right.ss']['ANYMESSAGE'] = 'Avez-vous un message pour votre editeur ?';
$lang['fr_FR']['CMSMain_right.ss']['CHOOSEPAGE'] = 'Choisissez une page sur la gauche s\'il vous plaît.';
$lang['fr_FR']['CMSMain_right.ss']['LOADING'] = 'chargement...';
$lang['fr_FR']['CMSMain_right.ss']['MESSAGE'] = 'Message';
$lang['fr_FR']['CMSMain_right.ss']['SENDTO'] = 'Envoyer à';
$lang['fr_FR']['CMSMain_right.ss']['STATUS'] = 'Statut';
$lang['fr_FR']['CMSMain_right.ss']['SUBMIT'] = 'Soumettre pour approbation';
$lang['fr_FR']['CMSMain_right.ss']['WELCOMETO'] = 'Bienvenue à';
$lang['fr_FR']['CMSMain_versions.ss']['AUTHOR'] = 'Auteur';
$lang['fr_FR']['CMSMain_versions.ss']['NOTPUB'] = 'Non publié';
$lang['fr_FR']['CMSMain_versions.ss']['PUBR'] = 'Publieur';
$lang['fr_FR']['CMSMain_versions.ss']['UNKNOWN'] = 'Inconnu';
$lang['fr_FR']['CMSMain_versions.ss']['WHEN'] = 'Quand';
$lang['fr_FR']['CMSRight.ss']['CHOOSEPAGE'] = 'Choisissez une page sur la gauche s\'il vous plaît.';
$lang['fr_FR']['CMSRight.ss']['ECONTENT'] = 'Editer le Contenu';
$lang['fr_FR']['CMSRight.ss']['WELCOMETO'] = 'Bienvenue à';
$lang['fr_FR']['CommentList.ss']['CREATEDW'] = 'Les commentaires sont créés à chaque fois qu\'une des actions suivantes ait effectuée - Publier, Annuler, Soumettre.';
$lang['fr_FR']['CommentList.ss']['NOCOM'] = 'Il n\'y a pas de commentaires sur cette page.';
$lang['fr_FR']['GenericDataAdmin_left.ss']['ADDLISTING'] = 'Ajouter le listing';
$lang['fr_FR']['GenericDataAdmin_left.ss']['SEARCHLISTINGS'] = 'Chercher Listings';
$lang['fr_FR']['GenericDataAdmin_left.ss']['SEARCHRESULTS'] = 'Résultats de la recherche';
$lang['fr_FR']['ImageEditor.ss']['CANCEL'] = 'annuler';
$lang['fr_FR']['ImageEditor.ss']['CROP'] = 'couper';
$lang['fr_FR']['ImageEditor.ss']['HEIGHT'] = 'hauteur';
$lang['fr_FR']['ImageEditor.ss']['REDO'] = 'Refaire modification';
$lang['fr_FR']['ImageEditor.ss']['ROT'] = 'tourner';
$lang['fr_FR']['ImageEditor.ss']['SAVE'] = 'enregister&nbsp;image';
$lang['fr_FR']['ImageEditor.ss']['UNDO'] = 'Annuler modification';
$lang['fr_FR']['ImageEditor.ss']['UNTITLED'] = 'Document Sans Titre';
$lang['fr_FR']['ImageEditor.ss']['WIDTH'] = 'largeur';
$lang['fr_FR']['LeftAndMain']['CHANGEDURL'] = 'URL modifiée en \'%s\'';
$lang['fr_FR']['LeftAndMain']['COMMENTS'] = 'Commentaires';
$lang['fr_FR']['LeftAndMain']['FILESIMAGES'] = 'Fichiers & Images';
$lang['fr_FR']['LeftAndMain']['HELP'] = 'Aide';
$lang['fr_FR']['LeftAndMain']['NEWSLETTERS'] = 'Newsletters';
$lang['fr_FR']['LeftAndMain']['PAGETYPE'] = 'Type de page :';
$lang['fr_FR']['LeftAndMain']['PERMAGAIN'] = 'Vous avez été déconnecté du CMS. Si vous voulez vous reconnecter, entrez un nom d\'utilisateur et un mot de passe ci-dessous.';
$lang['fr_FR']['LeftAndMain']['PERMALREADY'] = 'Désolé, mais vous ne pouvez pas accéder cette partie du CMS. Si vous voulez changer d\'identification, faites le ci-dessous';
$lang['fr_FR']['LeftAndMain']['PERMDEFAULT'] = 'Choisissez une méthode d\'authentification et entrez vos détails personnels pour accéder au CMS s\'il vous plaît.';
$lang['fr_FR']['LeftAndMain']['PLEASESAVE'] = 'Enregister la page s\'il vous plaît : Cette page ne pouvait pas être actualisée car elle n\'a pas encore été enregistrée.';
$lang['fr_FR']['LeftAndMain']['REPORTS'] = 'Rapports';
$lang['fr_FR']['LeftAndMain']['REQUESTERROR'] = 'Erreur de requête';
$lang['fr_FR']['LeftAndMain']['SAVED'] = 'enregistré';
$lang['fr_FR']['LeftAndMain']['SAVEDUP'] = 'Enregistré';
$lang['fr_FR']['LeftAndMain']['SECURITY'] = 'Securité';
$lang['fr_FR']['LeftAndMain']['SITECONTENT'] = 'Contenu Du Site';
$lang['fr_FR']['LeftAndMain']['SITECONTENTLEFT'] = 'Contenu du site';
$lang['fr_FR']['LeftAndMain.ss']['APPVERSIONTEXT1'] = 'C\'est la';
$lang['fr_FR']['LeftAndMain.ss']['APPVERSIONTEXT2'] = 'version que vous utilisez actuellement, techniquement c\'est une branche CVS';
$lang['fr_FR']['LeftAndMain.ss']['ARCHS'] = 'Site Archivé';
$lang['fr_FR']['LeftAndMain.ss']['DRAFTS'] = 'Site Brouillon';
$lang['fr_FR']['LeftAndMain.ss']['EDIT'] = 'Modifier';
$lang['fr_FR']['LeftAndMain.ss']['EDITPROFILE'] = 'Profil';
$lang['fr_FR']['LeftAndMain.ss']['LOADING'] = 'Chargement...';
$lang['fr_FR']['LeftAndMain.ss']['LOGGEDINAS'] = 'Connecté en tant que';
$lang['fr_FR']['LeftAndMain.ss']['LOGOUT'] = 'Se Déconnecter';
$lang['fr_FR']['LeftAndMain.ss']['PUBLIS'] = 'Site Public';
$lang['fr_FR']['LeftAndMain.ss']['SSWEB'] = 'Site Web SilverStripe';
$lang['fr_FR']['LeftAndMain.ss']['SWITCHTO'] = 'Changer à :';
$lang['fr_FR']['LeftAndMain.ss']['VIEWPAGEIN'] = 'Vue de la page :';
$lang['fr_FR']['LeftAndMain']['STATUSTO'] = 'Statut changé en \'%s\'';
$lang['fr_FR']['LeftAndMain']['TREESITECONTENT'] = 'Contenu du site';
$lang['fr_FR']['MemberList']['ADD'] = 'Ajouter';
$lang['fr_FR']['MemberList']['EMAIL'] = 'Email';
$lang['fr_FR']['MemberList']['FILTERBYG'] = 'Filtrer par groupe';
$lang['fr_FR']['MemberList']['FN'] = 'Prénom';
$lang['fr_FR']['MemberList']['PASSWD'] = 'Mot de passe';
$lang['fr_FR']['MemberList']['SEARCH'] = 'Chercher';
$lang['fr_FR']['MemberList']['SN'] = 'Nom de famille';
$lang['fr_FR']['MemberList.ss']['FILTER'] = 'Filtrer';
$lang['fr_FR']['MemberList_Table.ss']['EMAIL'] = 'Adresse Email';
$lang['fr_FR']['MemberList_Table.ss']['FN'] = 'Prénom';
$lang['fr_FR']['MemberList_Table.ss']['PASSWD'] = 'Mot de passe';
$lang['fr_FR']['MemberList_Table.ss']['SN'] = 'Nom de famille';
$lang['fr_FR']['MemberTableField']['ADD'] = 'Ajouter';
$lang['fr_FR']['MemberTableField']['ADDEDTOGROUP'] = 'Membre ajouté au groupe';
$lang['fr_FR']['MemberTableField.ss']['ADDNEW'] = 'Ajouter un nouveau';
$lang['fr_FR']['MemberTableField.ss']['DELETEMEMBER'] = 'Supprimer ce membre';
$lang['fr_FR']['MemberTableField.ss']['EDITMEMBER'] = 'Modifier ce membre';
$lang['fr_FR']['MemberTableField.ss']['SHOWMEMBER'] = 'Afficher ce membre';
$lang['fr_FR']['NewsletterAdmin']['FROMEM'] = 'Email expéditeur';
$lang['fr_FR']['NewsletterAdmin']['MEWDRAFTMEWSL'] = 'Nouvelle liste brouillon';
$lang['fr_FR']['NewsletterAdmin']['NEWLIST'] = 'Nouvelle liste d\'emails';
$lang['fr_FR']['NewsletterAdmin']['NEWNEWSLTYPE'] = 'Nouveau type de news-lettre';
$lang['fr_FR']['NewsletterAdmin']['NEWSLTYPE'] = 'Type de news-lettre';
$lang['fr_FR']['NewsletterAdmin']['PLEASEENTERMAIL'] = 'Entrer une adresse mail s\'il vous plaît';
$lang['fr_FR']['NewsletterAdmin']['RESEND'] = 'Réenvoyer';
$lang['fr_FR']['NewsletterAdmin']['SAVE'] = 'Enregistrer';
$lang['fr_FR']['NewsletterAdmin']['SAVED'] = 'Enregistré';
$lang['fr_FR']['NewsletterAdmin']['SEND'] = 'Envoyer...';
$lang['fr_FR']['NewsletterAdmin']['SENDING'] = 'Emails en cours d\'envoi...';
$lang['fr_FR']['NewsletterAdmin']['SENTTESTTO'] = 'Envoyer un test à';
$lang['fr_FR']['NewsletterAdmin']['SHOWCONTENTS'] = 'Afficher les contenus';
$lang['fr_FR']['NewsletterAdmin_BouncedList.ss']['EMADD'] = 'Adresse email';
$lang['fr_FR']['NewsletterAdmin_BouncedList.ss']['HAVEBOUNCED'] = 'Emails non reçus';
$lang['fr_FR']['NewsletterAdmin_BouncedList.ss']['NOBOUNCED'] = 'Tous les emails envoyés ont été reçus.';
$lang['fr_FR']['NewsletterAdmin_BouncedList.ss']['UNAME'] = 'Nom d\'utilisateur';
$lang['fr_FR']['NewsletterAdmin_left.ss']['ADDDRAFT'] = 'Ajouter un nouveau brouillon';
$lang['fr_FR']['NewsletterAdmin_left.ss']['ADDTYPE'] = 'Ajouter un nouveau type';
$lang['fr_FR']['NewsletterAdmin_left.ss']['CREATE'] = 'Créer...';
$lang['fr_FR']['NewsletterAdmin_left.ss']['DEL'] = 'Supprimer...';
$lang['fr_FR']['NewsletterAdmin_left.ss']['DELETEDRAFTS'] = 'Supprimer les brouillons sélectionnés';
$lang['fr_FR']['NewsletterAdmin_left.ss']['GO'] = 'Go';
$lang['fr_FR']['NewsletterAdmin_left.ss']['NEWSLETTERS'] = 'News-Lettres';
$lang['fr_FR']['NewsletterAdmin_left.ss']['SELECTDRAFTS'] = 'Sélectionner les brouillons que vous voulez supprimer et puis cliquer sur le bouton ci-dessous';
$lang['fr_FR']['NewsletterAdmin_right.ss']['CANCEL'] = 'Annuler';
$lang['fr_FR']['NewsletterAdmin_right.ss']['ENTIRE'] = 'Envoyer à toute la liste d\'emails';
$lang['fr_FR']['NewsletterAdmin_right.ss']['ONLYNOT'] = 'Envoyer seulement aux personnes ne l\'ayant pas encore reçu';
$lang['fr_FR']['NewsletterAdmin_right.ss']['SEND'] = 'Envoyer à la liste d\'email';
$lang['fr_FR']['NewsletterAdmin_right.ss']['SENDTEST'] = 'Envoyer un test à';
$lang['fr_FR']['NewsletterAdmin_right.ss']['WELCOME1'] = 'Bienvenue dans le';
$lang['fr_FR']['NewsletterAdmin_right.ss']['WELCOME2'] = 'Section administration des listes. Choisir un dossier à gauche s\'il vous plaît.';
$lang['fr_FR']['NewsletterAdmin_SiteTree.ss']['DRAFTS'] = 'Brouillons';
$lang['fr_FR']['NewsletterAdmin_SiteTree.ss']['MAILLIST'] = 'Liste d\'adresses';
$lang['fr_FR']['NewsletterAdmin_SiteTree.ss']['SENT'] = 'Envoyés';
$lang['fr_FR']['NewsletterAdmin_UnsubscribedList.ss']['NOUNSUB'] = 'Aucun utilisateur ne s\'est désinscrit de cette liste d\'adresses';
$lang['fr_FR']['NewsletterAdmin_UnsubscribedList.ss']['UNAME'] = 'Nom d\'utilisateur';
$lang['fr_FR']['NewsletterAdmin_UnsubscribedList.ss']['UNSUBON'] = 'Désinscrit de';
$lang['fr_FR']['NewsletterList.ss']['CHOOSEDRAFT1'] = 'Choisir un brouillon à gauche s\'il vous plaît, ou';
$lang['fr_FR']['NewsletterList.ss']['CHOOSEDRAFT2'] = 'Ajouter un';
$lang['fr_FR']['NewsletterList.ss']['CHOOSESENT'] = 'Choisir un envoi à gauche s\'il vous plaît.';
$lang['fr_FR']['Newsletter_RecipientImportField.ss']['CHANGED'] = 'Nombre de détails modifiés :';
$lang['fr_FR']['Newsletter_RecipientImportField.ss']['IMPORTED'] = 'Nouveaux membres importés :';
$lang['fr_FR']['Newsletter_RecipientImportField.ss']['IMPORTNEW'] = 'Nouveaux membres importés';
$lang['fr_FR']['Newsletter_RecipientImportField.ss']['SEC'] = 'secondes';
$lang['fr_FR']['Newsletter_RecipientImportField.ss']['SKIPPED'] = 'Enregistrements sautés :';
$lang['fr_FR']['Newsletter_RecipientImportField.ss']['TIME'] = 'Temps nécéssité :';
$lang['fr_FR']['Newsletter_RecipientImportField.ss']['UPDATED'] = 'Membres modifiés :';
$lang['fr_FR']['Newsletter_RecipientImportField_Table.ss']['CONTENTSOF'] = 'Contenu de';
$lang['fr_FR']['Newsletter_RecipientImportField_Table.ss']['NO'] = 'Annuler';
$lang['fr_FR']['Newsletter_RecipientImportField_Table.ss']['RECIMPORTED'] = 'Destinataires importé de';
$lang['fr_FR']['Newsletter_RecipientImportField_Table.ss']['YES'] = 'Confirmer';
$lang['fr_FR']['Newsletter_SentStatusReport.ss']['DATE'] = 'Date';
$lang['fr_FR']['Newsletter_SentStatusReport.ss']['EMAIL'] = 'Email';
$lang['fr_FR']['Newsletter_SentStatusReport.ss']['FN'] = 'Prénom';
$lang['fr_FR']['Newsletter_SentStatusReport.ss']['NEWSNEVERSENT'] = 'La news-lettre n\'a jamais été envoyée aux inscrits suivants';
$lang['fr_FR']['Newsletter_SentStatusReport.ss']['RES'] = 'Résultat';
$lang['fr_FR']['Newsletter_SentStatusReport.ss']['SENDBOUNCED'] = 'Envois aux Destinataires Suivants Non Reçus';
$lang['fr_FR']['Newsletter_SentStatusReport.ss']['SENDFAIL'] = 'Envois aux Destinataires Suivants Echoué';
$lang['fr_FR']['Newsletter_SentStatusReport.ss']['SENTOK'] = 'L\'Envoi aux Destinataires Suivants a été Réussi';
$lang['fr_FR']['Newsletter_SentStatusReport.ss']['SN'] = 'Nom de famille';
$lang['fr_FR']['PageComment']['COMMENTBY'] = 'Commentaire de \'%s\' sur %s';
$lang['fr_FR']['PageCommentInterface.ss']['COMMENTS'] = 'Commentaires';
$lang['fr_FR']['PageCommentInterface.ss']['NEXT'] = 'suivant';
$lang['fr_FR']['PageCommentInterface.ss']['NOCOMMENTSYET'] = 'Personne n\'a encore commenté cette page.';
$lang['fr_FR']['PageCommentInterface.ss']['POSTCOM'] = 'Envoyer votre commentaire';
$lang['fr_FR']['PageCommentInterface.ss']['PREV'] = 'précédent';
$lang['fr_FR']['PageCommentInterface_singlecomment.ss']['ISNTSPAM'] = 'ce commentaire n\'est pas un spam';
$lang['fr_FR']['PageCommentInterface_singlecomment.ss']['ISSPAM'] = 'ce commentaire est un spam';
$lang['fr_FR']['PageCommentInterface_singlecomment.ss']['PBY'] = 'Envoyé par';
$lang['fr_FR']['PageCommentInterface_singlecomment.ss']['REMCOM'] = 'supprimer ce commentaire';
$lang['fr_FR']['ReportAdmin_left.ss']['REPORTS'] = 'Rapports';
$lang['fr_FR']['ReportAdmin_right.ss']['WELCOME1'] = 'Bienvenue dans le';
$lang['fr_FR']['ReportAdmin_right.ss']['WELCOME2'] = 'Section rapports. Choisir un rapport à gauche s\'il vous plaît';
$lang['fr_FR']['ReportAdmin_SiteTree.ss']['REPORTS'] = 'Rapports';
$lang['fr_FR']['SecurityAdmin']['ADDMEMBER'] = 'Ajouter un membre';
$lang['fr_FR']['SecurityAdmin']['ADVANCEDONLY'] = 'Cette section est pour les utilisateurs avancés seulement.
Voir <a href="http://doc.silverstripe.com/doku.php?id=permissions:codes" target="_blank">cette page</a> pour plus d\'informations.';
$lang['fr_FR']['SecurityAdmin']['NEWGROUP'] = 'Nouveau Groupe';
$lang['fr_FR']['SecurityAdmin']['SAVE'] = 'Enregistrer';
$lang['fr_FR']['SecurityAdmin']['SGROUPS'] = 'Groupes de sécurité';
$lang['fr_FR']['SecurityAdmin_left.ss']['CREATE'] = 'Créer';
$lang['fr_FR']['SecurityAdmin_left.ss']['DEL'] = 'Supprimer...';
$lang['fr_FR']['SecurityAdmin_left.ss']['DELGROUPS'] = 'Supprimer les groupes sélectionnés';
$lang['fr_FR']['SecurityAdmin_left.ss']['GO'] = 'Go';
$lang['fr_FR']['SecurityAdmin_left.ss']['SECGROUPS'] = 'Groupes de sécurité';
$lang['fr_FR']['SecurityAdmin_left.ss']['SELECT'] = 'Sélectionner les pages que vous voulez supprimer et puis cliquer sur le bouton ci-dessous';
$lang['fr_FR']['SecurityAdmin_left.ss']['TOREORG'] = 'Pour réorganiser votre site, déplacer les pages comme vous le souhaitez.';
$lang['fr_FR']['SecurityAdmin_right.ss']['WELCOME1'] = 'Bienvenue à';
$lang['fr_FR']['SecurityAdmin_right.ss']['WELCOME2'] = 'Section administration de la sécurité. Choisir un groupe à gauche s\'il vous plaît.';
$lang['fr_FR']['SideReport']['EMPTYPAGES'] = 'Pages Vides';
$lang['fr_FR']['SideReport']['LAST2WEEKS'] = 'Pages modifiées durant les 2 dernières semaines';
$lang['fr_FR']['SideReport']['REPEMPTY'] = 'Le rapport %s est vide.';
$lang['fr_FR']['StaticExporter']['BASEURL'] = 'Domaine';
$lang['fr_FR']['StaticExporter']['EXPORTTO'] = 'Exporter vers ce dossier';
$lang['fr_FR']['StaticExporter']['FOLDEREXPORT'] = 'Dossier à exporter vers';
$lang['fr_FR']['StaticExporter']['NAME'] = 'Exportation Statique';
$lang['fr_FR']['StaticExporter']['ONETHATEXISTS'] = 'Spécifier un dossier qui existe s\'il vous plaît';
$lang['fr_FR']['SubmittedFormEmail.ss']['SUBMITTED'] = 'Les données suivantes ont été envoyées à votre site web :';
$lang['fr_FR']['TaskList.ss']['BY'] = 'par';
$lang['fr_FR']['ThumbnailStripField']['NOTAFOLDER'] = 'Ce n\'est pas un dossier';
$lang['fr_FR']['ThumbnailStripField.ss']['CHOOSEFOLDER'] = '(Choisir un dossier ci-dessus)';
$lang['fr_FR']['ViewArchivedEmail.ss']['CANACCESS'] = 'Vous pouvez accéder le site archivé par ce lien :';
$lang['fr_FR']['ViewArchivedEmail.ss']['HAVEASKED'] = 'Vous avez demandé à voir le contenu de notre site le';
$lang['fr_FR']['WaitingOn.ss']['ATO'] = 'assigné à';

?>