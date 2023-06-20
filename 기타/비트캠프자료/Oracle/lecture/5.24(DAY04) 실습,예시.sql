--1번
--서브쿼리를 이용한 INSERT INTO
--테스트 테이블 생성
CREATE TABLE EMP2(
    ENO VARCHAR2(10),
    ENAME VARCHAR2(20)
);

SELECT * FROM EMP2;

--여러개 행 입력
INSERT INTO EMP2(
    ENO,
    ENAME
)
SELECT ENO,
       ENAME
    FROM EMP;                    --EMP에서 ENO과 ENAME을 가져다가 입력한거임

COMMIT;

--ENO, ENAME, SAL 정보를 갖는 EMP3 테이블을 생성하고
--EMP의 ENO, ENAME 그리고 10% 인상된 SAL을 저장
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


--2번
--서브쿼리를 이용한 UPDATE 구문

--ENO = 9999인 데이터의 ENO을 김연아의 ENO으로
--ENAME을 ENO이 0001인 ENAME으로 변경
--(기존 9999 장성훈이 0302 안영희 로 바뀐다)
SELECT * FROM EMP2;

UPDATE EMP2
    SET ENO = (SELECT ENO
                    FROM EMP
                    WHERE ENAME = '김연아'),
        ENAME = (SELECT ENAME
                    FROM EMP
                    WHERE ENO = '0001')
    WHERE ENO = '9999';
                    
--EMP3 ENO = 9999인 데이터의
--ENO을 아이유의 ENO로
--ENAME을 ENO 3004인 ENAME
--SAL은 제갈민의 SAL로 변경
SELECT * FROM EMP3;
ROLLBACK;

UPDATE EMP3
    SET ENO = (SELECT ENO
                FROM EMP
                WHERE ENAME='아이유'),
        ENAME = (SELECT ENAME
                    FROM EMP
                  WHERE ENO=3004),
        SAL = (SELECT SAL
                    FROM EMP
                WHERE ENAME='제갈민')
    WHERE ENO=9999;
    
    
--3번
--트랜잭션과 락(LOCK)
--강사님 PC에서 예시 보여줌,
--STUDY 세션에서 DELETE FROM DEPT;까지만 하고(COMMIT 안하고) teacherPC에서 dept 테이블에 update dept ~ 를 시도하니까
--데드락 걸림(다른 세션에서 작업이 종료가 안됐는데 뭐 하려고해서 그런다는것 같음)
DELETE FROM DEPT;
SELECT * FROM DEPT;
ROLLBACK;

--4번
--테이블 생성과 데이터 타입
--BOARD 테이블 생성
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

--현재 접속한 유저의 테이블 확인
SELECT * FROM USER_TABLES;

SELECT * FROM USER_TABLES
WHERE TABLE_NAME = 'BOARD';

--테이블 구조 확인
DESC BOARD; 

--NO만 입력해도
--HDATE의 DAFAULT 값을 SYSDATE로 정해줘서
--HDATE도 데이터가 입력됨
INSERT INTO BOARD(
    NO
) VALUES (
    1
);
COMMIT;
SELECT * FROM BOARD;

--CHAR와 VARCHAR2 차이
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


--CHAR로 만든 AA는 고정 길이라서 어떤 데이터가 들어와도 생성될 때 지정한 크기(4바이트)이고
--VARCHAR2로 만든 AA는 가변 길이라서 입력된 데이터에 따라 크기가 변한다.(여기선 'AA' 2바이트)
SELECT LENGTHB(NAME1), 
       LENGTHB(NAME2)
    FROM TEST;

--7번 제약조건
--기초자료에서 EMP테이블의 ENO이 PK이다. 각각 고유의 값이 있어야함.
    --    9999로 입력했던 값들은 중복으로 들어가있는데 이것은 잘못된 데이터인 것임.
SELECT * FROM EMP;

--8번
--PK(Primary Key)
--EMP테이블 새로 만듦
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
    '안영희'
);
COMMIT;
SELECT * FROM EMP;
--PK 값을 동일하게 집어넣으려고 하면 에러가 난다(아래 실행하면 에러남)
INSERT INTO EMP(
    ENO,
    ENAME
) VALUES (
    '0001',   -- 위에 0001 안영희를 입력했는데 0001 장성훈을 넣으려고 하면 동일한 ENO 값이 중복돼서 에러가 나는 것임
    '장성훈'
);

--PK0002로 넣으면 입력됨
INSERT INTO EMP(
    ENO,
    ENAME
) VALUES (
    '0002',
    '장성훈'
);
COMMIT;
SELECT * FROM EMP;

--8번 + 9번
--PK, FK
--DEPT와 EMP 상속관계로 다시만듦
DROP TABLE DEPT;
DROP TABLE EMP;


CREATE TABLE DEPT (
    DNO VARCHAR2(2),
    DNAME VARCHAR2(20),
    LOC VARCHAR2(20),
    DIRECTOR VARCHAR2(4),
    CONSTRAINT DEPT_DNO_PK/*<-PK이름 지정하는거임*/ PRIMARY KEY(DNO)
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
    CONSTRAINT EMP_ENO_PK/*PK 이름 지정*/ PRIMARY KEY(ENO),
    CONSTRAINT EMP_MGR_FK/*FK 이름 지정*/ FOREIGN KEY(MGR) REFERENCES EMP(ENO),
    CONSTRAINT EMP_DNO_FK FOREIGN KEY(DNO) REFERENCES DEPT(DNO)
);
COMMIT;
--제약조건 조회
SELECT A.TABLE_NAME,
       A.CONSTRAINT_NAME,
       A.CONSTRAINT_TYPE,
       B.COLUMN_NAME
    FROM USER_CONSTRAINTS A,  --CONSTRAINTS (S붙여야됨)
         USER_CONS_COLUMNS B
    WHERE A.CONSTRAINT_NAME = B.CONSTRAINT_NAME
      AND A.TABLE_NAME IN('DEPT', 'EMP')
    ORDER BY A.TABLE_NAME;
    
--테이블 종속관계 확인
SELECT A.TABLE_NAME AS 상위테이블,
       A.CONSTRAINT_NAME AS 상위제약조건,
       B.TABLE_NAME AS 하위테이블,
       B.CONSTRAINT_NAME AS 참조제약조건
    FROM USER_CONSTRAINTS A,
         USER_CONSTRAINTS B
    WHERE B.R_CONSTRAINT_NAME = A.CONSTRAINT_NAME
      AND A.TABLE_NAME IN('DEPT','EMP')
      ORDER BY A.TABLE_NAME;
      
--제약조건 확인
INSERT INTO DEPT(
    DNO,
    DNAME,
    LOC
) VALUES (
    '10',
    '개발',
    '서울'
);
COMMIT;
INSERT INTO EMP(
    ENO,
    ENAME,
    DNO
) VALUES (
    '9998',
    '조병조',
    '20'
);
COMMIT;

DROP TABLE BOARD;
ROLLBACK;

--BOARD 테이블 생성
--NO NUMBER PK
--NAME VARCHAR2(50)
--SUB VARCHAR2(200)
--B_CONTENT 테이블 생성
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

--10번
--다중 PK
--B_FILE 테이블 만들기
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
(NO, FILE_NO) 하나의 키
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

--11번
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
    '고기천',
    '1111110000000',
    900
);
COMMIT;
SELECT * FROM EMP4;

--12번
--제약조건 관리
CREATE TABLE CLASS(
    CNO VARCHAR2(2),
    CNAME VARCHAR2(50)
);

CREATE TABLE ST(
    SNO VARCHAR2(2),
    SNAME VARCHAR2(50),
    CNO VARCHAR2(2)
);

--CLASS 테이블에 PK 추가
ALTER TABLE CLASS
    ADD CONSTRAINT CLASS_CNO_PK PRIMARY KEY(CNO);
    COMMIT;

--CLASS 테이블에 UK 추가
ALTER TABLE CLASS
    ADD CONSTRAINT CLASS_CNAME_UK UNIQUE(CNAME);

--ST 테이블에 PK 추가
ALTER TABLE ST
    ADD CONSTRAINT ST_SNO_PK PRIMARY KEY(SNO);

--FOREIGN KEY 넣기전에 CLASS 데이터 추가
INSERT INTO CLASS VALUES(
    '01',
    '자바반'
);

INSERT INTO CLASS VALUES(
    '02',
    'AI반'
);

--ST 데이터 추가
INSERT INTO ST VALUES(
    '01',
    '고기천',
    '01'
);

INSERT INTO ST VALUES(
    '02',
    '조병조',
    '02'
);

INSERT INTO ST VALUES(
    '03',
    '홍길동',
    '03'
);

--CLASS의 CNO을 FK로 잡아서 ST테이블에 종속할거임
--ST 테이블에 FK 추가
ALTER TABLE ST
    ADD CONSTRAINT ST_CNO_FK FOREIGN KEY(CNO) REFERENCES CLASS(CNO);  --부모에 없는 값이라 추가 안됨
    
--CNO에(부모에) 값 넣어줌
UPDATE ST
    SET CNO='02'
    WHERE CNO='03';

--부모에 값 넣어주고 다시 FK
ALTER TABLE ST
    ADD CONSTRAINT ST_CNO_FK FOREIGN KEY(CNO) REFERENCES CLASS(CNO);  --부모에 없는 값이라 추가 안됨    

--ST 테이블 PK 삭제 (지정한 이름이 있기 때문에 그 이름을 바로 넣어주면 됨(ST_SNO_PK))
ALTER TABLE ST
    DROP CONSTRAINT ST_SNO_PK;
COMMIT;

--CLASS 테이블 PK 삭제(CNO)
--ST에 종속돼있기때문에 그냥 삭제 안되기 때문에 CASCADE 써서 참조된 키도 삭제하면서 PK도 같이 삭제
ALTER TABLE CLASS
    DROP CONSTRAINT CLASS_CNO_PK CASCADE;
COMMIT;


--13~15번
--컬럼의 추가, 삭제, 수정
DROP TABLE TEST;

CREATE TABLE TEST(
    NO NUMBER
);

--컬럼 추가
ALTER TABLE TEST
    ADD NAME VARCHAR2(20);
    
DESC TEST;

--컬럼 데이터타입 변경
ALTER TABLE TEST
    MODIFY NAME CHAR(20);

DESC TEST;

--컬럼명 변경
ALTER TABLE TEST
    RENAME COLUMN NAME TO TNAME;
    
DESC TEST;

--컬럼 삭제
ALTER TABLE TEST
    DROP COLUMN TNAME;

DESC TEST;

--16번
--서브쿼리를 이용한 테이블 생성
--부서정보와 사원정보를 합친 E_DEPT 테이블을 생성한다.
--(서브쿼리에서 가져온 컬럼들만 사용할 때는 컬럼명은 생략해도 된다.)
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

--실습
--부서번호, 부서명, 부서별 평균급여를 저장하는 D_SAL 테이블 생성
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