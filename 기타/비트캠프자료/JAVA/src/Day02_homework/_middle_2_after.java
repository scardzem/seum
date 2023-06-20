package Day02_homework;

import java.util.Scanner;

public class _middle_2_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
				/*2. 0보다 큰 정수를 입력받고 이진수와 16진수로 출력하세요*/
				Scanner sc = new Scanner(System.in);
				int num;
				//입력받은 정수를 2진수로 변환후 저장될 배열
				//배열의 길이보다 큰 값이 입력된 경우에는 가변배열 사용
				//가변배열은 배열의 길이가 유동적인 배열(잘 쓰이진 않음)
				int[] twoNum = new int[100];
				
				while(true) {
					System.out.print("0보다 큰 정수 입력하세요.");
					num = sc.nextInt();
					if(num <= 0) {
						//continue는 밑의 코드가 실행되지 않고 다시 반복문으로 돌아가게 함
						continue;
					} else {
						break;
					}
				}
				
				//%x : 헥사 값으로 표출(16진수)
				System.out.printf("16진수 : 0x%x \n",num);
				
				//2진수로  변환한 값을 배열에 하나씩 담음
				/*31을 2진수로 바꾸면(아래)
				 * 31을 2로 나눈 나머지 ----- 1
				 * 2|31 ----- 1
				 * 2|15 ----- 1
				 * 2|7  ----- 1
				 * 2|3  ----- 1
				 * 2|1  ----- 1
				 *   0
				  (위에서부터 111110이 2진수인데 값을 저장하면 011111로 저장돼서
				  2진수로 출력하려면 출력을 역순으로 해야됨)
				*/
				for(int j = 0; j < twoNum.length; j++) {
					twoNum[j] = num %2;
					num /=2;
					if(num == 0) {
						break;
					}
				}
				
				
				System.out.print("2진수 : ");
				//저장된 2진수 값을 거꾸로 출력
				//num == 13 -> 1101
				//출력값은 1101
				for (int i = 99; i >= 0; i--) {
					//배열 값이 1을 만났을 때부터 출력함
					if (twoNum[i] == 1) {
						for (int j = i; j >= 0; j--) {
							System.out.print(twoNum[j]);
						}
						System.out.println(" ");
						break;
					}
				}

	}

}
