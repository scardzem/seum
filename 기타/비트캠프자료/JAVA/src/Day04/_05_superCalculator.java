package Day04;

import java.util.Scanner;

public class _05_superCalculator {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		
		//CalMinus Ŭ������ �������� ���� ���� (�Ʒ��� ����� Ǯ��)
		System.out.println("1. ����");
		System.out.println("2. ����");
		Scanner sc = new Scanner(System.in);
		CalMinus calMinus = new CalMinus();
		
		calMinus.chk = sc.nextInt();
		//chk == 1 �θ�Ŭ������ Calculator�� calculate �޼ҵ尡 ȣ��Ǿ� ������ ���
		//chk == 2  �ڽ�Ŭ������ CalMinus�� �޼ҵ尡 ����Ǿ� ������ ���
		int result1 = calMinus.calculate(10,20);
				
		if(calMinus.chk == 1){
			System.out.println("������ ��� : " + result1);
		} else {
			System.out.println("������ ��� : " + result1);
		}

		
		int result2 = calMinus.calculate(10, 20, 30);
		
		if(calMinus.chk ==1) {
			System.out.println("������ ��� : "+ result2);
		} else {
			
			System.out.println("������ ��� : " + result2);
		}
		
		
}
}
