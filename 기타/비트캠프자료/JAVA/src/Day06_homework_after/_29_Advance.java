package Day06_homework_after;

import java.util.Scanner;

public class _29_Advance {
	static Employee[] empl = new Employee[100];
	static int num;
	static String name;
	static double pay;
	static double bonus;
	static int workday;
	static int index = 0; // �迭�� ��� index ���� inputPermanent(); ���� ������ �����
	
	public static void viewMenu() {  //���θ޼ҵ尡 ����Ǹ� �����ֱ� ���� ����
		System.out.println("1. ������ ����");
		System.out.println("2. �ӽ��� ����");
		System.out.println("3. ����� ����");
		System.out.println("4. ��ü ���� ��� ");
		System.out.println("5. ���� ��� ��� ");
		System.out.println("6. ���α׷� ����");
	}
	
	public static void inputPermanent(int num, String name, double pay, double bonus) {
		if(index < 100) {
			empl[index++] = new PermanentWorker(num, name, bonus, pay);
			System.out.println("������ �Ϸ�Ǿ����ϴ�.");
		} else {
			System.out.println("�� �̻� �Է��� �� �����ϴ�.");
		}
	}
	
	public static void inputContract(int num, String name, double pay, int workday) {
		if(index < 100) {
			empl[index++] = new ContractWorker(num, name, pay, workday);
			System.out.println("������ �Ϸ�Ǿ����ϴ�.");
		} else {
			System.out.println("�� �̻� �Է��� �� �����ϴ�.");
		}
	}
	
	public static void inputTemporary(int num, String name, double pay) {
		if(index < 100) {
			empl[index++] = new TemporaryWorker(num, name, pay);
			System.out.println("������ �Ϸ�Ǿ����ϴ�.");
		} else {
			System.out.println("�� �̻� �Է��� �� �����ϴ�.");
		}
	}

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		while(true) {
			viewMenu();
			
			String choice = sc.nextLine();
			
			switch(choice) {
				case "6" :
					System.exit(0);
				case "1" :
					num++;
					System.out.print("�̸� �Է� : ");
					name = sc.nextLine();
					System.out.print("���� �Է� : ");
					pay = Double.parseDouble(sc.nextLine());
					System.out.print("���ʽ� �Է� : ");
					bonus = Double.parseDouble(sc.nextLine());
					inputPermanent(num, name, pay, bonus);
					break;
				case "2" :
					num++;
					System.out.print("�̸� �Է� : ");
					name = sc.nextLine();
					System.out.print("���� �Է� : ");
					pay = Double.parseDouble(sc.nextLine());
					System.out.print("���� �ϼ� �Է� : ");
					workday = Integer.parseInt(sc.nextLine());
					inputContract(num, name, pay, workday);
					break;
				case "3" :
					num++;
					System.out.print("�̸� �Է� : ");
					name = sc.nextLine();
					System.out.print("���� �Է� : ");
					pay = Double.parseDouble(sc.nextLine());
					inputTemporary(num, name, pay);
					break;
				case "4" :
					for(int i = 0; i < index; i++) {
						empl[i].ShowEmployeeInfo();
					}
					break;
				case "5" :
					System.out.print("�޿� ���� ����� ��� ��ȣ �Է� : ");
					int emplNum = Integer.parseInt(sc.nextLine());
					for(int i = 0; i < index; i++) {
						if(emplNum == empl[i].num) {
							System.out.println("�ش� ����� �޿��� : " + empl[i].getMonthPay() + "���Դϴ�.");
						}
					}
					break;
				default :  // 1~6�ܿ� �ٸ� ���� �Է����� ��
					System.out.println("�߸� �Է��ϼ̽��ϴ�.");
					break;
			}
		}
	}

}
