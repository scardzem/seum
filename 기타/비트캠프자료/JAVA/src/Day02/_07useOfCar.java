package Day02;

public class _07useOfCar {

	public static void main(String[] args) {
		
		
		//new는 변수를 초기화할 때 쓰는거..
		Car car1 = new Car("제네시스", "검정", 50000000);
		Car car2 = new Car("아반떼", "빨강", 30000000);

		car1.carInfo();
		System.out.println("------------------");
		car2.carInfo();
		
	}

}
