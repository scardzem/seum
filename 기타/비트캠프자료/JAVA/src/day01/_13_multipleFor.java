package day01;

public class _13_multipleFor {

	public static void main(String[] args) {
		
	//1. 중첩 for 반복문
		//for문 안에 다른 for문을 포함하는 구문
		
		//안 쪽의 for문이 반복 실행이 끝날 때까지 바깥쪽의 for문은 실행 대기
		for(int i = 2; i <=9; i++) {
			for(int j=1; j<=9; j++) {
				System.out.println(i + " * " + j + " = " +  i * j);
			}				
			
		}

	}
}
