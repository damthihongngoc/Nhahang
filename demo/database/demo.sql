Create database nhahang default character set utf8 collate utf8_unicode_ci;
use demo;
Create table if not exists restaurants (
    id int Primary key NOT NULL auto_increment,
    name varchar(255) NOT NULL,
    image varchar(255) NOT NULL,
    description varchar(255),
    -- created_at date default current_timestamp(),
    -- updated_at date default now()
) engine=InnoDB
    Create table if not exists account (
        id int Primary key NOT NULL auto_increment,
        name varchar(255) NOT NULL,
        email varchar(255) NOT NULL,
        password varchar(100) NOT NULL,
        role varchar(255) Default 'customer',
        status tinyint(1) Default '1' comment '1 là ok, 0 là bị khóa',
        -- created_at date default current_timestamp(),
        -- updated_at date default now()
    ) engine=InnoDB
    