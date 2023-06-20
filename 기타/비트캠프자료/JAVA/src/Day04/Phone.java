package Day04;
//abstract는 10. 추상클래스 내용때 추가함.
public abstract class Phone {

	/*//6.상속에서의 타입 변환
	int price;
	
	Phone() {
		price = 1000000;
	}
	
	public void showPrice () {
		System.out.println("가격은 : " + this.price);
		*/
		
	
	
	//------------------------------------------
	
	//word 10.추상클래스 내용 (맨위에 class 앞에 abstract 붙이면 추상클래스가 됨)

	
	int price;
	
	Phone(int price) {
		this.price=price;
	}
	
	public void showPrice () {
		System.out.println("가격은 : " + this.price);
	}
	
	public void powerOn() {
		System.out.println("전원을 켭니다.");
	}
	
	public void powerOff() {
		System.out.println("전원을 끕니다.");
	}
	
	
	
	
}
