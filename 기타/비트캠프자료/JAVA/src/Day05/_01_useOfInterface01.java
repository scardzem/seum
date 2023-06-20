package Day05;

public class _01_useOfInterface01 {

	public static void main(String[] args) {
		//아래 두줄처럼 Freeboard, NoticeBoard 객체를 따로 만들면 클래스 별로 객체를 하나씩 다 따로만들어야 하는데
		//그렇게 하면 메모리가 낭비되니까 부모속성으로 만들어서 필요에 따라서 형변환해서 쓰는거라고함
/*		FreeBoard fBoard = new FreeBoard();
		NoticeBoard nBoard = new NoticeBoard();		*/
		
		//자유게시판 사용하는 클래스
		Board board = new FreeBoard();
		
		board.getBoardList();
		board.registBoard();
		board.updateBoard();
		board.deleteBoard();
		
		FreeBoard.getBoard();
		
		board = new NoticeBoard();
	}

}
