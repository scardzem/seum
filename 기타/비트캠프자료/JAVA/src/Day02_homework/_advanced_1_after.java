package Day02_homework;

import java.util.Scanner;

public class _advanced_1_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*1. 2���� ��鿡�� �ϳ��� ���簢���� �� ������ ǥ���ȴ�. (50, 50)�� (100, 100)��
   			 �� ������ �̷���� ���簢���� �ִٰ� ����. 
   			 �̶� Ű����κ��� �ٸ� ���簢���� �����ϴ� �� ��(x1, y1), (x2, y2)�� �Է¹޾�
   			 �� ���� ���簢���� ���� �浹�ϴ��� �Ǻ��ϴ� ���α׷��� �ۼ��ϼ���*/
		
		Scanner sc = new Scanner(System.in);

		System.out.print("x1�� ��ǥ�� �Է����ּ���>> ");
		int x1 = sc.nextInt();
		System.out.print("y1�� ��ǥ�� �Է����ּ���>> ");
		int y1 = sc.nextInt();
		System.out.print("x2�� ��ǥ�� �Է����ּ���>> ");
		int x2 = sc.nextInt();
		System.out.print("y2�� ��ǥ�� �Է����ּ���>> ");
		int y2 = sc.nextInt();
		int x, y;
		
		//���α׷��� ���� �Ǹ鼭 ���� �ԷµǸ� ���� �ʱ�ȭ ���� �ʾƵ� ��
		//���� �Է� ���� ���� ��Ȳ�� �߻� �ÿ��� �ʱ�ȭ �ʿ�
		
		if (x1 > 0 && x2 > 0) {				//x1, x2��ǥ�� �� �� ����϶�
			if (x1 > x2)					//x1�� x2���� ũ�� x1-x2
				x = x1 - x2;
			else							//x1�� x2���� ������ x2-x1�� �ٲ���.
				x = x2 - x1;				//�ȱ׷��� ������ �����⶧����.
		} else {							//x1, x2 �Ѵ� �����ų� �ϳ��� �����϶�
			x = x1 + x2;					//-�� -�� ������ +�� �Ǿ�����ϱ� �׳� ������
		}
		
		if (y1 > 0 && y2 > 0) {				// ���� ����
			if (y1 > y2)
				y = y1 - y2;
			else
				y = y2 - y1;
		} else {
			y = y1 + y2;
		}

		if (x >= 50 || y >= 50) {//x�� x1��ǥ�� x2��ǥ�� ���̰�, y�� ��������. �� �� �ϳ��� �ǵ� �浹.
			System.out.println("�浹�մϴ�.");
		} else {
			System.out.println("�浹�����ʽ��ϴ�.");
		}
	}

}
