package Day05;

public class _03_multiInheritInterface {

	public static void main(String[] args) {
		//�����Խ��� ��ü ����
		//���� ��� �� �ϳ��� ��ü�� ���� ���� ��� ��� ����
		FreeBoard freeBoard = new FreeBoard();
		
		//�����Խ����� ��ü�� �Խ��� ��� ���
		Board board = freeBoard;
		freeBoard.registReply();
		freeBoard.registBoard();
		freeBoard.updateBoard();
		freeBoard.deleteBoard();
		freeBoard.getBoardList();
		System.out.println("--------------------\n");
		
		
		//�����Խ��� ��ü�� ��� ��� ���
		Reply reply = freeBoard;
		reply.registReply();
		reply.updateReply();
		reply.deleteReply();
		reply.getReplyList();
	}

}
