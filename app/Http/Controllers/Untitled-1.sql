-- Active: 1683614756393@@127.0.0.1@3306@apis

INSERT INTO detailsreclamation (
         
        `referenceTitrePerception`,
        `motifivationRecours`,
        `motivationReclamation`,
        `montantConteste`,
        `montantNonConteste`,
        typedocument,
        `montantDu`,
        `avecSurcis`,
        devise,
        `fk_AgentCreat`,
        -- `fkActeGenerateur`,
        `intituleActeGenerateur`
    )
VALUES (2,
        "REBBBFFN",
        "Reclmation finished",
        "Taxe conforme",
        100,
        20,
        "Calculations",
        10,
        1,
        "USD",
        2,
        -- 4,
        "Déclaration"
    ),(2,
        "AAABBFFN",
        "Reclmation finished false",
        "Taxe conforme 55",
        100,
        20,
        "Calculations 22",
        10,
        1,
        "USD",
        2,
        -- 4,
        "Déclaration"
    )

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
        3,
        1,
        6,
        "Inc. ",
        "455/GG",
       
        2836,
         "A2314547N77",
        "19/08/2023 11:07:40",
        2,
        0,
        "SOCIETE HECTOT ET TECHNOLOGIE SARL",
        "AV. TRESOR N°10 Q/CPA MUSHIE C/MONT-NGAFULA",
        "NUM23AA0000000002"
    )