-- DB initializer here

set client_encoding = 'UTF8';

create table post (
  id integer,
  title character varying,
  content character varying
);

insert into post values (1, 'test', 'test content');
