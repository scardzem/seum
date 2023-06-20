--1��
--���������� �̿��� INSERT INTO
--�׽�Ʈ ���̺� ����
CREATE TABLE EMP2(
    ENO VARCHAR2(10),
    ENAME VARCHAR2(20)
);

SELECT * FROM EMP2;

--������ �� �Է�
INSERT INTO EMP2(
    ENO,
    ENAME
)
SELECT ENO,
       ENAME
    FROM EMP;                    --EMP���� ENO�� ENAME�� �����ٰ� �Է��Ѱ���

COMMIT;

--ENO, ENAME, SAL ������ ���� EMP3 ���̺��� �����ϰ�
--EMP�� ENO, ENAME �׸��� 10% �λ�� SAL�� ����
CREATE TABLE EMP3(
    ENO VARCHAR(10),
    ENAME VARCHAR(20),
    SAL NUMBER(5,0)
);

SELECT * FROM EMP;
SELECT * FROM EMP3;
ROLLBACK;
INSERT INTO EMP3(
    ENO,
    ENAME,
    SAL
    )
    SELECT ENO,
           ENAME,
           NVL(SAL,0)*1.1
        FROM EMP;
COMMIT;


--2��
--���������� �̿��� UPDATE ����

--ENO = 9999�� �������� ENO�� �迬���� ENO����
--ENAME�� ENO�� 0001�� ENAME���� ����
--(���� 9999 �强���� 0302 �ȿ��� �� �ٲ��)
SELECT * FROM EMP2;

UPDATE EMP2
    SET ENO = (SELECT ENO
                    FROM EMP
                    WHERE ENAME = '�迬��'),
        ENAME = (SELECT ENAME
                    FROM EMP
                    WHERE ENO = '0001')
    WHERE ENO = '9999';
                    
--EMP3 ENO = 9999�� ��������
--ENO�� �������� ENO��
--ENAME�� ENO 3004�� ENAME
--SAL�� �������� SAL�� ����
SELECT * FROM EMP3;
ROLLBACK;

UPDATE EMP3
    SET ENO = (SELECT ENO
                FROM EMP
                WHERE ENAME='������'),
        ENAME = (SELECT ENAME
                    FROM EMP
                  WHERE ENO=3004),
        SAL = (SELECT SAL
                    FROM EMP
                WHERE ENAME='������')
    WHERE ENO=9999;
    
    
--3��
--Ʈ����ǰ� ��(LOCK)
--����� PC���� ���� ������,
--STUDY ���ǿ��� DELETE FROM DEPT;������ �ϰ�(COMMIT ���ϰ�) teacherPC���� dept ���̺� update dept ~ �� �õ��ϴϱ�
--����� �ɸ�(�ٸ� ���ǿ��� �۾��� ���ᰡ �ȵƴµ� �� �Ϸ����ؼ� �׷��ٴ°� ����)
DELETE FROM DEPT;
SELECT * FROM DEPT;
ROLLBACK;

--4��
--���̺� ������ ������ Ÿ��
--BOARD ���̺� ����
--NO NUMBER
--NAME VARCHAR2(50)
--SUB VARCHAR2(100)
--CONTENT VARCHAR2(4000)
--HDATE DATE DEFAULT SYSDATE

CREATE TABLE BOARD (
    NO NUMBER,
    NAME VARCHAR2(50),
    SUB VARCHAR2(100),
    CONTENT VARCHAR2(4000),
    HDATE DATE DEFAULT SYSDATE
);
COMMIT;

--���� ������ ������ ���̺� Ȯ��
SELECT * FROM USER_TABLES;

SELECT * FROM USER_TABLES
WHERE TABLE_NAME = 'BOARD';

--���̺� ���� Ȯ��
DESC BOARD; 

--NO�� �Է��ص�
--HDATE�� DAFAULT ���� SYSDATE�� �����༭
--HDATE�� �����Ͱ� �Էµ�
INSERT INTO BOARD(
    NO
) VALUES (
    1
);
COMMIT;
SELECT * FROM BOARD;

--CHAR�� VARCHAR2 ����
CREATE TABLE TEST(
    NAME1 CHAR(4),
    NAME2 VARCHAR2(4)
);

INSERT INTO TEST VALUES(
    'AA',
    'AA'
);

COMMIT;

SELECT * FROM TEST;


--CHAR�� ���� AA�� ���� ���̶� � �����Ͱ� ���͵� ������ �� ������ ũ��(4����Ʈ)�̰�
--VARCHAR2�� ���� AA�� ���� ���̶� �Էµ� �����Ϳ� ���� ũ�Ⱑ ���Ѵ�.(���⼱ 'AA' 2����Ʈ)
SELECT LENGTHB(NAME1), 
       LENGTHB(NAME2)
    FROM TEST;

--7�� ��������
--�����ڷῡ�� EMP���̺��� ENO�� PK�̴�. ���� ������ ���� �־����.
    --    9999�� �Է��ߴ� ������ �ߺ����� ���ִµ� �̰��� �߸��� �������� ����.
SELECT * FROM EMP;

--8��
--PK(Primary Key)
--EMP���̺� ���� ����
DROP TABLE EMP;

CREATE TABLE EMP(
    ENO VARCHAR2(4) PRIMARY KEY,
    ENAME VARCHAR2(20),
    JOB VARCHAR2(20),
    MGR VARCHAR2(4),
    SAL NUMBER,
    COMM NUMBER,
    HDATE DATE
);
    
DESC EMP;

INSERT INTO EMP(
    ENO,
    ENAME
) VALUES (
    '0001',
    '�ȿ���'
);
COMMIT;
SELECT * FROM EMP;
--PK ���� �����ϰ� ����������� �ϸ� ������ ����(�Ʒ� �����ϸ� ������)
INSERT INTO EMP(
    ENO,
    ENAME
) VALUES (
    '0001',   -- ���� 0001 �ȿ��� �Է��ߴµ� 0001 �强���� �������� �ϸ� ������ ENO ���� �ߺ��ż� ������ ���� ����
    '�强��'
);

--PK0002�� ������ �Էµ�
INSERT INTO EMP(
    ENO,
    ENAME
) VALUES (
    '0002',
    '�强��'
);
COMMIT;
SELECT * FROM EMP;

--8�� + 9��
--PK, FK
--DEPT�� EMP ��Ӱ���� �ٽø���
DROP TABLE DEPT;
DROP TABLE EMP;


CREATE TABLE DEPT (
    DNO VARCHAR2(2),
    DNAME VARCHAR2(20),
    LOC VARCHAR2(20),
    DIRECTOR VARCHAR2(4),
    CONSTRAINT DEPT_DNO_PK/*<-PK�̸� �����ϴ°���*/ PRIMARY KEY(DNO)
);
COMMIT;
---------------------------------------------------------------------------------------------------------------
CREATE TABLE EMP(
    eno varchar2(4),
  ename varchar2(20),
  job varchar2(20),
  mgr varchar2(4),
  hdate date,
  sal number(5),
  comm number(4),
  dno varchar2(2),
    CONSTRAINT EMP_ENO_PK/*PK �̸� ����*/ PRIMARY KEY(ENO),
    CONSTRAINT EMP_MGR_FK/*FK �̸� ����*/ FOREIGN KEY(MGR) REFERENCES EMP(ENO),
    CONSTRAINT EMP_DNO_FK FOREIGN KEY(DNO) REFERENCES DEPT(DNO)
);
COMMIT;
--�������� ��ȸ
SELECT A.TABLE_NAME,
       A.CONSTRAINT_NAME,
       A.CONSTRAINT_TYPE,
       B.COLUMN_NAME
    FROM USER_CONSTRAINTS A,  --CONSTRAINTS (S�ٿ��ߵ�)
         USER_CONS_COLUMNS B
    WHERE A.CONSTRAINT_NAME = B.CONSTRAINT_NAME
      AND A.TABLE_NAME IN('DEPT', 'EMP')
    ORDER BY A.TABLE_NAME;
    
--���̺� ���Ӱ��� Ȯ��
SELECT A.TABLE_NAME AS �������̺�,
       A.CONSTRAINT_NAME AS ������������,
       B.TABLE_NAME AS �������̺�,
       B.CONSTRAINT_NAME AS ������������
    FROM USER_CONSTRAINTS A,
         USER_CONSTRAINTS B
    WHERE B.R_CONSTRAINT_NAME = A.CONSTRAINT_NAME
      AND A.TABLE_NAME IN('DEPT','EMP')
      ORDER BY A.TABLE_NAME;
      
--�������� Ȯ��
INSERT INTO DEPT(
    DNO,
    DNAME,
    LOC
) VALUES (
    '10',
    '����',
    '����'
);
COMMIT;
INSERT INTO EMP(
    ENO,
    ENAME,
    DNO
) VALUES (
    '9998',
    '������',
    '20'
);
COMMIT;

DROP TABLE BOARD;
ROLLBACK;

--BOARD ���̺� ����
--NO NUMBER PK
--NAME VARCHAR2(50)
--SUB VARCHAR2(200)
--B_CONTENT ���̺� ����
--NO NUMBER PK FK
--CONTENT VARCHAR2(1000)
CREATE TABLE BOARD(
    NO NUMBER,
    NAME VARCHAR2(50),
    SUB VARCHAR2(200),
    CONSTRAINT BOARD_NO_PK PRIMARY KEY(NO)
);
COMMIT;
CREATE TABLE B_CONTENT(
    NO NUMBER,
    CONTENT VARCHAR2(1000),
    CONSTRAINT B_CONTENT_NO_PK PRIMARY KEY(NO),
    CONSTRAINT B_CONTENT_NO_FK FOREIGN KEY(NO) REFERENCES BOARD(NO)
);
COMMIT;

--10��
--���� PK
--B_FILE ���̺� �����
--NO NUMBER FK PK
-- FILE_NO NUMBER PK
--FILE_NAME VARCHAR2(100)

CREATE TABLE B_FILE(
    NO NUMBER,
    FILE_NO NUMBER,
    FILE_NAME VARCHAR2(100),
    CONSTRAINT B_FILE_PK PRIMARY KEY(NO, FILE_NO),
    CONSTRAINT B_FILE_NO_FK FOREIGN KEY(NO) REFERENCES BOARD(NO)
);
/*
(NO, FILE_NO) �ϳ��� Ű
1, 1 --> 1, 4
1, 2
1, 3
2, 1
2, 2
2, 3
*/

INSERT INTO BOARD(
    NO
) VALUES (
    10
);
COMMIT;
SELECT * FROM BOARD;

--11��
--UK, NOT NULL, CHECK
--EMP4
--ENO VARCHAR2(4) PK
--ENAME VARCHAR2(20) NOT NULL
--GNO VARCHAR2(13) UK
--SAL NUMBER CHECK 1000<=SAL<=5000
CREATE TABLE EMP4(
    ENO VARCHAR2(4),
    ENAME VARCHAR2(20) NOT NULL,
    GNO VARCHAR2(13),
    SAL NUMBER ,
    CONSTRAINT EMP4_ENO_PK PRIMARY KEY(ENO),
    CONSTRAINT EMP4_GNO_UK UNIQUE(GNO),
    CONSTRAINT EMP4_SAL_CK CHECK(SAL BETWEEN 1000 AND 5000)
);

INSERT INTO EMP4(
    ENO,
    ENAME,
    GNO,
    SAL
) VALUES (
    '0001',
    '���õ',
    '1111110000000',
    900
);
COMMIT;
SELECT * FROM EMP4;

--12��
--�������� ����
CREATE TABLE CLASS(
    CNO VARCHAR2(2),
    CNAME VARCHAR2(50)
);

CREATE TABLE ST(
    SNO VARCHAR2(2),
    SNAME VARCHAR2(50),
    CNO VARCHAR2(2)
);

--CLASS ���̺� PK �߰�
ALTER TABLE CLASS
    ADD CONSTRAINT CLASS_CNO_PK PRIMARY KEY(CNO);
    COMMIT;

--CLASS ���̺� UK �߰�
ALTER TABLE CLASS
    ADD CONSTRAINT CLASS_CNAME_UK UNIQUE(CNAME);

--ST ���̺� PK �߰�
ALTER TABLE ST
    ADD CONSTRAINT ST_SNO_PK PRIMARY KEY(SNO);

--FOREIGN KEY �ֱ����� CLASS ������ �߰�
INSERT INTO CLASS VALUES(
    '01',
    '�ڹٹ�'
);

INSERT INTO CLASS VALUES(
    '02',
    'AI��'
);

--ST ������ �߰�
INSERT INTO ST VALUES(
    '01',
    '���õ',
    '01'
);

INSERT INTO ST VALUES(
    '02',
    '������',
    '02'
);

INSERT INTO ST VALUES(
    '03',
    'ȫ�浿',
    '03'
);

--CLASS�� CNO�� FK�� ��Ƽ� ST���̺� �����Ұ���
--ST ���̺� FK �߰�
ALTER TABLE ST
    ADD CONSTRAINT ST_CNO_FK FOREIGN KEY(CNO) REFERENCES CLASS(CNO);  --�θ� ���� ���̶� �߰� �ȵ�
    
--CNO��(�θ�) �� �־���
UPDATE ST
    SET CNO='02'
    WHERE CNO='03';

--�θ� �� �־��ְ� �ٽ� FK
ALTER TABLE ST
    ADD CONSTRAINT ST_CNO_FK FOREIGN KEY(CNO) REFERENCES CLASS(CNO);  --�θ� ���� ���̶� �߰� �ȵ�    

--ST ���̺� PK ���� (������ �̸��� �ֱ� ������ �� �̸��� �ٷ� �־��ָ� ��(ST_SNO_PK))
ALTER TABLE ST
    DROP CONSTRAINT ST_SNO_PK;
COMMIT;

--CLASS ���̺� PK ����(CNO)
--ST�� ���ӵ��ֱ⶧���� �׳� ���� �ȵǱ� ������ CASCADE �Ἥ ������ Ű�� �����ϸ鼭 PK�� ���� ����
ALTER TABLE CLASS
    DROP CONSTRAINT CLASS_CNO_PK CASCADE;
COMMIT;


--13~15��
--�÷��� �߰�, ����, ����
DROP TABLE TEST;

CREATE TABLE TEST(
    NO NUMBER
);

--�÷� �߰�
ALTER TABLE TEST
    ADD NAME VARCHAR2(20);
    
DESC TEST;

--�÷� ������Ÿ�� ����
ALTER TABLE TEST
    MODIFY NAME CHAR(20);

DESC TEST;

--�÷��� ����
ALTER TABLE TEST
    RENAME COLUMN NAME TO TNAME;
    
DESC TEST;

--�÷� ����
ALTER TABLE TEST
    DROP COLUMN TNAME;

DESC TEST;

--16��
--���������� �̿��� ���̺� ����
--�μ������� ��������� ��ģ E_DEPT ���̺��� �����Ѵ�.
--(������������ ������ �÷��鸸 ����� ���� �÷����� �����ص� �ȴ�.)
CREATE TABLE E_DEPT
AS (
    SELECT A.ENO,
           A.ENAME,
           A.DNO,
           B.DNAME
        FROM EMP A,
             DEPT B
        WHERE A.DNO = B.DNO
);

SELECT * FROM DEPT;

--�ǽ�
--�μ���ȣ, �μ���, �μ��� ��ձ޿��� �����ϴ� D_SAL ���̺� ����
CREATE TABLE D_SAL
AS (
    SELECT A.DNO,
           B.DNAME,
           AVG(A.SAL) AS SAL
           FROM DEPT B,
                EMP A
            WHERE A.DNO=B.DNO
            GROUP BY A.DNO, B.DNAME
);

SELECT * FROM D_SAL;