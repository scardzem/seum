package Day02_homework;

import java.util.Scanner;

public class _basic_2 {

	public static void main(String[] args) {
		
//		2.int�迭�� 10�� �����ض�
//		  ����ڷκ��� 10���� ���� �Է¹ް�
//		  ������� ����ϰ� 
//		  ������ ���ϼ���
		
		
		
		int num1[]=new int[10];
		int sum=0;
		Scanner sc = new Scanner(System.in);

		System.out.println("10���� ���� �Է� : ");
		
		for(int i=0; i<10; i++) {
			num1[i] = sc.nextInt();
		}
		
		for(int k=0; k<10; k++) {
			System.out.print(num1[k]+", ");
		} System.out.println("");
		//System.out.println("�Է��� �� : "+num1[0]+", "+num1[1]+", "+num1[2]+", "+num1[3]+", "+num1[4]+", "+num1[5]+", "+num1[6]+", "+num1[7]+", "+num1[8]+", "+num1[9]);		
		
		
		for (int j=0; j<10; j++) {

			sum+=num1[j];
		}
		System.out.println("�Է��� ���� �� : "+sum);
	}

}
