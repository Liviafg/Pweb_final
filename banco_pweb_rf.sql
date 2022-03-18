CREATE DATABASE `pweb`;

CREATE TABLE  `pweb`.`usuarios` (
  `id_usuario` int(10) NOT NULL auto_increment,
  `username` varchar(8) NOT NULL default '',
  `senha` varchar(8) NOT NULL default '',
  PRIMARY KEY  (`id_usuario`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
