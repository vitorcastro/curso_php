-- Criacao da base de dados
CREATE DATABASE meuTodoList;

-- Indicao do uso da base de dados agora
USE meuTodoList;

-- Criacao da tabela tarefa
CREATE TABLE tarefa (
id INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
descricao TEXT NOT NULL
) ENGINE = InnoDB;

-- Adicao da coluna dataCadastro na tabela tarefa
ALTER TABLE tarefa ADD dataCadastro DATE NOT NULL;

-- Alteracao do Tipo de dado da coluna descricao
ALTER TABLE tarefa CHANGE descricao descricao VARCHAR( 100 ) NOT NULL;

-- Criacao da tabela usuário
CREATE TABLE `usuario` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`email` VARCHAR( 60 ) NOT NULL ,
`senha` VARCHAR( 30 ) NOT NULL
) ENGINE = InnoDB;

-- Apaga a tabela Tarefa
DROP TABLE tarefa;

-- Cria a tabela tarefa
CREATE TABLE `tarefa` (
`id` INT NOT NULL AUTO_INCREMENT PRIMARY KEY ,
`idUsuario` INT NOT NULL ,
`titulo` VARCHAR( 200 ) NOT NULL ,
`detalhe` TEXT NOT NULL ,
`prioridade` INT NOT NULL ,
`anexo` INT NOT NULL
) ENGINE = InnoDB;

-- cria indice para a coluna idUsuario
ALTER TABLE `tarefa` ADD INDEX ( `idUsuario` ) ;

-- cria chave estrangeira com a tabela usuario
ALTER TABLE `tarefa` ADD FOREIGN KEY ( `idUsuario` ) REFERENCES `usuario` (`id`);
