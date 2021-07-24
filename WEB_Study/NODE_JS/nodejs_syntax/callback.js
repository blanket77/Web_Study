console.log('A');

function a() {
  console.log("나는 배고프다");
  console.log("나는 배고프다");
  console.log("나는 배고프다");
  console.log("나는 배고프다");
  console.log("나는 배고프다");
  console.log("나는 배고프다");
  console.log("나는 배고프다");
}

function cal(callback) {
  callback();
}
cal(a);
console.log('B');
