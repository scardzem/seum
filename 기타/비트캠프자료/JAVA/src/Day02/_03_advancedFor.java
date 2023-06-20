package Day02;

public class _03_advancedFor {

	public static void main(String[] args) {
		
	//1. 향상된 for문 (배열을 이용하여 초기화 된 변수 없이 for 사용 가능)
		int[] scores = {100, 90, 80};
		int sum = 0;
		
		//scores 배열의 요소 개수만큼 반복
		//scores 배열의 요소 하나씩 꺼내서 score 변수에 담아서 사용
		for(int score : scores) {
			sum += score;
		}
		
		System.out.println("점수의 총합은 : " + sum);
		
		

	}

}
