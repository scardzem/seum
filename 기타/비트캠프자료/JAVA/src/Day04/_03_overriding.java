package Day04;

public class _03_overriding {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Calculator cal = new Calculator();
		//�θ�Ŭ����(Calculator)�� �޼ҵ� ���
		int result1 = cal.calculate(10,20);
		System.out.println("�θ�Ŭ���� �޼ҵ� ��� ��� : " + result1);
		System.out.println("----------------------");
		
		CalMinus calMinus = new CalMinus();
		//�������̵� �� �ڽ� Ŭ����(CalMinus)�� �޼ҵ� ���
		int result2 = calMinus.calculate(10, 20);
		System.out.println("�������̵� �� �ڽ� Ŭ���� �޼ҵ� ��� ��� : " + result2);
		System.out.println("----------------------");		
	}

}
