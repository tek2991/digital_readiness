!function(){const e=(e,t)=>{let s=!1;return()=>{s||(e(),s=!0,setTimeout((()=>s=!1),t))}},t=e=>{e.className!==e.dataset.taosClass&&(e.className=e.dataset.taosClass)},s=e=>e.className=e.className.replaceAll("taos:",""),a=e=>(e.className.includes("taos-init")||(e.dataset.taosClass=e.className+" taos-init",t(e)),e.className+=" !duration-[0ms] !delay-[0ms]",s(e),{element:e,once:"1"===getComputedStyle(e)["animation-iteration-count"]});let n=[],i=window.scrollY,o=window.innerWidth;const l=e((()=>{n.forEach((e=>{e.trigger=e.element.getBoundingClientRect().top-window.innerHeight+parseInt(e.element.dataset.taosOffset||0)+window.scrollY}))}),250),r=()=>{n=[],document.querySelectorAll('[class*="taos"]').forEach((e=>n.push(a(e)))),l(),requestAnimationFrame(c),o=window.innerWidth},c=()=>{i=window.scrollY,n.forEach((({element:e,trigger:a,once:n})=>{a<i?t(e):!n&&e.className.includes("taos:")&&s(e)})),l()};r(),addEventListener("scroll",e(c,32)),addEventListener("orientationchange",r),addEventListener("resize",(()=>{window.innerWidth!==o&&r()})),new MutationObserver((e=>{e.forEach((({target:e})=>{!e.className.includes("taos-init")&&e.className.includes("taos:")&&n.push(a(e))}))})).observe(document,{attributes:!0,childList:!0,subtree:!0})}();
//# sourceMappingURL=taos.js.map