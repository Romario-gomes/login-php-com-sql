/* CRIANDO BANCO DE DADOS */
CREATE DATABASE BD_login;
/* CHAMANDO BANCO DE DADOS */
USE BD_login;
/* CRIANDO TABELA DO CADASTRO */
CREATE TABLE TB_cadastro (
    nome varchar(255),
    sobrenome varchar(255),
    usuario varchar(255),
    email varchar(255),
    senha varchar(255),
    data_cadastro date
)ENGINE = innoDB; 

insert into TB_cadastro (nome, sobrenome, email, senha) values ('Romario', 'Alves', 'romariogn10@gmail.com', 'erwakaz123');
insert into TB_cadastro (nome, sobrenome, email, senha) values ('1', 'Alves', 'romariogn10@gmail.com', '1');
select nome, senha from tb_cadastro where nome = "1" and senha = "1";