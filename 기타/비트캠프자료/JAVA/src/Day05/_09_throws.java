package Day05;

public class _09_throws {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		try {
			//java.lang.String2 Ŭ������ �������� �����Ƿ� ���ܰ� ���ϵ�
			//���� �߻��Ǳ� ������ catch������� �̵�
			findClass();
			String str = "";
		} catch(Exception e) {
			System.out.println("Ŭ������ ã�� �� �����ϴ�.");
		}

	}
	
	//throws Ű����� ȣ��� ���� �ش� ���� ������
	public static void findClass() throws Exception {
		Class cla = Class.forName("java.lang.String2");
	}

}
