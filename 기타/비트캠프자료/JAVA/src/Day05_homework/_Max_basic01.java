package Day05_homework;

import java.util.Scanner;
// 3���� �������� �Է��ϰ� �ִ��� ���մϴ�.

class _Max_basic01 {
	public static void main(String[] args) {
		Scanner stdIn = new Scanner(System.in);

		System.out.println("�� ������ �ִ��� ���մϴ�.");
		System.out.print("a�� ����");	int a = stdIn.nextInt();
		System.out.print("b�� ����");	int b = stdIn.nextInt();
		System.out.print("c�� ����");	int c = stdIn.nextInt();
		int max = a;
		
		/*
		�̰��� ������ �ڵ带 ��������
		*/
		if(a>b && a>c) {
			max=b;
			
		} else if(b>a && b>c) {
			max=b;
		} else if(c>a && c>b) {
			max=c;
		}

		System.out.println("�ִ��� " + max + "�Դϴ�.");
	}
}