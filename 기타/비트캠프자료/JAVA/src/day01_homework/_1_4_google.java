package day01_homework;

import java.util.Scanner;

public class _1_4_google {

	public static void main(String[] args) {
		
		Scanner sc = new Scanner(System.in); //이 줄 일단 외워서 사용(위에 import 하는것도 기억)
/*
		문제
		4. 369게임을 작성합니다.   1~99까지의 정수를 입력받고
		3,6,9중 하나가 있으면 "박수짝"을 출력하고
		2개가 있으면 "박수짝짝"을 출력하세요
   		예를 들어 13은 "박수짝"
   		36인 경우는 "박수짝짝"을 출력하면 됩니다.	
		(구글에서 검색해보고 답 썼음)
*/ 		
				
		System.out.println("1~99 사이의 정수 입력 : ");
		
		int i=sc.nextInt();
		int cnt=0;
		if(i/10==3 || i/10==6 || i/10==9 ) //십의 자리수에서 3,6,9 나올 경우
			cnt++;
		if(i%10==3 || i%10==6 || i%10==9) //일의 자리수에서 3,6,9 나올 경우
			cnt++;
		if(cnt==0)	//3,6,9 수 안 나올 때
			System.out.print(i);
		else {//3,6,9 수 나왔을 때
			System.out.print("박수");
			if(cnt==1) {// 십의 자리, 일의 자리 중 하나만 있을 때
				System.out.print("짝");
			}
				else {//십의 자리, 일의 자리 중 모두 있을 때
				System.out.print("짝짝");	
				}
		}

	}

}
