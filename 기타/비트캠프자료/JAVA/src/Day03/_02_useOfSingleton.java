package Day03;

public class _02_useOfSingleton {

	public static void main(String[] args) {
		
		//�̱����� ������ �ʴ� ���� ����ϰ��� �� �� ����ϸ� ������..�޸� ���� ���̴� ���� ���ٰ� �Ѵ�.
		
		//�̹� Singleton Ŭ������ �ϳ��� ��ü�� �����Ǿ� �ֱ� ������ ��ü�� �����Ϸ��� �ϸ� ������ ������ ����.(�Ʒ��� �ּ� �������� ������ ����)
		//Singleton s1 = new Singleton();
		
		//Singleton Ŭ������ �����Ǿ� �ִ� ��ü�� ��ȯ�޾� ���
		Singleton s1 = Singleton.getInstance();
		Singleton s2 = Singleton.getInstance();
		
		//���� �ٸ� ��ü���� �����Ǿ� ����
		Car car1 = new Car();
		Car car2 = new Car();
		
		
		if(s1 == s2) {
			System.out.println("���� singleton ��ü");
		} else {
			System.out.println("�ٸ� singleton ��ü");
		}
		System.out.println("---------------------------------");
		
		if(car1 == car2) {
			System.out.println("���� car ��ü");
		} else {
			System.out.println("�ٸ� car ��ü");
		}

		
	}

}
