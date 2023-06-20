package Day05;

import java.util.Scanner;

public class _12_exit {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Scanner sc = new Scanner(System.in);
		
		while(true) {
			System.out.println("1. 종료");
			if(sc.nextLine().equals("1")){
				//exit메소드를 만나면 바로 프로그램 종료	
				System.exit(0);
					//break; 문과 차이점 : break문은 반복문만 종료되고
					//반복문 밖의 코드 실행
		} else {
			System.out.println("다시 입력해주세요.");
			continue;
		}
	}

}

}