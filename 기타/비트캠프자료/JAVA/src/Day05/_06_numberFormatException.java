package Day05;

public class _06_numberFormatException {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		String str1 = "100";
		//문자열을 정수나 실수로 치환 시
		//치환 불가능한 문자 포함되면 NumberFormatException 발생
		String str2 = "bit100";
		
		int num1 = Integer.parseInt(str1);
		int num2 = Integer.parseInt(str2);

	}

}
