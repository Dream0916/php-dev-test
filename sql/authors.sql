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
  'Terry McDonough',
  '2016-12-12T20:51:00+0000',
  '2016-12-12T20:51:00+0000'
);

insert into Authors (id, full_name, created_at, modified_at) values (
  '95304003-31c8-4aa8-9dd6-d5af7810d621',
  'Jeff Woolnough',
  '2016-12-12T20:53:00+0000',
  '2016-12-12T20:53:00+0000'
);

insert into Authors (id, full_name, created_at, modified_at) values (
  'c4016fc5-01cc-4447-a011-7924dcb659b6',
  'Rob Lieberman',
  '2016-12-12T21:04:00+0000',
  '2016-12-12T21:04:00+0000'
);

insert into Authors (id, full_name, created_at, modified_at) values (
  '9c99c399-4568-4079-960b-dbd333327b32',
  'Bill Johnson',
  '2016-12-12T21:13:00+0000',
  '2016-12-12T21:13:00+0000'
);

commit;
