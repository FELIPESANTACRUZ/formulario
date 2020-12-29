create schema estudandophppdo;

create table mensagens_contatos (
id  int primary key auto_increment,
nome varchar(220),
email varchar(220),
assunto varchar(220),
mensagem text
);