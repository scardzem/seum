package Day05;

public class _09_throws {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		try {
			//java.lang.String2 클래스는 존재하지 않으므로 예외가 리턴됨
			//예외 발생되기 때문에 catch블록으로 이동
			findClass();
			String str = "";
		} catch(Exception e) {
			System.out.println("클래스를 찾을 수 없습니다.");
		}

	}
	
	//throws 키워드는 호출된 곳에 해당 예외 던져줌
	public static void findClass() throws Exception {
		Class cla = Class.forName("java.lang.String2");
	}

}
