package Day06;

import java.util.List;
import java.util.Vector;

public class _18_Vector {

	public static void main(String[] args) {
		
		List<Board> list = new Vector<Board>();
		
		list.add(new Board("����1", "����1", "�۾���1"));
		list.add(new Board("����2", "����2", "�۾���2"));
		list.add(new Board("����3", "����3", "�۾���3"));
		list.add(new Board("����4", "����4", "�۾���4"));
		list.add(new Board("����5", "����5", "�۾���5"));
		for(int i = 0; i<list.size(); i++) {
			System.out.println(list.get(i).title + "\t"+list.get(i).content +"\t" + list.get(i).writer);
		}
		System.out.println("-------------------------\n");
		
		list.remove(2); //[2]��ġ�� �����ǰ� �ڿ� �ִ��� ������ ������
		list.remove(3);
		
		for(int i = 0; i<list.size(); i++) {
			System.out.println(list.get(i).title + "\t"+list.get(i).content +"\t" + list.get(i).writer);
		}
		
	}

}
