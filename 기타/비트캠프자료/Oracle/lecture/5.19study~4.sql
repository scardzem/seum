ALTER SESSION SET nls_date_format='YYYY-MM-DD:HH24:MI:SS';
INSERT INTO EMP VALUES  ('0001','�ȿ���','�濵',NULL,'1991-01-01:13:11:23',4800,0,'01');
INSERT INTO EMP VALUES  ('0201','�ȿ���','����','0001','1991-02-01:19:13:24',3900,2200,'01');
INSERT INTO EMP VALUES  ('0202','���ϴ�','����','0001','1991-02-01:13:33:23',3510,980,'01');
INSERT INTO EMP VALUES  ('0301','�̽�ö','ȸ��','0001','1991-02-01:12:19:36',3400,0,'02');
INSERT INTO EMP VALUES  ('0302','�迬��','ȸ��','0301','1991-02-01:13:55:19',3300,0,'02');
INSERT INTO EMP VALUES  ('1001','ȫ�浿','�𵨸�','0201','1991-02-01:13:35:41',4500,520,'10');
INSERT INTO EMP VALUES  ('1002','���ֶ�','�𵨸�','0201','1992-03-03:17:19:21',4100,330,'20');
INSERT INTO EMP VALUES  ('1003','�缱ȣ','�𵨸�','0201','1995-02-21:13:23:56',4300,NULL,'30');
INSERT INTO EMP VALUES  ('2001','���ÿ�ȣ','����','0202','1993-12-13:11:41:23',3950,200,'10');
INSERT INTO EMP VALUES  ('2002','������','����','0202','1996-04-30:10:11:17',1520,2000,'20');
INSERT INTO EMP VALUES  ('2003','������','����','0202','1992-03-03:09:45:23',4350,NULL,'30');
INSERT INTO EMP VALUES  ('2007','���ʷ�','����','0001','1992-09-05:13:18:15',1989,2300,'30');
INSERT INTO EMP VALUES  ('2008','������','����','0001','1992-03-03:09:11:29',2100,NULL,'40');
INSERT INTO EMP VALUES  ('3001','�輱��','�м�','1001','1998-10-17:14:09:09',3200,300,'10');
INSERT INTO EMP VALUES  ('3002','�Ǿ���','�м�','1002','2001-01-29:11:55:55',2900,NULL,'20');
INSERT INTO EMP VALUES  ('3004','���̸�','����','1001','1998-10-17:14:09:09',6400,300,'30');
INSERT INTO EMP VALUES  ('3005','������','ȸ��','1002','2001-01-29:11:55:55',7200,600,'30');
COMMIT;