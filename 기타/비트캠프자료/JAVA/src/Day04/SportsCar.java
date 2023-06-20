package Day04;

public class SportsCar extends Car {

	public int driveMode = 1;
	
	@Override
	public void drive() {
		//driveMode가 1일 경우 부모클래스의 drive 메소드 호출
		if(driveMode == 1) {
			//super 키워드로 부모클래스의 메소드 호출
			//주로 오버라이딩 된 메소드에서 부모클래스의 원본 메소드를 사용하고 싶을 때 사용
			super.drive();
		} else {
			System.out.println("고속주행");
		  }	
	}
	
	
}
