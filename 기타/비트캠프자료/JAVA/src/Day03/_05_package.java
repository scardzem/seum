package Day03;

import java.util.Scanner;

//같은 패키지 내의 클래스가 아닐 경우 import구문 사용 해서 적용한다.(밑에 sysout~(test.num))
//import구문 사용 시 명확히 사용할 클래스를 지정하거나(바로 아랫줄 import)
import Day03.com.test.test_05_;
//패키지 내의 모든 클래스를 지정할 수 있다.(아랫줄 import)
//import Day03.com.test.*;
//import 단축키 ctrl + shift + o

public class _05_package {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		//단축키로 import해보려고 쓴 문장
		Scanner sc = new Scanner(System.in);
		
		System.out.println(test_05_.num);
	}

}
