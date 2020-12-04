create table users
(
    id int auto_increment primary key,
    firstname varchar(30),
    lastname varchar(30),
    password varbinary(36),
    email varchar(30),
    date_joined datetime
) engine=innodb;

INSERT INTO users (email,password) 
    VALUES('admin@project2.com', 'password123');

create table issues
(
    id int auto_increment primary key,
    title varchar(100),
    description text,
    type varchar(50),
    priority varchar(50),
    status varchar(50),
    assigned_to int,
    created_by int,
    created datetime,
    updated datetime,
    foreign key (assigned_to) references users(id),
    foreign key (created_by) references users(id)
) engine=innodb;






