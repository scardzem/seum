CREATE TABLE student (
  sno varchar2(8), 
  sname varchar2(20),
  sex varchar2(3),
  syear number(1),
  major varchar2(10),
  avr number(4,2)
);

CREATE TABLE professor (
  pno varchar2(8), 
  pname varchar2(20),
  section varchar2(20),
  orders varchar2(10),
  hiredate date
);

CREATE TABLE course (
  cno varchar2(8),
  cname varchar2(20),
  st_num number(1),
  pno varchar2(8)
);

CREATE TABLE score (
  sno varchar2(8),
  cno varchar2(8),
  result number(3)
); 

CREATE TABLE scgrade (
   grade varchar2(1),
   hiscore number(3),
   loscore number(3)
);