package Day05_homework;

		import java.util.Scanner;
		// 3���� �������� �Է��ϰ� �߾Ӱ��� ���� ���� ����մϴ�.

		class Median_after {
			static int med3(int a, int b, int c) {
				/*�� �޼��带 �ϼ��ϼ���*/
				if(a >= b) {
					if(c < b) {
						return b;
					} else if(c < a) {
						return c;
					} else {
						return a;
					}
				} else if(c >= b) {  //a >=b�� �ƴѰ����� else if�� �����̱� ������ �ΰ����� ����
					return b;
				} else if(a >= c) {
					return a;
				} else {
					return c;
				}
			}

			public static void main(String[] args) {
				Scanner stdIn = new Scanner(System.in);

				System.out.println("�� ������ �߾Ӱ������մϴ�.");
				System.out.print("a�� ����");	
				int a = stdIn.nextInt();
				System.out.print("b�� ����");	
				int b = stdIn.nextInt();
				System.out.print("c�� ����");	
				int c = stdIn.nextInt();
				
				

				System.out.println("�߾Ӱ��� " + med3(a, b, c) + "�Դϴ�.");

	}

}
