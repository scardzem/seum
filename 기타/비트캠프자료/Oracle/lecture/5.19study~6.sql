--SELECT ����(8��)
--������ �÷��� �����͸� ��ȸ
SELECT ENO,
        ENAME
    FROM EMP;
-- ��� �÷��� ������ ��ȸ
--* Ű���� �̿�
SELECT *
FROM EMP;

--��ȸ�ϴ� �÷��̳� ���̺� ��Ī ���̱�(9��)
    --AS �����ϰ� �ᵵ ��
SELECT ENO AS �����ȣ,
       ENAME ����̸�
    FROM EMP;
    
    --���� 12�� ���� �������� ǥ��
SELECT ENO
       ENAME,
       (SAL / 12) AS MONTHPAY
       FROM EMP;

--NVL(10��)       
SELECT ENO,
       ENAME,
       COMM
    FROM EMP; --COMM(���ʽ�) (NULL)�� ǥ�õ�
    
SELECT ENO,
       ENAME,
       --COMM�÷��� �����Ͱ� NULL�� ��� 0���� ǥ��
       --��Ī�� �� ���� NVL���������� �÷� �̸��� ǥ���
       NVL(COMM, 0) AS COMM
    FROM EMP;

--���Ῥ����(||) (11��)
SELECT ENO || ' - ' || ENAME || ' - ' || SAL AS ����޿�����
    FROM EMP;
SELECT ENO || ' - ' || ENAME || ' - ' || (NVL(SAL, 0) / 12) �����������
    FROM EMP;

--�ߺ�������(DISTINCT)(12��)
SELECT * FROM EMP; --���� ������ �ߺ����� ǥ�� �ȴ�
              --(��� ����� ǥ�õǱ� ������ ��� ������� JOB�� �ߺ����� ���δ�)

SELECT JOB FROM EMP;

SELECT DISTINCT NVL(JOB, '-') --NVL�� NULLǥ�� -�� ����
    FROM EMP;
    
--STUDY-5���� �强�� 2�� �� �ְ� �ߺ� ���� ������ �Ʒ� �����ϸ� �ϳ��� ����    
SELECT DISTINCT *
    FROM EMP;
    
--13��
--13-1)
SELECT * FROM EMP
    ORDER BY ENAME ASC;

--13-2)
SELECT * FROM EMP
    ORDER BY HDATE;

--13-3)    
    --ORDER BY�� ���� ���� �˻�
SELECT ENO,
       ENAME,
       JOB
    FROM EMP
    ORDER BY JOB;

--13-4)
    --ORDER BY�� ���� ���� �÷� ����
    SELECT ENO,
       ENAME,
       JOB
    FROM EMP
    ORDER BY JOB, ENO, ENAME; -- JOB���� ���� �� �ٽ� ENO���� ����, ENAME����

--13-5)
    --���� ���� �÷� ������ ���� ���� ����
SELECT DNO,
       ENAME,
       SAL
    FROM EMP
    ORDER BY DNO ASC, SAL DESC; --DNO���� �� SAL ū������ ����

--13-6)
SELECT DNO AS �μ���ȣ,
       ENAME AS ����̸�,
       SAL AS ����
    FROM EMP
    ORDER BY �μ���ȣ ASC, ���� DESC;    
-- ��ȸ�ϴ� �÷��� ��Ī�� �ο��� ���� ��Ī���� ���� ������ ��ƾߵ�   

--14��
--���ǰ˻� WHERE ����)  //�߰� : NVL�� 
--ENO 9999�� ��� �˻�
--WHERE ���� ������ �ڷ��� ���缭 ��(EMP���̺� ����Ŭ���ؼ� ������
--                                VARCHAR���ε� �̰� �ؽ�Ʈ��. ���� 9999��
--                                ��ȸ�ϸ� ���ڷ� �ٲ���� ã������ �����ɸ�
SELECT * FROM EMP
    WHERE ENO=9999; --�ؽ�Ʈ ã������� WHERE ENAME='�强��';���� 
    
--SELECT * FROM TABLE   
--    WHERE DATE = TO_DATE("20000000'); --���� �ڷ����� �°� �˻�. �߿���
    
--SAL�� 3000�̻��� ����� �����ȣ, ����̸�, ���� �˻�
--ORDER BY�� WHERE���� �ڿ� ���
--WHERE ������ ��Ī �ٱ� ���� �����ϹǷ� ��Ī���� ��� �Ұ���
SELECT ENO,
       ENAME,
       SAL
    FROM EMP
WHERE SAL>=3000
ORDER BY SAL DESC, ENAME ASC, ENO ASC;

--15��
--1) IS NULL
--�μ���ȣ�� null�� ����� �����ȣ, �̸�, �μ���ȣ �˻�
SELECT DNO,
       ENO,
       ENAME
    FROM EMP
    WHERE DNO IS NULL;

--2) IS NOT NULL
SELECT DNO,
       ENO,
       ENAME
    FROM EMP
    WHERE COMM IS NOT NULL;

--16��
--SAL�� 3000�̻��̸鼭 DNO 30�� �����ȣ, ����̸�, ����, �μ���ȣ ��ȸ
SELECT SAL,
       DNO,
       ENO,
       ENAME,
       COMM
    FROM EMP
WHERE SAL>=3000
    AND DNO>=30    --���ڸ� ���ڿ��� �ٲٰ� ������ AND DNO=TO_CHAR(30)
ORDER BY SAL DESC, COMM ASC, ENAME ASC;

--17��
--1) DNO�� 30�̰ų� SAL 3000�̻��� ����� �����ȣ, �̸�, ����, �μ���ȣ ��ȸ
SELECT ENO,
       ENAME,
       SAL,
       DNO
    FROM EMP
WHERE SAL>=3000
    OR DNO='30'
ORDER BY SAL DESC, DNO ASC, ENAME ASC;

--2)DNO�� 10�̰ų� SAL�� 1600�̻��� ��� �� COMM�� 600�̻��� �����
--  �����ȣ, ����̸�, ����, ���ʽ�, �μ���ȣ �˻�
-- AND�� �켱������ ���Ƽ� OR��()�� ��� ���
SELECT ENO,
       ENAME,
       SAL,
       COMM,
       DNO
    FROM EMP
WHERE (DNO='10' OR  SAL>=1600)
    AND   COMM>=600
ORDER BY SAL DESC;       

--18��
--���ڿ��˻� LIKE
--1) EMP ���̺��� �达 ���� ���� ����� ������ ��� ���
SELECT *
    FROM EMP
WHERE ENAME LIKE '��%';

--2) ��� �̸��� �ϴ÷� ������ ��� ������ ��� ���
SELECT *
    FROM EMP
WHERE ENAME LIKE '%�ϴ�';

--3) �̸��� �� ������ ����� ������ ��� ���
SELECT * 
    FROM EMP
WHERE ENAME LIKE '____';

--4) SAL�� 2000�̻� 3000�̸��� ����� ������ ��� ���
SELECT *
    FROM EMP
WHERE SAL>=2000
AND SAL<3000
ORDER BY SAL ASC;

--19��
--1) SAL�� 2000�̻� 3000�̸��� ����� ������ ��� ���
SELECT *
    FROM EMP
WHERE SAL BETWEEN 2000 AND 3000;

--2)�Ի����� 92~96���� ��� �˻�
--  ��¥�����͸� ���ڿ��� ��
SELECT *
    FROM EMP
WHERE HDATE BETWEEN '1992/01/01' AND '1996/12/31';

--���� Ŀ�ؼ� �� ������ ��¥ ���� ����
--������ �ٲ� ������ �����ؾߵ�
ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY/MM/DD:HH24:MI:SS';

--3)�Ի����� 92~96���� ��� �˻�(��,��,�ʱ��� ��)
--  ��¥�����͸� ���ڿ��� ��
SELECT *
    FROM EMP
WHERE HDATE BETWEEN '1992/01/01' AND '1996/12/31';

--4) DNO�� 10�̰ų� 20�� ��� ������ ��� ǥ��
SELECT *
    FROM EMP
WHERE DNO='10'
OR    DNO='20'
ORDER BY DNO ASC;

--20�� (IN����)
--1) DNO�� 10�̰ų� 20�� ��� ������ ��� ǥ��
SELECT *
    FROM EMP
WHERE DNO IN ('10', '20');    

--2) ������ �����̰ų� �濵�� ����� ������ ��� ǥ��
SELECT *
    FROM EMP
WHERE JOB IN ('����', '�濵')
ORDER BY SAL DESC;