const services = await fetchJSON('./assets/services.json')
const servicesListContainer = document.getElementById('services-list-container')
// fetch services.json file
const ctaPopOuts = [...document.querySelectorAll('.cta-popout-container')]
const btt_container = document.getElementById('back-to-top')
const ctaSubmissions = document.querySelectorAll('#submit-para')
import {ctaPopOut,userTypingInput,scrollToNextContent,fetchJSON,btttFunction,revertDescription,brightenDescription,checkChildNotInParent,appendChildToDaddy,removeChildFromDaddy} from './tools/tools.js' 

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








