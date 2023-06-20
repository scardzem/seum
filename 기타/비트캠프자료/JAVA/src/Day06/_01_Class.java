package Day06;

import Day03.Car;

public class _01_Class {

	public static void main(String[] args) {
		
		//Class ��ü ���
		//Class ��ü �̿� �� ������ Ŭ������ �⺻ ������ ������ �� �ִ�.
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
