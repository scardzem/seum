package com.spring.boardweb.service.user.impl;

import org.mybatis.spring.SqlSessionTemplate;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import com.spring.boardweb.UserVO;

@Repository
public class UserDAO {
	@Autowired
	SqlSessionTemplate mybatis;
	
	public void join(UserVO userVO) {
		mybatis.insert("UserDAO.join", userVO);
		
	}
	
	public int idCheck(String userId) {
		return mybatis.selectOne("UserDAO.idCheck", userId);
	}
}
