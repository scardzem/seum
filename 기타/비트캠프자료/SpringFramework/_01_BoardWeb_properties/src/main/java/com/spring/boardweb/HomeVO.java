package com.spring.boardweb;

//VO: ValueObject ������ ���̺�� 1:1 ��Ī�ǵ��� �����ϴ� �� ��Ģ
//DTO: Data Transfer Object
public class HomeVO {
	//Ű ���� value�� �����
	private String firstName;
	private String lastName;
	private int age;
	private String job;
	
	public String getFirstName() {
		return firstName;
	}
	public void setFirstName(String firstName) {
		this.firstName = firstName;
	}
	public String getLastName() {
		return lastName;
	}
	public void setLastName(String lastName) {
		this.lastName = lastName;
	}
	public int getAge() {
		return age;
	}
	public void setAge(int age) {
		this.age = age;
	}
	public String getJob() {
		return job;
	}
	public void setJob(String job) {
		this.job = job;
	}
	
	

}
