CREATE TABLE personagem(
	nome_de_guerra TEXT PRIMARY KEY,
	palavra_magica TEXT,
	nome TEXT,
	raca TEXT,
	classe TEXT
);


CREATE TABLE nivelPersonagem(
	nomePersonagem TEXT PRIMARY KEY,
	nivel INT,
	FOREIGN KEY (nomePersonagem) REFERENCES personagem(nome_de_guerra)
);

CREATE TABLE atributosPersonagem(
	nomePersonagem TEXT PRIMARY KEY,
	forca INT,
	destreza INT,
	inteligencia INT,
	carisma INT,
	FOREIGN KEY (nomePersonagem) REFERENCES personagem(nome_de_guerra)
);



CREATE OR REPLACE FUNCTION subirNivel(nomePers TEXT) RETURNS void
AS $$
	BEGIN
		UPDATE nivelPersonagem SET nivel=nivel+1 WHERE nomePersonagem = nomePers;	
	END
$$LANGUAGE PLPGSQL;

CREATE OR REPLACE FUNCTION criaNivel() RETURNS TRIGGER
AS $$
	BEGIN
		INSERT INTO nivelPersonagem (nomePersonagem,nivel) VALUES(NEW.nome_de_guerra,1);
		RETURN NULL;	
	END
$$LANGUAGE PLPGSQL;

CREATE OR REPLACE FUNCTION criaAtributos() RETURNS TRIGGER
AS $$
	BEGIN
		INSERT INTO atributosPersonagem VALUES(NEW.nome_de_guerra,2,2,2,2);
		RETURN NULL;	
	END
$$LANGUAGE PLPGSQL;

CREATE OR REPLACE FUNCTION incrementaAtributos() RETURNS TRIGGER
AS $$
	BEGIN
		UPDATE atributosPersonagem SET forca = forca +1, destreza = destreza+1, inteligencia = inteligencia+1, carisma = carisma+1 WHERE nomePersonagem = NEW.nome_de_guerra;
		RETURN NULL;	
	END
$$LANGUAGE PLPGSQL;

CREATE TRIGGER adicionaNivel
AFTER INSERT ON personagem 
FOR EACH ROW 
	EXECUTE PROCEDURE criaNivel();

CREATE TRIGGER adicionaAtributos
AFTER INSERT ON personagem
FOR EACH ROW 
	EXECUTE PROCEDURE criaAtributos();

CREATE TRIGGER incrementaAtributos
AFTER UPDATE ON nivelPersonagem
FOR EACH ROW 
	EXECUTE PROCEDURE incrementaAtributos();	

