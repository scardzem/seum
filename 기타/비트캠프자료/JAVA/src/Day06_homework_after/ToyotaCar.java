package Day06_homework_after;

public class ToyotaCar implements ICar {
	@Override
	public void startEngine() {
		System.out.println("���Ÿ�� ���� ��");
		
	}

	@Override
	public void speedUp() {
		System.out.println("���Ÿ�� �ӵ� �ø�");
		
	}

	@Override
	public void speedDown() {
		System.out.println("���Ÿ�� �ӵ� ����");
		
	}

	@Override
	public void hitBreak() {
		System.out.println("���Ÿ�� �극��ũ ����");
		
	}
}
