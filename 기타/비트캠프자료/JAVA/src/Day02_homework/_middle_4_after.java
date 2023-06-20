package Day02_homework;

public class _middle_4_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		/*4. 처음에 은행에 맡긴 돈은 10000원입니다
   			 금리는 연 10%입니다
   			 복리이자로 계산했을 때 10년후 얼마가 될까요?*/
		double money = 10000;

		for (int i = 1; i <= 10; i++) {
			money += (money * 0.1);
		}
		
		System.out.println("10년 후 금액 : " + money);
	}

}
