package Day03_homework_after;

import java.util.Scanner;

public class PhoneBookManager_after {
	//�������� : Ŭ������ ����Ǵ� ���� ��� �޸𸮿� ��������
	public static PhoneInfo phoneInfo = new PhoneInfo();
	public static String name;
	public static String phoneNumber;
	public static String birthDay;
	//�������� : Ŭ������ ����Ǵ� ���� ��� �޸𸮿� ��������
	//		   �޼ҵ峪 ���, ���ǹ��� ����Ǹ� �޸𸮿��� ������
	//for(int i = 0; i<10; i++) ----> i�� ���������� for�� ���� �� ������
	
	public static void showMenu() {
		System.out.println("--�����ϼ���--");
		System.out.println("1. ������ �Է�");
		System.out.println("2. ���α׷� ����");
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
			
			System.out.print("���� : ");
			String chk = sc.nextLine();
			
			if(chk.equals("2")) {
				break;
			} else if(!chk.equals("1")) {
				System.out.println("�ٽ� �Է��ϼ���.");
				continue;
			}
			
			System.out.print("�̸� �Է� : ");
			name = sc.nextLine();
			System.out.print("��ȭ��ȣ �Է� : ");
			phoneNumber = sc.nextLine();
			System.out.print("������� �Է� : ");
			birthDay = sc.nextLine();
			
			System.out.println("----------------------------------");
			
			readData();
			
			phoneInfo.showPhoneInfo();
		}
	}

}
