package Day02_homework;

import java.util.Scanner;

public class _basic_3 {

	public static void main(String[] args) {
		
		//3.int �迭�� 10���� ������ �����϶�
		//  1 ~ 10������ ������ ���� �����ϰ�
		//  Ȧ���� ��� ����϶�
		Scanner sc = new Scanner(System.in);
		
		int hol[]=new int[10];
		
		int j=0;
		int k=0;
		
		for(int i=0; i<10; i++) {
			hol[i]=sc.nextInt();
		}
		
		while(j<=9) {
			j++;
				if(hol[k]%2==1) {
				System.out.print(hol[k]+" ");
			} 
			k++;
		}
		

	}

}
