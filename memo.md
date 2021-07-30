## 모듈 사용하는 방법
`require_once(php파일경로);`

## XSS 막는 방법
`htmlspecialchars(내용);` 또는 특정 html 태그만 sanitize하는 방법을 사용.

## 파일 경로 보호 방법
`basename(파일경로);`를 통해 순수한 파일명만 추출하여 파일 경로를 이용한 공격을 막을 수 있다.