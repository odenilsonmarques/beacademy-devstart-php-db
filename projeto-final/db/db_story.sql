create database db_story;


use db_story;

create table tb_category(
    id int(11) not null primary key auto_increment, 
    name varchar(45) not null, 
    description varchar (100) not null
);

insert into tb_category(name, description)
values
('Informatica', 'Produto de informatica e acessorios para computador'),
('Escritorio', 'Canetas, Cardenos, folhas'),
('Eletronicos', 'Tvs, Som portatil, caixa de som');


create table tb_product(
    id int(11) not null primary key auto_increment, 
    name varchar(45) not null, 
    description varchar (100) not null,
    photo varchar(255) not null,
    value float(5,2) not null,
    quantity int(5) not null,
    create_at datetime not null
);

insert into tb_product(name, description, photo, value, quantity, create_at)
values
('Notebook', 'notebook dell inspirion i5','https://www.dell.com/pt-br/shop/notebooks/notebook-inspiron-13/spd/inspiron-13-5310-laptop/i5310w1002w', 5.599,00, 10),

('Mesa de escritorio', 'Mesa de Escritório Studio Preta 150 cm', 'https://www.escritolandia.com.br/#mz-expanded-view-1153817935847', 234,97, 8)
