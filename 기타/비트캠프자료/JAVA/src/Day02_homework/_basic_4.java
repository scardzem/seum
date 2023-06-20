package Day02_homework;

import java.util.Scanner;

public class _basic_4 {

	public static void main(String[] args) {

/*		4. 정수 10개를 입력받아 배열에 저장하고, 
		   이 정수중에서 2의 배수와 3의 배수를 출력하세요
*/
		Scanner sc=new Scanner(System.in);
		
		int num1[]=new int[10];
		
		
		System.out.println("정수 10개 입력 : ");
		for(int i=0; i<10; i++) {
			num1[i]=sc.nextInt();			
		}
		
		for(int j=0; j<10; j++) {
			if(num1[j]%2==0) {
				System.out.print(num1[j]+" ");
			} else if(num1[j]%3==0) {
				System.out.print(num1[j]+" ");
			}
			
		}

	}

}
