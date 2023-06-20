package Day05_homework;

		import java.util.Scanner;
		// 3개의 정숫값을 입력하고 중앙값을 구한 다음 출력합니다.

		class Median_after {
			static int med3(int a, int b, int c) {
				/*이 메서드를 완성하세요*/
				if(a >= b) {
					if(c < b) {
						return b;
					} else if(c < a) {
						return c;
					} else {
						return a;
					}
				} else if(c >= b) {  //a >=b는 아닌것으로 else if가 시작이기 때문에 두가지만 비교함
					return b;
				} else if(a >= c) {
					return a;
				} else {
					return c;
				}
			}

			public static void main(String[] args) {
				Scanner stdIn = new Scanner(System.in);

				System.out.println("세 정수의 중앙값을구합니다.");
				System.out.print("a의 값：");	
				int a = stdIn.nextInt();
				System.out.print("b의 값：");	
				int b = stdIn.nextInt();
				System.out.print("c의 값：");	
				int c = stdIn.nextInt();
				
				

				System.out.println("중앙값은 " + med3(a, b, c) + "입니다.");

	}

}
