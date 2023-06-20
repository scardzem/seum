package Day03;

public class _01_static {

	public static void main(String[] args) {
		
		//word 1~2번 내용
		//정적 멤버(속성) 사용
		//객체 생성 없이 사용 가능(객체 생성 안하고 carColor로 바로 출력 되는 예시)
		//(모르겠지만) static으로 생성된 멤버(?)이기 때문에 객체 생성 없이 사용 가능한 거라고함
		//Car car = new Car();와 같은 객체생성 없이 클래스의 멤버(속성과 메소드)에 접근(Car.color;)
		

		String carColor = Car.color;
		System.out.println(carColor);
		System.out.println("------------------------");
		
		//정적 메소드 사용
		Car.colorInfo();
		System.out.println("------------------------");
		
		//인스턴스 멤버 사용 (car라는 객체(변수)를 만들어야 사용(출력) 가능한 예시)
		/*
		Car car = new Car();
		  
		  
		String carCompany = car.company; System.out.println(carCompany);
		System.out.println("------------------------");
		  
		car.companyInfo();
		  
		System.out.println("------------------------");
		 */

		
		
		
		
	}

}
