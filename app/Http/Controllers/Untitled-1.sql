-- Active: 1683614756393@@127.0.0.1@3306@apis

-- INSERT INTO
--     detailsreclamation (
--         id,
--         `referenceTitrePerception`,
--         `motifivationRecours`,
--         `motivationReclamation`,
--         `montantConteste`,
--         `montantNonConteste`,
--         typedocument,
--         `montantDu`,
--         `avecSurcis`,
--         devise,
--         `fk_AgentCreat`,
--         -- `fkActeGenerateur`,
--         `intituleActeGenerateur`
--     )
-- VALUES (1,
--         "RT00AA2",
--         "Reclamation de WILNA",
--         "Taxe non conforme",
--         65,
--         140,
--         "Note Calcul",
--         205,
--         1,
--         "USD",
--         2,
--         -- 4,
--         "Déclaration sur l'IPP"
--     )

    INSERT INTO reclamation 
    (id,
        `typeReclamation`,
    `fk_AgentCreat`,
    observation,
    `referenceCourrier`, 
    fk_contribuable,
    nif,
    `dateCreate`,
    etat,
    `fk_AgentValidation`,
    `raisonSocial`,
    adresse,
    `numeroReclamation`) 
      
    
    VALUES (
        1,
        1,
        1089,
        "je suis ",
        "455/GG",
       
        2836,
         "A2314547N",
        "19/08/2023 11:07:40",
        2,
        0,
        "SOCIETE DE GENIE CIVILE ET TECHNOLOGIE SARL",
        "AV. TRESOR N°10 Q/CPA MUSHIE C/MONT-NGAFULA",
        "NUM23AA0000000002"
    )