drop database dbUsuarios;

create database dbUsuarios;

use dbUsuarios;

Create table tbUsuarios (
codU int not null auto_increment,
nomeU varchar(50),
loginU varchar(30) unique,
senhaU varchar(40),
primary key (codU));

INSERT INTO db_clientes (nome,endereco,bairro,cidade,estado,telCel) 
    VALUES ('Steve R Peralez','Edgewood Avenue','Fresno','California','CA','5592684454'),
    ('Emely K Reece','Edwards Street','Rock Mount','North Carolina','NC','2527745079'),
    ('John D Makowski','River Road','Colorado Springs','Colorado','CO','7193931032'),
    ('Robert K Davis','Evergreen Lane','Lone Tree','Iowa','IA','3235963047'),
    ('Dora M Butters','Swick Hill Street','New Orleans','Louisiana','LA','9852437103'),
    ('Shirley J Smith','goldcliff Circle','Washington','Washington DC','DC','2026242179');

