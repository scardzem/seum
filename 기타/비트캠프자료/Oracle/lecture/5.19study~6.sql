--SELECT 구문(8번)
--지정한 컬럼의 데이터만 조회
SELECT ENO,
        ENAME
    FROM EMP;
-- 모든 컬럼의 데이터 조회
--* 키워드 이용
SELECT *
FROM EMP;

--조회하는 컬럼이나 테이블에 별칭 붙이기(9번)
    --AS 생략하고 써도 됨
SELECT ENO AS 사원번호,
       ENAME 사원이름
    FROM EMP;
    
    --연봉 12로 나눈 월급정보 표시
SELECT ENO
       ENAME,
       (SAL / 12) AS MONTHPAY
       FROM EMP;

--NVL(10번)       
SELECT ENO,
       ENAME,
       COMM
    FROM EMP; --COMM(보너스) (NULL)로 표시됨
    
SELECT ENO,
       ENAME,
       --COMM컬럼의 데이터가 NULL인 경우 0으로 표출
       --별칭을 안 쓰면 NVL구문값으로 컬럼 이름이 표기됨
       NVL(COMM, 0) AS COMM
    FROM EMP;

--연결연산자(||) (11번)
SELECT ENO || ' - ' || ENAME || ' - ' || SAL AS 사원급여정보
    FROM EMP;
SELECT ENO || ' - ' || ENAME || ' - ' || (NVL(SAL, 0) / 12) 사원월급정보
    FROM EMP;

--중복제거자(DISTINCT)(12번)
SELECT * FROM EMP; --보면 업무가 중복으로 표기 된다
              --(모든 사람이 표시되기 때문에 모든 사람들의 JOB이 중복으로 보인다)

SELECT JOB FROM EMP;

SELECT DISTINCT NVL(JOB, '-') --NVL로 NULL표시 -로 변경
    FROM EMP;
    
--STUDY-5에서 장성훈 2번 더 넣고 중복 만든 다음에 아래 실행하면 하나만 나옴    
SELECT DISTINCT *
    FROM EMP;
    
--13번
--13-1)
SELECT * FROM EMP
    ORDER BY ENAME ASC;

--13-2)
SELECT * FROM EMP
    ORDER BY HDATE;

--13-3)    
    --ORDER BY를 통한 묶음 검색
SELECT ENO,
       ENAME,
       JOB
    FROM EMP
    ORDER BY JOB;

--13-4)
    --ORDER BY를 통한 복수 컬럼 정렬
    SELECT ENO,
       ENAME,
       JOB
    FROM EMP
    ORDER BY JOB, ENO, ENAME; -- JOB으로 정렬 후 다시 ENO으로 정렬, ENAME정렬

--13-5)
    --정렬 기준 컬럼 각각의 정렬 순서 지정
SELECT DNO,
       ENAME,
       SAL
    FROM EMP
    ORDER BY DNO ASC, SAL DESC; --DNO정렬 후 SAL 큰값부터 정렬

--13-6)
SELECT DNO AS 부서번호,
       ENAME AS 사원이름,
       SAL AS 연봉
    FROM EMP
    ORDER BY 부서번호 ASC, 연봉 DESC;    
-- 조회하는 컬럼에 별칭을 부여한 경우는 별칭으로 정렬 기준을 잡아야됨   

--14번
--조건검색 WHERE 구문)  //추가 : NVL은 
--ENO 9999인 사원 검색
--WHERE 조건 구문은 자료형 맞춰서 비교(EMP테이블 더블클릭해서 가보면
--                                VARCHAR형인데 이건 텍스트임. 숫자 9999로
--                                조회하면 숫자로 바뀐다음 찾아져서 오래걸림
SELECT * FROM EMP
    WHERE ENO=9999; --텍스트 찾고싶으면 WHERE ENAME='장성훈';으로 
    
--SELECT * FROM TABLE   
--    WHERE DATE = TO_DATE("20000000'); --원본 자료형에 맞게 검색. 중요함
    
--SAL이 3000이상인 사원의 사원번호, 사원이름, 연봉 검색
--ORDER BY는 WHERE구문 뒤에 사용
--WHERE 구문은 별칭 붙기 전에 동작하므로 별칭으로 사용 불가능
SELECT ENO,
       ENAME,
       SAL
    FROM EMP
WHERE SAL>=3000
ORDER BY SAL DESC, ENAME ASC, ENO ASC;

--15번
--1) IS NULL
--부서번호가 null인 사원의 사원번호, 이름, 부서번호 검색
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

--16번
--SAL이 3000이상이면서 DNO 30인 사원번호, 사원이름, 연봉, 부서번호 조회
SELECT SAL,
       DNO,
       ENO,
       ENAME,
       COMM
    FROM EMP
WHERE SAL>=3000
    AND DNO>=30    --숫자를 문자열로 바꾸고 싶으면 AND DNO=TO_CHAR(30)
ORDER BY SAL DESC, COMM ASC, ENAME ASC;

--17번
--1) DNO이 30이거나 SAL 3000이상인 사람의 사원번호, 이름, 연봉, 부서번호 조회
SELECT ENO,
       ENAME,
       SAL,
       DNO
    FROM EMP
WHERE SAL>=3000
    OR DNO='30'
ORDER BY SAL DESC, DNO ASC, ENAME ASC;

--2)DNO이 10이거나 SAL이 1600이상인 사원 중 COMM이 600이상인 사원의
--  사원번호, 사원이름, 연봉, 보너스, 부서번호 검색
-- AND가 우선순위가 높아서 OR를()로 묶어서 사용
SELECT ENO,
       ENAME,
       SAL,
       COMM,
       DNO
    FROM EMP
WHERE (DNO='10' OR  SAL>=1600)
    AND   COMM>=600
ORDER BY SAL DESC;       

--18번
--문자열검색 LIKE
--1) EMP 테이블에서 김씨 성을 가진 사원의 데이터 모두 출력
SELECT *
    FROM EMP
WHERE ENAME LIKE '김%';

--2) 사원 이름이 하늘로 끝나는 사원 데이터 모두 출력
SELECT *
    FROM EMP
WHERE ENAME LIKE '%하늘';

--3) 이름이 네 글자인 사원의 데이터 모두 출력
SELECT * 
    FROM EMP
WHERE ENAME LIKE '____';

--4) SAL이 2000이상 3000미만인 사원의 데이터 모두 출력
SELECT *
    FROM EMP
WHERE SAL>=2000
AND SAL<3000
ORDER BY SAL ASC;

--19번
--1) SAL이 2000이상 3000미만인 사원의 데이터 모두 출력
SELECT *
    FROM EMP
WHERE SAL BETWEEN 2000 AND 3000;

--2)입사일이 92~96년인 사원 검색
--  날짜데이터를 문자열로 비교
SELECT *
    FROM EMP
WHERE HDATE BETWEEN '1992/01/01' AND '1996/12/31';

--현재 커넥션 된 세션의 날짜 포맷 변경
--세션이 바뀔 때마다 실행해야됨
ALTER SESSION SET NLS_DATE_FORMAT = 'YYYY/MM/DD:HH24:MI:SS';

--3)입사일이 92~96년인 사원 검색(시,분,초까지 비교)
--  날짜데이터를 문자열로 비교
SELECT *
    FROM EMP
WHERE HDATE BETWEEN '1992/01/01' AND '1996/12/31';

--4) DNO이 10이거나 20인 사원 데이터 모두 표출
SELECT *
    FROM EMP
WHERE DNO='10'
OR    DNO='20'
ORDER BY DNO ASC;

--20번 (IN구문)
--1) DNO이 10이거나 20인 사원 데이터 모두 표출
SELECT *
    FROM EMP
WHERE DNO IN ('10', '20');    

--2) 업무가 개발이거나 경영인 사원의 데이터 모두 표출
SELECT *
    FROM EMP
WHERE JOB IN ('개발', '경영')
ORDER BY SAL DESC;