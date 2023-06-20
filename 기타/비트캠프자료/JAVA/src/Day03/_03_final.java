package Day03;

public class _03_final {

	public static void main(String[] args) {
		
		Car car = new Car();
		
		//final 필드를 사용할때는 
		//final 필드인 price 값 변경시 컴파일 오류
		//car.price = 10000;

		System.out.println("차 가격은 : "+car.price);
	}

}
