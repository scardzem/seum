package Day04;
//abstract�� 10. �߻�Ŭ���� ���붧 �߰���.
public abstract class Phone {

	/*//6.��ӿ����� Ÿ�� ��ȯ
	int price;
	
	Phone() {
		price = 1000000;
	}
	
	public void showPrice () {
		System.out.println("������ : " + this.price);
		*/
		
	
	
	//------------------------------------------
	
	//word 10.�߻�Ŭ���� ���� (������ class �տ� abstract ���̸� �߻�Ŭ������ ��)

	
	int price;
	
	Phone(int price) {
		this.price=price;
	}
	
	public void showPrice () {
		System.out.println("������ : " + this.price);
	}
	
	public void powerOn() {
		System.out.println("������ �մϴ�.");
	}
	
	public void powerOff() {
		System.out.println("������ ���ϴ�.");
	}
	
	
	
	
}
