package Day06;

public class _06_substring {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		String str = "123456-7777777";
		
		//�ε��� 0~6������ ���ڿ� �ڸ�
		String first = str.substring(0,6);
		//�ε��� 7���� ������ ���ڿ� �ڸ�
		String second = str.substring(7);
		
		System.out.println("�ֹι�ȣ ���ڸ��� : " + first);
		System.out.println("�ֹι�ȣ ���ڸ��� : " + second);
		
	}

}
