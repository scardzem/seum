package Day02_homework;

public class _middle_1 {

	public static void main(String[] args) {
		
/*		
		//Day02 homework middle 1번문제
	      int nat[]=new int[100];
	      int j=0;
	      
	      for(int i=1; i<=1000; i++) {
	         if(i%2==0 && i%7==0) {
	            System.out.print(i+" "); //2의 배수이면서 7의 배수인 값들 출력

	               nat[j]=i;
	               j++;
	         }

	      }
	      System.out.println("");
	      System.out.println("2의 배수이면서 7의 배수인 수의 개수 : "+j);

	      //Day02 advancedFor 참고함
	      int k=0;
	      for(int natural:nat) {
	         k+=natural;
	      }
	      System.out.println(k);
*/
		
		//강사 풀이		
		/*1. 1000이하의 자연수 중에서 2의 배수이면서 7의 배수인 숫자를 출력하고,
   			 그 출력된 숫자들의 합을 구하는 프로그램을 작성하세요*/
		int sum = 0;
		
		for(int i = 1; i <= 1000; i++) {
			if(i % 2 == 0 && i % 7 == 0) {
				System.out.println(i);
				sum += i;
			}
		}
		
		System.out.println("1000이하의 자연수 중 2의 배수이면서 7의 배수의 총합은 : " + sum);
		
		
		
	}

}
