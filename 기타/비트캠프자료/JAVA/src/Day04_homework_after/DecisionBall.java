package Day04_homework_after;

import java.util.Scanner;

public class DecisionBall {
	private int s; // ��Ʈ����ũ
	private int b; // ��
	private int regame = 0; //0:���� ���� ��� ����, 1 : �� ���� ����, 2 : ���� ����
	private Scanner sc = new Scanner(System.in); //�� ���� �������� y,n �Է¹ޱ� ���ؼ� ��ĵ
	
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
			System.out.println("==> "+s+"��Ʈ����ũ "+b+"��");
		}
		else {
			System.out.println("==> "+s+"��Ʈ����ũ ");
			System.out.println("�����ƿ�!!");
			System.out.println();
			while(true) {
				System.out.print("�ٽ� �Ͻðڽ��ϱ�(Y/N)?");
				String chk = sc.nextLine();
				if(chk.equals("n") || chk.equals("N")) {
					regame = 2;
					break;
				} else if(chk.equals("y") || chk.equals("Y")) {
					regame = 1;
					break;
				} else {
					System.out.println("�߸� �Է��ϼ̽��ϴ�.");
					continue;
				}
			}
		}
		return regame;
	}
}
