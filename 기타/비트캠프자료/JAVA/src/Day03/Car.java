package Day03;

public class Car {

//1.�ν��Ͻ� ��� 
	String company;
//2.���� ���
	//(�߰�����)'�޸� ����'
	//static ����� heap �޸𸮿� ����
	//heap �޸𸮴� �Ϲ� �޸𸮺��� �뷮�� ���� ������
	//������ static ����� ����� ���α׷��� ����ȭ�� �߱�
	static String color = "����";
	
	//final �ʵ� ����
	//����� ���ÿ� �ʱ�ȭ �ʼ�
	// ���α׷��� ����Ǹ鼭 �� ���� �Ұ���
	final int price = 30000000;
	
	public Car() {
		company = "����";
	}
	
	//�ν��Ͻ� ���(�޼ҵ�)
	void companyInfo() {

		System.out.println("������� : "+company);
	}
	
	//���� ���(�޼ҵ�)
	static void colorInfo() {
		System.out.println(color);
	}
	

	
	
	
}
