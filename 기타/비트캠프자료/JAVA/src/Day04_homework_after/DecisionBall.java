package Day04_homework_after;

import java.util.Scanner;

public class DecisionBall {
	private int s; // 스트라이크
	private int b; // 볼
	private int regame = 0; //0:현재 게임 계속 진행, 1 : 새 게임 진행, 2 : 게임 종료
	private Scanner sc = new Scanner(System.in); //새 게임 진행할지 y,n 입력받기 위해서 스캔
	
	public int decision(int[] randomNum, int[] inputNum) {
		s = 0;
		b = 0;

		for (int i = 0; i < randomNum.length; i++) {
			for (int j = 0; j < inputNum.length; j++) {
				if(i == j && randomNum[i] == inputNum[j])
					++s;
				else if(i != j && randomNum[i] == inputNum[j])
					++b;
			}
		}
		if(s < 3) {
			System.out.println("==> "+s+"스트라이크 "+b+"볼");
		}
		else {
			System.out.println("==> "+s+"스트라이크 ");
			System.out.println("삼진아웃!!");
			System.out.println();
			while(true) {
				System.out.print("다시 하시겠습니까(Y/N)?");
				String chk = sc.nextLine();
				if(chk.equals("n") || chk.equals("N")) {
					regame = 2;
					break;
				} else if(chk.equals("y") || chk.equals("Y")) {
					regame = 1;
					break;
				} else {
					System.out.println("잘못 입력하셨습니다.");
					continue;
				}
			}
		}
		return regame;
	}
}
