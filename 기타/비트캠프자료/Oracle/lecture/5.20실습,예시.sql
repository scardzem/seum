SELECT SNAME || '�л��� ������ ' || AVR || '�Դϴ�.'
    FROM STUDENT;

--���ڳ� Ư������, �� ĭ�� ���Ե� ��Ī�� ���� �� ""���
SELECT SAL * 1.1 AS "10% �λ�� �޿�"
  FROM EMP;
  
  --3��
  --1) INNER JOIN
  --EMP���� ����� �����ȣ, ����̸�, �μ���ȣ, �μ���, ���� ���
SELECT A.ENO,
       A.ENAME,
       A.DNO,
       B.DNAME,
       B.LOC
    FROM EMP A
    INNER JOIN DEPT B
            ON A.DNO = B.DNO;
            
  --��Ȯ���� ���� �÷� ����
  --����� �÷��� ��ȸ�� ���� ��� ���̺��� �����͸� ����� ������ ����ؾ� ��.
  -- ex) �Ʒ� ���ÿ��� DNO�� EMP�� DEPT���̺� �������� �ִµ� A�� ���� ��������.
  SELECT ENO,
       ENAME,
       A.DNO,
       DNAME,
       LOC
    FROM EMP A
    INNER JOIN DEPT B
            ON A.DNO = B.DNO;
            
--2) INNER JOIN �� ��° ���
-- EMP���� ����� �����ȣ, ����̸�, �μ���ȣ, �μ���, ���� ���
SELECT A.ENO,
       A.ENAME,
       A.DNO,
       B.DNAME,
       B.LOC
    FROM EMP A,
         DEPT B
        WHERE A.DNO = B.DNO;
        
--�� ���� �Ҵ�� �����ȣ, �����, ������ȣ, ���� �̸� ���
--   (COURSE, PROFESSOR ���̺� �̿�)
--ù��° ���
SELECT A.CNO,
       A.CNAME,
       A.PNO,
       B.PNAME
    FROM COURSE A,
         PROFESSOR B
    WHERE A.PNO = B.PNO;


SELECT CNO,
       CNAME,
       A.PNO,
       PNAME
       FROM COURSE A,
            PROFESSOR B
       WHERE A.PNO = B.PNO;
       
--���ֿ��� �ٹ��ϴ� ����� �����ȣ, ����̸�, �μ���ȣ, �μ��̸�, ��ġ ���
SELECT * FROM DEPT;
SELECT * FROM EMP;
--ù��° ���

SELECT A.DNO,
       A.DNAME,
       A.LOC,
       B.ENO,
       B.ENAME
    FROM DEPT A
    INNER JOIN EMP B
    ON A.DNO=B.DNO
    AND A.LOC = '����'; --�÷� �������� ��˻� ����
    
--�� ��° ���
SELECT A.DNO,
       A.DNAME,
       A.LOC,
       B.ENO,
       B.ENAME
    FROM DEPT A,
         EMP B
    WHERE A.DNO = B.DNO
    AND A.LOC = '����';
         
--4��
--������ 1) ����
--����� 10%�λ� �޿��� ��� ���
--(�����ȣ, ����̸�, �λ�� �޿�, �޿����) : EMP, SALGRADE ���̺� ���

SELECT A.ENO,
       A.ENAME,
       1.1*A.SAL AS UPSAL,
       B.GRADE
        FROM EMP A,
             SALGRADE B
             WHERE 1.1*SAL BETWEEN B.LOSAL AND B.HISAL; --BETWEEN ����� �� �� ���� �߿� ���� �� ���� ��ߵ�
--JOIN �ᵵ ���� ���� ���� �� �ִ�.
--�׸��� ��ġ�� �÷��� �ƴϸ� A,B�� �� ���� �ȴ�.
SELECT A.ENO,
       A.ENAME,
       1.1*A.SAL AS UPSAL,
       B.GRADE
FROM EMP A
JOIN SALGRADE B
ON A.SAL * 1.1 BETWEEN B.LOSAL AND B.HISAL;

--5��
--CROSS JOIN
--JOIN�� �� ���� JOIN ������ ����ؾ� ��
SELECT A.ENO
     , A.ENAME
     , A.DNO
     , B.DNAME
    FROM EMP A
       , DEPT B; -- JOIN ������ ��� ��ȸ�� ���� �ǹ̰� ����.(������� �ȿ��� ���� �ѹ�, ȸ�迡 ��� ǥ�õ�)

--6��
--EMP ���̺��� �����ȣ, ����̸�, �����ȣ, ����̸� ���(�������� ���)
--1)����
SELECT A.ENO,
       A.ENAME,
       A.MGR,
       B.ENO,
       B.ENAME
    FROM EMP A,
         EMP B
    WHERE A.MGR = B.ENO;
--2)����    
SELECT A.ENO,
       A.ENAME,
       A.MGR,
       B.ENO,
       B.ENAME
    FROM EMP A
    JOIN EMP B
      ON A.MGR = B.ENO;
 
 
 
 --7��
 --OUTER JOIN
 --6������ �ߴ� ���� ����� NULL�� ����� �ִµ� �̰� ��ȸ�� �� �ȴ�.
 --�� �� �ʿ��� �� 7�� OUTER JOIN�̴�.
 -- 1) ����
 --     ����� �������� �ʴ� ����� �����ؼ� 
 --     �����ȣ, ����̸�, �����ȣ, ����̸� ǥ��
--1)�⺻��
SELECT A.ENO,
       A.ENAME,
       A.MGR,
       B.ENO,
       B.ENAME
    FROM EMP A
    LEFT OUTER JOIN EMP B
    ON A.MGR = B.ENO(+);
--2)����Ŭ������ �����ϴ� ��� ���
SELECT A.ENO,
       A.ENAME,
       A.MGR,
       B.ENO,
       B.ENAME
    FROM EMP A,
         EMP B
    WHERE A.MGR(+) = B.ENO;
--���� ���� LEFT OUTER JOIN���� Ǭ ���̴�. 
--A,B�� ���� �� ������ A�̰� �������� B�̸�
--LEFT OUTER�� ���� �����հ� B���� ���� A�� ���� ���� ����ϴ°Ű�
--RIGHT OUTER�� ���� �����հ� A���� ���� B�� ���� ����ϴ� ���̴�.
--���� Ǭ ���� �����ؼ� ���� ����� ���� ENO�� B ���� �����°ǵ�
--A�� LEFT�̰� MGR �������� ��ȸ�ؼ� MGR���� ���������� ���� ���̴�.
--RIGHT OUTER�� �ٲ㼭 ����غ��� ����� �ٸ��� ���´�
    
    
    
    
    
--7�� OUTER JOIN �ؼ�
--       EMP A                   EMP B
--ENO   ENAME    MGR           ENO   ENAME 
--0001  �ȿ���    NULL         0001   �ȿ���
--9999  �强��    NULL         9999   �强��
--1003  �缱ȣ    0201         1003   �缱ȣ

--EMP A�� B�� ������ = A.MGR�� B.ENO�� ���� ���� ��
--EMP A�� B�� ������ = A.MGR�� B.ENO�� ���� ���� ��
--  OUTER�� �ƴ� LEFT�� ���̺� ���� ������ ��� ����� �ǰ�
--  OUTER�� �߰��� �÷��� �׸� ���� ���� �����տ� ���Ѱ� ����ϰ�
--  �������� ���� �κ��� NULL������ ǥ�õȴٰ� ���� �ɵ�

--2) ����
--�ҼӺμ����� ���� �μ� �����Ͽ� �μ���ȣ, �μ��̸�, ����̸� ǥ��
SELECT * FROM DEPT;
SELECT * FROM EMP;
SELECT A.DNO
     , A.DNAME
     , B.ENAME
     FROM DEPT A
         , EMP B
    WHERE A.DNO(+) = B.DNO;

--3)����
--��米���� ���� ������ �����Ͽ� 
--�����ȣ, �����̸�, ������ȣ, �����̸� ���
SELECT CNO,
       CNAME,
       A.PNO,
       PNAME
    FROM COURSE A,
         PROFESSOR B
    WHERE A.PNO=B.PNO(+);

--LEFT OUTER JOIN ������� Ǯ��
SELECT A.CNO,
       A.CNAME,
       A.PNO,
       B.PNAME
    FROM COURSE A
    LEFT OUTER JOIN PROFESSOR B
    ON A.PNO = B.PNO;
    
--8��
--���� �� ��������
--���� 1)
SELECT SAL
    FROM EMP
    WHERE ENAME = '���ϴ�';
--���� ���� ������� ���ϴú��� ������ ���� ����� ������ ����� �Ʒ�
SELECT A.ENO,
       A.ENAME,
       A.SAL
    FROM EMP A
    WHERE A.SAL >= (SELECT SAL     --���������� WHERE �������� ���
                         FROM EMP
                         WHERE ENAME = '���ϴ�');

--���� 2)
--�۰� �������� ������� �� ���� ������ȣ, �����̸�, ����� ��ȸ
SELECT A.PNO,
       A.PNAME,
       A.HIREDATE
    FROM PROFESSOR A
    WHERE A.HIREDATE <= (SELECT B.HIREDATE
                             FROM PROFESSOR B
                           WHERE PNAME='�۰�');
--�������� ������ �� �ϴܿ� �ִ°ͺ��� �ؼ��ϴ°� ����.


--���� 3)
SELECT A.PNO,
       A.PNAME,
       A.HIREDATE
    FROM PROFESSOR A,
        (SELECT HIREDATE
            FROM PROFESSOR
            WHERE PNAME = '�۰�') B  --B���̺��� ������ ����
    WHERE A.HIREDATE < B.HIREDATE;
    
--8��-2
--���� �� ��������
SELECT AVR
    FROM STUDENT
    WHERE SNAME = '����';
    
--���� 1)
--���� �л��� ������ ���� �л��� �й�, �л��̸�, ���� ��ȸ
--(IN ������ ���)
--������ ���� ������
SELECT B.AVR
FROM STUDENT B
WHERE B.SNAME='����';

--������ ���� ������ �л��� ���
SELECT A.SNO,
       A.SNAME,
       A.AVR
    FROM STUDENT A,
         (SELECT AVR
            FROM STUDENT 
            WHERE SNAME='����') B
    WHERE A.AVR IN B.AVR;
    
--8��-3 ���� �� ��������
--�⸻��� ������ �й�, �����ȣ, �����, �⸻��缺�� ��ȸ
SELECT C.SNO,
       C.CNO,
       D.CNAME,
       C.RESULT
    FROM SCORE C,
         COURSE D
    WHERE C.CNO = D.CNO
        AND C.RESULT >= 95;

--���� 3)
--�⸻��� ������ 95�� �̻��� �л��� 
--�й�, �л��̸�, �����ȣ, �����, ���� ��ȸ
SELECT A.SNO,
       A.SNAME,
       B.CNO,
       B.CNAME,
       B.RESULT --���̺� B(���߿� ����)�� ���Ե��ִ� ������ STUDENT�� ��� �����ؼ� ��� �����ϴ�.
       FROM STUDENT A,
            (SELECT C.SNO,
                    C.CNO,
                    D.CNAME,
                    C.RESULT
             FROM SCORE C,
                  COURSE D
             WHERE C.CNO = D.CNO
                AND C.RESULT >= 95) B -- COURSE�� STUDENT�� ���� ������ ��ü�� ���ο� ���̺��� �� ������ ���� ��
       WHERE A.SNO = B.SNO           -- D�� COURSE�� �ִ°ǵ� B��� ���̺��� ����鼭 ���̺� ��ü�� �ִ� ���� �Ǿ��� ������ A�� B�� ���ؼ� ����� �Ǵ°Ŵ�.     
       ORDER BY SNO, CNO;
--���� ���� ���߿� ���� ���� ���� ����ϰ������ ������ �Ʒ� ����
SELECT A.SNO,
       A.SNAME,
       B.CNO,
       B.CNAME,
       C.RESULT
    FROM STUDENT A
    , COURSE B
    , SCORE C
    WHERE A.SNO = C.SNO --������ ��� ���� �� �ڷḦ ���� �� �ִ�.
    AND B.CNO = C.CNO
    AND C.RESULT >=95
    ORDER BY SNO, CNO;
    --���������� ���������� ���� ���δ�.*******************************************************************************************************************

--9��
--���տ�����
--UNION ALL�� �̿��Ͽ� 1999/12/31 ���Ŀ� ���� 
--������ȣ, �����̸�, ������� �����ȣ, ����̸�, ������� ���
--(EMP�� PROFESSOR ���̺� �̿�)
SELECT PNO,
       PNAME,
       HIREDATE,
       SECTION
    FROM PROFESSOR
    WHERE HIREDATE > '1999/12/31' -- �÷� 4��, ������ ���� VARCHAR�������� �����ؼ� UNION ALL ��� ����
UNION ALL                         -- ǥ�� ������ ù��° ���̺� �÷� �̸����� ����
SELECT ENO,
        ENAME,
        HDATE,
        JOB
    FROM EMP
    WHERE HDATE > '1999/12/31';
    
    
--4)MINUS������
--����߿� �������̸鼭 ���������� ���� �ʴ� �����
--�����ȣ, ����̸�, ���� ��ȸ
SELECT ENO,
       ENAME,
       JOB
FROM EMP
WHERE ENAME LIKE '����%'
MINUS
SELECT ENO,
       ENAME,
       JOB
    FROM EMP
    WHERE JOB = '����'; 
    
--MINUS �����ڴ� ���� ��� �� �Ѵ�.
--������ �Ʒ�ó�� ���°� �� ���ϱ� ����.
SELECT ENO,
       ENAME,
       JOB
       FROM EMP
       WHERE ENAME LIKE '����%'
       AND JOB != '����';

--INTERSECT ������       
--INTERSECT �����ڸ� �̿��ؼ� ����, ȭ�а��� �л� �� ������ 3.0 �̻��� �л���
--�й�, �л��̸�, �а��̸�, ���� ��ȸ
SELECT SNO,
       SNAME,
       MAJOR,
       AVR
    FROM STUDENT
    WHERE MAJOR IN ('����', 'ȭ��')
INTERSECT
SELECT SNO,
       SNAME,
       MAJOR,
       AVR
    FROM STUDENT
    WHERE AVR >= 3.0;

--INTERSECT�� ���� ������ �ʴ´�.
--�ֳ��ϸ� �Ʒ�ó�� �ϴ°� �� ���ϴ�.
SELECT SNO,
       SNAME,
       MAJOR,
       AVR
    FROM STUDENT
    WHERE MAJOR IN ('����', 'ȭ��')
    AND AVR >= 3.0;