package Day04;

public class SportsCar extends Car {

	public int driveMode = 1;
	
	@Override
	public void drive() {
		//driveMode�� 1�� ��� �θ�Ŭ������ drive �޼ҵ� ȣ��
		if(driveMode == 1) {
			//super Ű����� �θ�Ŭ������ �޼ҵ� ȣ��
			//�ַ� �������̵� �� �޼ҵ忡�� �θ�Ŭ������ ���� �޼ҵ带 ����ϰ� ���� �� ���
			super.drive();
		} else {
			System.out.println("�������");
		  }	
	}
	
	
}
