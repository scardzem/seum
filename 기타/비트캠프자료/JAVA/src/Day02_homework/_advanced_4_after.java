package Day02_homework;

import java.util.Scanner;

public class _advanced_4_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*4. 컴퓨터로 0~100사이의 임의의 난수를 생성합니다
  			 사용자로부터 0~100사이의 숫자를 입력받습니다
  			 컴퓨터가 생성한 난수보다 크면 "큽니다"
  			 작으면 "작습니다"를 출력합니다
  			 계속 반복하다가 맞추면 "?회만에 맞췄습니다"
   			 를 출력하세요.*/
		int count = 1;
		Scanner sc = new Scanner(System.in);
		
		int randomNum = (int)(Math.random() * 101);
		System.out.println(randomNum);
		
		while(true) {
			System.out.print("사용자 숫자를 입력하세요:");
			int num = sc.nextInt();
			
			if(randomNum == num) {
				System.out.println("맞추셨습니다.");
				System.out.println(count + "회 만에 맞추셨습니다.");
				break;
			}else if(randomNum > num) {
				count++;
				System.out.println(num + "보다 큽니다.");
			}else if(randomNum < num) {
				count++;
				System.out.println(num + "보다 작습니다.");
			}
		}
	}

}
