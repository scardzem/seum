package Day02_homework;

import java.util.Scanner;

public class _basic_2 {

	public static void main(String[] args) {
		
//		2.int배열을 10개 생성해라
//		  사용자로부터 10개의 값을 입력받고
//		  순서대로 출력하고 
//		  총합을 구하세요
		
		
		
		int num1[]=new int[10];
		int sum=0;
		Scanner sc = new Scanner(System.in);

		System.out.println("10개의 정수 입력 : ");
		
		for(int i=0; i<10; i++) {
			num1[i] = sc.nextInt();
		}
		
		for(int k=0; k<10; k++) {
			System.out.print(num1[k]+", ");
		} System.out.println("");
		//System.out.println("입력한 값 : "+num1[0]+", "+num1[1]+", "+num1[2]+", "+num1[3]+", "+num1[4]+", "+num1[5]+", "+num1[6]+", "+num1[7]+", "+num1[8]+", "+num1[9]);		
		
		
		for (int j=0; j<10; j++) {

			sum+=num1[j];
		}
		System.out.println("입력한 값의 합 : "+sum);
	}

}
