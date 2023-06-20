package Day06;

import java.util.Scanner;

public class _14_max_min {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		Scanner sc = new Scanner(System.in);
		
		System.out.println("정수 입력 : ");
		int a = sc.nextInt();
		System.out.println("정수 입력 : ");
		int b = sc.nextInt();
		
		System.out.println(a+"와 " + b + "중에 큰 수는 : " + Math.max(a, b));
		System.out.println(a+"와 " + b + "중에 작은 수는 : " + Math.min(a, b));
	}

}
