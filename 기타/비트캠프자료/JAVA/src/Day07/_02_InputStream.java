package Day07;

import java.io.FileInputStream;
import java.io.InputStream;

public class _02_InputStream {

	public static void main(String[] args) throws Exception {
		// TODO Auto-generated method stub
		InputStream is = new FileInputStream("D:/lecture/JAVA/test.db");
		
		while(true) {
			int data = is.read();
			
			//read() �޼ҵ尡 -1 ��ȯ �� ����
			//������ ���� �����ߴٴ� �ǹ���
			if(data == -1) {
				break;
			}
			
			System.out.println(data);
		}
	
		is.close();
	
	}

}
