package Day05;

public class _13_nanoTime {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		//합산 전 시간을 담을 변수
		long time1 = System.nanoTime();
		
		int sum = 0;
		
		for(int i = 1; i<= 100000; i++) {
			sum += i;
		}
		
		//합산 후 시간을 담을 변수
		long time2 = System.nanoTime();
		System.out.println("1~100000까지의 총합 : " + sum);
		System.out.println("1~100000까지의 합산에 걸린 시간 : " + (time2 - time1) + "나노초 입니다.");
		
		

	}

}
