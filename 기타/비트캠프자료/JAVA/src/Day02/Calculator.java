package Day02;

public class Calculator {
	//int�� �Ű����� �� ���� �޾� ���� ���� �����ϴ� �޼ҵ�
	int add(int x, int y) {
		return x + y;
	
/*	�Ʒ� �迭�� �Ű������� �޴� ����� �� ���� ���� x,y�� �̾ 
 * 	ó���ؾ� �ϴ� �Ű������� ������ ���� �ڵ尡 �����Ѵ�
  	int add(int x, int y, int z) {
		return x + y +z;
		}
	
	int add(int x, int y, int z, int xx) {
		return x + y + z + xx;
		
		 .....
	
*/
	}
	
	
	//int�� �Ű����� �� ���� �޾� ���� ���� double�� ������ �����ϴ� �޼ҵ�
	double devide(int x, int y) {
		return (double)x/y;
	}
	
	//�Ű������� ������ �� �� �޼ҵ��� ����(word�� �Ű����� �� ��~ �κ�)
	//�Ű������� ������ ���� �� ���� �����ε��Ͽ� �޼ҵ带 ������ �ϸ�
	//�ҽ� �ڵ��� ���̰� ������� ���������� ������
	//�迭�� �Ű������� �޾Ƽ� �� ���� �Ű������� ���͵� ó�� ���� �ϵ��� �޼ҵ带 ����
	int sum(int[] scores) {
		int totalScore = 0;
		
		for(int i = 0; i< scores.length; i++) {
			totalScore += scores[i];
		}
		return totalScore;
	}
	
}
