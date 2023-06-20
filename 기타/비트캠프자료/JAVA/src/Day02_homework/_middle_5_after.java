package Day02_homework;

public class _middle_5_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*5. 구구단을 이렇게 출력하세요
 			 2x1=2 3x1=3...9x1=9
 			 2x2=4
 			 ...
 			 2x9=18........9x9=81*/
		for(int i = 1;i <= 9; i++) {		
			for(int j = 2; j <= 9; j++) {
				System.out.print(j + " * " + i + " = " + j * i + "\t");
			}
				System.out.println("\n");
		}
	}

}
