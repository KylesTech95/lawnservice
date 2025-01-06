import {userTypingInput,removeChildFromDaddy,scrollToNextContent,fetchJSON,btttFunction,revertDescription,brightenDescription,appendChildToDaddy} from './tools/tools.js' 
const services = await fetchJSON('./assets/services.json')
const servicesListContainer = document.getElementById('services-list-container')
const btt_container = document.getElementById('back-to-top')
const ctaSubmissions = document.querySelectorAll('#submit-para')

// append services to ul
const servicesObj = services['services']
for(let i in servicesObj){
    // create a service
    createService(i,servicesObj[i].description,servicesObj[i].image)
}
// back to top onclick
btt_container.onclick = btttFunction
// submit cta form
ctaSubmissions.forEach(sub=>{
    sub.onclick = e => {
        const form = e.currentTarget.parentElement;
        const inputs = [...form.children].filter(x=>/.+input$/.test(x.id))
        let checkForm = true; // assume all inputs are filled out
        for(let i = 0; i < inputs.length; i++){
         if(!inputs[i].value){ // if 1 input is not filled, an error is shown
            inputs[i].classList.add('incomplete-value')
            console.log(inputs[i])
             checkForm = false;
         }
        }
        return checkForm ? form.submit() : console.log('fill out form (completely)')
     }
     const form = sub.parentElement;
     const inputs = [...form.children].filter(x=>/.+input$/.test(x.id))
     inputs.forEach(inp=>{
        inp.oninput = userTypingInput
     })     
})
// click to scroll to the next content (function)
scrollToNextContent(document.getElementById('scroll-to'))


// create service function
function createService(name,description,image){
    const cssUrlBg = `background-image:url(${image});background-size:cover;background-repeat:no-repeat;background-color:#fff;background-blend-mode:multiply;`
    const li = document.createElement('li')
    const content = document.createElement('div')
    const title = document.createElement('p')
    const desc = document.createElement('p')
    
    // associate arguments to newly created elements
    title.textContent = name
    desc.textContent = description
    
    // adding classes to elements
    content.classList.add('services-content')
    content.style = cssUrlBg
    li.classList.add('services-li')
    title.classList.add('services-name')
    desc.classList.add('services-desc')
    desc.classList.add('opacity-7')
    
    // append description to content
    appendChildToDaddy(desc,content)
    // append content to li
    appendChildToDaddy(content,li)
    // append name to li
    appendChildToDaddy(title,content)
    // append li to ul
    appendChildToDaddy(li,servicesListContainer)
    
    // mouseover li - brighten description
    li.onmouseover = brightenDescription
    // mouseout li - revert description
    li.onmouseout = revertDescription
}


// cta - junk and repairs
const repairContainer = document.getElementById('repair-cta-container')
const junkContainer = document.getElementById('junk-cta-container')
const ctaArr = new Array(2)
ctaArr[0] = junkContainer
ctaArr[1] = repairContainer
let scrollarr = []
let side = ['left','right']
// helper function to detect scroll direction
const detectScrollDir = (arr) => {
    let prev=arr[0], curr=arr[1];
    return prev > curr ? 'up' : prev < curr ? 'down' : null;
}
// track scroll and push in array

window.onscroll = e => {
    // capture/track scrollY
    let scrollY = Math.ceil(window.scrollY)
    scrollarr.push(scrollY)
    scrollarr=scrollarr.slice(-2)
    // iterate through both cta's
    ctaArr.forEach((elem,idx)=>{
        // boolean - detect cta
            // conditions - scroll down
        if(detectScrollDir(scrollarr)=='down'){
            console.log('down detected')
            if(ctaArr[idx].getBoundingClientRect().y <= scrollY){
                ctaArr[idx].style = `${side[idx]}:25px;transition:.75s;transform:scale(1.10);`;
            }
        } 
        // scroll up
        else {
            console.log('up detected')
            if(ctaArr[idx].getBoundingClientRect().y >= scrollY){
                ctaArr[idx].style = `${side[idx]}:-300px;transition:.75s`;
            }
        }
    });
};
let infotime;
document.querySelectorAll('.information').forEach((info,idx)=>{
    info.onmouseover = e => {
        const infotext = e.currentTarget.nextElementSibling;
        clearTimeout(infotime)
        infotime = setTimeout(()=>{
            infotext.classList.remove('tip-transparent')
        },250)
    }
    info.onmouseout = e => {
        const infotext = e.currentTarget.nextElementSibling;
        infotext.classList.add('tip-transparent')
    }
})

