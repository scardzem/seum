package Day02_homework;

import java.util.Scanner;

public class _advanced_4_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*4. ��ǻ�ͷ� 0~100������ ������ ������ �����մϴ�
  			 ����ڷκ��� 0~100������ ���ڸ� �Է¹޽��ϴ�
  			 ��ǻ�Ͱ� ������ �������� ũ�� "Ů�ϴ�"
  			 ������ "�۽��ϴ�"�� ����մϴ�
  			 ��� �ݺ��ϴٰ� ���߸� "?ȸ���� ������ϴ�"
   			 �� ����ϼ���.*/
		int count = 1;
		Scanner sc = new Scanner(System.in);
		
		int randomNum = (int)(Math.random() * 101);
		System.out.println(randomNum);
		
		while(true) {
			System.out.print("����� ���ڸ� �Է��ϼ���:");
			int num = sc.nextInt();
			
			if(randomNum == num) {
				System.out.println("���߼̽��ϴ�.");
				System.out.println(count + "ȸ ���� ���߼̽��ϴ�.");
				break;
			}else if(randomNum > num) {
				count++;
				System.out.println(num + "���� Ů�ϴ�.");
			}else if(randomNum < num) {
				count++;
				System.out.println(num + "���� �۽��ϴ�.");
			}
		}
	}

}
