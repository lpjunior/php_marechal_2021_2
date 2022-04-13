drop table if exists categoria cascade;
create table if not exists categoria(
    id serial primary key,
    nome varchar(50) unique not null,
    criado_em timestamp not null default current_timestamp
);

drop table if exists produto cascade;
create table if not exists produto(
    id serial primary key,
    nome varchar(255) unique not null,
    descricao text not null,
    valor_compra numeric(5, 2),
    valor_venda numeric(5, 2),
    status int not null,
	categoria_id int not null,
    criado_em timestamp not null default current_timestamp,
	foreign key(categoria_id) references categoria(id)
);

drop table if exists estoque cascade;
create table if not exists estoque(
    id serial primary key,
    data_cadastro timestamp not null default current_timestamp,
    qtd_min int not null default 0,
    qtd_max int not null default 999,
    qtd_atual int not null,
	produto_id int not null,
    criado_em timestamp not null default current_timestamp,
	foreign key(produto_id) references produto(id)
);

drop table if exists usuario cascade;
create table if not exists usuario(
    id serial primary key,
    nome varchar(150) not null,
    email varchar(150) not null,
    senha varchar(150) not null
);

