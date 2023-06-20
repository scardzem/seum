package day01;

import java.io.IOException;  //import

public class _05_systemIn {

	public static void main(String[] args) throws IOException {  //throws~~~

		//2. 시스템 입력
		int keyCode;
		
		while(true) {
			keyCode=System.in.read();
			System.out.println(keyCode);
			
			//입력된 키코드 값이 소문자 q일 때 반복문 종료
			if(keyCode == 113) {
				break;
			}
		}
		
		

	}

}
