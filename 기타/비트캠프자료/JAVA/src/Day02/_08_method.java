package Day02;

public class _08_method {

	public static void main(String[] args) {
		
		Calculator cal = new Calculator();
		
		int result;
		double result2;
		
		//result=cal.add(10,3)
		//�̰��� Calculator Ŭ������ �ִ� add�Լ��� 10,3�� �Է��ؼ� ���� ���� �޴� ����
		//(void���� ������ ���ٴ°� ���� ���� �˵�)
		result = cal.add(10, 3);
		System.out.println("10 + 3 = " + result);
		
		result2 = cal.devide(10,  3);
		System.out.println("10 / 3 = " + result2);
		
		
		//CalculatorŬ���� �Ʒ��κп� ���Ѱ�
		int[] scores = {100, 85, 75};
		int result3;
		
		//�迭�� sum�޼ҵ��� �Ű� ������ ����
		result3 = cal.sum(scores);
		System.out.println("������ �� ���� : "+ result3); 
	}
	
}
