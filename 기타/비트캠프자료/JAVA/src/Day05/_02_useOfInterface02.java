package Day05;

public class _02_useOfInterface02 {

	public static void main(String[] args) {
		
		
		//공지사항 게시판 사용하는 클래스
		Board board = new NoticeBoard();
		
		board.getBoardList();
		board.registBoard();
		board.updateBoard();
		board.deleteBoard();

	}

}
