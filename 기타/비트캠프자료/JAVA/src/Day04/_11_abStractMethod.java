package Day04;

public class _11_abStractMethod {

	public static void main(String[] args) {
		// TODO Auto-generated method stub
		
		Dog dog = new Dog();
		Cat cat = new Cat();
		
		dog.sound();
		cat.sound();
		System.out.println("-----------------------");
		
		//�߻�Ŭ������ ��ü�� �������� ������ �ڽ� ��ü�� ����ȯ�Ͽ� ���� ����
		//Animal animal = new Animal(); ---> ���� �߻�
		Animal animal = null;
		
		//�ڽİ�ü�� �������̵� �� �޼ҵ� ȣ��
		animal = new Dog();
		animal.sound();
		
		animal = new Cat();
		animal.sound();
		System.out.println("-----------------------");
		
		//�Ű������� ���޵� �ڽİ�ü�� �ڵ����� ����ȯ �ȴ�.
		//�ڽ��� ��ü�� �������̵� �� �޼ҵ� ȣ��
		animalSound(new Dog()); //�̷� ������ε� �Է��� �ȴ�.
		animalSound(animal); //�ٷ� ���� animal=new Cat();���� ���� ���־ animal�� Cat�� �����̴�.


	}

	public static void animalSound(Animal animal) {
		animal.sound();
	}
	
}
