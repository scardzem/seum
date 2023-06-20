package Day03;

public class Singleton {
	//�̱��� ��ü ����
	//��ü ���α׷����� �ϳ��� ��ü�� ���� ����
	private static Singleton singleton = new Singleton();
	
	private Singleton() {
		
	}
	
	//Ŭ�������� ������ �̱��� ��ü�� ��ȯ�ϴ� �޼ҵ�
	//(�ؼ��غ���) ���� �޼ҵ��̰�(static) ��ȯŸ�� Singleton ��ü�� getInstance() �޼ҵ�
	static Singleton getInstance() {
		return singleton;
	}
	
}
