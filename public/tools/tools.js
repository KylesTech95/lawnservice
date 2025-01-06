// helper functions

    // fetch data (json file)
    export async function fetchJSON(url){
        // get request
        const method = 'GET'
        const headers = {'Content-Type':'application/json',mode:'cors'}
        const response = await fetch(url,{method,headers}).then(r=>r.json()).then(data=> data||undefined)
        return response
    }
    // append child to parent
    export function appendChildToDaddy(child,daddy){
        return checkChildNotInParent(child,daddy) != daddy ? daddy.appendChild(child) : console.log('child is under parent')
    }
    // remove child from parent
    export function removeChildFromDaddy(child,daddy){
        return checkChildNotInParent(child,daddy) ? console.log('child is not of parent') : daddy.removeChild(child)
    }
    // check child element not within parent element
    export function checkChildNotInParent(child,parent){
        return child.parentElement != parent
    }
    // scroll to the next content
    export function scrollToNextContent(div){
        // method #1
        // remote-click from navigation link
        const services_link = document.querySelector('.list-link[href="#services"]')
        div.onclick = () => services_link.click()
        //_______
        // method #2
        // construct url & reload href to target 
        const target = '/public/#services', origin = window.location.origin, url = origin + target
        // div.onclick = () => window.location.href = url
    
    }
                       //_______________________//
          
    // event listeners
    // brighten service descriptions on mouseover
    export function brightenDescription(e){
        // console.log('mouseover is active')
        const target = e.currentTarget;
        const content = target.children[0]
        const description = content.children[0]
        // console.log(description)
        description.classList.add('opacity-1')
        description.classList.remove('opacity-7')
    }
    // revert service descriptions on mouseout
    export function revertDescription(e){
        const target = e.currentTarget;
        const content = target.children[0]
        const description = content.children[0]
        description.classList.remove('opacity-1')
        description.classList.add('opacity-7')
    }
    // back to top onclick
    export function btttFunction(e){
        const target = `home`, top = [0,0]
        const href = document.getElementById('logo-href')
        if(href && href.id == target){
            href.click()
        } else {
            window.scrollTo(...top)
        }
    }
    // user is typing input within a form
    export function userTypingInput(e){
        console.log('typing in progress...')
        const input = e.currentTarget;
        input.classList.remove('incomplete-value')
    }