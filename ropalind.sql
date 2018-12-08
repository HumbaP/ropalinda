create database ropalinda;

use ropalinda;

create table client(
    client_id int auto_increment primary key,
    name varchar(32) not null,
    lastname varchar(32) not null,
    email varchar(256) not null,
    password varchar(256),
    phone_number varchar(9) not null,
    country varchar(5) not null,
    type_ident varchar(5) not null,
    ident varchar(12) not null,
    active boolean default 1,
    status varchar(9) default 'Pendiente'
);


create table clothing(
    cloth_id int auto_increment primary key,
    name varchar(64) not null,
    description varchar(256) not null,
    image varchar(256),
    price float
);


create table category(
    id int auto_increment primary key,
    name varchar(64) not null,
    genre char,
    size varchar(3) not null,
    type varchar(2) not null
);

create table clothing_color(
    cloth_id int,
    color_id int,
    color varchar(6)  not null,
    constraint FK_Cloth_color foreign key (cloth_id) references clothing(cloth_id),
    constraint PK_ClothingColor primary key (cloth_id, color_id)
);

create table tag(
    tag_id int,
    cloth_id int,
    name varchar(16) not null,
    constraint FK_Cloth_tag foreign key (cloth_id) references clothing(cloth_id),
    constraint PK_ClothingTag primary key (cloth_id, tag_id)
);

create table season(
    season_id int auto_increment,
    name varchar(32) not null,
    banner varchar(256),
    logo varchar(256),
    constraint PK_SEASON primary key (season_id)
);

create table season_clothing(
    id int auto_increment primary key,
    season_id int,
    cloth_id int,
    constraint FK_Cloth_season foreign key (cloth_id) references clothing(cloth_id),
    constraint FK_Season_cloth foreign key (season_id) references season(season_id)
);

create table component(
    cloth_id int,
    component_id int not null,
    name varchar(64) not null,
    icon varchar(256),
    constraint FK_Cloth_Component foreign key (cloth_id) references clothing(cloth_id),
    constraint PK_Cloth_Component primary key (cloth_id, component_id)     
);

create table design(
    component_id int,
    client_id int,
    cloth_id int,
    thumbnail varchar(256),
    price float not null,
    constraint FK_Cloth_Design foreign key (cloth_id) references clothing(cloth_id),
    constraint FK_Client_Design foreign key (client_id) references client(client_id),
    constraint FK_Component_Design foreign key (component_id) references component(component_id),
    constraint PK_Design primary key (client_id, cloth_id, component_id)
);

create table address(
    client_id int,
    id int,
    street varchar(64) not null,
    second_streed varchar(64) not null,
    zip varchar(8) not null,
    exterior_number varchar(6) not null,
    interior_number varchar(6),
    country varchar(5) not null,
    state varchar(32) not null,
    city varchar(32) not null,
    constraint FK_Client_Address foreign key (client_id) references client(client_id),
    constraint PK_Address primary key (client_id, id)
);

create table folio(
    folio int auto_increment primary key
); 
alter table folio AUTO_INCREMENT = 20000

create table purchase(
    folio int,
    client_id int,
    real_ship_date date,
    estimated_ship_date date,
    total double,
    constraint FK_Client_Address foreign key (client_id) references client(client_id),
    constraint FK_Folio foreign key (folio) references folio(folio)
    constraint PK_Purchase primary key (folio, client_id)
);

create table purchase_details(
    folio int,
    cloth_id int,
    quantity int not null,
    price float not null,
    constraint FK_Cloth_Purchase_Details foreign key (cloth_id) references clothing(cloth_id),
    constraint PK_Purchase_Details primary key (folio, cloth_id)
);


create table admin_user(
    admin_id int auto_increment primary key,
    name varchar(64) not null,
    lastname varchar(64) not null,
    email varchar(256) not null,
    pw varchar(256) not null
);

create table role(
    role_id int auto_increment primary key,
    name varchar(32) not null
);

create table admin_role(
    admin_id int,
    role_id int,
    constraint FK_Admin_role foreign key (admin_role) references admin(admin_id),
    constraint FK_Role_admin foreign key (role_id) references role(role_id)
);

create table permission(
    permission_id int auto_increment primary key,
    description varchar(256) not null
);

create table role_permission(
    permission_id int,
    role_id int,
    constraint FK_Role_permission foreign key (role_id) references role(role_id),
    constraint FK_permission_role foreign key (permission_id) references permission(permission_id)
);