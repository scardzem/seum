package day01;

import java.io.IOException;  //import

public class _05_systemIn {

	public static void main(String[] args) throws IOException {  //throws~~~

		//2. �ý��� �Է�
		int keyCode;
		
		while(true) {
			keyCode=System.in.read();
			System.out.println(keyCode);
			
			//�Էµ� Ű�ڵ� ���� �ҹ��� q�� �� �ݺ��� ����
			if(keyCode == 113) {
				break;
			}
		}
		
		

	}

}
