package Day02_homework;

import java.util.Scanner;

public class _advanced_2_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*2. ���� ���� �� ������ ����ϴ�
   			 ��ǻ�ʹ� ������ �����ϰ� ����ڴ� ���ڿ��� �Է¹޽��ϴ�
   			 10�� �����ϰ� �� �� ��� �� ����ϼ���*/
		Scanner sc = new Scanner(System.in);
		String strNum = "";
		int num = 0;
		int randomNum = 0;
		
		for(int i = 0; i < 10; i++) {
			randomNum = (int)(Math.random() * 3);
			System.out.println(randomNum); //��ǻ�Ͱ� �� �� ��� (0:����, 1:����, 2:��)
			
			System.out.print("����, ����, �� �� �ϳ� �Է�");
			strNum = sc.nextLine();
			
			if(strNum.equals("����")) {
				num = 0;
			} else if(strNum.equals("����")) {
				num = 1;
			} else if(strNum.equals("��")) {
				num = 2;
			} else {
				System.out.println("�߸��Է��ϼ̽��ϴ�.");
				//�߸� �Է� �� �� ȸ�� ���� �ٽ� ����(��Ƽ���� �ٽ� ���� ���µ� for�Լ��� i�� 1�� �Ǳ� ������
				//�߸��Է����� �� ���� Ƚ���� �����Ű�� �ʱ� ���ؼ� i--;�� �ϰ� ���������� ��
				i--;
				continue;
			}
			
			if(num == randomNum) {
				System.out.println("���");
			} else if(num == 0) {
				if(randomNum == 1) {
					System.out.println("��");
				} else {
					System.out.println("��");
				}
			} else if(num == 1) {
				if(randomNum == 2) {
					System.out.println("��");
				} else {
					System.out.println("��");
				}
			} else if(num == 2) {
				if(randomNum == 0) {
					System.out.println("��");
				} else {
					System.out.println("��");
				}
			}
		}
	}

}
