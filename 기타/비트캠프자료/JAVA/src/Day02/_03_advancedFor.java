package Day02;

public class _03_advancedFor {

	public static void main(String[] args) {
		
	//1. ���� for�� (�迭�� �̿��Ͽ� �ʱ�ȭ �� ���� ���� for ��� ����)
		int[] scores = {100, 90, 80};
		int sum = 0;
		
		//scores �迭�� ��� ������ŭ �ݺ�
		//scores �迭�� ��� �ϳ��� ������ score ������ ��Ƽ� ���
		for(int score : scores) {
			sum += score;
		}
		
		System.out.println("������ ������ : " + sum);
		
		

	}

}
