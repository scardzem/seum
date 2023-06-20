package com.spring.boardweb.service.impl;

import java.util.List;
import java.util.Map;

import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Service;

import com.spring.boardweb.HomeVO;
import com.spring.boardweb.service.HomeService;

//������̼����� ��Ī�� ����� �� �� �ִ�.
//��Ī���� �����ϸ� Ŭ�������� ù ���ڸ� �ҹ��ڷ� ����� �̸����� ��ü ����
@Service
public class HomeServiceImpl implements HomeService {
	@Autowired
	HomeDAO homeDAO;

	@Override
	public List<HomeVO> getNameList() {
		return homeDAO.getNameList();
	}
	
	@Override
	public void insertName (HomeVO homeVO) {
		homeDAO.insertName(homeVO);
	}
	
	@Override
	public void updateName(Map<String, String> paramMap) {
		homeDAO.updateName(paramMap);
	}
	
	@Override
	public void deleteName(Map<String, String> paramMap) {
		homeDAO.deleteName(paramMap);
	}
}
