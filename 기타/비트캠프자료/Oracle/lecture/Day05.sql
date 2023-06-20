1. 인덱스(INDEX)
    - 인덱스는 테이블 검색 성능을 향상시켜주는 개체
    - 일반적으로 인덱스가 생성되지 않은 테이블의 데이터 저장은
      저장 순서와 무관하게 저장
    - 인덱스가 생성되어 있지 않은 테이블의 검색은 풀 스캔 검색으로 진행돼서
      모든 테이블의 데이터와 비교해서 검색
    - 테이블에 인덱스를 생성하게 되면 인덱스로 지정된 컬럼만
      따로 시스템 테이블로 생성되어 관리됨 --검색속도 향상
    - 인덱스의 순서에 따라 정렬된 데이터가 생성
2. 인덱스의 종류
    - 고유 인덱스(UNIQUE INDEX)
      중복 값이 입력되지 않은 인덱스
      PK, UK를 선언하면 자동으로 고유 인덱스 지정됨
    - 비 고유 인덱스(NON UNIQUE INDEX)
      중복 값이 허용되는 인덱스
      무조건 수동으로 생성해야 됨
3. 인덱스의 조건
    - 테이블 크기가 최소 수십만건에서 수천만건 이상
    - 테이블의 크기가 작으면 인덱스가 별로 효율적이지 않음
    - 조건구문과 조인에 자주 사용되는 컬럼에 지정
    - 검색하는 데이터 양이 전체 데이터의 5%미만일때 지정
      (전체)10,000,000건 -> 200,000건 검색할 때
    - FK 컬럼은 반드시 인덱스를 생성
4. 인덱스의 생성
    - 자동 생성
      PK, UK를 선언 시 자동으로 생성됨
      고유 인덱스로 생성됨
    - 수동 생성
        CREATE INDEX 구문을 사용하여 생성
        비 고유 인덱스가 생성됨
    - CREATE INDEX 인덱스명
      ON 테이블 명(컬럼|함수|수식);
5. 인덱스의 삭제
    - DROP INDEX 구문을 사용하여 인덱스 삭제
    - DROP INDEX 인덱스 명;
6. 뷰(VIEW)
    - 하나의 테이블 또는 여러 테이블의 논리적인 부분 집합을 의미
    - 뷰는 사용자 접근제어에 효과적이다.
      사용자가 원천 테이블에 접근하지 않고도 해당 데이터를 조회
    - 뷰를 생성하면 원천 테이블 접근할 수 없기 때문에 보안에도 용이    
      ex) 지역테이블, 현재날씨테이블
          현재 지역 날씨 뷰를 생성하여
          지역별 현재 날씨 정보를 실시간으로 계속 갱신
--(뷰도 테이블처럼 만들어서 관리하는거고 원천 테이블이 바뀌면 뷰도 자동으로 바뀜)
7. 뷰의 종류
    - 단순 뷰(SIMPLE VIEW)
      단일 테이블로 만들어진 뷰
      함수나 수식을 포함하지 않고 단순 컬럼으로만 구성
      DML(INSERT, UPDATE, DELETE) 구문의 사용이 가능
    - 복합 뷰(COMPLEX VIEW)
      다중 테이블로 만들어진 뷰
      함수나 수식이 포함됨
      DML 구문의 사용이 불가능
8. 뷰의 생성
    - CREATE (OR REPLACE) (FORCE|NOFORCE) VIEW 뷰이름(
        컬럼1,
        컬럼2,
        ......
    ) AS (SELECT 구문)
    (WITH CHECK OPTION CONSTRAINT 제약조건명)
    (WITH READ ONLY CONSTRAINT 제약조건명)
     OR REPLACE : 뷰가 존재하면 삭제하고 새로 생성
     FORCE : 원천 테이블이 없어도 뷰 생성
             지정 안했을 때 기본 값은 NOFORCE
     WITH CHECK OPTION : 뷰에 의해서 검색 가능한 행만 DML 구문 사용 가능하도록 설정
     WITH READ ONLY : 뷰를 통해서는 SELECT 구문만 사용 가능하도록 설정
9. 인라인 뷰
    - FROM 구문에 선언된 서브쿼리를 인라인 뷰라고 함
    - 인라인 뷰는 뷰가 따로 생성되지 않고 조회 구문이 실행 될 때만 존재함
    - 조인이나 조건 검색을 할 때 자주 사용
    - 그룹 함수를 써야될 때 주로 사용
10. ROWNUM
    - 조회한 데이터 건수를 제한할 때 사용
    - 주로 인라인 뷰와 함께 사용
    - 인라인 뷰는 ORDER BY 구문으로 정렬된 상태
    - SELECT ROWNUM,  --(쉼표 있는게 맞음 컬럼처럼 추가하고 WHERE로 조건 달아준다.)
            컬럼1,
            컬럼2,
            ......
        FROM(정렬된 인라인 뷰)
        WHERE ROWNUM <|>|<=|>= N;
11. 시퀀스(SEQUENCE)
    - 시퀀스는 유일한 숫자를 제공하는 개체
    - 시퀀스는 게시물번호와 같이 절대 중복 돼서는 안되는 컬럼에 지정
12. 시퀀스의 생성
    - CREATE SEQUENCE 시퀀스 명
      START WITH 시작 값
      INCREMENT BY 증가 값
      MAXVALUE 상한 값 | NOMAXVALUE
      MINVALUE 하한 값 | NOMINVALUE
      CYCLE | NO CYCLE
      CACHE 캐시메모리 생성개수 | NOCACHE;
        - 자동으로 유일한 값을 생성하는 시퀀스를 만듦
        - START WITH : 할당된 값의 시작 값을 지정
        - INCREMENT BY : 생성되는 값의 증가 값을 지정
        - MAXVALUE : 상한 값 지정. 기본 값은 NOMAXVALUE
        - MINVALUE : 하한 값 지정. 기본 값은 NOMINVALUE
        - CYCLE : 상한 값까지 생성 후 다시 하한 값부터 재생성 될 지 여부 지정
                  기본 값은 NOCYCLE
                  NOCYCLE로 지정 시 상한값까지 가면 더 이상 값이 생성되지 않음
        - CACHE : 캐시메모리 생성개수 지정
                  기본 값은 NOCACHE
                  NOCACHE로 지정 시 자동으로 20개의 캐시메모리 생성
13. 시퀀스의 수정과 삭제
    - 시퀀스 수정
      ALTER SEQUENCE 시퀀스명
      INCREMENT BY 증가 값
      MAXVALUE
      MINVALUE
      CYCLE
      CACHE;
      수정 시에 START WITH 시작 값은 변경할 수 없음
    - 시퀀스 삭제
      DROP SEQUENCE 시퀀스명;
14. 시퀀스의 사용
    - 시퀀스명.NEXTVAL : 시퀀스로부터 유일한 값을 할당받음
    - 시퀀스명.CURRVAL : 시퀀스로부터 마지막에 할당받은 값을 다시 할당받음
    --SELECT * FROM USER_SEQUENCES; 현재 생성돼있는 시퀀스 조회
15. 자연 조인(NATURAL JOIN)
    - 자연 조인은 동일한 타입과 이름을 가진 컬럼을 조인 조건으로 이용하는 조인 문장
    - 등가 조인에서만 사용 가능
    - 조인되는 컬럼명의 명시 없이 사용 가능
    - SELECT 컬럼1,
             컬럼2,
             컬럼3
             ......
        FROM 테이블A --별칭 쓴거 아님
        NATURAL JOIN 조인될 테이블B --별칭 쓴거 아님
        WHERE 검색 조건(조인조건은 사용 불가);
    - 자연 조인에서는 두 테이블 간 공통된 컬럼이 반드시 하나만 존재해야됨

16. USING 구문 조인
    - 공통되는 컬럼이 두 개 이상이거나 조인 되는 컬럼 명을 명시하고 싶을 때
      USING 구문 사용하여 조인
    -SELECT 컬럼1,
            컬럼2,
            ......
        FROM 테이블 A
        JOIN 조인될 테이블 B USING(조인될 컬럼명)
        JOIN 조인될 테이블 C USING(조인될 컬럼명)
        ......
        WHERE 조회조건;
17.다중 열의 IN 연산자
    - SELECT 컬럼1,
             컬럼2
             ......
        FROM 테이블1
        WHERE(비교될 컬럼1, 비교될 컬럼2,......) IN (서브쿼리);
    - 지정한 비교대상 컬럼의 개수와
      서브쿼리에서 조회하는 컬럼의 개수가 일치해야 됨
18. 조회할 컬럼에 조건을 걸어주는 CASE WHEN 구문과 DECODE 구문
    - 오라클에는 IF-ELSE IF-ELSE 구문 제공되지 않아서
      컬럼에 대한 조건문을 작성하려면 CASE WHEN 구문과 DECODE 구문을 사용
    - CASE WHEN 구문은 거의 모든 RDBMS에서 지원하지만
       DECODE는 오라클에서만 지원  
19. CASE WHEN 구문
    1) CASE 컬럼 WHEN 값1 THEN 결과1
                WHEN 값2 THEN 결과2
                WHEN 값3 THEN 결과3
                ......
                ELSE 결과
      END
    2) CASE WHEN 조건1 THEN 결과1
            WHEN 조건2 THEN 결과2
            ......
            ELSE 결과
      END
20. DECODE 구문
    - DECODE(컬럼, 값1, 결과1, 값2, 결과2,......, 기본값)
21. 계층 조회를 지원하는 START WITH ...... CONNECT BY PRIOR 구문
    --EMP 데이터 보면 안영희가 최고등급이고 그 밑에 3명 그 밑에 등급..이런식으로 돼있는걸 볼수있음..
    - 계층구조의 데이터를 계층구조별로 조회할 때 사용
    - SELECT LEVEL
            , 컬럼1
            , 컬럼2
            ...
        FROM 테이블명
        WHERE 조건
        START WITH 시작조건
        CONNECT BY PRIOR 계층조건;
        - LEVEL : 각 계층 깊이를 의미
                  시작조건이 1로 지정
        - START WITH : 계층의 시작위치 지정
        - CONNECT BY PRIOR : 계층관계를 정의
                             조건의 기술 순서에 따라 계층구조 조회 방향이 결정
                             부모컬럼 = 자식컬럼 계층을 하향으로 조회
                             자식컬럼 = 부모컬럼 계층을 상향으로 조회
