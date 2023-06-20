package Day02;

public class Calculator {
	//int형 매개변수 두 개를 받아 더한 값을 리턴하는 메소드
	int add(int x, int y) {
		return x + y;
	
/*	아래 배열로 매개변수를 받는 방식을 안 쓰면 위에 x,y에 이어서 
 * 	처리해야 하는 매개변수의 개수에 따라 코드가 증가한다
  	int add(int x, int y, int z) {
		return x + y +z;
		}
	
	int add(int x, int y, int z, int xx) {
		return x + y + z + xx;
		
		 .....
	
*/
	}
	
	
	//int형 매개변수 두 개를 받아 나눈 값을 double형 값으로 리턴하는 메소드
	double devide(int x, int y) {
		return (double)x/y;
	}
	
	//매개변수의 개수를 모를 때 메소드의 선언(word에 매개변수 모를 때~ 부분)
	//매개변수의 개수가 변할 때 마다 오버로딩하여 메소드를 재정의 하면
	//소스 코드의 길이가 길어지고 난잡해지기 때문에
	//배열로 매개변수를 받아서 몇 개의 매개변수가 들어와도 처리 가능 하도록 메소드를 선언
	int sum(int[] scores) {
		int totalScore = 0;
		
		for(int i = 0; i< scores.length; i++) {
			totalScore += scores[i];
		}
		return totalScore;
	}
	
}
