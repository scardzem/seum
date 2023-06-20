package Day04;

public class SmartPhone extends Phone {

	/*//6.상속에서의 타입 변환
	int size;
	
	SmartPhone(){
		size = 6;
	}
	
	public void showSize() {
		System.out.println("크기는 : " + this.size);
	}
	*/
	

	
	int size;
	
	SmartPhone(int price){
		super(price);
	}
	
	public void showSize() {
		System.out.println("크기는 : " + this.size);
	}
	
	
}
