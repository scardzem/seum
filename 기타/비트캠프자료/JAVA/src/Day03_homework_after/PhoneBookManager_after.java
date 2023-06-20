package Day03_homework_after;

import java.util.Scanner;

public class PhoneBookManager_after {
	//전역변수 : 클래스가 실행되는 동안 계속 메모리에 남아있음
	public static PhoneInfo phoneInfo = new PhoneInfo();
	public static String name;
	public static String phoneNumber;
	public static String birthDay;
	//지역변수 : 클래스가 실행되는 동안 계속 메모리에 남아있음
	//		   메소드나 제어문, 조건문이 종료되면 메모리에서 삭제됨
	//for(int i = 0; i<10; i++) ----> i는 지역변수라 for문 종료 시 삭제됨
	
	public static void showMenu() {
		System.out.println("--선택하세요--");
		System.out.println("1. 데이터 입력");
		System.out.println("2. 프로그램 종료");
	}
	
	public static void readData() {
		phoneInfo.name = name;
		phoneInfo.phoneNumber = phoneNumber;
		phoneInfo.birthDay = birthDay;
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		while(true) {
			showMenu();
			
			System.out.print("선택 : ");
			String chk = sc.nextLine();
			
			if(chk.equals("2")) {
				break;
			} else if(!chk.equals("1")) {
				System.out.println("다시 입력하세요.");
				continue;
			}
			
			System.out.print("이름 입력 : ");
			name = sc.nextLine();
			System.out.print("전화번호 입력 : ");
			phoneNumber = sc.nextLine();
			System.out.print("생년월일 입력 : ");
			birthDay = sc.nextLine();
			
			System.out.println("----------------------------------");
			
			readData();
			
			phoneInfo.showPhoneInfo();
		}
	}

}
