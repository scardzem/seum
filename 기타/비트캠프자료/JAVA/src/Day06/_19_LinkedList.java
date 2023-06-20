package Day06;

import java.util.ArrayList;
import java.util.LinkedList;
import java.util.List;

public class _19_LinkedList {
	public static void main(String[] args) {
		
		List<String> aList = new ArrayList<String>();
		List<String> lList = new LinkedList<String>();
		
		long startTime;
		long endTime;
		
		startTime = System.nanoTime();
		for(int i = 0; i < 1000000; i++) {
			aList.add(String.valueOf(i));
		}
		endTime = System.nanoTime();
		
		System.out.println("ArrayList 객체 1000000개 추가하는 데 걸린 시간 : " 
							+ (endTime - startTime) + " 나노초입니다.");
		
		startTime = System.nanoTime();
		for(int i = 0; i < 1000000; i++) {
			lList.add(String.valueOf(i));
		}
		endTime = System.nanoTime();
		
		System.out.println("LinkedList 객체 1000000개 추가하는 데 걸린 시간 : " 
							+ (endTime - startTime) + " 나노초입니다.");
		
		
		
		
		//lList.remove(1)
		//System.out.println(lList.size());
		startTime = System.nanoTime();
		System.out.println(aList.contains("900000")); 
		endTime = System.nanoTime();
		System.out.println("ArrayList에서 900000 검색하는 데 걸린 시간 : " 
							+ (endTime - startTime) + " 나노초입니다.");
		
		
		startTime = System.nanoTime();
		System.out.println(lList.contains("900000")); 
		endTime = System.nanoTime();
		System.out.println("LinkedList에서 900000 검색하는 데 걸린 시간 : " 
							+ (endTime - startTime) + " 나노초입니다.");
		
		System.out.println("-------------------------");
		
		startTime = System.nanoTime();
		for(int i = 0; i < 5000; i++) {
			aList.add(i, String.valueOf(i));
		}
		endTime = System.nanoTime();
		System.out.println("ArrayList 중간에 객체 추가하는 데 걸린 시간 : " 
							+ (endTime - startTime) + " 나노초입니다.");
		
		startTime = System.nanoTime();
		for(int i = 0; i < 5000; i++) {
			lList.add(i, String.valueOf(i));
		}
		endTime = System.nanoTime();
		System.out.println("LinkedList 중간에 객체 추가하는 데 걸린 시간 : " 
							+ (endTime - startTime) + " 나노초입니다.");
		
		
		
	}

}
