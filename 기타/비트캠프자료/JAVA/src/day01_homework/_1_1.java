package day01_homework;

import java.io.IOException;

public class _1_1 {

	public static void main(String[] args) throws IOException {	
		
		int keyCode;
		
		while(true) {
			keyCode=System.in.read();
			
			
			//�Էµ� Ű�ڵ� ���� �ҹ��� q�� �� �ݺ��� ����
			if(keyCode <= 90) {
				System.out.println("�빮��");
				break;
				
			} else {
				System.out.println("�ҹ���");
				break;
				
			}
		}
		
		
		
		
		
	}

}
