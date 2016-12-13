begin;

create table Posts (
  id uuid not null,

  title varchar(255) not null,
  body text not null,
  created_at timestamp not null,
  modified_at timestamp not null,

  author uuid not null references authors(id) on delete cascade,

  primary key (id)
);

commit;
