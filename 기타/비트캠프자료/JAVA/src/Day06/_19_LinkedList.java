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
		
		System.out.println("ArrayList ��ü 1000000�� �߰��ϴ� �� �ɸ� �ð� : " 
							+ (endTime - startTime) + " �������Դϴ�.");
		
		startTime = System.nanoTime();
		for(int i = 0; i < 1000000; i++) {
			lList.add(String.valueOf(i));
		}
		endTime = System.nanoTime();
		
		System.out.println("LinkedList ��ü 1000000�� �߰��ϴ� �� �ɸ� �ð� : " 
							+ (endTime - startTime) + " �������Դϴ�.");
		
		
		
		
		//lList.remove(1)
		//System.out.println(lList.size());
		startTime = System.nanoTime();
		System.out.println(aList.contains("900000")); 
		endTime = System.nanoTime();
		System.out.println("ArrayList���� 900000 �˻��ϴ� �� �ɸ� �ð� : " 
							+ (endTime - startTime) + " �������Դϴ�.");
		
		
		startTime = System.nanoTime();
		System.out.println(lList.contains("900000")); 
		endTime = System.nanoTime();
		System.out.println("LinkedList���� 900000 �˻��ϴ� �� �ɸ� �ð� : " 
							+ (endTime - startTime) + " �������Դϴ�.");
		
		System.out.println("-------------------------");
		
		startTime = System.nanoTime();
		for(int i = 0; i < 5000; i++) {
			aList.add(i, String.valueOf(i));
		}
		endTime = System.nanoTime();
		System.out.println("ArrayList �߰��� ��ü �߰��ϴ� �� �ɸ� �ð� : " 
							+ (endTime - startTime) + " �������Դϴ�.");
		
		startTime = System.nanoTime();
		for(int i = 0; i < 5000; i++) {
			lList.add(i, String.valueOf(i));
		}
		endTime = System.nanoTime();
		System.out.println("LinkedList �߰��� ��ü �߰��ϴ� �� �ɸ� �ð� : " 
							+ (endTime - startTime) + " �������Դϴ�.");
		
		
		
	}

}
