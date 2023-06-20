package home_trainning;

import java.util.Scanner;

public class _day01_homework_advanced_3 {

	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in);
		
		int won[] = new int[8];
		int unit[] = { 50000, 10000, 5000, 1000, 500, 100, 10, 1 };
		System.out.println("금액 입력 : ");
		int money = sc.nextInt();
		
		for (int i=0; i<8; i++) {
			won[i] = money / unit[i];
			money = money % unit[i];
			System.out.println(unit[i] + "원 권 " + won[i] + "개");
		}
		
	}

}
