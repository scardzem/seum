package Day02;

public class _09_random {

	public static void main(String[] args) {
		
		//(word)���� �߻� �κ�
	//Math.random()���� ������ �߻� ��Ű�� 0<=����<1�� �Ǽ��� �߻��ȴ�
		//1. 0~100 ������ ���� �߻�
		//0.0 * 101 <= num1 < 1.0 * 101
		//0 <= num1 < 101
		int num1 = (int)(Math.random() * 101); //���� �߻��� �Ҽ��� ������ ������ int�� ����ȯ �ؾ���
		System.out.println("�߻��� ���� : " + num1);
		System.out.println("-------------------");
		
	//2. �⺻ ���� �߻�
		// 0.0 <= num2 < 1.0�� �Ǽ��� �߻���
		double num2 = (double)Math.random();
		System.out.println("�߻��� ���� : " + num2);
		System.out.println("-------------------");
		
	//3. 1~45������ ���� �߻�
		//0.0 * 45 +1 <= num3 < 1.0 * 45 + 1
		//  1 <= num3 < 46
		int num3 = (int)(Math.random() * 45) + 1; 	
		System.out.println("�߻��� ���� : " + num3);
		System.out.println("-------------------");
	}

}
