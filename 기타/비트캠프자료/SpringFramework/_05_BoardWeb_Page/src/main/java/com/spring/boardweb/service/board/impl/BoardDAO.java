package com.spring.boardweb.service.board.impl;

import java.util.HashMap;
import java.util.List;
import java.util.Map;

import org.mybatis.spring.SqlSessionTemplate;
import org.springframework.beans.factory.annotation.Autowired;
import org.springframework.stereotype.Repository;

import com.spring.boardweb.BoardVO;
import com.spring.boardweb.Criteria;

@Repository
public class BoardDAO {
	@Autowired
	SqlSessionTemplate mybatis;
	
	public void insertBoard(BoardVO boardVO) {
		mybatis.insert("BoardDAO.insertBoard", boardVO);
	}
	
	public List<BoardVO> getBoardList(Map<String, String> paramMap, Criteria cri) {
		Map<String, Object> pMap = new HashMap<String, Object>();
		pMap.put("boardSearch", paramMap);
		cri.setStartNum((cri.getPageNum() - 1) * cri.getAmount());
		pMap.put("cri", cri);
		
		return mybatis.selectList("BoardDAO.getBoardList", pMap);
	}
	
	public BoardVO getBoard(int boardSeq) {
		return mybatis.selectOne("BoardDAO.getBoard", boardSeq);
	}
	
	public void updateBoardCnt(int boardSeq) {
		mybatis.update("BoardDAO.updateBoardCnt", boardSeq);
	}
	
	public void updateBoard(BoardVO boardVO) {
		mybatis.update("BoardDAO.updateBoard", boardVO);
	}
	
	public void deleteBoard(int boardSeq) {
		mybatis.delete("BoardDAO.deleteBoard", boardSeq);
		mybatis.update("BoardDAO.updateBoardSeq", boardSeq);
	}
	
	/*
	 * public List<BoardVO> getBoardListSearch(Map<String, String> paramMap) {
	 * return mybatis.selectList("BoardDAO.getBoardListSearch", paramMap); }
	 */
	public int getBoardCnt(Map<String, String> paramMap) {
		return mybatis.selectOne("BoardDAO.getBoardCnt", paramMap);
	}
}
