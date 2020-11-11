var userLog = document.getElementById('status').innerHTML;
var logged = document.querySelector('.logged');
var notLogged = document.querySelector('.notLogged');
console.log(userLog);
console.log(logged);
console.log(notLogged);
if(userLog == 'logged'){
    notLogged.style.display = 'none';
    logged.style.display = 'block';
}else{
    notLogged.style.display = 'block';
    logged.style.display = 'none';
}