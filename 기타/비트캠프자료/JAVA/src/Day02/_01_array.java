package Day02;

import day01._04_systemInOut;

public class _01_array {

	public static void main(String[] args) {
		
	//1. �� �����Ͽ� �迭 �ʱ�ȭ
		int[] score1 = {100, 90, 80};
		
		//.length �޼ҵ� : �迭�� ���� ����
		//.length �޼ҵ�� �б� ���� �޼ҵ�� ���� ������ �Ұ���
		//score1.length = 10; �̷� ����� �� ���� �Ұ���
		for(int i = 0; i < score1.length; i++) {
			//�迭�� ��� �ϳ��ϳ��� �����ϴ� ���. �迭���̸�[����� �ε���]
			System.out.println(score1[i]);
		}
		System.out.println("-------1---------");

	//2. new Ű����� �ʱ�ȭ
		/*new Ű���� : �迭�̳� Ŭ����(��ü)�� ������ �� 
		�迭 ���� ��ҳ� Ŭ����(��ü) ���� ������ �ʱ�ȭ ���ִ� Ű����*/
		int score2[] = new int[] {75, 85, 100};
		
		for(int j = 0; j < score2.length; j++) {
			System.out.println(score2[j]);			
		}
		System.out.println("-------2---------");
		
	//3. new Ű����� ���̸� �����ϰ� �ʱ�ȭ
		//���� Ÿ�Կ� ���� �ʱ�ȭ ���� �ٸ�
		int[] score3 = new int[3];
		String[] str = new String[3];
		
		score3[1] = 100;	//score3 �迭 �� 1��°(0,1,2����) ���� 100���� �ʱ�ȭ
		str[0] = "hello";	//str �迭 �� 0��° ���� hello
		
		for(int k = 0; k < score3.length; k++ ) {
			System.out.println(score3[k]);			
		}
		System.out.println("-------3---------");
		
		for(int h = 0; h < str.length; h++) {
			System.out.println(str[h]);
		}
		System.out.println("-------4---------");
		
		//�ʱ�ȭ�� �迭 ������ �� ����
		//�迭�� ��ҿ� ���� �� �Է�

			
		
		
	}

}
