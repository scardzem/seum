package Day04;

public class _02_overloading {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Calculator cal = new Calculator(); 

		int result1 = cal.calculate(10, 20);
		System.out.println("��� ���� : " + result1);
		System.out.println("-------------1---------------");
		
		//�����ε� �� �޼ҵ� ���
		int result2 = cal.calculate(10,  20, 30);
		System.out.println("��� ���� : " + result2);
		System.out.println("-------------2---------------");
		
	}

}
