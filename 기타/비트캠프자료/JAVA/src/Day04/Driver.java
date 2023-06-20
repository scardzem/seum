package Day04;

public class Driver {

	//1. 매개변수를 부모객체로 선언함으로써
	//   다양한 자식객체들을 매개변수로 받을 수 있게 되고
	//   매개변수로 받은 자식객체들에 따라 결과값이 달라짐
	//	bus가 Vihicle 형태로 형변환
	//	매개변수가 Vihicle객체 형태
	//	매개변수에 Vihicle의 형태를 가지고 있는 객체는 모두 적용 가능(Bus, Taxi, Vihicle)
	public void drive(Vihicle vihicle) {
		vihicle.run();
	}
	
	//개념 추가설명
	public int add(int a, int b) {
		return a+b;
	}
	
}
