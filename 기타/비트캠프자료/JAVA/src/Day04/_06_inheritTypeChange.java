package Day04;
//Phone�� SmartPhone���� ��� �ּ� ���ִºκ� �ּ� �����ϰ� ���ִ³��� �ּ�ó���ϸ� �������� ���ƿð���
public class _06_inheritTypeChange {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
	//(word 6.)��ӿ����� Ÿ�� ��ȯ ����
		//1. �ڽ� ��ü ����
		//SmartPhone �����̸鼭 Phone�� ���µ� ������ �ִ�.
		SmartPhone smartPhone = new SmartPhone();
		
		//2. �θ�ü�� �ڽİ�ü ����
		//�ڽ� ��ü�� �θ� ��ü�� ���µ� ��� �ֱ� ������
		//�θ� ��ü�� ���·� ����ȯ�� �߻��Ͽ� �θ�ü�� ���·� ��� ����
		Phone phone = (Phone)smartPhone; //phone�� smartPhone ��ü�� ���� �Ǿ���, 
								  //����ȯ �Ǿ��� ������ �ڽ� ��ü(smartPhone)�� ����� �� ����
								  //phone�� �Ӽ��� smartphone�� �Ӽ����� �ٲ�ٴ� �� 
		//3. �� ��ȯ�� �θ� ��ü�� ���
		//�θ�ü�� �� ��ȯ �Ǿ��� ������ �ڽ� ��ü�� ����� ��� �Ұ���
		phone.showPrice();
		//phone.showSize();
		
		//�ڽ� ��ü�� �ڽ� ��ü �״�� ��� ����
		//Phone phone = (Phone)smartPhone; 
		smartPhone.showSize();

	}

}
