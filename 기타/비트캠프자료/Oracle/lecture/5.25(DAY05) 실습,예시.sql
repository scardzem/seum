--1~4��
--�ε��� ����
-- �л� �̸��� �ε��� ����
--���� �ε��� ����(�� ���� �ε���)
--�÷����� �ε��� ����
CREATE INDEX STUDENT_SNAME_IDX
ON STUDENT(SNAME);

--���� �ε��� ����
CREATE INDEX STUDENT_MAJOR_AVR_IDX
ON STUDENT(MAJOR, AVR);

--�������� �ε��� ����
--�������� ������ �ε����� �ε��� ������ ǥ�õ��� ����
CREATE INDEX STUDENT_COAVR_IDX
ON STUDENT(AVR/4*4.5);

--������ �ε��� Ȯ��----------------------------------------------------------------------
SELECT B.INDEX_NAME,
       B.COLUMN_NAME,
       B.COLUMN_POSITION,
       A.UNIQUENESS
    FROM USER_INDEXES A,
         USER_IND_COLUMNS B
    WHERE A.INDEX_NAME = B.INDEX_NAME
      AND A.TABLE_NAME = 'STUDENT'
    ORDER BY B.INDEX_NAME, B.COLUMN_POSITION;
    
--�������� ������ �÷� Ȯ��
SELECT INDEX_NAME,
       COLUMN_EXPRESSION
    FROM USER_IND_EXPRESSIONS
    WHERE INDEX_NAME = 'STUDENT_COAVR_IDX';
----------------------------------------------------------------------------------------
--5��
--�ε��� ����
DROP INDEX STUDENT_COAVR_IDX;
DROP INDEX STUDENT_MAJOR_AVR_IDX;
DROP INDEX STUDENT_SNAME_IDX;

--�ε��� �ڵ�����(�Ʒ� ����� ���� �ε��� Ȯ�� �غ��� �ϳ� ��������)
ALTER TABLE STUDENT
ADD CONSTRAINT STUDENT_SNO_PK PRIMARY KEY(SNO);




--6~8��
--���� ���� 
--(�䵵 ���̺�ó�� ���� �����ϴ°Ű� ��õ ���̺��� �ٲ�� �䵵 �ڵ����� �ٲ�)

--������ �а��� �⸻��� ��� �� ����
--CREATE ���� (�÷���)���� �̸�, Ÿ���� ������� ����� �ִ�.
CREATE OR REPLACE VIEW MA_STUDENT (
    CNO,
    CNAME,
    MAJOR,
    AVG_RESULT
) AS (
    SELECT A.CNO
         , A.CNAME
         , B.MAJOR
         , ROUND(AVG(C.RESULT))
        FROM COURSE A
           , STUDENT B
           , SCORE C
        WHERE A.CNO = C.CNO
          AND B.SNO = C.SNO
        GROUP BY A.CNO, A.CNAME, B.MAJOR
);

SELECT * FROM MA_STUDENT;
SELECT * FROM COURSE;
--���� ���� ��� ��õ���̺��� ������ ����� ���� �����͵� �ڵ� ����
UPDATE COURSE
    SET CNAME = '�Ϲ�ȭ��1'
    WHERE CNAME = '�Ϲ�ȭ��';
COMMIT;

UPDATE STUDENT
    SET MAJOR = '����2'
    WHERE MAJOR = '����';



--�ܼ� �並 �����ϵ� CHECK OPTION���� DML ������ ��� �����ϰ� ����
--�ܼ� �並 ����
--1�г� �л��� ���� ��
CREATE OR REPLACE VIEW ST_CH(
    SNO,
    SNAME,
    SYEAR,
    AVR
) AS (
    SELECT SNO,
           SNAME,
           SYEAR,
           AVR
        FROM STUDENT
        WHERE SYEAR = 1
);

SELECT * FROM ST_CH;

--�ܼ� �信 INSERT INTO �������� ������ �Է�
INSERT INTO ST_CH VALUES (
    '9001',
    'ȫ�浿',
    2,
    4.0
);
SELECT * FROM ST_CH
WHERE SNAME = '������';

--CHECK OPTION���� DML ������ ����
--VIEW���� ��ȸ ������ �����ʹ� 1�г� �����̹Ƿ�
--VIEW���� ��ȸ�� �ȵǴ� 2,3,4�г��� �����ʹ� �Է��� �� ����.
CREATE OR REPLACE VIEW ST_CH(
    SNO,
    SNAME,
    SYEAR,
    AVR
) AS (
    SELECT SNO,
           SNAME,
           SYEAR,
           AVR
        FROM STUDENT
        WHERE SYEAR=1
)
WITH CHECK OPTION CONSTRAINT VIEW_ST_CH_CK;

SELECT * FROM ST_CH;

INSERT INTO ST_CH VALUES(
    '9003',
    '�Ӳ���1',
    4,
    3.8
);


--9��
--�ζ��� ��(�������� �κп� ����Ʈ������ ���� �κ��� �ζ��� ����)
--�� �μ��� �ּ� �޿��� ��ȸ(�����ȣ, ����̸�, �μ���ȣ, �޿�)
SELECT DNO,
       MIN(SAL)
    FROM EMP
    GROUP BY DNO;
SELECT * FROM EMP;

--�Ʒ� �̰� �� ��������?
SELECT A.ENO,
       A.ENAME,
       A.DNO,
       B.SAL
    FROM EMP A,
    (
    SELECT DNO,
       MIN(SAL)
    FROM EMP
    GROUP BY DNO
    ) B
    WHERE A.SAL = B.SAL;

--10��    
--ROWNUM ���
SELECT ROWNUM,
        ENO,
        ENAME,
        SAL
    FROM (
            SELECT ENO,
                   ENAME,
                   SAL
                FROM EMP
                ORDER BY SAL DESC
    ) A
    WHERE ROWNUM <=3;

--�߸��� ROWNUM ���
--���ĵǱ� ���� ROWNUM �ο��ϰ�
--ROWNUM�� ������ �ֱ� ������
--���� �ٸ� ��� ���� ǥ��ȴ�. 
--(���� ����ó�� ������������ ���ĵ� ���� �ƴ϶� 
--���ĵǱ� ���� ROWNUM�� ��������� �׷���)
SELECT ROWNUM,
        ENO,
        ENAME,
        SAL
    FROM EMP
    WHERE ROWNUM <=3
    ORDER BY SAL DESC;
--11~14��
--������
DROP TABLE EMP2;
CREATE TABLE EMP2
AS (
    SELECT *
        FROM EMP
    );

CREATE TABLE DEPT2
AS (
        SELECT *
            FROM DEPT
    );
--������ ����
--����Ŭ���� START WITH�� �����ϴ� ������ �־ ���� �� �ָ� START WITH �������� �ν�
CREATE SEQUENCE EMP2_ENO_SEQ
    START WITH 1
    INCREMENT BY 1
    NOMAXVALUE
    NOMINVALUE
    NOCYCLE
CACHE 20;

--�ɼ� ���� ������ ����
--�⺻ �ɼ����� ����Ϸ��� �ɼ� ���� �����ϸ� ��
CREATE SEQUENCE DEPT2_DNO_SEQ;


--������ ������ ��ȸ----------------------------------------------------
SELECT SEQUENCE_NAME,
       MAX_VALUE,
       MIN_VALUE,
       INCREMENT_BY,
       CACHE_SIZE,
       LAST_NUMBER,
       CYCLE_FLAG
    FROM USER_SEQUENCES;
------------------------------------------------------------------------
SELECT * FROM EMP2;
--������ ���
DELETE FROM EMP2;
COMMIT;

INSERT INTO EMP2(
    ENO,
    ENAME
) VALUES (
    --�������� ���
    EMP2_ENO_SEQ.NEXTVAL,
    'ù ��°'
);
SELECT * FROM EMP2;
COMMIT;

--�������� ���̺� ���� ����ϱ� ������ ���� �Ҵ�޴´ٱ⺸�� 
--���ο� ��ü�� ����ٰ� ���� �ȴ�.

--������� �Ҵ� ���� ������ �� Ȯ��---------------------------------------------
SELECT EMP2_ENO_SEQ.CURRVAL
    FROM DUAL;
    
--������ ���� �� �� ���� �Ʒ� ������� ���� �����
DELETE FROM DEPT2;

INSERT INTO DEPT2(
    DNO,
    DNAME
) VALUES (
    (
        SELECT NVL(MAX(DNO), 0) + 1
            FROM DEPT2
    ),
    '�� ��°'
);


COMMIT;
SELECT * FROM DEPT2;

--15��
--NATURAL JOIN
--�� ����� �����ȣ, ����̸�, �μ���ȣ, �μ��̸� ��ȸ
SELECT ENO,
       ENAME,
       DNO,
       DNAME
    FROM EMP 
    NATURAL JOIN DEPT;  --A�� DNO�� B�� ���� �̸��� ���� ���� DNO�� �ڵ����� ���ε�
    
SELECT A.ENO,
       A.ENAME,
       A.DNO,
       B.DNAME
    FROM EMP A,
         DEPT B
    WHERE A.DNO = B.DNO;
    
--NATURAL JOIN �̿��ؼ�
--���ֿ��� �ٹ��ϴ� ����� �����ȣ, ����̸�, �μ���ȣ, �μ��̸�, �μ����� ��ȸ
SELECT ENO,
       ENAME,
       DNO,
       DNAME,
       LOC
    FROM EMP
    NATURAL JOIN DEPT
    WHERE LOC='����';
    
--16��
--USING ����
--ȭ�а� 2�г� �л����� �⸻��� ������ ��ȸ(�л���ȣ, �л��̸�, �а��̸�, �г�, �����ȣ, �����, ����)
SELECT SNO,
       SNAME,
       MAJOR,
       SYEAR,
       CNO,
       CNAME,
       RESULT
    FROM STUDENT
    JOIN SCORE USING(SNO)
    JOIN COURSE USING(CNO)
    WHERE SYEAR = 1
    AND MAJOR = 'ȭ��';

--17��
--���� ���� IN ������
--���ϴ� ����� ���� �������� ������ �����鼭 ������ ������ ��� ��ȸ
SELECT ENO,
       ENAME,
       MGR,
       JOB
    FROM EMP
    WHERE (MGR, JOB) IN (   
                            SELECT MGR,
                                   JOB
                                FROM EMP
                                WHERE ENAME = '���ϴ�'
                        )
    AND ENAME !='���ϴ�';


--�迬�� ����� �μ��� ������ ������ �����ȣ, ����̸�, �μ���ȣ, ���� ��ȸ
SELECT ENO,
       ENAME,
       DNO,
       JOB
    FROM EMP
    WHERE (JOB, DNO) IN (SELECT JOB,
                            DNO
                            FROM EMP
                            WHERE ENAME='�迬��')
    AND ENAME!='�迬��';




--ȭ�а� �л��� ���� �г⿡�� ������ ������ �л���ȣ, �л��̸�, �г�, �а� ���� ��ȸ(STUDENT ���̺� ���)
    
SELECT SNO,
       SNAME,
       SYEAR,
       MAJOR,
       AVR
    FROM STUDENT
    WHERE (SYEAR,AVR) IN (SELECT SYEAR,
                                  AVR
                            FROM STUDENT
                            WHERE MAJOR='ȭ��') 
    AND MAJOR !='ȭ��'
    ORDER BY SYEAR, AVR DESC; --IN(��������)�� SYEAR, AVR �� �྿ �����µ� �ΰ��� ���� ��� ������ ���� ã��



    
--18~20��
--CASE WHEN, DECODE ���� (�ڹ� SWITCH�� ����ѵ�)
--�𵨸�, �м� ������ 20%�λ� ������ ������ 10%�λ�
SELECT ENO,
       ENAME,
       JOB,
       SAL,
       CASE JOB WHEN '�𵨸�' THEN SAL*1.2
                WHEN '�м�' THEN SAL*1.2
                ELSE SAL*1.1
        END AS UPSAL
    FROM EMP;



SELECT ENO,
       ENAME,
       JOB,
       DECODE(JOB, '�𵨸�', SAL*1.2, '�м�', SAL * 1.2, SAL*1.1) AS SAL
       FROM EMP;

--ȭ�а� �л��鸸 4.5������ ȯ��� �������� ��ȸ(�л���ȣ, �л��̸�, �а�, ����)
SELECT SNO,
       SNAME,
       MAJOR,
       AVR,
    CASE MAJOR WHEN 'ȭ��' THEN AVR/4*4.5
    END AS CAVR
    FROM STUDENT;

    
SELECT SNO,
       SNAME,
       MAJOR,
       AVR,
       DECODE(MAJOR, 'ȭ��', AVR/4*4.5,AVR) AS CAVR
    FROM STUDENT;

--������ �̿��� CASE WHEN ����
--������ 5000 �̻��� A���, 4000<=����<=5000�� B���, �������� C���
--�����ȣ, ����̸�, ����, ��� ��ȸ(CASE WHEN ���� ���)
SELECT ENO,
       ENAME,
       SAL,
       CASE WHEN SAL > 5000 THEN 'A'
            WHEN SAL BETWEEN 4000 AND 5000 THEN 'B'
            ELSE 'C'
        END AS GRADE
    FROM EMP;


--21��
--START WITH ... CONNECT BY PRIOR
SELECT LEVEL
        , ENO
        , ENAME
        , MGR
        FROM EMP
        START WITH ENAME = '�ȿ���'
        CONNECT BY PRIOR ENO = MGR  --MGR = ENO , ENO = MGR ������ ���� ����, �������� ��ȸ(�θ�,�ڽ�)
        ORDER BY LEVEL;
        
--�������踦 ���� ���ϰ� ǥ��(��� ��ɿ� ���ϸ��Ѱ�)
SELECT LPAD(ENAME, LENGTHB (ENAME) + (LEVEL * 3) - 3, ' ') AS EMP_LEVEL
    FROM EMP
    START WITH ENAME = '�ȿ���'
    CONNECT BY PRIOR ENO = MGR;