package Day06;

import java.util.Scanner;

public class _14_max_min {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		System.out.println("���� �Է� : ");
		int a = sc.nextInt();
		System.out.println("���� �Է� : ");
		int b = sc.nextInt();
		
		System.out.println(a+"�� " + b + "�߿� ū ���� : " + Math.max(a, b));
		System.out.println(a+"�� " + b + "�߿� ���� ���� : " + Math.min(a, b));
	}

}
