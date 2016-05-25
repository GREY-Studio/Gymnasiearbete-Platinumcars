create database inventory2;
use inventory2;

create table features(f_id int not null auto_increment primary key,
f_img varchar(255) not null, f_l_slide varchar(255) not null,
f_r_slide varchar(255) not null, f_title varchar(255) not null,
f_button varchar(255), f_description varchar(255) not null);

insert into features(f_id, f_img, f_l_slide, f_r_slide, f_title, f_button, f_description)
values (null, 'images/pcc.png', 'none', 'collection', 'home', 'button', 'description');

insert into features(f_id, f_img, f_l_slide, f_r_slide, f_title, f_button, f_description)
values (null, 'images/.png', 'home', 'service', 'collection', 'button', 'description');

insert into features(f_id, f_img, f_l_slide, f_r_slide, f_title, f_button, f_description)
values (null, 'images/.png', 'collection', 'buying', 'service', 'button', 'description');

insert into features(f_id, f_img, f_l_slide, f_r_slide, f_title, f_button, f_description)
values (null, 'images/.png', 'service', 'about', 'buying', 'button', 'description');

insert into features(f_id, f_img, f_l_slide, f_r_slide, f_title, f_button, f_description)
values (null, 'images/.png', 'buying', 'contact', 'about', 'button', 'description');

insert into features(f_id, f_img, f_l_slide, f_r_slide, f_title, f_button, f_description)
values (null, 'images/.png', 'about', 'none', 'contact', 'button', 'description');

insert into features(f_id, f_img, f_l_slide, f_r_slide, f_title, f_button, f_description)
values (null, 'images/.png', 'none', 'none', 'view-items', 'button', 'description');

insert into features(f_id, f_img, f_l_slide, f_r_slide, f_title, f_button, f_description)
values (null, 'images/.png', 'none', 'none', 'admin', 'none', 'none');
