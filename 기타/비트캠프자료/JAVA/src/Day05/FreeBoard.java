package Day05;

public class FreeBoard implements Board, Reply {

	@Override
	//�����Խ��� �Խñ� ��� ��ȸ
	public void getBoardList() {
		System.out.println("�����Խ��� �Խñ� ��� ��ȸ");
		System.out.println("�� �������� ��ȸ ������ �Խñ��� ������ " + this.BOARD_COUNT + "�� �Դϴ�.");
	}
	
	@Override
	//�����Խ��� �Խñ� ���
	public void registBoard() {
		System.out.println("�����Խ��� �Խñ� ���");
	}
	
	@Override
	//�����Խ��� �Խñ� ����
	public void updateBoard() {
		System.out.println("�����Խ��� �Խñ� ����");
	}
	
	@Override
	//�����Խ��� �Խñ� ����
	public void deleteBoard() {
		System.out.println("�����Խ��� �Խñ� ����");
	}
	
	public static void getBoard() {
		System.out.println("�����Խ��� �Խñ� 1�� ��ȸ");
	}
	
	//-----------------------
	//(word 2.)Reply
	
	@Override
	//�����Խ��� �Խñۿ� ��� ���
	public void registReply() {
		System.out.println("��� ����");
	}
	//�����Խ��� �Խñ� ��� ����
	public void updateReply() {
		System.out.println("��� ����");
	}
	//�����Խ��� �Խñ� ��� ����
	public void deleteReply() {
	System.out.println("��� ����");
	}
	//�����Խ��� �Խñ� ��� ��� ��ȸ
	public void getReplyList() {
	System.out.println("��� ��� ��ȸ");
	}
	
	
}
	
	
