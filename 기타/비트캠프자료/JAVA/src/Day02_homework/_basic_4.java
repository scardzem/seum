package Day02_homework;

import java.util.Scanner;

public class _basic_4 {

	public static void main(String[] args) {

/*		4. ���� 10���� �Է¹޾� �迭�� �����ϰ�, 
		   �� �����߿��� 2�� ����� 3�� ����� ����ϼ���
*/
		Scanner sc=new Scanner(System.in);
		
		int num1[]=new int[10];
		
		
		System.out.println("���� 10�� �Է� : ");
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
