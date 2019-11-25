# Explicação das implementações:

## Validação dos campos e tratamento de erros

# Documentação p/ instalação do banco

## Caso já saiba, ir para pessoa.sql (Comandos SQL prontos)

## Ir no PHPMYADMIN

### Criar database desafio:

#### CREATE DATABASE desafio;

### Criar tabela pessoa:

#### CREATE TABLE pessoa(
####  id MEDIUMINT NOT NULL AUTO_INCREMENT, 
####  cpf varchar(255), 
####  nome varchar(255), 
####  telefone varchar(255), 
####  email varchar(255), 
####  PRIMARY KEY (id)
#### )
