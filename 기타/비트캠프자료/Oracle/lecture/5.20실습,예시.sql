SELECT SNAME || '학생의 학점은 ' || AVR || '입니다.'
    FROM STUDENT;

--숫자나 특수문자, 빈 칸이 포함된 별칭을 붙일 때 ""사용
SELECT SAL * 1.1 AS "10% 인상된 급여"
  FROM EMP;
  
  --3번
  --1) INNER JOIN
  --EMP들의 사원의 사원번호, 사원이름, 부서번호, 부서명, 지역 출력
SELECT A.ENO,
       A.ENAME,
       A.DNO,
       B.DNAME,
       B.LOC
    FROM EMP A
    INNER JOIN DEPT B
            ON A.DNO = B.DNO;
            
  --명확하지 않은 컬럼 오류
  --공통된 컬럼을 조회할 때는 어느 테이블의 데이터를 사용할 것인지 명시해야 함.
  -- ex) 아래 예시에서 DNO는 EMP와 DEPT테이블에 공통으로 있는데 A를 빼면 오류난다.
  SELECT ENO,
       ENAME,
       A.DNO,
       DNAME,
       LOC
    FROM EMP A
    INNER JOIN DEPT B
            ON A.DNO = B.DNO;
            
--2) INNER JOIN 두 번째 방식
-- EMP들의 사원의 사원번호, 사원이름, 부서번호, 부서명, 지역 출력
SELECT A.ENO,
       A.ENAME,
       A.DNO,
       B.DNAME,
       B.LOC
    FROM EMP A,
         DEPT B
        WHERE A.DNO = B.DNO;
        
--각 과목에 할당된 과목번호, 과목명, 교수번호, 교수 이름 출력
--   (COURSE, PROFESSOR 테이블 이용)
--첫번째 방식
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
       
--광주에서 근무하는 사원의 사원번호, 사원이름, 부서번호, 부서이름, 위치 출력
SELECT * FROM DEPT;
SELECT * FROM EMP;
--첫번째 방식

SELECT A.DNO,
       A.DNAME,
       A.LOC,
       B.ENO,
       B.ENAME
    FROM DEPT A
    INNER JOIN EMP B
    ON A.DNO=B.DNO
    AND A.LOC = '광주'; --컬럼 조건으로 재검색 가능
    
--두 번째 방식
SELECT A.DNO,
       A.DNAME,
       A.LOC,
       B.ENO,
       B.ENAME
    FROM DEPT A,
         EMP B
    WHERE A.DNO = B.DNO
    AND A.LOC = '광주';
         
--4번
--비등가조인 1) 문제
--사원의 10%인상 급여의 등급 출력
--(사원번호, 사원이름, 인상된 급여, 급여등급) : EMP, SALGRADE 테이블 사용

SELECT A.ENO,
       A.ENAME,
       1.1*A.SAL AS UPSAL,
       B.GRADE
        FROM EMP A,
             SALGRADE B
             WHERE 1.1*SAL BETWEEN B.LOSAL AND B.HISAL; --BETWEEN 사용할 때 비교 조건 중에 작은 값 먼저 써야됨
--JOIN 써도 같은 값을 얻을 수 있다.
--그리고 겹치는 컬럼이 아니면 A,B를 안 쓰고도 된다.
SELECT A.ENO,
       A.ENAME,
       1.1*A.SAL AS UPSAL,
       B.GRADE
FROM EMP A
JOIN SALGRADE B
ON A.SAL * 1.1 BETWEEN B.LOSAL AND B.HISAL;

--5번
--CROSS JOIN
--JOIN을 할 때는 JOIN 조건을 명시해야 됨
SELECT A.ENO
     , A.ENAME
     , A.DNO
     , B.DNAME
    FROM EMP A
       , DEPT B; -- JOIN 조건이 없어서 조회한 값이 의미가 없다.(결과에서 안영희 보면 총무, 회계에 모두 표시됨)

--6번
--EMP 테이블에서 사원번호, 사원이름, 사수번호, 사수이름 출력(셀프조인 사용)
--1)예시
SELECT A.ENO,
       A.ENAME,
       A.MGR,
       B.ENO,
       B.ENAME
    FROM EMP A,
         EMP B
    WHERE A.MGR = B.ENO;
--2)예시    
SELECT A.ENO,
       A.ENAME,
       A.MGR,
       B.ENO,
       B.ENAME
    FROM EMP A
    JOIN EMP B
      ON A.MGR = B.ENO;
 
 
 
 --7번
 --OUTER JOIN
 --6번에서 했던 것중 사수가 NULL인 사람도 있는데 이건 조회가 안 된다.
 --이 때 필요한 게 7번 OUTER JOIN이다.
 -- 1) 문제
 --     사수가 존재하지 않는 사원도 포함해서 
 --     사원번호, 사원이름, 사수번호, 사수이름 표출
--1)기본형
SELECT A.ENO,
       A.ENAME,
       A.MGR,
       B.ENO,
       B.ENAME
    FROM EMP A
    LEFT OUTER JOIN EMP B
    ON A.MGR = B.ENO(+);
--2)오라클에서만 지원하는 기능 사용
SELECT A.ENO,
       A.ENAME,
       A.MGR,
       B.ENO,
       B.ENAME
    FROM EMP A,
         EMP B
    WHERE A.MGR(+) = B.ENO;
--위의 답은 LEFT OUTER JOIN으로 푼 것이다. 
--A,B가 잇을 때 왼쪽이 A이고 오른쪽이 B이면
--LEFT OUTER를 쓰면 교집합과 B에는 없는 A의 값을 같이 출력하는거고
--RIGHT OUTER를 쓰면 교집합과 A에는 없는 B의 값을 출력하는 것이다.
--위에 푼 문제 실행해서 나온 결과를 보면 ENO은 B 에서 가져온건데
--A가 LEFT이고 MGR 기준으로 조회해서 MGR과의 교집합으로 나온 것이다.
--RIGHT OUTER로 바꿔서 출력해보면 결과가 다르게 나온다
    
    
    
    
    
--7번 OUTER JOIN 해설
--       EMP A                   EMP B
--ENO   ENAME    MGR           ENO   ENAME 
--0001  안영희    NULL         0001   안영희
--9999  장성훈    NULL         9999   장성훈
--1003  양선호    0201         1003   양선호

--EMP A와 B의 교집합 = A.MGR과 B.ENO이 같은 값인 것
--EMP A와 B의 차집합 = A.MGR과 B.ENO이 같지 않은 값
--  OUTER가 아닌 LEFT의 테이블에 대한 내용은 모두 출력이 되고
--  OUTER로 추가한 컬럼의 항목에 대한 값은 교집합에 대한건 출력하고
--  교집합이 없는 부분은 NULL값으로 표시된다고 보면 될듯

--2) 문제
--소속부서원이 없는 부서 포함하여 부서번호, 부서이름, 사원이름 표출
SELECT * FROM DEPT;
SELECT * FROM EMP;
SELECT A.DNO
     , A.DNAME
     , B.ENAME
     FROM DEPT A
         , EMP B
    WHERE A.DNO(+) = B.DNO;

--3)문제
--담당교수가 없는 과목을 포함하여 
--과목번호, 과목이름, 교수번호, 교수이름 출력
SELECT CNO,
       CNAME,
       A.PNO,
       PNAME
    FROM COURSE A,
         PROFESSOR B
    WHERE A.PNO=B.PNO(+);

--LEFT OUTER JOIN 방식으로 풀이
SELECT A.CNO,
       A.CNAME,
       A.PNO,
       B.PNAME
    FROM COURSE A
    LEFT OUTER JOIN PROFESSOR B
    ON A.PNO = B.PNO;
    
--8번
--단일 행 서브쿼리
--예시 1)
SELECT SAL
    FROM EMP
    WHERE ENAME = '손하늘';
--위의 값을 기반으로 손하늘보다 연봉이 높은 사람을 꺼내는 방법을 아래
SELECT A.ENO,
       A.ENAME,
       A.SAL
    FROM EMP A
    WHERE A.SAL >= (SELECT SAL     --서브쿼리를 WHERE 조건으로 사용
                         FROM EMP
                         WHERE ENAME = '손하늘');

--예시 2)
--송강 교수보다 고용일이 더 빠른 교수번호, 교수이름, 고용일 조회
SELECT A.PNO,
       A.PNAME,
       A.HIREDATE
    FROM PROFESSOR A
    WHERE A.HIREDATE <= (SELECT B.HIREDATE
                             FROM PROFESSOR B
                           WHERE PNAME='송강');
--서브쿼리 볼때는 최 하단에 있는것부터 해석하는게 좋다.


--예시 3)
SELECT A.PNO,
       A.PNAME,
       A.HIREDATE
    FROM PROFESSOR A,
        (SELECT HIREDATE
            FROM PROFESSOR
            WHERE PNAME = '송강') B  --B테이블을 쿼리로 적용
    WHERE A.HIREDATE < B.HIREDATE;
    
--8번-2
--다중 행 서브쿼리
SELECT AVR
    FROM STUDENT
    WHERE SNAME = '노육';
    
--문제 1)
--노육 학생과 학점이 같은 학생의 학번, 학생이름, 학점 조회
--(IN 연산자 사용)
--노육의 평점 데이터
SELECT B.AVR
FROM STUDENT B
WHERE B.SNAME='노육';

--노육과 같은 학점인 학생들 출력
SELECT A.SNO,
       A.SNAME,
       A.AVR
    FROM STUDENT A,
         (SELECT AVR
            FROM STUDENT 
            WHERE SNAME='노육') B
    WHERE A.AVR IN B.AVR;
    
--8번-3 다중 열 서브쿼리
--기말고사 성적의 학번, 과목번호, 과목명, 기말고사성적 조회
SELECT C.SNO,
       C.CNO,
       D.CNAME,
       C.RESULT
    FROM SCORE C,
         COURSE D
    WHERE C.CNO = D.CNO
        AND C.RESULT >= 95;

--문제 3)
--기말고사 성적이 95점 이상인 학생의 
--학번, 학생이름, 과목번호, 과목명, 성적 조회
SELECT A.SNO,
       A.SNAME,
       B.CNO,
       B.CNAME,
       B.RESULT --테이블 B(다중열 쿼리)에 포함돼있는 정보면 STUDENT에 없어도 연동해서 출력 가능하다.
       FROM STUDENT A,
            (SELECT C.SNO,
                    C.CNO,
                    D.CNAME,
                    C.RESULT
             FROM SCORE C,
                  COURSE D
             WHERE C.CNO = D.CNO
                AND C.RESULT >= 95) B -- COURSE와 STUDENT로 만든 데이터 전체가 새로운 테이블이 된 것으로 보면 됨
       WHERE A.SNO = B.SNO           -- D는 COURSE에 있는건데 B라는 테이블을 만들면서 테이블 자체에 있는 값이 되었기 때문에 A와 B로 비교해서 출력이 되는거다.     
       ORDER BY SNO, CNO;
--같은 값을 다중열 쿼리 말고 쉽게 출력하고싶으면 보려면 아래 예시
SELECT A.SNO,
       A.SNAME,
       B.CNO,
       B.CNAME,
       C.RESULT
    FROM STUDENT A
    , COURSE B
    , SCORE C
    WHERE A.SNO = C.SNO --조건을 써야 연동 된 자료를 얻을 수 있다.
    AND B.CNO = C.CNO
    AND C.RESULT >=95
    ORDER BY SNO, CNO;
    --서브쿼리는 현업에서도 많이 쓰인다.*******************************************************************************************************************

--9번
--집합연산자
--UNION ALL을 이용하여 1999/12/31 이후에 고용된 
--교수번호, 교수이름, 고용일자 사원번호, 사원이름, 고용일자 출력
--(EMP와 PROFESSOR 테이블 이용)
SELECT PNO,
       PNAME,
       HIREDATE,
       SECTION
    FROM PROFESSOR
    WHERE HIREDATE > '1999/12/31' -- 컬럼 4개, 데이터 형식 VARCHAR형식으로 동일해서 UNION ALL 사용 가능
UNION ALL                         -- 표시 형식은 첫번째 테이블 컬럼 이름으로 결정
SELECT ENO,
        ENAME,
        HDATE,
        JOB
    FROM EMP
    WHERE HDATE > '1999/12/31';
    
    
--4)MINUS연산자
--사원중에 제갈씨이면서 지원업무를 하지 않는 사원의
--사원번호, 사원이름, 업무 조회
SELECT ENO,
       ENAME,
       JOB
FROM EMP
WHERE ENAME LIKE '제갈%'
MINUS
SELECT ENO,
       ENAME,
       JOB
    FROM EMP
    WHERE JOB = '지원'; 
    
--MINUS 연산자는 많이 사용 안 한다.
--이유는 아래처럼 쓰는게 더 편하기 때문.
SELECT ENO,
       ENAME,
       JOB
       FROM EMP
       WHERE ENAME LIKE '제갈%'
       AND JOB != '지원';

--INTERSECT 연산자       
--INTERSECT 연산자를 이용해서 물리, 화학과인 학생 중 학점이 3.0 이상인 학생의
--학번, 학생이름, 학과이름, 학점 조회
SELECT SNO,
       SNAME,
       MAJOR,
       AVR
    FROM STUDENT
    WHERE MAJOR IN ('물리', '화학')
INTERSECT
SELECT SNO,
       SNAME,
       MAJOR,
       AVR
    FROM STUDENT
    WHERE AVR >= 3.0;

--INTERSECT도 많이 쓰이진 않는다.
--왜냐하면 아래처럼 하는게 더 편하다.
SELECT SNO,
       SNAME,
       MAJOR,
       AVR
    FROM STUDENT
    WHERE MAJOR IN ('물리', '화학')
    AND AVR >= 3.0;