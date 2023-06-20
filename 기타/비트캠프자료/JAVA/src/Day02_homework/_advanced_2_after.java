package Day02_homework;

import java.util.Scanner;

public class _advanced_2_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*2. 가위 바위 보 게임을 만듭니다
   			 컴퓨터는 난수로 생성하고 사용자는 문자열로 입력받습니다
   			 10번 진행하고 승 패 비김 을 출력하세요*/
		Scanner sc = new Scanner(System.in);
		String strNum = "";
		int num = 0;
		int randomNum = 0;
		
		for(int i = 0; i < 10; i++) {
			randomNum = (int)(Math.random() * 3);
			System.out.println(randomNum); //컴퓨터가 낸 것 출력 (0:가위, 1:바위, 2:보)
			
			System.out.print("가위, 바위, 보 중 하나 입력");
			strNum = sc.nextLine();
			
			if(strNum.equals("가위")) {
				num = 0;
			} else if(strNum.equals("바위")) {
				num = 1;
			} else if(strNum.equals("보")) {
				num = 2;
			} else {
				System.out.println("잘못입력하셨습니다.");
				//잘못 입력 시 그 회차 게임 다시 진행(컨티뉴로 다시 돌아 가는데 for함수로 i는 1이 되기 때문에
				//잘못입력했을 때 게임 횟수를 진행시키지 않기 위해서 i--;를 하고 돌려보내는 것
				i--;
				continue;
			}
			
			if(num == randomNum) {
				System.out.println("비김");
			} else if(num == 0) {
				if(randomNum == 1) {
					System.out.println("패");
				} else {
					System.out.println("승");
				}
			} else if(num == 1) {
				if(randomNum == 2) {
					System.out.println("패");
				} else {
					System.out.println("승");
				}
			} else if(num == 2) {
				if(randomNum == 0) {
					System.out.println("패");
				} else {
					System.out.println("승");
				}
			}
		}
	}

}
