package Day02_homework;

public class _middle_3_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*3. 20개 배열을 선언하세요
    		 20개의 값을 난수를 이용해서 0 ~ 100까지의 값으로 채워넣고
    		 먼저 인덱스의 홀수번째는 앞에서부터 출력하고
    		 짝수번째는 뒤에서부터 출력하세요*/
		int[] nums = new int[20];
		
		for(int i = 0; i < nums.length; i++) {
			//0 <= num < 101
			//nums[i] = (int)(Math.random() * 101); //이게 헷갈리면 아랫줄로 확인
			nums[i] = i;	//이건 확인용이고 윗줄로 풀이했음
		}
		
		for(int j = 0; j < nums.length; j++) {
			//인덱스가 홀수일 때는 순서대로 출력
			if(j % 2 == 1) {
				System.out.println(nums[j]);
			//인덱스가 짝수일 때는 거꾸로 출력
			} else {
				//j == 0 => index == 8
				//j == 2 => index == 16
				// ......
				System.out.println(nums[nums.length - 2 - j]);
			}
		}
		
		
		
	}

}
