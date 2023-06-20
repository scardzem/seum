package Day04_homework_after;

import java.util.Scanner;

public class PhoneBookManagerV2 {
	//���������� �����ߴ� PhoneInfo ��ü ����
	public static String name;
	public static String phoneNumber;
	public static String birthDay;
	
	//�ԷµǴ� �����͸� ������ PhoneInfo �迭 ����
	public static PhoneInfo[] phoneArr = new PhoneInfo[100];
	//�ԷµǴ� ������ ����
	public static int count = 0;
	
	public static void showMenu() {
		System.out.println("--�����ϼ���--");
		System.out.println("1. ������ �Է�");
		System.out.println("2. ������ �˻�");
		System.out.println("3. ������ ����");
		System.out.println("4. ������ ����");
		System.out.println("5. ������ ��ü ���");
		System.out.println("6. ���α׷� ����");
	}
	
	public static void readData() {
		//PhoneInfo ��ü �������� ����
		PhoneInfo phoneInfo = new PhoneInfo();
		
		phoneInfo.name = name;
		phoneInfo.phoneNumber = phoneNumber;
		phoneInfo.birthDay = birthDay;
		
		if(count == phoneArr.length) {
			System.out.println("�� �̻� ���� ����");
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
		
		System.out.print("�̸� ���� : ");
		name = sc.nextLine();
		System.out.print("��ȭ��ȣ ���� : ");
		phoneNumber = sc.nextLine();
		System.out.print("������� ���� : ");
		birthDay = sc.nextLine();
		
		PhoneInfo pInfo = new PhoneInfo(name, phoneNumber, birthDay);
		phoneArr[index] = pInfo;
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		while(true) {
			showMenu();
			
			System.out.print("���� : ");
			String chk = sc.nextLine();
			
			String keyWord = "";
			
			if(chk.equals("6")) {
				break;
			} else if(chk.equals("1")) {
				System.out.println("������ �Է��� �����մϴ�..");
				System.out.print("�̸� �Է� : ");
				name = sc.nextLine();
				System.out.print("��ȭ��ȣ �Է� : ");
				phoneNumber = sc.nextLine();
				System.out.print("������� �Է� : ");
				birthDay = sc.nextLine();
				
				System.out.println("----------------------------------");
				
				readData();
			} else if(chk.equals("2")) {
				System.out.print("�˻��� �̸��� �Է��ϼ���.");
				keyWord = sc.nextLine();
				search(keyWord);
			} else if(chk.equals("3")) {
				System.out.print("������ �̸��� �Է��ϼ���.");
				keyWord = sc.nextLine();
				delete(keyWord);
			} else if(chk.equals("4")) {
				System.out.print("������ �̸��� �Է��ϼ���.");
				keyWord = sc.nextLine();
				update(keyWord, sc);
			} else if(chk.equals("5")) {
				for(int i = 0; i < count; i++) {
					System.out.println("PhoneInfo �迭 ���� ����");
					System.out.println(phoneArr[i].toString());
					/*
					[name : ȫ�浿, phoneNum : 1, birthDay : 1],
					[name : �Ӳ���, phoneNum : 2, birthDay : 2],
					......
					*/
					System.out.println("-----------------------");
					phoneArr[i].showPhoneInfo();
					System.out.println("-----------------------");					
				}
				System.out.println("�� " + count + "�� ��µƽ��ϴ�.");
			} else {
				System.out.println("�߸� �Է��ϼ̽��ϴ�.");
				continue;
			}
		}
	}

}
