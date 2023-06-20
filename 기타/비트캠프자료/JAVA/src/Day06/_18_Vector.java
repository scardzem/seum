package Day06;

import java.util.List;
import java.util.Vector;

public class _18_Vector {

	public static void main(String[] args) {
		
		List<Board> list = new Vector<Board>();
		
		list.add(new Board("제목1", "내용1", "글쓴이1"));
		list.add(new Board("제목2", "내용2", "글쓴이2"));
		list.add(new Board("제목3", "내용3", "글쓴이3"));
		list.add(new Board("제목4", "내용4", "글쓴이4"));
		list.add(new Board("제목5", "내용5", "글쓴이5"));
		for(int i = 0; i<list.size(); i++) {
			System.out.println(list.get(i).title + "\t"+list.get(i).content +"\t" + list.get(i).writer);
		}
		System.out.println("-------------------------\n");
		
		list.remove(2); //[2]위치가 삭제되고 뒤에 있던게 앞으로 땡겨짐
		list.remove(3);
		
		for(int i = 0; i<list.size(); i++) {
			System.out.println(list.get(i).title + "\t"+list.get(i).content +"\t" + list.get(i).writer);
		}
		
	}

}
