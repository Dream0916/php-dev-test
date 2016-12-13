begin;

create table Authors (
  id uuid not null,

  full_name varchar(255) not null,
  created_at timestamp not null,
  modified_at timestamp not null,

  primary key (id)
);

insert into Authors (id, full_name, created_at, modified_at) values (
  '2cab326a-ab2f-4624-a6d7-2e1855fc5e4e',
  'Jon Snow',
  '2016-12-12T20:51:00+0000',
  '2016-12-12T20:51:00+0000'
);

insert into Authors (id, full_name, created_at, modified_at) values (
  '9c99c399-4568-4079-960b-dbd333327b32',
  'Arya Stark',
  '2016-12-12T20:53:00+0000',
  '2016-12-12T20:53:00+0000'
);

insert into Authors (id, full_name, created_at, modified_at) values (
  '95304003-31c8-4aa8-9dd6-d5af7810d621',
  'Khal Drogo',
  '2016-12-12T20:56:00+0000',
  '2016-12-12T20:56:00+0000'
);

commit;
