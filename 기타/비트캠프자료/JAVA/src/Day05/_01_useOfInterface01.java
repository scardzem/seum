package Day05;

public class _01_useOfInterface01 {

	public static void main(String[] args) {
		//�Ʒ� ����ó�� Freeboard, NoticeBoard ��ü�� ���� ����� Ŭ���� ���� ��ü�� �ϳ��� �� ���θ����� �ϴµ�
		//�׷��� �ϸ� �޸𸮰� ����Ǵϱ� �θ�Ӽ����� ���� �ʿ信 ���� ����ȯ�ؼ� ���°Ŷ����
/*		FreeBoard fBoard = new FreeBoard();
		NoticeBoard nBoard = new NoticeBoard();		*/
		
		//�����Խ��� ����ϴ� Ŭ����
		Board board = new FreeBoard();
		
		board.getBoardList();
		board.registBoard();
		board.updateBoard();
		board.deleteBoard();
		
		FreeBoard.getBoard();
		
		board = new NoticeBoard();
	}

}
