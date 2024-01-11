@extends('base')


@section('content')
<br>
<div class="body hidden">
<div class="container">
    <Header>Création d'un suivis</Header>
    <div class="progress-bar">
        <div class="step">
            <p>étape</p>
            <div class="bullet">
                <span>1</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>étape</p>
            <div class="bullet">
                <span>2</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>étape</p>
            <div class="bullet">
                <span>3</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>étape</p>
            <div class="bullet">
                <span>4</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>étape</p>
            <div class="bullet">
                <span>5</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
        <div class="step">
            <p>étape</p>
            <div class="bullet">
                <span>6</span>
            </div>
            <div class="check fas fa-check"></div>
        </div>
    </div>
<div class="form-outer">
    <form action="#">
            <!---  Page 1 : INFORMATIONS PERSONNELLES  --->
        <div class="page slidepage">
            <div class="title hidden">Informations personnelles :</div>
            <div class="field">
                <div class="label">Date de contact</div>
                <input type="date" name="dte_contact">
            </div>
            <div class="field">
                <div class="label">Origine du contact</div>
                <input type="text" name="origine_contact">
            </div>
        
                <div class="label">Inscrit aux restos du coeur</div>
                <input type="radio" name="is_rdc" value="1" onclick="hideshowrdc(1)" id="oui_rdc">
                <label class="label" for="oui_rdc">Oui</label>
                <input type="radio" name="is_rdc" value="0" onclick="hideshowrdc(2)" id="non_rdc">
                <label class="label" for="non_rdc">Non</label>
            
            <!--- Si oui --->
            <div id="div_rdc" class="hidden">
            <div class="field">
                <div class="label">N°</div>
                <input type="text" name="numero">
            </div>
            <div class="field">
                <div class="label">Centre</div>
                <input type="text" name="centre">
            </div>
            <div class="field">
                <div class="label">Jour</div>
                <input type="text" name="jour">
            </div>
            </div>
            <!--- Fin --->
            
                <div class="label">Bénévole aux restos du coeur</div>
                <input type="radio" name="is_benevole" value="1" id="oui_benevole">
                <label class="label" for="oui_benevole">Oui</label>
                <input type="radio" name="is_benevole" value="0" id="non_benevole">
                <label class="label" for="non_benevole">Non</label>
            
            <div class="field">
                <div class="label">Accompagnateur SRE</div>
                <select name="pseudo">
                    <option value="pseudo">Choisir un accompagnateur</option>
                </select>
            </div>
            <div class="field nextBtn">
                <button>Suivant</button>
            </div>
        </div>
            <!---  Page 2 : COORDONNEES  --->
            <div class="page">
                <div class="title">Coordonnées :</div>
                <div class="field">
                    <div class="label">Civilité</div>
                    <select name="civilite">
                        <option value="Aucune">Choisir une civilité</option>
                        <option value="Madame">Madame</option>
                        <option value="Mademoiselle">Mademoiselle</option>
                        <option value="Monsieur">Monsieur</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Nom</div>
                    <input type="text" name="nom">
                </div>
                <div class="field">
                    <div class="label">Prénom</div>
                    <input type="text" name="prenom">
                </div>
                <div class="field">
                    <div class="label">Date de naissance</div>
                    <input type="date" name="dte_naissance">
                </div>
                <div class="field">
                    <div class="label">Nationalité</div>
                    <select name="nationalite">
                        <option value="Aucune">Choisir une nationalité</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Adresse</div>
                    <input type="text" name="adresse">
                </div>
                <div class="field">
                    <div class="label">Code Postal</div>
                    <input type="text" name="code_postal">
                </div>
                <div class="field">
                    <div class="label">Ville</div>
                    <input type="text" name="ville">
                </div>
                <div class="field">
                    <div class="label">Téléphone</div>
                    <input type="number" name="telephone">
                </div>
                <div class="field">
                    <div class="label">E-mail</div>
                    <input type="mail" name="email">
                </div>
                <div class="field">
                    <div class="label">Statue</div>
                    <select name="statue">
                        <option value="Aucune">Choisir un statue</option>
                        <option value="celibataire">Célibataire</option>
                        <option value="marie">Marié(e)</option>
                        <option value="divorce">Divorcé(e)</option>
                        <option value="veuf">Veuf(ve)</option>
                        <option value="pacse">Pacsé(e)</option>
                    </select>
                </div>
                <div class="field btns">
                    <button class="next-1 next">Suivant</button>
                    <button class="prev-1 prev">Précédent</button>
                </div>
            </div>
            <!---  Page 3 : SITUATION PERSONNELLE  --->
            <div class="page">
                <div class="title">Situation personnelle :</div>
                
                    <div class="label">Enfant à charge</div>
                    <input type="radio" name="is_enfant" value="1" onclick="hideshowenfant(1)" id="oui_enfant">
                    <label class="label" for="oui_enfant">Oui</label>
                    <input type="radio" name="is_enfant" value="0" onclick="hideshowenfant(2)" id="non_enfant">
                    <label class="label" for="non_enfant">Non</label>
                
                <!--- Si oui --->
                <div id="div_enfant" class="hidden">
                <div class="field">
                    <div class="label">Nombre d'enfants </div>
                    <input type="number" name="nb_enfant">
                </div>

                <div class="field">
                    <div class="label">Nom de l'enfant </div>
                    <input type="text" name="nom">
                </div>
                <div class="field">
                    <div class="label">Date de naissance de l'enfant </div>
                    <input type="text" name="dte_naissance">
                </div>
                </div>
                <!--- Fin --->
                <div class="field hidden">
                    <div class="label">Nature des revenus</div>
                    <select name="nature_revenus" onchange="hideshowrevenus()" id="revenus">
                        <option value="Aucun">Choisir un revenus</option>
                        <option value="salaire">Salaire</option>
                        <option value="rsa">RSA</option>
                        <option value="are">ARE</option>
                        <option value="aah">AAH</option>
                        <option value="retraite">Pension de retraite</option>
                        <option value="autre">Autre</option>
                        <option value="Aucun">Aucune</option>
                    </select>
                </div>
                <!--- Si autre --->
                <div id="preciser">
                <div class="field">
                    <div class="label">Préciser le type de revenus</div>
                    <input type="text" name="autre_revenus">
                </div>
                </div>
                <!--- Fin --->
                
                    <div class="label">Inscrit à France travail</div>
                    <input type="radio" name="is_france_travail" value="oui" onclick="hideshowfrance(1)" id="oui_pole_emplois">
                    <label class="label" for="oui_pole_emplois">Oui</label>
                    <input type="radio" name="is_france_travail" value="non" onclick="hideshowfrance(2)" id="non_pole_emplois">
                    <label class="label" for="non_pole_emplois">Non</label>
                
                <!--- Si oui --->
                <div id="div_france" class="hidden">
                <div class="field">
                    <div class="label">Date d'inscription à France travail</div>
                    <input type="date" name="france_dte_inscription">
                </div>
                <div class="field">
                    <div class="label">Nom référent</div>
                    <input type="text" name="france_nom_ref">
                </div>
                </div>
                <!--- Fin --->
                
                    <div class="label">Inscrit à Soélis</div>
                    <input type="radio" name="is_soelis" value="oui" onclick="hideshowsoelis(1)" id="oui_soelis">
                    <label class="label" for="oui_soelis">Oui</label>
                    <input type="radio" name="is_soelis" value="non" onclick="hideshowsoelis(2)" id="non_soelis">
                    <label class="label" for="non_soelis">Non</label>
                
                <!--- Si oui --->
                <div id="div_soelis" class="hidden">
                <div class="field">
                    <div class="label">Date d'inscription à Soélis</div>
                    <input type="date" name="soelis_dte_inscription">
                </div>
                <div class="field">
                    <div class="label">Nom référent</div>
                    <input type="text" name="soelis_nom_ref">
                </div>
                </div>
                <!--- Fin --->
                
                    <div class="label">Inscrit à la chambre des métiers et de l'artisanat</div>
                    <input type="radio" name="is_cma" value="oui" onclick="hideshowcma(1)" id="oui_cma">
                    <label class="label" for="oui_cma">Oui</label>
                    <input type="radio" name="is_cma" value="non" onclick="hideshowcma(2)" id="non_cma">
                    <label class="label" for="non_cma">Non</label>
                
                <!--- Si oui --->
                <div id="div_cma" class="hidden">
                <div class="field">
                    <div class="label">Date d'inscription la chambre des métiers et de l'artisanat</div>
                    <input type="date" name="cma_dte_inscription">
                </div>
                <div class="field">
                    <div class="label">Nom référent</div>
                    <input type="text" name="cma_nom_ref">
                </div>
                </div>
                <!--- Fin --->
                
                    <div class="label">Inscrit à la Mission locale</div>
                    <input type="radio" name="is_mission_locale" value="oui" onclick="hideshowmission(1)" id="oui_mission_locale">
                    <label class="label" for="oui_mission_locale">Oui</label>
                    <input type="radio" name="is_mission_locale" value="non" onclick="hideshowmission(2)" id="non_mission_locale">
                    <label class="label" for="non_mission_locale">Non</label>
                
                <!--- Si oui --->
                <div id="div_mission" class="hidden">
                <div class="field">
                    <div class="label">Date d'inscription à la Mission locale</div>
                    <input type="date" name="mission_dte_inscription">
                </div>
                <div class="field">
                    <div class="label">Nom référent</div>
                    <input type="text" name="mission_nom_ref">
                </div>
                </div>
                <!--- Fin --->
                
                    <div class="label">Inscrit à CAP emplois</div>
                    <input type="radio" name="is_cap_emploi" value="oui" onclick="hideshowcap(1)" id="oui_cap_emploi">
                    <label class="label" for="oui_cap_emploi">Oui</label>
                    <input type="radio" name="is_cap_emploi" value="non" onclick="hideshowcap(2)" id="non_cap_emploi">
                    <label class="label" for="non_cap_emploi">Non</label>
                
                <!--- Si oui --->
                <div id="div_cap" class="hidden">
                <div class="field">
                    <div class="label">Date d'inscription CAP emplois</div>
                    <input type="date" name="cap_dte_inscription">
                </div>
                <div class="field">
                    <div class="label">Nom référent</div>
                    <input type="text" name="cap_nom_ref">
                </div>
                </div>
                <!--- Fin --->
                
                    <div class="label">CV disponible</div>
                    <input type="radio" name="is_cv" value="oui" onclick="hideshowcv(1)" id="oui_cv">
                    <label class="label" for="oui_cv">Oui</label>
                    <input type="radio" name="is_cv" value="non" onclick="hideshowcv(2)" id="non_cv">
                    <label class="label" for="non_cv">Non</label>
                
                <!--- Si oui --->
                <div id="div_cv_oui">
                <div class="field">
                    <div class="label">Insérer le cv scanné (format PDF uniquement)</div>
                    <input type="file" name="cv_nom">
                </div>
                </div>
                <!--- Si non --->
                <div id="div_cv_non">
                <div class="field">
                    <div class="label">Date programmé pour travailler le CV (laisser vide si pas de date)</div>
                    <input type="date" name="dte_travailler">
                </div>
                </div>
                <!--- Fin --->
                
                    <div class="label">A le Permis</div>
                    <input type="radio" name="is_permis" value="oui" onclick="hideshowpermis(1)" id="oui_permis">
                    <label class="label" for="oui_permis">Oui</label>
                    <input type="radio" name="is_permis" value="non" onclick="hideshowpermis(2)" id="non_permis">
                    <label class="label" for="non_permis">Non</label>
                
                <!--- Si oui --->
                <div id="div_permis" class="hidden">
                <div class="field">
                    <div class="label">Combien de permis</div>
                    <input type="number" name="nb_permis">
                </div>
                <!--- Si oui un/plusieurs --->
                <div class="field">
                <div class="label">Permis</div>
                <select name="type" onchange="hideshowpermischoix()" id="choix_permis">
                    <option value="aucun">Choisir un permis</option>
                    <option value="aucun">aucun</option>
                    <option value="autos">Permis autos</option>
                    <option value="motos">Permis motos</option>
                    <option value="marchandises">Permis marchandises ou de personnes</option>
                </select>
                </div>
                </div>
                <!--- Si non (rien) --->
                <!--- Si autos --->
                <div id="autos" class="hidden">
                <div class="field">
                <div class="label">Permis autos</div>
                <select name="autos_categorie">
                    <option value="aucun">Choisir une catégorie</option>
                    <option value="B">B</option>
                    <option value="B1">B1</option>
                    <option value="BE">BE</option>
                </select>
                </div>
                </div>
                <!--- Si motos --->
                <div id="motos" class="hidden">
                <div class="field">
                <div class="label">Permis motos</div>
                <select name="motos_categorie">
                    <option value="aucun">Choisir une catégorie</option>
                    <option value="B">A</option>
                    <option value="B1">A1</option>
                    <option value="BE">A2</option>
                </select>
                </div>
                </div>
                <!--- Si marchandises ou personnes --->
                <div id="marchandises" class="hidden">
                <div class="field">
                <div class="label">Permis marchandises ou de personnes</div>
                <select name="marchandises_categorie">
                    <option value="aucun">Choisir une catégorie</option>
                    <option value="C">C</option>
                    <option value="CE">CE</option>
                    <option value="C1">C1</option>
                    <option value="C1E">C1E</option>
                    <option value="D">D</option>
                    <option value="DE">DE</option>
                    <option value="D1">D1</option>
                    <option value="D1E">D1E</option>
                </select>
                </div>
                </div>
                <!--- Fin --->
                
                    <div class="label">Véhicule disponible</div>
                    <input type="radio" name="vehicule_dispo" value="oui" onclick="hideshowvehiculedispo(1)" id="oui_vehicule">
                    <label class="label" for="oui_vehicule">Oui</label>
                    <input type="radio" name="vehicule_dispo" value="non" onclick="hideshowvehiculedispo(2)" id="non_vehicule">
                    <label class="label" for="non_vehicule">Non</label>
                
                <!--- Si oui (rien) --->
                <!--- Si non --->
                <div id="div_vehicule_dispo" class="hidden">
                    <div class="label">Achat prévu d'un véhicule</div>
                    <input type="radio" name="prevu_vehicule" value="oui" onclick="hideshowvehiculeprevu(1)" id="oui_achat">
                    <label class="label" for="oui_achat">Oui</label>
                    <input type="radio" name="prevu_vehicule" value="non" onclick="hideshowvehiculeprevu(2)" id="non_achat">
                    <label class="label" for="non_achat">Non</label>
                </div>
                <!--- Si oui --->
                <div id="div_vehicule_prevu" class="hidden">
                <div class="field">
                    <div class="label">Date d'achat prévue</div>
                    <input type="date" name="dte_achat">
                </div>
                </div>
                <!--- Si non (rien) --->
                <div class="field btns">
                    <button class="next-2 next">Suivant</button>
                    <button class="prev-2 prev">Précédent</button>
                </div>
            </div>
            <!---  Page 4 : FORMATION  --->
        <div class="page">
                <div class="title">Formations :</div>
                <div class="field">
                <div class="label">Diplôme(s) obtenus</div>
                <input type="number" name="nb_diplome">
                </div>
                <!--- Si 1 ou plus --->
                <div class="field">
                 <div class="label">Type de diplôme</div>
                 <select name="nom_diplome" onchange="hideshowdiplome()" id="diplome">
                    <option value="aucun">Choisir un diplôme</option>
                    <option value="brevet">Brevet</option>
                    <option value="cap">CAP</option>
                    <option value="bep">BEP</option>
                    <option value="bac">BAC</option>
                    <option value="bac+2">BAC+2</option>
                    <option value="licence">Licence</option>
                    <option value="master1">Master 1</option>
                    <option value="master2">Master 2</option>
                    <option value="autre">Autre</option>
                    <option value="form_continue">Formation continue</option>
                 </select>
                </div>
                <!--- Si Brevet (rien) --->
                <!--- Si CAP --->
                <div id="CAP" class="hidden">
                <div class="field">
                    <div class="labe">Renseigner le type de métier</div>
                    <input type="text" name="niveau_cap">
                </div>
                </div>
                <!--- Si BEP --->
                <div id="BEP" class="hidden">
                <div class="field">
                    <div class="labe">Renseigner la spécialité</div>
                    <input type="text" name="niveau_bep">
                </div>
                </div>
                <!--- Si BAC --->
                <div id="BAC" class="hidden">
                <div class="field">
                    <div class="labe">Renseigner la spécialité</div>
                    <input type="text" name="niveau_bac">
                </div>
                </div>
                <!--- Si BAC+2 --->
                <div id="BAC2" class="hidden">
                <div class="field">
                    <div class="labe">Renseigner la spécialité</div>
                    <input type="text" name="niveau_bac+2">
                </div>
                </div>
                <!--- Si Licence --->
                <div id="licence" class="hidden">
                <div class="field">
                    <div class="labe">Renseigner la spécialité</div>
                    <input type="text" name="niveau_licence">
                </div>
                </div>
                <!--- Si Master 1 --->
                <div id="master1" class="hidden">
                <div class="field">
                    <div class="labe">Renseigner la spécialité</div>
                    <input type="text" name="niveau_master1">
                </div>
                </div>
                <!--- Si Master 2 --->
                <div id="master2" class="hidden">
                <div class="field">
                    <div class="labe">Renseigner la spécialité</div>
                    <input type="text" name="niveau_master2">
                </div>
                </div>
                <!--- Si Formation continue --->
                <div id="formation_continue" class="hidden">
                    <div class="field">
                        <div class="label">Renseigner la formation</div>
                        <input type="text" name="niveau_formation_continue">
                    </div>
                </div>
                <!--- Si Autre --->
                <div id="autre_diplome" class="hidden">
                <div class="field">
                    <div class="labe">Renseigner le diplôme</div>
                    <input type="text" name="niveau_autre">
                </div>
                </div>
                <!--- Si Formation continue --->
                    <div class="label">Reconversion professionnelle</div>
                    <input type="radio" name="is_reconv_pro" value="oui" onclick="hideshowreconv(1)" id="oui_reconv">
                    <label class="label" for="oui_reconv">Oui</label>
                    <input type="radio" name="is_reconv_pro" value="non" onclick="hideshowreconv(2)" id="non_reconv">
                    <label class="label" for="non_reconv">Non</label>
                <!--- Si non (rien) --->
                <!--- Si oui --->
                <div id="div_reconv" class="hidden">
                <div class="label">Formations prévues</div>
                <input type="radio" name="is_form_prevue" value="oui" onclick="hideshowformprevu(1)" id="oui_prevue">
                <label class="label" for="oui_prevue">Oui</label>
                <input type="radio" name="is_form_prevue" value="non" onclick="hideshowformprevu(2)" id="non_prevue">
                <label class="label" for="non_prevue">Non</label>
                </div>
                <!--- Si non (rien) --->
                <!--- Si oui --->
                <div id="div_form_prevu">
                <div class="field">
                    <div class="label">Renseigner le nom : </div>
                    <input type="text" name="reconv_nom">
                </div>
                <div class="field">
                    <div class="label">Renseigner la date : </div>
                    <input type="date" name="reconv_date">
                </div>
                <div class="field">
                    <div class="label">Renseigner la durée : </div>
                    <input type="text" name="reconv_duree">
                </div>
                </div>
               <!--- Fin --->
                <div class="label">Reprise d'étude</div>
                <input type="radio" name="is_reprise_etudes" value="oui" onclick="hideshowreprise(1)" id="oui_reprise">
                <label class="label" for="oui_reprise">Oui</label>
                <input type="radio" name="is_reprise_etudes" value="non" onclick="hideshowreprise(2)" id="non_reprise">
                <label class="label" for="non_reprise">Non</label>
                <!--- Si non (rien) --->
                <!--- Si oui --->
                <div id="div_reprise" class="hidden">
                <div class="field">
                    <div class="label">Diplôme préparé</div>
                    <input type="text" name="nom_diplome_reprise">
                </div>
                </div>
                <!--- Si fin --->
                <div class="label">La personne va-t-elle bénéficier d'une formation professionnelle</div>
                <input type="radio" name="is_formation_pro" value="oui" onclick="hideshowformpro(1)" id="oui_form_pro">
                <label class="label" for="oui_form_pro">Oui</label>
                <input type="radio" name="is_formation_pro" value="non" onclick="hideshowformpro(2)" id="non_form_pro">
                <label class="label" for="non_form_pro">Non</label>
                <!--- Si oui --->
                <div id="div_form_pro" class="hidden">
                <div class="field">
                    <div class="label">Type de formation</div>
                    <select name="type_formation_pro" onchange="hideshowtypeform()" id="type_form">
                        <option value="aucun">Choisir un type de formation</option>
                        <option value="qualifiante">Qualifiante</option>
                        <option value="diplomante">Diplômante</option>
                    </select>
                </div>
                </div>
                <!--- Si diplomante --->
                <div id="diplomante">
                <div class="field">
                    <div class="label">Nom de la formation diplômante</div>
                    <input type="text" name="diplome_formation_pro">
                </div>
                </div>
                <!--- Si qualifiante --->
                <div id="qualifiante">
                <div class="field">
                    <div class="label">Nom de la formation qualifiante</div>
                    <input type="text" name="qualifiante_formation_pro">
                </div>
                </div>
                <!--- Fin --->
                <div class="field">
                    <div class="label">Métier souhaité</div>
                    <input type="text" name="nom_metier">
                </div>
                <div class="field">
                    <div class="label">Secteur d'activité</div>
                    <input type="text" name="secteur_act">
                </div>
                <div class="field">
                    <div class="label">Secteur géographique</div>
                    <input type="text" name="secteur_geo">
                </div>
                <div class="label">Horaire de travail souhaité</div>
                <input type="checkbox" name="nb_horaire" value="Travail de nuit" id="nuit">
                <label class="label" for="nuit">Travail de nuit</label>
                <input type="checkbox" name="nb_horaire" value="Travail la journee" id="journee">
                <label class="label" for="journee">Travail la journée</label>
                <input type="checkbox" name="nb_horaire" value="Travail le matin" id="matin">
                <label class="label" for="matin">Travail le matin</label>
                <input type="checkbox" name="nb_horaire" value="Travail en cyble 2x8" id="2x8">
                <label class="label" for="2x8">Travail en cycle 2x8</label>
                <input type="checkbox" name="nb_horaire" value="Travail en cycle 3x8" id="3x8">
                <label class="label" for="3x8">Travail en cycle 3x8</label>
                <input type="checkbox" name="nb_horaire" value="Travail en cycle 5x8" id="5x8">
                <label class="label" for="5x8">Travail en cycle 5x8</label>
                <input type="checkbox" name="nb_horaire" value="Travail en VSD" id="VSD">
                <label class="label" for="VSD">Travail en VSD</label>
                <input type="checkbox" name="nb_horaire" value="Travail en SD" id="SD">
                <label class="label" for="journee">Travail en SD</label>

                <div class="field btns">
                    <button class="next-3 next">Suivant</button>
                    <button class="prev-3 prev">Précédent</button>
                </div>
        </div>
            <!---  Page 5 : LANGUES  --->
            <div class="page">
                <div class="title">Langues</div>
                <div class="label">Inscrit aux ateliers de français</div>
                <input type="radio" name="is_atelier" value="oui" id="oui_fr">
                <label class="label" for="oui_fr">Oui</label>
                <input type="radio" name="is_atelier" value="non" id="non_fr">
                <label class="label" for="non_fr">Non</label>
                <div class="field">
                    <div class="label">Connaissance en français écrit</div>
                    <select name="fr_ecrit">
                       <option value="aucun">Choisir un niveau</option>
                       <option value="1">A1</option>
                       <option value="2">A2</option>
                       <option value="3">B1</option>
                       <option value="4">B2</option>
                       <option value="5">C1</option>
                       <option value="6">C2</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Connaissance en français parlé</div>
                    <select name="fr_parle">
                       <option value="aucun">Choisir un niveau</option>
                       <option value="1">A1</option>
                       <option value="2">A2</option>
                       <option value="3">B1</option>
                       <option value="4">B2</option>
                       <option value="5">C1</option>
                       <option value="6">C2</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Connaissance en français lu</div>
                    <select name="fr_lu">
                       <option value="aucun">Choisir un niveau</option>
                       <option value="1">A1</option>
                       <option value="2">A2</option>
                       <option value="3">B1</option>
                       <option value="4">B2</option>
                       <option value="5">C1</option>
                       <option value="6">C2</option>
                    </select>
                </div>
                <div class="title">Anglais</div>
                <div class="field">
                    <div class="label">Connaissance en anglais écrit</div>
                    <select name="en_ecrit">
                       <option value="aucun">Choisir un niveau</option>
                       <option value="1">A1</option>
                       <option value="2">A2</option>
                       <option value="3">B1</option>
                       <option value="4">B2</option>
                       <option value="5">C1</option>
                       <option value="6">C2</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Connaissance en anglais parlé</div>
                    <select name="en_parle">
                       <option value="aucun">Choisir un niveau</option>
                       <option value="1">A1</option>
                       <option value="2">A2</option>
                       <option value="3">B1</option>
                       <option value="4">B2</option>
                       <option value="5">C1</option>
                       <option value="6">C2</option>
                    </select>
                </div>
                <div class="field">
                    <div class="label">Connaissance en anglais lu</div>
                    <select name="en_lu">
                       <option value="aucun">Choisir un niveau</option>
                       <option value="1">A1</option>
                       <option value="2">A2</option>
                       <option value="3">B1</option>
                       <option value="4">B2</option>
                       <option value="5">C1</option>
                       <option value="6">C2</option>
                    </select>
                </div>
                <div class="label">Autre(s) langue(s) parlée(s)</div>
                <input type="radio" name="is_autre" value="oui" onclick="hideshowlangue(1)" id="oui_autre">
                <label class="label" for="oui_autre">Oui</label>
                <input type="radio" name="is_autre" value="non" onclick="hideshowlangue(2)" id="non_autre">
                <label class="label" for="non_autre">Non</label>
                <!--- Si oui --->
                <div id="div_langue" class="hidden">
                <div class="field">
                    <div class="label">Langue(s)</div>
                    <input type="text" name="autre_langue">
                </div>
                </div>
                <!--- Fin --->
                <div class="field btns">
                    <button class="next-4 next">Suivant</button>
                    <button class="prev-4 prev">Précédent</button>
                </div>
            </div>
            <!---  Page 6 : INFORMATIONS COMPLEMENTAIRES  --->
            <div class="page">
                <div class="title">Informations complémentaires</div>
                <div class="field">
                    <div class="label">Notes</div>
                    <textarea type="text" name="infos_comp"></textarea>
                </div>
                <div class="field btns">
                    <button class="submit next">Confirmer</button>
                    <button class="prev-5 prev">Précédent</button>
                </div>
            </div>
    </form>
</div>
</div>
</div>
<script>
    const slidePage = document.querySelector('.slidepage');
    const firstNextBtn = document.querySelector('.nextBtn');
    const prevBtnSec = document.querySelector('.prev-1');
    const nextBtnSec = document.querySelector('.next-1');
    const prevBtnThird = document.querySelector('.prev-2');
    const nextBtnThird = document.querySelector('.next-2');
    const prevBtnFourth = document.querySelector('.prev-3');
    const nextBtnFourth = document.querySelector('.next-3');
    const prevBtnFive = document.querySelector('.prev-4');
    const nextBtnFive = document.querySelector('.next-4');
    const prevBtnSix = document.querySelector('.prev-5');
    const submitBtn = document.querySelector('.submit');
    
    firstNextBtn.addEventListener("click", function() {
        slidePage.style.marginLeft = "-25%";
    });
    nextBtnSec.addEventListener("click", function() {
        slidePage.style.marginLeft = "-50%";
    });
    nextBtnThird.addEventListener("click", function() {
        slidePage.style.marginLeft = "-75%";
    });
    nextBtnFourth.addEventListener("click", function() {
        slidePage.style.marginLeft = "-100%";
    });
    nextBtnFive.addEventListener("click", function() {
        slidePage.style.marginLeft = "-125%";
    });
                </script>
@endsection