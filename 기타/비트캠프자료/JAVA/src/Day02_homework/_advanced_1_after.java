package Day02_homework;

import java.util.Scanner;

public class _advanced_1_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*1. 2차원 평면에서 하나의 직사각형은 두 점으로 표현된다. (50, 50)과 (100, 100)의
   			 두 점으로 이루어진 직사각형이 있다고 하자. 
   			 이때 키보드로부터 다른 직사각형을 구성하는 두 점(x1, y1), (x2, y2)를 입력받아
   			 두 개의 직사각형이 서로 충돌하는지 판별하는 프로그램을 작성하세요*/
		
		Scanner sc = new Scanner(System.in);

		System.out.print("x1의 좌표를 입력해주세요>> ");
		int x1 = sc.nextInt();
		System.out.print("y1의 좌표를 입력해주세요>> ");
		int y1 = sc.nextInt();
		System.out.print("x2의 좌표를 입력해주세요>> ");
		int x2 = sc.nextInt();
		System.out.print("y2의 좌표를 입력해주세요>> ");
		int y2 = sc.nextInt();
		int x, y;
		
		//프로그램이 진행 되면서 값이 입력되면 변수 초기화 하지 않아도 됨
		//값이 입력 되지 않은 상황이 발생 시에는 초기화 필요
		
		if (x1 > 0 && x2 > 0) {				//x1, x2좌표가 둘 다 양수일때
			if (x1 > x2)					//x1이 x2보다 크면 x1-x2
				x = x1 - x2;
			else							//x1이 x2보다 작으면 x2-x1로 바꿔줌.
				x = x2 - x1;				//안그러면 음수가 나오기때문에.
		} else {							//x1, x2 둘다 음수거나 하나만 음수일때
			x = x1 + x2;					//-가 -를 만나면 +가 되어버리니까 그냥 더해줌
		}
		
		if (y1 > 0 && y2 > 0) {				// 위와 동일
			if (y1 > y2)
				y = y1 - y2;
			else
				y = y2 - y1;
		} else {
			y = y1 + y2;
		}

		if (x >= 50 || y >= 50) {//x는 x1좌표와 x2좌표의 차이값, y도 마찬가지. 둘 중 하나만 되도 충돌.
			System.out.println("충돌합니다.");
		} else {
			System.out.println("충돌하지않습니다.");
		}
	}

}
