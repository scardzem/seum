package Day04;

public class CalMinus extends Calculator {
	
	//오버라이딩
	//부모 클래스에 존재하는 메소드를 재정의
	//부모 클래스에 존재하는 메소드와 형태가 완전히 동일해야 함
	
	//어노테이션 : 어떤 클래스나 메소드, 또는 필드가
	//				어떤 역할을 하는지 등을 컴파일러에 알려줘서
	//				컴파일 속도 향상(@Override : 오버라이딩 한거라는 뜻)
	
	/*
	@Override
	public int calculate(int a, int b) {
		return a-b;
	}
	
	@Override
	public int calculate(int a, int b, int c) {
		
		return a - b - c;
		
	}
*/
	
	//-----------------------------------
	
	
	int chk; //(chk 1일 때 덧셈 실행, 2일 때는 마이너스 연산 되도록 해보기)
			//나는 못풀어서 아래는 강사님 풀이 내용
	@Override
	public int calculate(int a, int b) {
		if(chk==1) {
			return super.calculate(a, b);
		} else { 
			return a-b;		
		}
	}
	
	
	@Override
	public int calculate(int a, int b, int c) {
		if(chk ==1) {
			return super.calculate(a,  b, c);			
		} else {
			return a - b - c;
		}
	}
	
	
}
