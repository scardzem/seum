package com.spring.boardweb;

//���� �����ִ� �������� ��ȣ, �� �������� ǥ���� �Խù� ����, ������ ���� ��ȣ�� ������ ��ü
public class Criteria {
	private int pageNum;
	private int amount;
	private int startNum;
	
	public Criteria() {
		this(1, 10);
	}
	
	public Criteria(int pageNum, int amount) {
		this.pageNum = pageNum;
		this.amount = amount;
	}

	public int getPageNum() {
		return pageNum;
	}

	public void setPageNum(int pageNum) {
		this.pageNum = pageNum;
	}

	public int getAmount() {
		return amount;
	}

	public void setAmount(int amount) {
		this.amount = amount;
	}

	public int getStartNum() {
		return startNum;
	}

	public void setStartNum(int startNum) {
		this.startNum = startNum;
	}

	@Override
	public String toString() {
		return "Criteria [pageNum=" + pageNum + ", amount=" + amount + ", startNum=" + startNum + "]";
	}
}
