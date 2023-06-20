package Day05;

public class _03_multiInheritInterface {

	public static void main(String[] args) {
		//자유게시판 객체 생성
		//다중 상속 시 하나의 객체로 여러 개의 기능 사용 가능
		FreeBoard freeBoard = new FreeBoard();
		
		//자유게시판의 객체의 게시판 기능 사용
		Board board = freeBoard;
		freeBoard.registReply();
		freeBoard.registBoard();
		freeBoard.updateBoard();
		freeBoard.deleteBoard();
		freeBoard.getBoardList();
		System.out.println("--------------------\n");
		
		
		//자유게시판 객체의 답글 기능 사용
		Reply reply = freeBoard;
		reply.registReply();
		reply.updateReply();
		reply.deleteReply();
		reply.getReplyList();
	}

}
