package Day02;
//useOfCar Ŭ�������� ���
public class Car {

	String company;
	String color;
	int price;
	String model;
	
	public Car() {
		company = "������";
		color = "����";
		price = 30000000;
		
		//useOfCarŬ�������� ȣ���ؼ� ����� �� ȣ���� �Ǵ� ������ ���� ���� ���(1)
		System.out.println("�⺻������ ȣ��");
		
	}
	
	//�����ε�
	public Car(String mod, String col, int pri) {
		//this() �޼ҵ带 ���� �ٸ� ������ ȣ��
		//�������� �����ϰ� ����, ��, ���� �ٸ� ��
		//�ߺ��Ǵ� �ڵ带 �����Ͽ� �ҽ��ڵ� ����ȭ�ϱ� ����
		this(); //(word)13����
		model = mod;
		color = col;
		price=pri;
		
		//useOfCarŬ�������� ȣ���ؼ� ����� �� ȣ���� �Ǵ� ������ ���� ���� ���(2)
		System.out.println("�� ��° ������ ȣ��");
	}
	
	//�޼ҵ带 ���� �� ���� ��ȯ ���� � Ÿ������ ������� ��
	//int add(int a, int b) {
	//   int c = a + b;
	// return c;
	// }
	//void : ��ȯ ���� ���� �޼ҵ�
	//          carInfo(){}�� �κ��� �޼ҵ�
	public void carInfo() {
		//this ��ü�� ���� ���� Ŭ������ �Ӽ� �� ����
		System.out.println(this.company);
		System.out.println(this.model);
		System.out.println(this.color);
		System.out.println(this.price);
		
	}
	
	
	
	
}
