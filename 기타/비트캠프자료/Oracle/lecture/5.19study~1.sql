CREATE TABLE emp (
  eno varchar2(4),
  ename varchar2(10),
  job varchar2(6),
  mgr varchar2(4),
  hdate date,
  sal number(5),
  comm number(4),
  dno varchar2(2)
);

CREATE TABLE salgrade (
  grade number(1),
  losal number(5),
  hisal number(5)
);

COMMIT;

