package Day05;

public class _13_nanoTime {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//�ջ� �� �ð��� ���� ����
		long time1 = System.nanoTime();
		
		int sum = 0;
		
		for(int i = 1; i<= 100000; i++) {
			sum += i;
		}
		
		//�ջ� �� �ð��� ���� ����
		long time2 = System.nanoTime();
		System.out.println("1~100000������ ���� : " + sum);
		System.out.println("1~100000������ �ջ꿡 �ɸ� �ð� : " + (time2 - time1) + "������ �Դϴ�.");
		
		

	}

}
