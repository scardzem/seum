package Day02_homework;

public class _middle_4_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		/*4. ó���� ���࿡ �ñ� ���� 10000���Դϴ�
   			 �ݸ��� �� 10%�Դϴ�
   			 �������ڷ� ������� �� 10���� �󸶰� �ɱ��?*/
		double money = 10000;

		for (int i = 1; i <= 10; i++) {
			money += (money * 0.1);
		}
		
		System.out.println("10�� �� �ݾ� : " + money);
	}

}
