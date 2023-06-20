package day01_homework;

import java.io.IOException;

public class _1_1 {

	public static void main(String[] args) throws IOException {	
		
		int keyCode;
		
		while(true) {
			keyCode=System.in.read();
			
			
			//입력된 키코드 값이 소문자 q일 때 반복문 종료
			if(keyCode <= 90) {
				System.out.println("대문자");
				break;
				
			} else {
				System.out.println("소문자");
				break;
				
			}
		}
		
		
		
		
		
	}

}
