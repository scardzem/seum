package Day06;

import java.util.ArrayList;
import java.util.List;

public class _17_ArrayList {

	public static void main(String[] args) {
		
		List<String> list = new ArrayList<String>();
		
		//list = ["java", "JDBC", "Servlet/JSP"]
		list.add("java");
		list.add("JDBC");
		list.add("Servlet/JSP");
		//list�� �迭�� �ٸ��� ����ִ� ������ ��ü �߰�
		//list = ["java", "JDBC","DataBase", "Servlet/JSP"]
		
		//int[] intArr = [1, 2, 3];
		//intArr[1] = 4;;
		//intarr = [1, 4, 3];
		list.add(2,"DataBase");  //2��° �ڸ��� �ڷḦ ���� �ִ´�(���� 2��° �ڷ���ʹ� 3��° ���ķ� ��ġ �̵�)
		list.add("MyBatis");
		
		System.out.println("ArrayList list�� ������� : "+list.size());
		System.out.println("--------------------------\n");
		
		String str = list.get(2);
		System.out.println(str);
		System.out.println("--------------------------\n");
		
		for(int i=0; i<list.size(); i++) {
			System.out.println(i + "��°�� ����� ��ü"+list.get(i));
		}
		System.out.println("--------------------------\n\n\n");
		
		list.remove(2);
		System.out.println("ArrayList list�� ������� : "+list.size());
		System.out.println("--------------------------\n");

		for(int i=0; i<list.size(); i++) {
			System.out.println(i + "��°�� ����� ��ü"+list.get(i));
		}
		
	}

}
