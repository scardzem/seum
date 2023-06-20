DROP TABLE EMP;

COMMIT;

CREATE TABLE emp (
  eno varchar2(4),
  ename varchar2(20),
  job varchar2(20),
  mgr varchar2(4),
  hdate date,
  sal number(5),
  comm number(4),
  dno varchar2(2)
);

COMMIT;