package Day06_homework_after;

public class HyundaiCar implements ICar {
	@Override
	public void startEngine() {
		System.out.println("���� �� ���� ��");
		
	}

	@Override
	public void speedUp() {
		System.out.println("������ �ӵ� �ø�");
		
	}

	@Override
	public void speedDown() {
		System.out.println("������ �ӵ� ����");
		
	}

	@Override
	public void hitBreak() {
		System.out.println("������ �극��ũ ����");
		
	}
}
