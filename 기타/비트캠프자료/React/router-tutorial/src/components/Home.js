import React from "react";
import { Link } from "react-router-dom";

const Home = () => {
  return (
    <div>
      <h1>홈</h1>
      <p>가장 먼저 보이는 페이지</p>
      <ul>
        <li>
          <Link to="/about">소개페이지로 이동</Link>
        </li>
        <li>
          <Link to="/profile/gogi">gogi의 프로필</Link>
        </li>
        <li>
          <Link to="/profile/hong">홍길동의 프로필</Link>
        </li>
        <li>
          <Link to="/profile/void">존재하지 않는 프로필</Link>
        </li>
        <li>
          <Link to="/articles">게시글 목록</Link>
        </li>
      </ul>
    </div>
  );
};

export default Home;
