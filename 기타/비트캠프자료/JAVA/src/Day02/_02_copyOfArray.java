package Day02;

public class _02_copyOfArray {

	public static void main(String[] args) {
	
	//1. for문 이용한 배열 복사
		//배열의 요소 값을 직접 복사하는 방식
		int[] score1 = {100, 90, 80};
		int[] score2 = new int[5];
		
		for(int i = 0; i < score1.length; i++) {
			score2[i] = score1[i];
			System.out.println(score2[i]);
		}
		System.out.println("--------1--------");
		
	//2. arraycopy() 메소드를 이용한 배열의 복사
		String[] str1 = {"hello", "java"};
		String[] str2 = new String[3];
		
		System.arraycopy(str1,  0, str2, 0, str1.length);
		
		for(int j = 0; j < str2.length; j++) {
			System.out.println(str2[j]);
		}
		
		
		
		
		
	}

}
