'use strict';
/* global VANTA */
window.addEventListener('DOMContentLoaded', () => {
  VANTA.NET({
    el: '#animation',
    mouseControls: true,
    touchControls: true,
    gyroControls: false,
    minHeight: 200.0,
    minWidth: 200.0,
    scale: 1.0,
    scaleMobile: 1.0,
    color: 0x3fddff,
  });
});
let submitButton = document.querySelector('.submit');
let username = document.querySelector('.username');
let password = document.querySelector('.password');
submitButton.addEventListener('click', () => {
  if (username.value.length != 0 && password.value.length != 0) {
    alert('Login Successful');
  } else {
    alert('Please Enter Username and Password');
  }
});
