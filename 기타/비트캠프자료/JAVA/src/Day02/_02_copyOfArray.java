package Day02;

public class _02_copyOfArray {

	public static void main(String[] args) {
	
	//1. for�� �̿��� �迭 ����
		//�迭�� ��� ���� ���� �����ϴ� ���
		int[] score1 = {100, 90, 80};
		int[] score2 = new int[5];
		
		for(int i = 0; i < score1.length; i++) {
			score2[i] = score1[i];
			System.out.println(score2[i]);
		}
		System.out.println("--------1--------");
		
	//2. arraycopy() �޼ҵ带 �̿��� �迭�� ����
		String[] str1 = {"hello", "java"};
		String[] str2 = new String[3];
		
		System.arraycopy(str1,  0, str2, 0, str1.length);
		
		for(int j = 0; j < str2.length; j++) {
			System.out.println(str2[j]);
		}
		
		
		
		
		
	}

}
