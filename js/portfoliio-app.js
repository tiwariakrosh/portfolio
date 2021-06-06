//screen progress indicater
window.onscroll = function () {
  myFunction()
};

function myFunction() {
  var winScroll = document.body.scrollTop || document.documentElement.scrollTop;
  var height = document.documentElement.scrollHeight - document.documentElement.clientHeight;
  var scrolled = (winScroll / height) * 100;
  document.getElementById("myBar").style.width = scrolled + "%";
}

// Hamburger menu bar
const hamburger = document.querySelector(".hamburger");
const navMenu = document.querySelector(".nav-menu");

hamburger.addEventListener("click", mobileMenu);

function mobileMenu() {
  hamburger.classList.toggle("active");
  navMenu.classList.toggle("active");
}
// hamburger Animation
const navLink = document.querySelectorAll(".nav-link");

navLink.forEach(n => n.addEventListener("click", closeMenu));

function closeMenu() {
  hamburger.classList.remove("active");
  navMenu.classList.remove("active");
}

// top view navbar hidden
const nav = document.querySelector(".navbar");
const scroll = document.querySelector(".scroll-down");
document.addEventListener('scroll', () => {
  var scroll_position = window.scrollY;
  if (scroll_position > 400) {
    nav.style.backgroundColor = '#292d38';
  } else {
    nav.style.backgroundColor = 'transparent';
  }
});

document.addEventListener('scroll', () => {
  var scroll_position = window.scrollY;
  if (scroll_position > 400) {
    scroll.style.display = 'none';
  } else {
    scroll.style.display = '';
  }
});

// canvas animation 
let canvas = document.getElementById("canvas");
// set the resizable canvas width and height.
canvas.width = window.innerWidth;
canvas.height = window.innerHeight;
// get the canvas context for drawing.
let ctx = canvas.getContext('2d');

// initializing variables.
let variables = {
  particlesCount: 45,
  particlesRadius: 3,
  optimalLength: 180,
}

// mouse pointer object
let mouse = {
  x: 0,
  y: 0
}

// function to generate random numbers between a min and max value.
let randomNumbers = (max, min) => Math.floor(Math.random() * (max - min) + min);
// function to calculate distance between two points.
let calculateDistance = (x1, y1, x2, y2) => Math.sqrt(Math.pow(x2 - x1, 2) + Math.pow(y2 - y1, 2));
// store all the particle objects in the array.
let particles = [];
// particles object constructor.
class Particles {
  constructor(x, y, radius) {
    this.x = x;
    this.y = y;
    this.r = radius;
  }
  veclocity = {
    x: Math.random() < 0.5 ? -.9 : .9,
    y: Math.random() < 0.5 ? -.9 : .9,
  }
  show() {
    this.update();
    ctx.beginPath();
    ctx.arc(this.x, this.y, this.r, 0, Math.PI * 2);
    ctx.fillStyle = "rgb(255, 255, 255)";
    ctx.fill();
  }
  update() {
    this.x += this.veclocity.x;
    this.y += this.veclocity.y
    // checking if it hits the canvas boundaries.
    if (this.x - this.r <= 0 || this.x + this.r >= canvas.width) {
      this.veclocity.x *= -1;
    } else if (this.y - this.r <= 0 || this.y + this.r > canvas.height) {
      this.veclocity.y *= -1;
    }
  }
}

let initParticles = () => {
  for (let i = 0; i < variables.particlesCount; i++) {
    let r = variables.particlesRadius;
    let x = randomNumbers(0 + r, canvas.width - r);
    let y = randomNumbers(0 + r, canvas.height - r);
    let tempParticle = new Particles(x, y, r);
    particles.push(tempParticle);
  }
}

// function to generate links between particles.
let linker = (own, others) => {
  for (let i = 0; i < others.length; i++) {
    let distance = calculateDistance(own.x, own.y, others[i].x, others[i].y);
    let mouse_distance = calculateDistance(mouse.x, mouse.y, others[i].x, others[i].y);
    let opacity = 1 - (distance / variables.optimalLength);
    let mouse_opacity = 1 - (mouse_distance / variables.optimalLength);
    if (opacity > 0) {
      ctx.beginPath();
      ctx.moveTo(own.x, own.y);
      ctx.lineTo(others[i].x, others[i].y);
      ctx.lineWidth = 0.8;
      ctx.strokeStyle = `rgba(255, 255, 255, ${opacity})`;
      ctx.stroke();
      // Connect line with mouse position
      ctx.beginPath();
      ctx.moveTo(mouse.x, mouse.y);
      ctx.lineTo(others[i].x, others[i].y);
      ctx.lineWidth = 0.8;
      ctx.strokeStyle = `rgba(255, 255, 255, ${mouse_opacity})`;
      ctx.stroke();
    }
  }
}

// get mouse x, y position
let mouseEvent = (event) => {
  mouse.x = event.pageX;
  mouse.y = event.pageY;
}


//Canvas animation function.
let draw = () => {
  ctx.clearRect(0, 0, canvas.width, canvas.height);
  for (let i = 0; i < particles.length; i++) {
    particles[i].show();
    linker(particles[i], particles)
  }
  requestAnimationFrame(draw);
}

// mouse move listener
document.addEventListener('mousemove', mouseEvent);

// call the functions.
initParticles();
draw();

// container slide animation
const scrollElements = document.querySelectorAll(".js-scroll");

const elementInView = (el, dividend = 1) => {
  const elementTop = el.getBoundingClientRect().top;
  return (
    elementTop <=
    (window.innerHeight || document.documentElement.clientHeight) / dividend
  );
};

const elementOutofView = (el) => {
  const elementTop = el.getBoundingClientRect().top;
  return (
    elementTop > (window.innerHeight || document.documentElement.clientHeight)
  );
};

const displayScrollElement = (element) => {
  element.classList.add("scrolled");
};

const hideScrollElement = (element) => {
  element.classList.remove("scrolled");
};

const handleScrollAnimation = () => {
  scrollElements.forEach((el) => {
    if (elementInView(el, 0.9)) {
      displayScrollElement(el);
    } else if (elementOutofView(el)) {
      hideScrollElement(el)
    }
  })
}

window.addEventListener("scroll", () => {
  handleScrollAnimation();
});