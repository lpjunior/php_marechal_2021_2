/*	serviços  | portifolios  | about     | team
	imagem    | imagem       | data      | nome
	titulo    | titulo       | titulo    | cargo
	descricao | subtitulo    | descricao | imagem
			  | descricao    | imagem    |*/
create database if not exists agencyGH;

use agencyGH;

create table servicos(
id int primary key auto_increment,
imagem varchar(255) not null,
titulo varchar(255) not null,
descricao text not null);

create table portfolios(
id int primary key auto_increment,
imagem varchar(255) not null,
titulo varchar(255) not null,
subtitulo varchar(255) not null,
descricao text not null);

create table about(
id int primary key auto_increment,
data varchar(30) not null,
imagem varchar(255) not null,
titulo varchar(255) not null,
descricao text not null);

create table team(
id int primary key auto_increment,
nome varchar(150) not null,
cargo varchar(50) not null,
imagem varchar(255) not null);

insert into servicos (imagem, titulo, descricao) values 
('fa-shopping-cart', 'E-Commerce', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.'), 
('fa-laptop', 'Responsive Design', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.'), 
('fa-lock', 'Web Security', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.'), 
('fa-mug-saucer', 'Free Cofee for Devs', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Minima maxime quam architecto quo inventore harum ex magni, dicta impedit.');

insert into portfolios(imagem, titulo, subtitulo, descricao) values
('1.jpg', 'Threads', 'Illustration', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!'), 
('2.jpg', 'Explore', 'Graphic Design', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!'), 
('3.jpg', 'Finish', 'Identity', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!'), 
('4.jpg', 'Lines', 'Branding', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!'), 
('5.jpg', 'Southwest', 'Website Design', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!'), 
('6.jpg', 'Window', 'Photography', 'Use this area to describe your project. Lorem ipsum dolor sit amet, consectetur adipisicing elit. Est blanditiis dolorem culpa incidunt minus dignissimos deserunt repellat aperiam quasi sunt officia expedita beatae cupiditate, maiores repudiandae, nostrum, reiciendis facere nemo!');

insert into about(data, titulo, imagem, descricao) values 
('2009-2011', 'Our Humble Beginnings', '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!'),
('March 2011', 'An Agency is Born', '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!'),
('December 2015', 'Transition to Full Service', '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!'),
('July 2020', 'Phase Two Expansion', '1.jpg', 'Lorem ipsum dolor sit amet, consectetur adipisicing elit. Sunt ut voluptatum eius sapiente, totam reiciendis temporibus qui quibusdam, recusandae sit vero unde, sed, incidunt et ea quo dolore laudantium consectetur!');

insert into team(nome, cargo) values 
('Parveen Anand', 'Lead Designer'),
('Diana Petersen','Lead Marketer'),
('Larry Parker','Lead Developer');