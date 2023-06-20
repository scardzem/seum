package Day04;

public class _11_abStractMethod {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Dog dog = new Dog();
		Cat cat = new Cat();
		
		dog.sound();
		cat.sound();
		System.out.println("-----------------------");
		
		//추상클래스는 객체로 생성되지 않지만 자식 객체를 형변환하여 삽입 가능
		//Animal animal = new Animal(); ---> 에러 발생
		Animal animal = null;
		
		//자식객체에 오버라이딩 된 메소드 호출
		animal = new Dog();
		animal.sound();
		
		animal = new Cat();
		animal.sound();
		System.out.println("-----------------------");
		
		//매개변수로 전달된 자식객체가 자동으로 형변환 된다.
		//자식의 객체에 오버라이딩 된 메소드 호출
		animalSound(new Dog()); //이런 방식으로도 입력이 된다.
		animalSound(animal); //바로 위에 animal=new Cat();으로 선언 돼있어서 animal은 Cat인 상태이다.


	}

	public static void animalSound(Animal animal) {
		animal.sound();
	}
	
}
