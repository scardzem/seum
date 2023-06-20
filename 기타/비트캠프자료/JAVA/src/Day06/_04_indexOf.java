package Day06;

public class _04_indexOf {

	public static void main(String[] args) {
		
		String str1 = "hello java";
		String str2 = "hell python";
		
		if(str1.indexOf("java") != -1) { 
			//해당 문자열의 시작 위치 표시
			System.out.println("hello java".indexOf("java"));
			System.out.println("해당 문자열이 포함되어 있습니다.");
		} else {
			System.out.println("해당 문자열이 포함되어 있지 않습니다.");
		}
		
System.out.println("----------------------");		

		if(str2.indexOf("java") != -1) {
			System.out.println(str1.indexOf("java"));
			System.out.println("해당 문자열이 포함되어 있습니다.");
		} else {
			System.out.println("해당 문자열이 포함되어 있지 않습니다.");
		}
		

	}

}
