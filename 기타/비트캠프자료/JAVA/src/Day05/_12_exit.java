package Day05;

import java.util.Scanner;

public class _12_exit {

	public static void main(String[] args) {
		// TODO Auto-generated method stub

		Scanner sc = new Scanner(System.in);
		
		while(true) {
			System.out.println("1. ����");
			if(sc.nextLine().equals("1")){
				//exit�޼ҵ带 ������ �ٷ� ���α׷� ����	
				System.exit(0);
					//break; ���� ������ : break���� �ݺ����� ����ǰ�
					//�ݺ��� ���� �ڵ� ����
		} else {
			System.out.println("�ٽ� �Է����ּ���.");
			continue;
		}
	}

}

}