package Day04;

public class _09_reasonOfTypeChange {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Bus bus = new Bus();
		Taxi tax = new Taxi();
		
		Driver driver = new Driver();
		Vihicle vi = new Vihicle();

		//매개변수로 자식객체 전달
		//전달된 자식객체가 부모객체 형태로 형변환
		//오버라이딩 된 자식객체의 메소드가 호출
		
		//driver객체(Driver클래스속성)의 drive()함수를 호출하고, 매개변수는 bus로 입력한다는 내용.
		//(Driver클래스에서 메소드는 Driver driver로 돼있는데 Bus는 자식이라서 부모인 Driver의 속성도
		//있기 때문에 매개변수로 입력이 가능하다.
		driver.drive(bus);
		driver.drive(tax);
		driver.drive(vi);
		

		
	}

}
