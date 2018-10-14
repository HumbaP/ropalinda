create database ropalinda2;
use ropalinda2;


/*Admin panel data*/
create table admin_user(
    id int auto_increment primary key,
    name varchar(64) not null,
    lastname varchar(64) not null,
    email varchar(128) not null,
    pw varchar(256) not null
);

create table role(
    id int auto_increment primary key,
    name varchar(16) not null
);

create table permission(
    id int auto_increment primary key,
    description varchar(64) not null
);

    create table role_perm(
        perm_id int not null,
        role_id int not null,
        constraint FK_roleper_perm foreign key (perm_id) references permission(id),
        constraint FK_roleper_role foreign key (role_id) references role(id)
    );

    create table admin_role(
        admin_id int not null,
        role_id int not null,
        constraint FK_admin_role foreign key (admin_id) references admin_user(id),
        constraint FK_admin_role_role foreign key (role_id) references role(id)
    );

    create table admin_session(
        admin_id int not null,
        access_key varchar(64) not null,
        create_date timestamp,
        constraint FK_admin_sessionn foreign key (admin_id) references admin_user(id)
    );

    /*Clothes */

    create table season(
        id int auto_increment primary key,
        name varchar(32) not null,
        banner varchar(256),
        logo varchar(356),
        creation_date timestamp
    );

    create table tag(
        id int auto_increment primary key,
        name varchar(16) not null
    );

    create table component(
        id int auto_increment primary key,
        name varchar(32) not null,
        icon varchar(256)
    );

    create table component_type(
        id int auto_increment primary key,
        name varchar(32) not null,
        type varchar(16) not null
    );

    create table category(
        id int auto_increment primary key,
        name varchar(8) not null,
        genre char default 'u',
        size varchar(3),
        type varchar(10)
    );

    create table clothing(
        id int auto_increment primary key,
        name varchar(32) not null,
        description varchar(32) not null,
        image varchar(256) not null,
        cat_id int not null,
        price decimal(10,2) not null,
        constraint FK_clothing_category foreign key (cat_id) references category(id)
    );


    create table component_type_component(
        type_id int not null,
        component_id int not null,
        constraint FK_component_type_type foreign key (type_id) references component_type(id),
        constraint FK_component_type_component foreign key (component_id) references component(id)
    );

    create table clothing_tag(
        tag_id int not null,
        clothing_id int not null,
        constraint FK_clothing_tag_tag foreign key (tag_id) references tag(id),
        constraint FK_clothing_tag_cloth foreign key (clothing_id) references clothing(id)
    );

    create table clothing_color(
        clothing_id int not null,
        color varchar(5) not null,
        constraint FK_clothing_color_cloth foreign key (clothing_id) references clothing(id)
    );

    create table season_clothing(
        season_id int not null,
        cloth_id int not null,
        constraint FK_clothing_season foreign key (season_id) references season(id),
        constraint FK_clothing_season_cloth foreign key (cloth_id) references clothing(id)
    );


    create table client(
        id int auto_increment primary key,
        name varchar(32) not null,
        lastname varchar(32) not null,
        email varchar(64) not null unique,
        password varchar(64) not null,
        phone_number varchar(10) not null,
        country varchar(5) not null,
        type_ident varchar(10) not null,
        ident varchar(32) not null /*Check this part*/
    );

    create table applicant(
        id int auto_increment primary key,
        name varchar(32) not null,
        lastname varchar(32) not null,
        email varchar(64) not null unique,
        phone_number varchar(10) not null,
        country varchar(5) not null,
        type_ident varchar(10) not null,
        ident varchar(32) not null /*Check this part*/
    );

    create table address(
        client_id int not null,
        street varchar(64) not null,
        second_street varchar(32) not null,
        zip varchar(8) not null,
        exterior_number varchar(5) not null,
        interior_number varchar(5),
        country varchar(5) not null,
        state varchar(9) not null,
        city varchar(16) not null,
        constraint FK_address_client foreign key (client_id) references client(id)
    );


    create table design(
        id int auto_increment primary key,
        client_id int not null,
        cloth_id int not null,
        thumbnail varchar(256) not null,
        price decimal not null,
        estimated_time date not null,
        constraint FK_design_clothing foreign key (cloth_id) references clothing(id),
        constraint FK_design_client foreign key (client_id) references client(id)
    );

    create table purchase(
        id int auto_increment primary key,
        client_id int not null,
        real_ship_date date,
        estimated_ship_date date ,
        constraint client_id foreign key (client_id) references client(id)
    );

    create table design_comp(
        design_id int not null,
        comp_id int not null,
        x_axis int,
        y_axis int,
        constraint FK_design_comp_design foreign key (design_id) references design(id),
        constraint FK_design_comp foreign key (comp_id) references component(id)
    );

    create table purchase_item(
        id int auto_increment primary key,
        design_id int not null,
        purchase_id int not null,
        quantity int not null,
        constraint FK_purchase_item_design  foreign key (design_id) references design(id),
        constraint FK_purchase_purchase foreign key (purchase_id) references purchase(id)
    );