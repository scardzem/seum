package Day02_homework;

public class _middle_3_after {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		/*3. 20�� �迭�� �����ϼ���
    		 20���� ���� ������ �̿��ؼ� 0 ~ 100������ ������ ä���ְ�
    		 ���� �ε����� Ȧ����°�� �տ������� ����ϰ�
    		 ¦����°�� �ڿ������� ����ϼ���*/
		int[] nums = new int[20];
		
		for(int i = 0; i < nums.length; i++) {
			//0 <= num < 101
			//nums[i] = (int)(Math.random() * 101); //�̰� �򰥸��� �Ʒ��ٷ� Ȯ��
			nums[i] = i;	//�̰� Ȯ�ο��̰� ���ٷ� Ǯ������
		}
		
		for(int j = 0; j < nums.length; j++) {
			//�ε����� Ȧ���� ���� ������� ���
			if(j % 2 == 1) {
				System.out.println(nums[j]);
			//�ε����� ¦���� ���� �Ųٷ� ���
			} else {
				//j == 0 => index == 8
				//j == 2 => index == 16
				// ......
				System.out.println(nums[nums.length - 2 - j]);
			}
		}
		
		
		
	}

}
