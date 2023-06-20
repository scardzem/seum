package Day04;
//Phone과 SmartPhone에서 블록 주석 돼있는부분 주석 해제하고 써있는내용 주석처리하면 정상으로 돌아올거임
public class _08_instanceOf {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
	//word8. instanceof 키워드 부분
	//결과 값은 boolean값으로 리턴
		SmartPhone sp1 = new SmartPhone();
		
		//부모객체에 자식 객체를 삽입할 때는 
		//부모객체의 형태에 자식 객체의 형태가 숨겨진 상태로 생성됨
		Phone p1 = sp1;
		
		//부모객체의 형태로만 생성됨
		Phone p2 = new Phone();
		
		//p1은 자식 객체의 형태가 숨겨진 상태이기 때문에
		//자식객체로의 형변환 가능
		if(p1 instanceof SmartPhone) {
			System.out.println("스마트폰의 형태입니다.");
		} else {
			System.out.println("스마트폰의 형태가 아닙니다.");
		}
		System.out.println("-----------------------------");
				
		//p2는 부모객체이ㅡ 형태만 가지고 있기 때문에 자식객체로의 형변환 불가능
		if(p2 instanceof SmartPhone) {
			System.out.println("스마트폰의 형태입니다.");
		} else {
			System.out.println("스마트폰의 형태가 아닙니다.");
		}
		
		System.out.println("-----------------------------");
		
		SmartPhone sp2 = (SmartPhone)p1;
		
		if(sp2 instanceof SmartPhone) {
			System.out.println("스마트폰의 형태입니다.");
		} else {
			System.out.println("스마트폰의 형태가 아닙니다.");
		}
		
		
		
	}

}
