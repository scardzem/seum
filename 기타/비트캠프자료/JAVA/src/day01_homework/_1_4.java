package home_trainning;

import java.util.Scanner;

public class _day01_homework_advanced_4 {

	public static void main(String[] args) {

		
		Scanner sc = new Scanner(System.in); //�� �� �ϴ� �ܿ��� ���(���� import �ϴ°͵� ���)
/*
		����
		4. 369������ �ۼ��մϴ�.   1~99������ ������ �Է¹ް�
		3,6,9�� �ϳ��� ������ "�ڼ�¦"�� ����ϰ�
		2���� ������ "�ڼ�¦¦"�� ����ϼ���
   		���� ��� 13�� "�ڼ�¦"
   		36�� ���� "�ڼ�¦¦"�� ����ϸ� �˴ϴ�.	
		(���ۿ��� �˻��غ��� �� ����)
*/ 		
				
		System.out.println("1~99 ������ ���� �Է� : ");
		
		int i=sc.nextInt();
		int cnt=0;
		if(i/10==3 || i/10==6 || i/10==9 ) //���� �ڸ������� 3,6,9 ���� ���
			cnt++;
		if(i%10==3 || i%10==6 || i%10==9) //���� �ڸ������� 3,6,9 ���� ���
			cnt++;
		if(cnt==0)	//3,6,9 �� �� ���� ��
			System.out.print(i);
		else {//3,6,9 �� ������ ��
			System.out.print("�ڼ�");
			if(cnt==1) {// ���� �ڸ�, ���� �ڸ� �� �ϳ��� ���� ��
				System.out.print("¦");
			}
				else {//���� �ڸ�, ���� �ڸ� �� ��� ���� ��
				System.out.print("¦¦");	
				}
		}
		

	}

}
