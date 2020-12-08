gsap.registerPlugin(ScrollTrigger);

// gsap.to("#intro")

gsap.from(".translate-y", {duration: 1.5, y: 50, opacity: 0});
  
gsap.from(".intro-image", {scrollTrigger: ".intro-image", duration: 2, x: -150, y: 100, opacity: 0});
gsap.from(".intro-text", {scrollTrigger: ".intro-image", duration: 2, x: 150, y:-50, opacity: 0.8});

