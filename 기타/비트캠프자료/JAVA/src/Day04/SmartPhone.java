package Day04;

public class SmartPhone extends Phone {

	/*//6.��ӿ����� Ÿ�� ��ȯ
	int size;
	
	SmartPhone(){
		size = 6;
	}
	
	public void showSize() {
		System.out.println("ũ��� : " + this.size);
	}
	*/
	

	
	int size;
	
	SmartPhone(int price){
		super(price);
	}
	
	public void showSize() {
		System.out.println("ũ��� : " + this.size);
	}
	
	
}
