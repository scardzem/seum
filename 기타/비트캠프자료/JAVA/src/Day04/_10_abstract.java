package Day04;

public class _10_abstract {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		
		//�߻�Ŭ������ ��ü ������ �Ұ����ϴ�.
		//Phone phone = new Phone();
		SmartPhone smartPhone = new SmartPhone(1000000);
		
		smartPhone.powerOn();
		smartPhone.powerOff();
		
		smartPhone.size=6;
		smartPhone.showSize();
	}

}
