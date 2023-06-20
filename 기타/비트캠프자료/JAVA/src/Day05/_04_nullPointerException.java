package Day05;

public class _04_nullPointerException {

	public static void main(String[] args) {
		// word 3. 예외처리
		String str = null;
		
		//null값을 갖는 str변수를 사용 시
		//NullPointerException 발생
		//런타임 예외는 소스코드에서 에러로 잡히지 않음
		System.out.println(str.toString());
	}

}
