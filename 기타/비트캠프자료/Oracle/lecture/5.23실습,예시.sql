--1. ���� �Լ�
SELECT * FROM DEPT;

SELECT A.DNO,
       LOWER(A.DNAME)
    FROM DEPT A;
    
--�ҹ��ڷ� ERP �μ��� �ִ� ������ ���
SELECT A.DNO,
       LOWER(A.DNAME),
       A.LOC
    FROM DEPT A
    WHERE LOWER(A.DNAME) = 'erp';

--6��
--DUAL ���̺��� ���
--SYSDATE : ���� �ý����� ��¥
SELECT SYSDATE
    FROM DUAL;
    
SELECT CONCAT('��', '��õ')
FROM DUAL;



--3��
--���ڿ� ���� �Լ�
--CONCAT
--CONCAT �Լ��� �̿��Ͽ� �μ���� ������ �ϳ��� �÷����� ���
--CONCAT�� ���ڸ� �� �������� ���� �����ϱ� ������ ||(���ڿ� ���� ������)���� Ȱ�뵵�� ������
SELECT CONCAT(DNAME, '  ' || LOC)
    FROM DEPT;
    
--3.���ڿ��� �Լ� ��    
--LEGNTH, LENGTHB
--�μ���, �μ����� ���ڿ� ����, �μ����� ���ڿ� ����Ʈ ũ�� ���

SELECT DNAME,
       LENGTH(DNAME),
       LENGTHB(DNAME)
    FROM DEPT;
    
SELECT CONCAT(DNO, '  ' || LENGTH(DNO)) AS DNOLENGTH,
       CONCAT(DNAME, '  ' || LENGTH(DNAME)) AS DNAMELENGTH,
       CONCAT(LOC, '  ' || LENGTH(LOC)) AS LOCLENGTH,
       CONCAT(DIRECTOR, '  ' || LENGTH(DIRECTOR)) AS DIRECTORLENGTH
FROM DEPT;

--���� ����Ŭ���� ������� ���ڼ�
--LENGTHB���� �ѱ��� 3����Ʈ�� ���ͼ� �Ʒ� ���� ��ȸ�غ�
--AL32UTF8 : �ѱ� 3����Ʈ�� ���ȴٰ� ��
SELECT * 
    FROM NLS_DATABASE_PARAMETERS
    WHERE PARAMETER = 'NLS_CHARACTERSET'
        OR PARAMETER = 'NLS_NCHAR_CHARACTERSET';

--3.���ڿ��� �Լ� ��        
--SUBSTR
SELECT ENAME,
       SUBSTR(ENAME, 2), --�� ��° ���ں��� ���
       SUBSTR(ENAME, -2), --�ڿ��� �� ��° ���ں��� ���
       SUBSTR(ENAME, 1,2), --ù��° ���ں��� 2�� ���� ���
       SUBSTR(ENAME, -2,2) --�ڿ��� �� ��° ���ں��� 2�� ���� ���
    FROM EMP;

--INSTR
SELECT INSTR('DATABASE', 'A'), --ù��° A�� �ε��� ��ȯ
       INSTR('DATABASE', 'A', 3), --����° ����(T)���Ŀ� ù��° A�� ��ġ ��ȯ
       INSTR('DATABASE', 'A', 1, 3) --ù��° ����(D) ���Ŀ� ����° A�� ��ġ ��ȯ
    FROM DUAL;

--TRIM
SELECT TRIM('��' FROM '������') --�յ��� �� ����
    ,  TRIM(LEADING '��' FROM '������') --���� �� ����
    ,  TRIM(TRAILING '��' FROM '������')--���� �� ����
    ,  TRIM(' ������ ') --���� ����
    FROM DUAL;
    
--LPAD, RPAD
--LPAD, RPAD : �� �Լ������� �ѱ� 2����Ʈ�� �ν��Ѵٰ���
SELECT RPAD(ENAME, 10, '*') --����� �ڿ� *�� 10�ڸ�(BYTE����)�� �ǵ��� �ٿ��� ���
    ,  LPAD(SAL, 10, '*') --���� �տ� *�� 10�ڸ�(BYTE����)�� �ǵ��� �ٿ��� ���
    FROM EMP;

--�ǽ�    
--SUBSTR�� LENGTH �Լ��� ����ؼ� ������� ������ ���ڸ� ���� �� ���
SELECT ENAME FROM EMP;
SELECT SUBSTR(ENAME, 1,LENGTH(ENAME) -1)
    FROM EMP;

--7��
--���� ġȯ �Լ�
--TRANSLATE, REPLACE
SELECT TRANSLATE('World of Warcraft', 'Wo', '--'), --���� ������ ġȯ�Ǳ� ������ ��� W, o�� ġȯ��
       REPLACE('World of Warcraft', 'Wo', '--') -- ���ڿ� ������ ġȯ�Ǳ� ������ Wo�� �پ��ִ� ���ڿ��� ġȯ
    FROM DUAL;
    
--���� �Լ�
--ROUND
SELECT ROUND(12.3456, 3) --�Ҽ��� 3�ڸ����� �ݿø��Ͽ� ��ȯ
    FROM DUAL;
    
--TRUNC
SELECT TRUNC(12.3456,3) --�Ҽ��� 3�ڸ� �̸� �����Ͽ� ��ȯ
    FROM DUAL;
    
--MOD
SELECT MOD(10,4) --10�� 4�� ���� ������ �� ��ȯ
    FROM DUAL;
    
--POWER
SELECT POWER(3,3) --3�� 3���� �� ��ȯ
    FROM DUAL;
    
--CEIL
SELECT CEIL(2.59) --2.59���� ū ���� ���� ���� 3 ��ȯ
    FROM DUAL;

--FLOOR
SELECT FLOOR(2.59) --2.59���� ���� ���� ū ���� 2 ��ȯ
    FROM DUAL;
    
--ABS
SELECT ABS(-10) --10�� ���� �� 10 ��ȯ
    FROM DUAL;
    
--SQRT
SELECT SQRT(9) --9�� ������ 3 ��ȯ
    FROM DUAL;
    
--SIGN
--�ǿ��������� ��ȣ�� ���� -1, 0, 1 �� ��ȯ
SELECT SIGN(-10) --�ǿ����ڰ� -10�̱� ������ -1 ��ȯ
    FROM DUAL;

--9��    
--��¥ ���� ����    
SELECT SYSDATE FROM DUAL;
ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY/MM/DD HH24:MI:SS';
ALTER SESSION SET NLS_DATE_FORMAT = 'YY/MM/DD';
ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY/MM/DD';

--10��
--��¥ ����
SELECT SYSDATE,
       HDATE,
       TRUNC(SYSDATE) - TRUNC(HDATE) + 1 AS �ٹ���, --TRUNC(��¥) : �ð����� �ڸ� ��¥(��/��/��) ��ȯ
       HDATE + 100 AS "100��",
       HDATE + 365 AS "1��"
    FROM EMP;

--11��
--��¥ �Լ�
--ROUND
SELECT ROUND(SYSDATE, 'MI')
    FROM DUAL;
SELECT ROUND(SYSDATE, 'HH')
    FROM DUAL;    
SELECT ROUND(SYSDATE, 'MM')
    FROM DUAL;        

--TRUNC
--��¥ ���� �������� ��/��/�� ��ȯ, ��/��/�ʴ� 0���� �ʱ�ȭ �� ����
SELECT TRUNC(SYSDATE)
    FROM DUAL;
    
--��¥���� �⵵��(YYYY)�� ���·� ��ȯ, ��/���� 1�� �ʱ�ȭ, ��/��/�ʴ� 0���� �ʱ�ȭ    
SELECT TRUNC(SYSDATE, 'YYYY')
    FROM DUAL;

SELECT TRUNC(SYSDATE, 'MM')
    FROM DUAL;

--MONTHS_BETWEEN
--�� ��¥ ���� ���� �� ��ȯ
SELECT MONTHS_BETWEEN('2022/05/01', '2022/01/01')
    FROM DUAL; 
    
--ADD_MONTHS
SELECT ADD_MONTHS('2022/05/01',23)
    FROM DUAL;
    
--NEXT_DAY
SELECT NEXT_DAY('2022/05/23','�Ͽ���') --5/23 ���� ���� ����� �Ͽ��� ��¥ ��ȯ
    FROM DUAL;
    
--LAST_DAY
SELECT LAST_DAY('2022/02/01')
    FROM DUAL;
    
--�ǽ�
--������� �Ի��ϰ� �Ի� �� 100�� ��¥, ADD_MONTHS�Լ��� ����ؼ� 10�� �� ��¥ ���
SELECT ENAME,
       HDATE,
       HDATE + 100 AS "100��",
       ADD_MONTHS(HDATE, 120) AS "10��"
    FROM EMP;
    
--12��
--���ڸ� ���ڿ��� ġȯ TO_CHAR
SELECT TO_CHAR(100000, '999,999') --9�ڸ� ���ڱ��� ����ϵ� 3�ڸ����� ��ǥ ǥ��
    FROM DUAL;

SELECT TO_CHAR(1000000,'099,000,000') -- 9�ڸ� ���ڱ��� ����ϵ� 3�ڸ����� ��ǥ ǥ���ϰ� ���ڸ��� 0 �ٿ��� ���
    FROM DUAL;
    
SELECT TO_CHAR(10000000, '999,999,999,999,999')
    FROM DUAL;

--12�� ��
--��¥ ���� ��ȯ
--TO_CHAR�� ��¥���� ����
SELECT TO_CHAR(SYSDATE, 'YYYY/MM/DD') AS DD
    ,  TO_CHAR(SYSDATE, 'YYYY/MM/DD HH24:MI:SS') AS HH24
    ,  TO_CHAR(SYSDATE, 'YYYY/MM/DD/ HH:MI:SS AM') ASHHAM --����/���� ���� �� AM�̳� PM �Ѱ����� �����ص� ��
    , TO_CHAR(SYSDATE, '"������ "YYYY"�� "MM"�� "DD"�� �Դϴ�."') --���� �� ���ڿ� �߰� ��""���
    FROM DUAL;
    
--TO DATE�� ��¥���� ����
SELECT TO_DATE('20211231124521', 'YYYY/MM/DD HH24:MI:SS')
    FROM DUAL;
    
--TO_DATE �Լ��� ����Ͽ� �Ի��� '19920201' ���� ���� �����ȣ, ����̸�, �Ի��� ��ȸ
--                             (���ڿ��� �Է�, TO_DATE�� �޾Ƽ�)
SELECT ENO,
       ENAME,
       HDATE
    FROM EMP
    WHERE HDATE < TO_DATE('19920201', 'YYYY/MM/DD');
    
--13��
--�׷� �Լ�
--�г� �� ��� ���� ��ȸ
SELECT SYEAR,
       AVG(AVR)
    FROM STUDENT
    GROUP BY SYEAR;
    
--�а����� �г� �� ��� ���� ��ȸ
SELECT MAJOR,
       SYEAR,
       AVG(AVR)
    FROM STUDENT
    GROUP BY MAJOR, SYEAR
    ORDER BY MAJOR, SYEAR;
    
--�μ��� ���� ���� ��ȸ(MIN �Լ� �̿�)

SELECT DNO,
       MIN(SAL)
    FROM EMP
    GROUP BY DNO;

--�μ��� ���� ���� ��ȸ �μ��̸� �߰�
SELECT A.DNO,
       B.DNAME,
       MIN(A.SAL)
    FROM EMP A,
         DEPT B
    WHERE A.DNO = B.DNO
    GROUP BY A.DNO, B.DNAME;

--�μ��� ���� ���� ��ȸ �μ��̸� �߰�, �ش� ������ �޴� ����� ��ȣ, �̸� ���
SELECT C.ENO,
       C.ENAME,
       D.DNO,
       D.DNAME,
       D.SAL
    FROM EMP C,
         (SELECT A.DNO,
                B.DNAME,
                MIN(A.SAL) AS SAL
            FROM EMP A,
                DEPT B
            WHERE A.DNO = B.DNO
            GROUP BY A.DNO, B.DNAME) D
    WHERE C.SAL = D.SAL;

--14��    
--HAVING ����
--��� ������ 3000������ �μ� ��ȸ
SELECT DNO,
       AVG(SAL)
    FROM EMP
    GROUP BY DNO
    HAVING AVG(SAL) <3000;

SELECT * FROM DEPT;
SELECT * FROM EMP;

--�μ��� �ο��� ��ȸ ������ ������ ��� ����
SELECT DNO,
       COUNT(*)
    FROM EMP
    WHERE JOB !='����'
    GROUP BY DNO;
       
--�μ� �� ��տ����� ���� ���� �μ��� ��ȣ�� ��� ����

SELECT MAX(AVG(SAL))
FROM EMP
GROUP BY DNO;
        
SELECT DNO,
       AVG(SAL)
    FROM EMP
    GROUP BY DNO
    HAVING AVG(SAL) = (
                        SELECT MAX(AVG(SAL))
                            FROM EMP
                            GROUP BY DNO
                        );
--17��
--INSERT INTO - ���� ���Ƽ� �Է� �� �Ǵ� ��� ����
INSERT INTO EMP (
        ENO,
        ENAME
) VALUES (
        '9999',
        '���õ',
        'AAAA'
);        

--18��
--UPDATE
--ȭ�� ������ �������� ����(�α����� ������) (Ŀ�Ա��� �ؾ� �����)
--ȭ���� �ٽ� �α����� �ٲٰ� ������ '����'�� ����
SELECT * FROM PROFESSOR WHERE PNAME='ȭ��';

UPDATE PROFESSOR
    SET ORDERS='�α���',
        SECTION='����'
    WHERE PNAME='ȭ��';

COMMIT;

--19��
--DELETE
DELETE FROM DEPT
    WHERE DNO = '50';

SELECT * FROM DEPT
ORDER BY DNO;

COMMIT;
ROLLBACK;
--Ŀ���ع����� �����ϰ���� ���� ����Ŭ�� Ÿ�ӽ�������� ����� �ִ�. (�˻��غ��� 10�� �� �����ͷ� ������ �޼ҵ尡 �ִ�.)
--�Ǽ��� ���� ������ ���� ����
--Ÿ�ӽ����� �̿�(������� �ִ� 180�� ������ ���� �Ǵ°ɷ� �˰�����)
SELECT *
    FROM DEPT AS OF TIMESTAMP(SYSTIMESTAMP - INTERVAL '10' MINUTE)
    WHERE DNO = '50';
    
INSERT INTO DEPT VALUES ( --������ DNO 50 ������ �� �̰ɷ� �����ߴ�. ���� 10���� �Ⱦ��Ű���)
    '50',
    'POS',
    '����',
    NULL
);
COMMIT;

SELECT * FROM DEPT
ORDER BY DNO;

--DNO�� 01�� �μ��� ������ 10% �λ�� ������ ���� (COMMIT ���ϰ� ����������)
SELECT * FROM EMP where DNO='01';
UPDATE EMP
    SET SAL = SAL*1.1
    WHERE DNO='01';
    COMMIT;
    ROLLBACK;