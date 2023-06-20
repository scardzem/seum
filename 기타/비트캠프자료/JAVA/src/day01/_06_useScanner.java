package day01;

import java.util.Scanner;  //import

public class _06_useScanner {

	public static void main(String[] args) {
		
	//3. Scanner 클래스 사용
		Scanner sc=new Scanner(System.in);
		String inputData;
		
		while(true) {
			//엔터 값 이전까지 입력값을 문자열로 저장
			inputData=sc.nextLine();
			System.out.println(inputData);
			
			//문자열 비교는 equals 메소드 사용
			if(inputData.equals("q")) {
				break;
			}
		}
		
		

	}

}
