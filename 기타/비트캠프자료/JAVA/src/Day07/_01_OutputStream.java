package Day07;

import java.io.FileOutputStream;
import java.io.OutputStream;

public class _01_OutputStream {

	public static void main(String[] args) throws Exception {
		// TODO Auto-generated method stub

		//FileOutputStream�� ��ü ���� �� ������ ���� �� ��ġ�� ���ϸ��� ���� ����� �Ѵ�.
		//����� Stream�� ����� ���� ����ó���� �ʼ������� ���� �Ǿ�� �Ѵ�.
		//D:/lecture/JAVA/test.db ���� ��ġ�� ���ϸ� ������
		OutputStream os = new FileOutputStream("D:/lecture/JAVA/test.db");
		
		byte[] arr = {10, 20, 30};
		
		os.write(arr);
		os.flush();
		os.close();
		
		//���� �ϸ� �ش� ��ġ�� ������ ���� �ȴ�.
		//������ ������ �Է� ��Ʈ������ �ҷ��;� �Ѵ�.
		
		
		
		
		
	}

}
