create database if not exists devsbook
	character set utf8mb4
	collate utf8mb4_unicode_ci;
	
commit;

use devsbook;

commit;

create table if not exists users (
	id int auto_increment primary key,
	email varchar(100) not null,
	password varchar(255) not null,
	name varchar(100) not null,
	birthdate date,
	city varchar(100),
	work varchar(100),
	avatar varchar(100),
	cover varchar(100),
	token varchar(255)
);

create table if not exists userrelations(
	id int auto_increment primary key,
	user_from INT not null,
	user_to INT not null,
	foreign key (user_from) references users(id),
	foreign key (user_to) references users(id)
);

commit;

create table if not exists posts (
	id int auto_increment primary key,
	id_user INT not null,
	type varchar(20) not null,
	created_at datetime,
	bory text not null,
	foreign key (id_user) references users(id)
);

create table if not exists postcomments (
	id int auto_increment primary key,
	id_post INT not null,
	id_user INT not null,
	created_at datetime,
	bory text,
	foreign key (id_post) references posts(id),
	foreign key (id_user) references users(id)
);

create table if not exists postLikes (
	id int auto_increment primary key,
	id_post INT not null,
	id_user INT not null,
	created_at datetime,
	foreign key (id_post) references posts(id),
	foreign key (id_user) references users(id)
);

commit;