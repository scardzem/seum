package day01;

public class _09_switchCase {

	public static void main(String[] args) {
		char grade = 'B';
		
		//grade ���� ���� ����Ǵ� ������ ���� ��
		switch(grade) {
		case 'A' :
			//grade�� A�� �� ����
			System.out.println("90�� �̻��Դϴ�.");
			break;
		case 'B' :
			//grade�� B�� �� ����
			System.out.println("90�� �̸� 80�� �̻��Դϴ�.");
			break;
		case 'C' :
			//grade�� C�� �� ����
			System.out.println("80�� �̸� 70�� �̻��Դϴ�.");
			break;
		default :
			//grade�� A, B, C ��� �ƴ� �� ����
			System.out.println("70�� �̸��Դϴ�.");
			break;
		}
		
		
		
		
		
		
		
		
		
		
		
		
		

	}

}
