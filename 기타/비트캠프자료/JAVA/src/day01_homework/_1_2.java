package day01_homework;

import java.io.IOException;

public class _1_2 {

	public static void main(String[] args) throws IOException {

		/* 2. �����ڸ� �Է¹޽��ϴ�
		      �ҹ��ڴ� �빮�ڷ�, �빮�ڴ� �ҹ��ڷ� �����ؼ� ����ϼ��� 
		      (���� �����ڸ� ����ϼ���)
		      (�ƽ�Ű���̺�/�����ڵ����̺��� �����ϸ� �˴ϴ�) 
		*/
		

		int keyCode;
			keyCode=System.in.read();
			
			if(keyCode<=90) {
				System.out.println((char)(keyCode+32));
			} else {
				System.out.println((char)(keyCode-32));
			}
			
		
		
	}

}
