package Day04;
//Phone과 SmartPhone에서 블록 주석 돼있는부분 주석 해제하고 써있는내용 주석처리하면 정상으로 돌아올거임
public class _07_forceTypeChange {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		SmartPhone sp1 = new SmartPhone();
		//(word 7. 강제 타입변환 부분)	
			//1. 부모객체 생성 시 부모객체로 만듦
			Phone p1 = new Phone();
			
			//2. 부모객체 생성 시 자식객체 삽입
			Phone p2 = sp1;
			
			//3. 부모객체를 자식객체 형태로 강제 형변환
			//부모객체 혀앹로 생성된 부모객체는 자식 객체로 형변환 불가능
			//에러 발생
		//	SmartPhone sp2 = (SmartPhone)p1;
			//자식객체가 삽입된 부모객체는 강제로 자식 객체의 형태로 형변환 가능
			SmartPhone sp3 = (SmartPhone)p2;
			
		//	sp2.showSize();
			sp3.showSize();
	}

}
