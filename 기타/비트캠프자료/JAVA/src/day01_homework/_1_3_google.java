package day01_homework;

import java.util.Scanner;

public class _1_3_google {

	public static void main(String[] args) {
		
			
		
		//3. Scanner Ŭ���� ���
		
		Scanner sc = new Scanner(System.in);
		
		int won[] = new int[8];
		int unit[] = { 50000, 10000, 5000, 1000, 500, 100, 10, 1 };
		System.out.println("�ݾ� �Է� : ");
		int money = sc.nextInt();
		
		for (int i=0; i<8; i++) {
			won[i] = money / unit[i];
			money = money % unit[i];
			System.out.println(unit[i] + "�� �� " + won[i] + "��");
		}
		
		

	}

}
