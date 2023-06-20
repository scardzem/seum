package com.spring.boardweb.repository;

import org.springframework.data.jpa.repository.JpaRepository;

import com.spring.boardweb.entity.Board;

public interface BoardRepository extends JpaRepository<Board, Integer>{

}
