package Day06_homework_after;

import java.util.Scanner;

public class _29_Advance {
	static Employee[] empl = new Employee[100];
	static int num;
	static String name;
	static double pay;
	static double bonus;
	static int workday;
	static int index = 0; // 배열에 담긴 index 수로 inputPermanent(); 에서 쓰려고 만든듯
	
	public static void viewMenu() {  //메인메소드가 실행되면 보여주기 위해 만듦
		System.out.println("1. 정규직 저장");
		System.out.println("2. 임시직 저장");
		System.out.println("3. 계약직 저장");
		System.out.println("4. 전체 정보 출력 ");
		System.out.println("5. 월급 계산 출력 ");
		System.out.println("6. 프로그램 종료");
	}
	
	public static void inputPermanent(int num, String name, double pay, double bonus) {
		if(index < 100) {
			empl[index++] = new PermanentWorker(num, name, bonus, pay);
			System.out.println("저장이 완료되었습니다.");
		} else {
			System.out.println("더 이상 입력할 수 없습니다.");
		}
	}
	
	public static void inputContract(int num, String name, double pay, int workday) {
		if(index < 100) {
			empl[index++] = new ContractWorker(num, name, pay, workday);
			System.out.println("저장이 완료되었습니다.");
		} else {
			System.out.println("더 이상 입력할 수 없습니다.");
		}
	}
	
	public static void inputTemporary(int num, String name, double pay) {
		if(index < 100) {
			empl[index++] = new TemporaryWorker(num, name, pay);
			System.out.println("저장이 완료되었습니다.");
		} else {
			System.out.println("더 이상 입력할 수 없습니다.");
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
					System.out.print("이름 입력 : ");
					name = sc.nextLine();
					System.out.print("월급 입력 : ");
					pay = Double.parseDouble(sc.nextLine());
					System.out.print("보너스 입력 : ");
					bonus = Double.parseDouble(sc.nextLine());
					inputPermanent(num, name, pay, bonus);
					break;
				case "2" :
					num++;
					System.out.print("이름 입력 : ");
					name = sc.nextLine();
					System.out.print("월급 입력 : ");
					pay = Double.parseDouble(sc.nextLine());
					System.out.print("일한 일수 입력 : ");
					workday = Integer.parseInt(sc.nextLine());
					inputContract(num, name, pay, workday);
					break;
				case "3" :
					num++;
					System.out.print("이름 입력 : ");
					name = sc.nextLine();
					System.out.print("월급 입력 : ");
					pay = Double.parseDouble(sc.nextLine());
					inputTemporary(num, name, pay);
					break;
				case "4" :
					for(int i = 0; i < index; i++) {
						empl[i].ShowEmployeeInfo();
					}
					break;
				case "5" :
					System.out.print("급여 정보 출력할 사원 번호 입력 : ");
					int emplNum = Integer.parseInt(sc.nextLine());
					for(int i = 0; i < index; i++) {
						if(emplNum == empl[i].num) {
							System.out.println("해당 사원의 급여는 : " + empl[i].getMonthPay() + "원입니다.");
						}
					}
					break;
				default :  // 1~6외에 다른 숫자 입력했을 때
					System.out.println("잘못 입력하셨습니다.");
					break;
			}
		}
	}

}
