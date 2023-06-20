package Day05;
//(word 2.)interface와 추상클래스의 차이(다중 상속 가능)
public interface Reply {
	//답글 등록
	public void registReply();
	//답글 수정
	public void updateReply();
	//답글 삭제
	public void deleteReply();
	//답글 목록 조회
	public void getReplyList();
	
}
