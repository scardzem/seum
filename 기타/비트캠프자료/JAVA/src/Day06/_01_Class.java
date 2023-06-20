package Day06;

import Day03.Car;

public class _01_Class {

	public static void main(String[] args) {
		
		//Class 객체 얻기
		//Class 객체 이용 시 생성된 클래스의 기본 정보에 접근할 수 있다.
		Class cla1 = Car.class;
		
		Car car = new Car();
		Class cla2 = car.getClass();
		
		System.out.println(cla1.getName());
		System.out.println(cla2.getSimpleName());
		
		try {
		Class cla3 = Class.forName("Day03.Car");
		System.out.println(cla3.getPackageName());
		
		} catch(ClassNotFoundException ex) {
			System.out.println(ex.toString());
		}
	
	}

}
