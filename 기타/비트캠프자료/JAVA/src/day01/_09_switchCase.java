package day01;

public class _09_switchCase {

	public static void main(String[] args) {
		char grade = 'B';
		
		//grade 값에 따라 실행되는 내용이 변경 됨
		switch(grade) {
		case 'A' :
			//grade가 A일 때 실행
			System.out.println("90점 이상입니다.");
			break;
		case 'B' :
			//grade가 B일 때 실행
			System.out.println("90점 미만 80점 이상입니다.");
			break;
		case 'C' :
			//grade가 C일 때 실행
			System.out.println("80점 미만 70점 이상입니다.");
			break;
		default :
			//grade가 A, B, C 모두 아닐 때 실행
			System.out.println("70점 미만입니다.");
			break;
		}
		
		
		
		
		
		
		
		
		
		
		
		
		

	}

}
