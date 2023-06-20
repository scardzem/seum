package day01_homework;

import java.io.IOException;

public class _1_2 {

	public static void main(String[] args) throws IOException {

		/* 2. 영문자를 입력받습니다
		      소문자는 대문자로, 대문자는 소문자로 변경해서 출력하세요 
		      (조건 연산자를 사용하세요)
		      (아스키테이블/유니코드테이블을 참조하면 됩니다) 
		*/
		

		int keyCode;
			keyCode=System.in.read();
			
			if(keyCode<=90) {
				System.out.println((char)(keyCode+32));
			} else {
				System.out.println((char)(keyCode-32));
			}
			
		
		
	}

}
