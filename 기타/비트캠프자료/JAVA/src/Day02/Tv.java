package Day02;
//1. Ŭ���� ����(��ü�� ���赵 ����)
public class Tv {
	//��ü�� �Ӽ� ����
	String company;
	int price = 1000000;
	int size = 47;
	int weight = 2000;
	
	Speaker speaker = new Speaker ();
	
	//(�Ʒ��� public Tv �κ�)�⺻ ������ �޼ҵ� �����Ǿ� �ִ� ���·� Ŭ������ �������
	//������ �޼ҵ忡�� ��ü �Ӽ������� �ʱ�ȭ ����
	public Tv() {
		company = "LG";
		price = 3000000;
		System.out.println("Tv ��ü ����");
	}

	//����� ���� ������ �޼ҵ�
	//���� ���� ���� ������ �Ӽ� ���� �ʱ�ȭ�� �� �ִ�.
	public Tv(String com, int pri) {
		company = com;
		price = pri;
		System.out.println("����� ���� ������ ȣ��");
	}
	
	
	//��ü�� ���۵�(�޼ҵ�)
	void turnOn(int a) { //int a�� �־ �Ʒ��ٷ� �۵� �ǰ� ���� (���½ð��� ��� �۵��ϴ��� ����ϱ� ���÷� ���ֽ�)
		System.out.println(a); //���Ⱑ 06_useOfTv.javaŬ�������� �Ʒ��ʿ� 3.��ü �޼ҵ� ���� �κп� ù��° �ٿ� 1�� �Է��� ����..��µǰ� �����... �׷����ε�..
		System.out.println("������ �Ҵ�.");
	}
	
	void turnOff() {
		System.out.println("������ ����");
	}
	
	void changeChannel() {
		System.out.println("ä���� �����Ѵ�");
	}
	
//	void changeVolumn() {
//		System.out.println("������ �����Ѵ�.");
//		}
		void volumnUp() {
			speaker.volumnUp();
		}
		
		void volumnDown() {
			speaker.volumnDown();
	}
	
	
}
