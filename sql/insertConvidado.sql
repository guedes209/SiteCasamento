INSERT INTO convidado (nome) VALUES ("Carlinhos"), ("Renata"), ("Fran"), ("Carmem"), ("José"), ("Luzia"), ("Marcelo"), ("Vó Cida"), ("Vô Moraes"), ("Tia Marcilene"), ("Mayara"), ("Renato"),
("Thamara"), ("Andressa"), ("Renan"), ("Monalisa"), ("Maria Eduarda"), ("Tia Luiza"), ("Tio Naldo"), ("Rodrigo"), ("Rafael"), ("Tia Mônica"), ("Paula"), ("Tio Maicon"), 
("Davi Guerra"), ("Natã"), ("Iracema"), ("Júlia Rezende"), ("Alex Esteves"), ("Júlia Quirino"), ("Ygor"), ("Francielle"), ("Stefany"), ("Gabriel"), ("Amanda"), ("Vinicius"), ("Clarice"), ("Guilherme"), 
("Thaís"), ("Paulo"), ("Allyson"), ("Rosa"), ("Sara"), ("Prisilinha"), ("Larissa"), ("Babi"), ("Davi"), ("Maria Fhernanda"), ("Gustavo Albuquerque"), ("Giulia"), ("João Victor"), ("Thaispetacular"), 
("Rafaela"), ("Carol"), ("Ygor Barcaro"), ("Patricia"), ("Tio Isaque"), ("Ingrid"), ("Milena"), ("Camila"), ("Lucas"), ("Isabela"), ("Gustavo"), ("Petita"), ("Petito"), ("Vânia"), ("Paulinha"), ("William"),
("Luiza"), ("Eugênea"), ("Léo"), ("Manuela"), ("Magali"), ("Mônica"), ("Fernanda Rocha"), ("Claudio"), ("Rodrigo Rocha"), ("Rebeca"), ("Beatriz"), ("Fernada Guedes"), ("Dindeia"), ("Mônica Salgado"), 
("Roosevelt"), ("Camila Salgado"), ("Bruno"), ("Marina"), ("André"), ("Aline"), ("Marcelo Mattos"), ("Dida"), ("Cecília"), ("Rogério"), ("Leila"), ("Eduardo"), ("Lenise"), ("Rafael Bendento"), 
("Vânia Bendento"), ("Fabíola"), ("Ana Clara"), ("Zé Ricardo"), ("Ana"), ("Zé Marcelo"), ("Cláudia") 


CREATE TABLE `epiz_33017065_casamentoJulia`.`presente` (`id` serial,`persenteNome` TEXT,`valor` DECIMAL,`link` TEXT,`caminhoimg` TEXT);

CREATE TABLE `epiz_33017065_casamentoJulia`.`mensagens` (`id` serial,`mensagem` TEXT,`nome` TEXT,`email` TEXT);

ALTER TABLE `epiz_33017065_casamentoJulia`.`presente`
CHANGE `persenteNome` `presenteNome` text CHARACTER SET utf8mb4 COLLATE utf8mb4_general_ci NULL DEFAULT NULL COMMENT '',
ADD COLUMN `comprado` TEXT COMMENT '';