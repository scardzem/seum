package Day05;

public class _08_tryCatchFinally {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		try {
			String str1 = "100";
			String str2 = "bit100";
			
			Integer.parseInt(str1);
			Integer.parseInt(str2);
		//���������� ����ó�� �� ��� �ֻ��� ���� ó�� Ŭ������
		//Exception Ŭ������ �̿�
		} catch(Exception e) {
			//try ��Ͽ��� ���� �߻� �� catch ��� ����
			e.printStackTrace();
		}
		
		try {
			int[] intArr = new int[3];
			
			int num = intArr[3];
			//���ܿ� ���� �� ���� Ȯ���ϰ� ���� ��
			//���� catch����� �̿��ؼ� ����ó�� ��ȭ 
		} catch(ArrayIndexOutOfBoundsException e) {
			//printStackTrace() : ���� ���� ǥ�����ִ� �޼ҵ�
			//printStackTrace() ���� ������ ��� ǥ��Ǳ� ������ ���ȿ� ���� ����. ������ ���ǿ����� �����ϴ� ����.
			//�� ���� ����� System.out.println(ex.toString()) ���� String���� ��µǰ� �ϴ°� �� ����
			e.printStackTrace();
		} catch(NumberFormatException e) {
			e.printStackTrace();
		} catch(ClassCastException e) {
			e.printStackTrace();
		} finally {
			//���ܰ� �߻��ϴ� �߻����� �ʴ� ������ ����
			System.out.println("���α׷� ������ϼ���.");
		}
		
		
	}

}
