package Day02;

public class _08_method {

	public static void main(String[] args) {
		
		Calculator cal = new Calculator();
		
		int result;
		double result2;
		
		//result=cal.add(10,3)
		//이것은 Calculator 클래스에 있는 add함수에 10,3을 입력해서 값을 리턴 받는 것임
		//(void에서 리턴이 없다는게 뭔지 대충 알듯)
		result = cal.add(10, 3);
		System.out.println("10 + 3 = " + result);
		
		result2 = cal.devide(10,  3);
		System.out.println("10 / 3 = " + result2);
		
		
		//Calculator클래스 아랫부분에 대한거
		int[] scores = {100, 85, 75};
		int result3;
		
		//배열을 sum메소드의 매개 변수로 전달
		result3 = cal.sum(scores);
		System.out.println("점수의 총 합은 : "+ result3); 
	}
	
}
