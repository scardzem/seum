package Day04_homework_after;

import java.util.Scanner;

public class PhoneBookManagerV2 {
	//전역변수로 선언했던 PhoneInfo 객체 삭제
	public static String name;
	public static String phoneNumber;
	public static String birthDay;
	
	//입력되는 데이터를 저장할 PhoneInfo 배열 선언
	public static PhoneInfo[] phoneArr = new PhoneInfo[100];
	//입력되는 데이터 개수
	public static int count = 0;
	
	public static void showMenu() {
		System.out.println("--선택하세요--");
		System.out.println("1. 데이터 입력");
		System.out.println("2. 데이터 검색");
		System.out.println("3. 데이터 삭제");
		System.out.println("4. 데이터 수정");
		System.out.println("5. 데이터 전체 출력");
		System.out.println("6. 프로그램 종료");
	}
	
	public static void readData() {
		//PhoneInfo 객체 지역변수 선언
		PhoneInfo phoneInfo = new PhoneInfo();
		
		phoneInfo.name = name;
		phoneInfo.phoneNumber = phoneNumber;
		phoneInfo.birthDay = birthDay;
		
		if(count == phoneArr.length) {
			System.out.println("더 이상 저장 못함");
		} else {
			phoneArr[count++] = phoneInfo;
		}
	}
	
	public static void search(String keyWord) {
		for(int i = 0; i < count; i++) {
			if(keyWord.equals(phoneArr[i].name)) {
				phoneArr[i].showPhoneInfo();
				System.out.println("----------------------------------");
			}
		}
	}
	
	public static void delete(String keyWord) {
		int index = 0;
		for(int i = 0; i < count; i++) {
			if(keyWord.equals(phoneArr[i].name)) {
				index = i;
			}
		}
		
		if(index == count - 1) {
			phoneArr[index] = null;
		} else {
			for(int j = index; j < count; j++) {
				phoneArr[j] = phoneArr[j + 1];
			}
		}
		
		count--;
	}
	
	public static void update(String keyWord, Scanner sc) {
		int index = 0;
		for(int i = 0; i < count; i++) {
			if(keyWord.equals(phoneArr[i].name)) {
				index = i;
			}
		}
		
		System.out.print("이름 수정 : ");
		name = sc.nextLine();
		System.out.print("전화번호 수정 : ");
		phoneNumber = sc.nextLine();
		System.out.print("생년월일 수정 : ");
		birthDay = sc.nextLine();
		
		PhoneInfo pInfo = new PhoneInfo(name, phoneNumber, birthDay);
		phoneArr[index] = pInfo;
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		while(true) {
			showMenu();
			
			System.out.print("선택 : ");
			String chk = sc.nextLine();
			
			String keyWord = "";
			
			if(chk.equals("6")) {
				break;
			} else if(chk.equals("1")) {
				System.out.println("데이터 입력을 시작합니다..");
				System.out.print("이름 입력 : ");
				name = sc.nextLine();
				System.out.print("전화번호 입력 : ");
				phoneNumber = sc.nextLine();
				System.out.print("생년월일 입력 : ");
				birthDay = sc.nextLine();
				
				System.out.println("----------------------------------");
				
				readData();
			} else if(chk.equals("2")) {
				System.out.print("검색할 이름을 입력하세요.");
				keyWord = sc.nextLine();
				search(keyWord);
			} else if(chk.equals("3")) {
				System.out.print("삭제할 이름을 입력하세요.");
				keyWord = sc.nextLine();
				delete(keyWord);
			} else if(chk.equals("4")) {
				System.out.print("수정할 이름을 입력하세요.");
				keyWord = sc.nextLine();
				update(keyWord, sc);
			} else if(chk.equals("5")) {
				for(int i = 0; i < count; i++) {
					System.out.println("PhoneInfo 배열 저장 상태");
					System.out.println(phoneArr[i].toString());
					/*
					[name : 홍길동, phoneNum : 1, birthDay : 1],
					[name : 임꺽정, phoneNum : 2, birthDay : 2],
					......
					*/
					System.out.println("-----------------------");
					phoneArr[i].showPhoneInfo();
					System.out.println("-----------------------");					
				}
				System.out.println("총 " + count + "건 출력됐습니다.");
			} else {
				System.out.println("잘못 입력하셨습니다.");
				continue;
			}
		}
	}

}
