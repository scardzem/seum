package Day06_homework_after;

public class HyundaiCar implements ICar {
	@Override
	public void startEngine() {
		System.out.println("현대 차 엔진 켬");
		
	}

	@Override
	public void speedUp() {
		System.out.println("현대차 속도 올림");
		
	}

	@Override
	public void speedDown() {
		System.out.println("현대차 속도 내림");
		
	}

	@Override
	public void hitBreak() {
		System.out.println("현대차 브레이크 밟음");
		
	}
}
