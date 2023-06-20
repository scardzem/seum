package Day02_homework;

public class _advanced_3_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*
		 3.AB + BA = 99 를 만족하는 모든 A와 B의 조합을 구하는 프로그램을 작성하세요.
		   (10의 자리수가 A, 1의 자리수가 B인 AB,
		   10의 자리수가 B, 1의 자리수가 A인 BA
		   AB + BA = 99)		 
		  */
		
		for (int a = 0; a < 10; a++) {
			for (int b = 0; b < 10; b++) {
				int numAB = a * 10 + b;
				int numBA = b * 10 + a;
				if (numAB + numBA == 99) {
					System.out.println("A는  " + a + ", B가 : " + b + "일 때");
					
				}
			}
		}
	}

}
