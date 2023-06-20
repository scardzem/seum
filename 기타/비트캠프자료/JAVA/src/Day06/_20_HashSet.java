package Day06;

import java.util.HashSet;
import java.util.Iterator;
import java.util.Set;

public class _20_HashSet {
	public static void main(String[] args) {

		Set<String> set = new HashSet<String>();
		
		set.add("java");
		set.add("JDBC");
		set.add("Servlet/JAP");
		//중복값 저장 안 됨
		set.add("java");
		set.add("MyBatis");
		
		System.out.println("총 객체 수 : " + set.size());
		
		Iterator<String> iterator = set.iterator();
		while(iterator.hasNext()) {
			String str1 = iterator.next();
			if(str1.equals("Myatis")) {
				System.out.println(iterator.next());
			}
		}
		
		set.remove("JDBC");
		
		System.out.println("총 객체 수 : " + set.size());
		
		iterator = set.iterator();
		for(String str : set) {			//향상된 for문
			System.out.println(str);
		}
		
		set.clear();
		if(set.isEmpty()) {
			System.out.println("비어 있음");
		} else {
			System.out.println("비어 있지 않음");
		}
	}
}
