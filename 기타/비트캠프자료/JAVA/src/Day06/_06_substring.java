package Day06;

public class _06_substring {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		String str = "123456-7777777";
		
		//인덱스 0~6까지의 문자열 자름
		String first = str.substring(0,6);
		//인덱스 7부터 끝까지 문자열 자름
		String second = str.substring(7);
		
		System.out.println("주민번호 앞자리는 : " + first);
		System.out.println("주민번호 뒷자리는 : " + second);
		
	}

}
