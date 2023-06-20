package Day03_homework;

public class Lion extends Felidae {

	String lion;
	int age;
	
	Lion(String m, String f, String l, int a ){
		mammal=m;
		felidae=f;
		lion=l;
		age=a;		
	}
	
	void lion1() {
		System.out.println("이 동물은 " + mammal + "이고 " + felidae+ "이고 " + lion+"이며 "+age+"살이다");
	}
	
}
