package Day05;

public class NoticeBoard implements Board {

	@Override
	//�������װԽ��� �Խñ� ��� ��ȸ
	public void getBoardList() {
		System.out.println("�������� �Խ��� �Խñ� ��� ��ȸ");
		System.out.println("�������� �Խ��� ��� �� ���� ÷��");
	}
	
	@Override
	//�������װԽ��� �Խñ� ���
	public void registBoard() {
		System.out.println("�������� �Խ��� �Խñ� ���");
		System.out.println("�������� �Խ��� ��� �� ���� ÷��");
	}
	
	@Override
	//�������װԽ��� �Խñ� ����
	public void updateBoard() {
		System.out.println("�������� �Խ��� �Խñ� ����");
	}
	
	@Override
	//�������װԽ��� �Խñ� ����
	public void deleteBoard() {
		System.out.println("�������� �Խ��� �Խñ� ����");
	}
	
	
	
}
