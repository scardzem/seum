package day01_homework;

import java.util.Scanner;

public class _1_5_google {

	public static void main(String[] args) {
		
		int i1, i2, i3;
		Scanner sc = new Scanner(System.in);
		System.out.println("���� 3�� �Է� : ");
		i1 = sc.nextInt();
		i2 = sc.nextInt();
		i3 = sc.nextInt();
		if((i1+i2)<i3||(i1+i3)<i2||(i2+i3)<i1)
			System.out.println("�ﰢ�� �� ���� ���̰� �� �� �����ϴ�.");
		else System.out.println(("�ﰢ�� �� ���� ���̰� �� �� �ֽ��ϴ�."));

	}

}
