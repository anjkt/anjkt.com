let animations = gsap.timeline({
  defaults: {
    duration: 8
    }
  })
  .to('.dark-logo', {strokeDashoffset: 0, strokeDasharray: 800,ease: "step"})
  .to('.word', {opacity: 1, duration: 2, ease: 'bounce', stagger:{amount: 1.5
}})
  .to('.circle', {opacity: 1, duration: 2})
  .to('.circle', {rotate: -360,transformOrigin: '50% 50%', ease: "none", repeat: -1})
.to('.letter', {opacity: 1, duration: 2, ease: 'bounce', stagger:{amount: 1.5
}}, '<1')