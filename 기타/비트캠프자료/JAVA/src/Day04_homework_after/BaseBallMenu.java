package Day04_homework_after;

import java.util.Scanner;

public class BaseBallMenu {
	private Scanner sc = new Scanner(System.in);
	private int[] inputNum = new int[3];
	private DecisionBall db = new DecisionBall();
	private int regame; 
	
	public int menu(int[] randomNum) {	
		for (int i : randomNum) { //���� for��
			System.out.print(i); // ���� �迭�� �� �������� ����غ���
		}
		System.out.println();
		
		System.out.print("ù ��° ���� �Է� >> ");
		inputNum[0] = Integer.parseInt(sc.nextLine());
		
		System.out.print("�� ��° ���� �Է� >> ");
		inputNum[1] = Integer.parseInt(sc.nextLine());
		
		while(( inputNum[1] == inputNum[0])) {
			System.out.print("�� ��° ���� �Է� >> ");
			inputNum[1] = Integer.parseInt(sc.nextLine());
		}
		
		System.out.print("�� ��° ���� �Է� >> ");
		inputNum[2] = Integer.parseInt(sc.nextLine());
		
		while((inputNum[2] == inputNum[1]) || (inputNum[2] == inputNum[0])) {
			System.out.print("�� ��° ���� �Է� >> ");
			inputNum[2] = Integer.parseInt(sc.nextLine());;
		}
		
		regame = db.decision(randomNum, inputNum);
		
		return regame;
	}
}
