package Day03_homework;

public class Tiger extends Felidae {

	String tiger;
	String speed;
	
	//생성자(이름은 클래스명과 동일하게, 필드 속성에 맞게 괄호 안에 입력값 넣는다.)
	Tiger(String m, String f, String t, String s ){
		mammal=m;
		felidae=f;
		tiger=t;
		speed=s;		
	}
	
	void tiger1() {
		System.out.println("이 동물은 " + mammal + "이고 " + felidae+ "이고 " + tiger+"이고 달리기는 "+speed);
	}
	
	
}
