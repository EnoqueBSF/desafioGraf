CREATE DATABASE desafio;

-- --------------------------------------------------------

--
-- Estrutura da tabela `pessoa`
--


CREATE TABLE pessoa(
  id MEDIUMINT NOT NULL AUTO_INCREMENT, 
  cpf varchar(255), 
  nome varchar(255), 
  telefone varchar(255), 
  email varchar(255), 
  PRIMARY KEY (id)
)